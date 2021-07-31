<?php
defined('BASEPATH') or exit('No direct script access allowed');

class penjualandetail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PenjualanModel');
        $this->load->model('PelangganModel');
        $this->load->model('MobilModel');
    }
    public function proses($penjualan_id)
    {

        $data['penjualan'] = $this->db->get_where('penjualan', ['penjualan_id' => $penjualan_id])->row_array();
        $data['allmobil'] = $this->BarangModel->get_all_data_mobil();
        $data['allpelanggan'] = $this->PelangganModel->get_all_data_pelanggan();

        $data['title'] = "Detail Penjualan";

        $this->load->view('templates/header', $data);
        $this->load->view('penjualandetail/create', $data);
        $this->load->view('templates/footer');
    }

    public function simpandetailpenjualan()
    {
        $barang = $this->db->get_where('mobil', ['mobil_id' => $this->input->post('mobil_id')])->row_array();

        if ($this->input->post('diskon') != 0) {
            $harga = $mobil['harga_mobil'] * $this->input->post('jumlah') * $this->input->post('diskon') / 100;
            $hargatotal = $mobil['harga_mobil'] * $this->input->post('jumlah') - $harga;
        } else {
            $hargatotal = $mobil['harga_mobil'] * $this->input->post('jumlah');
        }

        //proses update grand total
        $barang = $this->db->get_where('penjualan_detail', ['penjualan_id' => $this->input->post('penjualan_id')])->row_array();

        $grandtotal = $mobil['harga_total'] + $hargatotal;
        $this->db->set('total', $grandtotal);
        $this->db->where('penjualan_id', $this->input->post('penjualan_id'));
        $this->db->update('penjualan');

        $data = [
            'penjualan_id' => $this->input->post('penjualan_id'),
            'mobil_id' => $this->input->post('mobil_id'),
            'jumlah' => $this->input->post('jumlah'),
            'diskon' => $this->input->post('diskon'),
            'harga_total' => $hargatotal,
        ];
        $this->db->insert('penjualan_detail', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data penjualan sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('penjualan/detail/' . $this->input->post('penjualan_id'));
    }

    public function hapus($penjualan_id, $penjualan_detail_id)
    {
        $pnjd = $this->db->get_where('penjualan_detail', ['penjualan_detail_id' => $penjualan_detail_id])->row_array();
        $pnj = $this->db->get_where('penjualan', ['penjualan_id' => $penjualan_id])->row_array();

        $grandtotal = $pnj['total'] - $pnjd['harga_total'];
        $this->db->set('total', $grandtotal);
        $this->db->where('penjualan_id', $penjualan_id);
        $this->db->update('penjualan');

        $this->db->where('penjualan_detail_id', $penjualan_detail_id);
        $this->db->delete('penjualan_detail');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data penjualan sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('penjualan');
    }
}