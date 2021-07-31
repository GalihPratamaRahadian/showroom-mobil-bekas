<div class="mt-3">
    <form action="<?= base_url('mobil/editmobil') ?>" method="POST">
        <input type="hidden" name="mobil_id" value="<?= $mobil['mobil_id'] ?>"><div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
        <input type="text" name="nama_mobil" class="form-control" id="exampleFormControlInput1" placeholder="nama mobil" value="<?= $mobil['nama_mobil'] ?>">
</div>
<div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Merk</label>
        <input type="text" name="merk" class="form-control" id="exampleFormControlInput1" placeholder="merk" value="<?= $mobil['merk'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Harga</label>
    <input type="number" name="harga_mobil" class="form-control" id="exampleFormControlInput1" placeholder="harga" value="<?= $mobil['harga_mobil'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Stok Unit</label>
    <input type="number" name="stok_unit" class="form-control" id="exampleFormControlInput1" placeholder="stok unit" value="<?= $mobil['stok'] ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
    <textarea name="spesifikasi" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $mobil['spesifikasi'] ?></textarea>
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Edit</button>
</div>
</form>
</div>
</div>