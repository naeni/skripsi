<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
		{
			public function __construct()
			{
				parent::__construct();
				$this->load->helper('form', 'security');
				$this->load->library('form_validation');
				$this->load->model('admin_models');
				$this->load->model('security_models');
				$this->security_models->get_security();

			}
// ---------------------------------------------Admin Login & Logout -----------------------------------------------------------//
			public function index()
			{
				$data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
				$data['jumlah_orderan']			='1';
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Home';
				$data['sub_judul'] 				= 'Dashboard';
				$data['content'] 				= 'admin/dashboard';
				$data['nav_top']				= 'dashboard';
				$this->load->view('admin/home', $data);
			}
			
			public function kriteria()
			{
				$data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
				$data['table'] 					= $this->admin_models->get_all_kriteria()->result();
				$data['jumlah_orderan']			='1';
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Master Kriteria';
				$data['content'] 				= 'admin/kriteria';
				$data['nav_top']				= 'master';
				$this->load->view('admin/home', $data);
				
			}

			public function add_kriteria()
			{
				$data = array(
								"nama_kriteria"	=> $this->input->post('nama_kriteria'),
								"atribut" 		=> $this->input->post('atribut'),
								"nilai_bobot"	=> $this->input->post('nilai_bobot')
						);

				if($this->admin_models->tambah_kriteria($data)){
					$this->session->set_flashdata('info', 'data berhasil di tambah!');				
					redirect('admin/kriteria');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('admin/kriteria');
				}
				

			}

			public function edit_kriteria()
			{
				$kd_kriteria 		= $this->input->post('kd_kriteria');
				$data = array(
					"nama_kriteria"	=> $this->input->post('nama_kriteria'),
					"atribut" 		=> $this->input->post('atribut'),
					"nilai_bobot"	=> $this->input->post('nilai_bobot')
						);

				if($this->admin_models->update_kriteria($data,$kd_kriteria)){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('admin/kriteria');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('admin/kriteria');
				}

			}

			public function delete_kriteria()
			{
				$kd_kriteria 		= $this->input->post('kd_kriteria');
				if($this->admin_models->hapus_kriteria($kd_kriteria)){
					$this->session->set_flashdata('info', 'data berhasil di hapus!');				
					redirect('admin/kriteria');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan hapus data');				
					redirect('admin/kriteria');
				}

			}

			public function bobot()
			{
				$data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
				$data['table'] 					= $this->admin_models->get_all_bobot()->result();
				$data['jumlah_orderan']			='1';
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Master Kriteria';
				$data['content'] 				= 'admin/bobot';
				$data['nav_top']				= 'master';
				$this->load->view('admin/home', $data);

			} 

			public function add_bobot()
			{
				$data = array(
					"nilai_bobot"	=> $this->input->post('nilai_bobot'),
					"keterangan" 	=> $this->input->post('keterangan')
				);

				if($this->admin_models->tambah_bobot($data)){
					$this->session->set_flashdata('info', 'data berhasil di tambah!');				
					redirect('admin/bobot');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('admin/bobot');
				}
			}
			public function edit_bobot()
			{
				$nilai_bobot 		= $this->input->post('nilai_bobot');
				$data = array("keterangan"	=> $this->input->post('keterangan'));

				if($this->admin_models->update_bobot($data,$nilai_bobot)){
					$this->session->set_flashdata('info', 'data berhasil di update!');				
					redirect('admin/bobot');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('admin/bobot');
				}

			}
			public function delete_bobot()
			{
				$nilai_bobot 		= $this->input->post('nilai_bobot');
				if($this->admin_models->hapus_bobot($nilai_bobot)){
					$this->session->set_flashdata('info', 'data berhasil di hapus!');				
					redirect('admin/bobot');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan hapus data');				
					redirect('admin/bobot');
				}


			}

			public function atribut()
			{
				$data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
				$data['table'] 					= $this->admin_models->get_all_atribut()->result();
				$data['kriteria'] 				= $this->admin_models->get_all_kriteria()->result();
				$data['jumlah_orderan']			='1';
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Master Atribut';
				$data['content'] 				= 'admin/atribut';
				$data['nav_top']				= 'master';
				$this->load->view('admin/home', $data);

			}

			public function add_atribut()
			{
				$data = array(
					"id_kriteria"	=> $this->input->post('id_kriteria'),
					"keterangan" 	=> $this->input->post('keterangan'),
					"nilai" 		=> $this->input->post('nilai')
				);

				if($this->admin_models->tambah_attribut($data)){
					$this->session->set_flashdata('info', 'data berhasil di tambah!');				
					redirect('admin/atribut');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('admin/atribut');
				}

			}
			public function form_edit_atribut($id)
			{
				$data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
				$data['edit'] 					= $this->admin_models->get_edit_atribut($id)->row();
				$data['kriteria'] 				= $this->admin_models->get_all_kriteria()->result();
				$data['jumlah_orderan']			='1';
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Master';
				$data['sub_judul'] 				= 'Master Atribut';
				$data['content'] 				= 'admin/edit_atribut';
				$data['nav_top']				= 'master';
				$this->load->view('admin/home', $data);

			}

			public function edit_atribut()
			{
				$id 	= $this->input->post('id');
				$data = array(
					"id_kriteria"	=> $this->input->post('id_kriteria'),
					"keterangan" 	=> $this->input->post('keterangan'),
					"nilai" 		=> $this->input->post('nilai')
				);

				if($this->admin_models->ubah_attribut($data,$id)){
					$this->session->set_flashdata('info', 'data berhasil di tambah!');				
					redirect('admin/atribut');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('admin/atribut');
				}

			}

			public function delete_attribut()
			{
				$id 	= $this->input->post('id');
				if($this->admin_models->hapus_attribut($id)){
					$this->session->set_flashdata('info', 'data berhasil di hapus!');				
					redirect('admin/atribut');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menghapus data');				
					redirect('admin/atribut');
				}

			}

			public function warga()
			{
				$data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
				$data['table'] 					= $this->admin_models->get_all_warga()->result();
				$data['usia_anak'] 				= $this->admin_models->get_all_kriteria_att('1')->result();
				$data['pendidikan'] 			= $this->admin_models->get_all_kriteria_att('2')->result();
				$data['tanggungan'] 			= $this->admin_models->get_all_kriteria_att('3')->result();
				$data['penghasilan'] 			= $this->admin_models->get_all_kriteria_att('4')->result();
				$data['luas_sawah'] 			= $this->admin_models->get_all_kriteria_att('5')->result();
				$data['tempat_tinggal'] 		= $this->admin_models->get_all_kriteria_att('6')->result();
				$data['jumlah_orderan']			='1';
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Warga';
				$data['sub_judul'] 				= 'Tabel warga';
				$data['content'] 				= 'admin/warga';
				$data['nav_top']				= 'warga';
				$this->load->view('admin/home', $data);

			}

			public function add_warga()
			{
				$date = date("Y-m-d H:i:s") ;
				$data = array(
					"nama"			=> $this->input->post('nama'),
					"tempat_lhr" 	=> $this->input->post('tempat_lhr'),
					"tanggal_lhr" 	=> $this->input->post('tanggal_lhr'),
					"alamat" 		=> $this->input->post('alamat'),
					"no_tlpon" 		=> $this->input->post('no_tlpon'),
					"date_input" 	=> $date
				);

				$attribut = $this->input->post('attribut');
				

				if($this->admin_models->tambah_warga($data)){
					$id = $this->db->get_where('tb_warga', array('date_input' => $date))->row();
					foreach($attribut as $row){
						$data2		= array(
											"id_warga"		=> $id->no_peserta,
											"id_attribut"	=> $row
										);
						$this->admin_models->add_sub_warga($data2);
					}
					$this->session->set_flashdata('info', 'data berhasil di tambah!');				
					redirect('admin/warga');

				}else{
					$this->session->set_flashdata('danger', 'kesalahan menginput data');				
					redirect('admin/warga');
				}

			}

			public function form_edit_warga()
			{

			}

			public function edit_warga()
			{

			}

			public function delete_warga()
			{

			}

			public function nilai_saw()
			{
				$data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
				$data['table'] 					= $this->admin_models->get_nilai_saw()->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Penilaian';
				$data['sub_judul'] 				= 'Penilaian SAW';
				$data['content'] 				= 'admin/nilai_saw';
				$data['nav_top']				= 'penilaian';
				$this->load->view('admin/home', $data);

			}

			public function nilai_wp()
			{
				$data['admin']					= $this->db->get_where('admin', array('id' => 1))->row();
				$data['table'] 					= $this->admin_models->get_nilai_wp()->result();
				$data['script_top']    			= 'admin/script_top';
				$data['script_bottom']  		= 'admin/script_btm';
				$data['admin_nav']				= 'admin/admin_nav';
				$data['judul'] 					= 'Penilaian';
				$data['sub_judul'] 				= 'Penilaian WP';
				$data['content'] 				= 'admin/nilai_wp';
				$data['nav_top']				= 'penilaian';
				$this->load->view('admin/home', $data);

			}

		}