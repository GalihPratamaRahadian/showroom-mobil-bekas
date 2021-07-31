<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mobil extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('mobilModel', 'mm');
	}
	public function index()
	{

		$data['allmobil'] = $this->mm->get_all_data_mobil();
		$data['title'] = "Daftar Mobil";

		$this->load->view('templates/header', $data);
		$this->load->view('mobil/index', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$data['title'] = "Tambah Mobil";

		$this->load->view('templates/header', $data);
		$this->load->view('mobil/create', $data);
		$this->load->view('templates/footer');
	}

	public function simpanmobil()
	{
		$data = [
			'nama_mobil' => $this->input->post('nama_mobil'),
			'merk' => $this->input->post('merk'),
			'harga_mobil' => $this->input->post('harga_mobil'),
			'stok_unit' => $this->input->post('stok_unit'),
			'spesifikasi' => $this->input->post('spesifikasi'),
		];
		$this->db->insert('mobil', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Mobil sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('mobil');
	}

	public function edit($mobil_id)
	{
		$data['title'] = "Edit Mobil";
		$data['mobil'] = $this->db->get_where('mobil', ['mobil_id' => $mobil_id])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('mobil/edit', $data);
		$this->load->view('templates/footer');
	}

	public function editmobil()
	{

		$this->db->set('nama_mobil', $this->input->post('nama_mobil'));
		$this->db->set('merk', $this->input->post('merk'));
		$this->db->set('harga_mobil', $this->input->post('harga_mobil'));
		$this->db->set('stok_unit', $this->input->post('stok_unit'));
		$this->db->set('spesifikasi', $this->input->post('spesifikasi'));
		$this->db->where('mobil_id', $this->input->post('mobil_id'));
		$this->db->update('mobil');

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Mobil sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('mobil');
	}

	public function hapus($mobil_id)
	{

		$this->db->where('mobil_id', $mobil_id);
		$this->db->delete('mobil');

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Mobil sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('Mobil');
	}
}