<?php

class MobilModel extends CI_Model {

public $mobil_id;
public $nama_mobil;
public $merk;
public $harga_mobil;
public $stok_unit;
public $spesifikasi;

public function get_all_data_mobil()
    {
        $query = "SELECT * FROM mobil";
        return $this->db->query($query)->result_array();
    }
public function simpanmobil()
    {
    }
}
