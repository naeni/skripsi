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
	


	}