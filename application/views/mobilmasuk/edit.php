<div class="mt-3">
    <form action="<?= base_url('mobil_masuk/editmobil') ?>" method="POST">
        <input type="hidden" name="masuk_id" value="<?= $mobil_masuk['masuk_id'] ?>"><div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal Masuk</label>
        <input type="number" name="tgl_masuk" class="form-control" id="exampleFormControlInput1" placeholder="tgl_masuk" value="<?= $mobil_masuk['tgl_masuk'] ?>">
</div>
<div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga</label>
        <input type="number" name="harga" class="form-control" id="exampleFormControlInput1" placeholder="harga" value="<?= $mobil_masuk['harga'] ?>">
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary">Edit</button>
</div>
</form>
</div>
</div>