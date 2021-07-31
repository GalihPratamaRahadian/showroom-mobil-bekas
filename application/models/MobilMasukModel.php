<?php

class MobilModel extends CI_Model {

public $mobil_id;
public $tgl_masuk;
public $harga;

public function get_all_data_mobil_masuk()
    {
        $query = "SELECT * FROM mobil_masuk";
        return $this->db->query($query)->result_array();
    }
public function simpanmobil_masuk()
    {
    }
}
