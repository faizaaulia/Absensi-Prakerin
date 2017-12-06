<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guru_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='dashboard_guru_view';
			$this->load->view('template_admin_view', $data);
		} else {
			redirect('login');
		}	
	}

	public function logout()
	{
		$array = array(
			'username' => '',
			'logged_in'=> FALSE
		);
		
		$this->session->set_userdata( $array );
		redirect('login');
	}

	/*public function addguru()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='add_guru_view';
			$this->load->view('template_admin_view', $data);
		} else {
			redirect('login');
		}
	}*/

	/*public function addsiswa()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='add_siswa_view';
			$this->load->view('template_admin_view', $data);
		} else {
			redirect('login');
		}
	}*/

	//tambah data guru
	/*public function insertguru()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('nama_guru', 'Nama guru', 'trim|required');
		$this->form_validation->set_rules('telp', 'No. Telp', 'trim|required|min_length[11]|max_length[12]');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');

		if ($this->form_validation->run() == TRUE ) {
			$config['upload_path'] = './uploads/foto_guru/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '2000';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				if($this->admin_model->tambah($this->upload->data()) == TRUE) {
					$data['main_view'] = 'add_guru_view';
					$this->session->set_flashdata('notif', 'Berhasil menambahkan data guru');
					redirect('dashboard_admin/addguru');
				} else {
					$data['main_view'] = 'add_guru_view';
					$this->session->set_flashdata('notif', 'Gagal menambahkan data guru');
					redirect('dashboard_admin/addguru');
				}
			} else {
				$data['main_view'] = 'dashboard_admin';
				$this->session->set_flashdata('notif', $this->upload->display_errors());
				redirect('dashboard_admin/addguru');
			}
		} else {
			$data['main_view'] = 'dashboard_admin';
			$this->session->set_flashdata('notif', validation_errors());
			redirect('dashboard_admin/addguru');
		}
	}*/

}

/* End of file dashboard_admin.php */
/* Location: ./application/controllers/dashboard_admin.php */