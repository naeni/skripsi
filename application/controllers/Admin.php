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

		}