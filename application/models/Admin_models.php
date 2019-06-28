<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// ---------------------------------------------Admin Login & Logout -----------------------------------------------------------//

	class Admin_models extends CI_Model
	{
		public function getlogin($username, $password)
		{
			$password 	= md5($password);
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$querry 	= $this->db->get('admin');
			if($querry->num_rows()>0)
				{
					foreach ($querry->result() as $row) 
					{
						$sess = array('username' => $row->username,
									  'password' => $row->password);
						$this->session->set_userdata($sess);
						$this->session->set_flashdata('info', 'login sukses');
						redirect('admin');
					}
				}else 
					{
						$this->session->set_flashdata('info', 'username dan password salah');
						redirect('login');
					} 

		}

		public function get_all_kriteria()
		{
			$this->db->select('*');
			$this->db->from('tb_kriteria');
			return $this->db->get();
		}

		public function tambah_kriteria($data){
			return $this->db->insert('tb_kriteria',$data);
		}

		public function update_kriteria($data,$kd_kriteria){
			$this->db->where('kd_kriteria',$kd_kriteria);
			return $this->db->update('tb_kriteria',$data);
		}

		public function hapus_kriteria($kd_kriteria){
			$this->db->where('kd_kriteria',$kd_kriteria);
			return $this->db->delete('tb_kriteria');

		}

		public function get_all_bobot(){
			$this->db->select('*');
			$this->db->from('tb_bobot');
			return $this->db->get();

		}

		public function tambah_bobot($data){
			return $this->db->insert('tb_bobot',$data);

		}

		public function update_bobot($data,$nilai_bobot){
			$this->db->where('nilai_bobot',$nilai_bobot);
			return $this->db->update('tb_bobot',$data);

		}

		public function hapus_bobot($nilai_bobot){
			$this->db->where('nilai_bobot',$nilai_bobot);
			return $this->db->delete('tb_bobot');

		}

		public function get_all_atribut(){
			$this->db->select('a.id ,a.id_kriteria, a.keterangan, a.nilai, b.nama_kriteria');
			$this->db->join('tb_kriteria b','a.id_kriteria = b.kd_kriteria','left' );
			$this->db->from('tb_attribut a');
			return $this->db->get();
		}

		public function tambah_attribut($data){
			return $this->db->insert('tb_attribut',$data);

		}

		public function get_edit_atribut($id){
			$this->db->select('a.id ,a.id_kriteria, a.keterangan, a.nilai, b.nama_kriteria');
			$this->db->join('tb_kriteria b','a.id_kriteria = b.kd_kriteria','left' );
			$this->db->where('a.id',$id);
			$this->db->from('tb_attribut a');
			return $this->db->get();

		}

		public function ubah_attribut($data,$id){
			$this->db->where('id',$id);
			return $this->db->update('tb_attribut',$data);

		}

		public function hapus_attribut($id){
			$this->db->where('id',$id);
			return $this->db->delete('tb_attribut');
		}

		public function get_all_warga(){
			$this->db->select('*');
			$this->db->from('tb_warga');
			return $this->db->get();

		}

		public function get_all_kriteria_att($id){
			$this->db->select('*');
			$this->db->where('id_kriteria',$id);
			$this->db->from('tb_attribut');
			return $this->db->get();

		}

		public function get_nilai_saw(){
			$this->db->select('*');
			$this->db->join('tb_warga','tb_hasil.no_peserta = tb_warga.no_peserta','left' );
			$this->db->from('tb_hasil');
			$this->db->order_by('nilai_saw','DESC');
			return $this->db->get();

		}

		public function get_nilai_wp(){
			$this->db->select('*');
			$this->db->join('tb_warga','tb_hasil.no_peserta = tb_warga.no_peserta','left' );
			$this->db->from('tb_hasil');
			$this->db->order_by('nilai_wp','DESC');
			return $this->db->get();

		}

		public function tambah_warga($data){
			return $this->db->insert('tb_warga',$data);

		}

		public function add_sub_warga($data2){
			return $this->db->insert('tb_warga_attribut',$data2);
		}
	


	}