<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">


<div class="mt-3">
    <form action="<?= base_url('mobil/simpanmobil') ?>" method="POST">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
            <input type="text" name="nama_mobil" class="form-control" id="exampleFormControlInput1" placeholder="nama mobil">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Merk</label>
            <input type="text" name="merk" class="form-control" id="exampleFormControlInput1" placeholder="merk">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input type="number" name="harga_mobil" class="form-control" id="exampleFormControlInput1" placeholder="harga">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Stok</label>
            <input type="number" name="stok_unit" class="form-control" id="exampleFormControlInput1" placeholder="stock unit">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Spesifikasi</label>
            <textarea name="spesifikasi" class="form-control" id="exampleFormControlInput1" placeholder="spesifikasi"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
</div>