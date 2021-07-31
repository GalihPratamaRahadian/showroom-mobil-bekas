<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?=$title?></title>
  </head>
  <body>
    	<div class="container mt-5">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Showroom Mobil Bekas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link" href="#">Penjualan</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Mobil</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Pelanggan</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="#">Mobil Masuk</a>
        </li>
      </ul>
    
	</div>
  
  </div>

</nav>

<div class="row mt-2">
	<div class="col-3">
	<a href="<?=base_url('mobil_masuk');?>" class="btn btn-success">Tambah</button></a>
	</div>
</div>
<table class="table mt-2">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Masuk</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody>
	  <?php
		foreach($allmobil_masuk as $no=>$mobil_masuk){
	  ?>
	<tr>
		<th scope="row"><?=$no+1 ?></th>
		<td><?=$mobil_masuk['tgl_masuk'];?></td>
		<td><?=$mobil_masuk['harga'];?></td>
    </tr>
<?php
}
?>
  </tbody>
</table>
	<!--<div class="mt-3">
		<div class="mb-3">
  			<label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
  			<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
		</div>
		<div class="mb-3">
  			<label for="exampleFormControlInput1" class="form-label">Harga Barang</label>
 		 	<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
		</div>
		<div class="mb-3">
  			<label for="exampleFormControlInput1" class="form-label">Stok</label>
  			<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
		</div>
		<div class="mb-3">
  			<label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
  			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
		<div class="mb-3">
  		<button class="btn btn-primary">Save</button>
		
		</div>
	</div>	
  
  









</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
