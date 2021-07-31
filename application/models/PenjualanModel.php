<?php

class PenjualanModel extends CI_Model
{
    public function get_all_data_penjualan()
    {
        $query = "SELECT p.*, u.nama_pelanggan FROM penjualan p, pelanggan u WHERE p.pelanggan_id = u.pelanggan_id";
        return $this->db->query($query)->result_array();
    }

    public function get_detail_penjualan($penjualan_id)
    {
        $query = "SELECT * FROM penjualan_detail pd, penjualan pn, mobil m, pelanggan pe WHERE pn.
        pelanggan_id = pe.pelanggan_id AND pd.penjualan_id = pn.penjualan_id AND pd.mobil_id = b.
        mobil_id AND pn.penjualan_id = $penjualan_id";
        return $this->db->query($query)->result_array();
    }
}