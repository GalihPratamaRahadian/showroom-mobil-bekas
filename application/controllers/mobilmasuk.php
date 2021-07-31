<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mobil_masuk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('MobilMasukModel', 'ms');
	}
	public function index()
	{

		$data['allmobil_masuk'] = $this->ms->get_all_data_mobil_masuk();
		$data['title'] = "Daftar Mobil Masuk";

		$this->load->view('templates/header', $data);
		$this->load->view('mobil_masuk/index', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$data['title'] = "Tambah Mobil Masuk";

		$this->load->view('templates/header', $data);
		$this->load->view('mobil_masuk/create', $data);
		$this->load->view('templates/footer');
	}

	public function simpanmobil_masuk()
	{
		$data = [
			'tgl_masuk' => $this->input->post('tgl_masuk'),
			'jumlah_unit' => $this->input->post('jumlah_unit'),
		];
		$this->db->insert('mobil_masuk', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Mobil sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('mobil_masuk');
	}

	public function edit($masuk_id)
	{
		$data['title'] = "Edit Mobil";
		$data['mobil_masuk'] = $this->db->get_where('mobil_masuk', ['masuk_id' => $masuk_id])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('mobil_masuk/edit', $data);
		$this->load->view('templates/footer');
	}

	public function editmobil_masuk()
	{

		$this->db->set('tgl_masuk', $this->input->post('tgl_masuk'));
		$this->db->set('harga', $this->input->post('harga'));
		$this->db->where('masuk_id', $this->input->post('masuk_id'));
		$this->db->update('mobil_masuk');

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Mobil sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('mobil_masuk');
	}

	public function hapus($masuk_id)
	{

		$this->db->where('masuk_id', $masuk_id);
		$this->db->delete('mobil_masuk');

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Mobil sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('mobil_masuk');
	}
}