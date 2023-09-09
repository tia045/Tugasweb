<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
 </head>

 <style>
  .bordered {
  border: solid;
}

 .contoh { 
  height: 50px;
 background-color: skyblue;
}
</style>

  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
 <div class="container-fluid">
   
    <a class="navbar-brand" href="#">

<img src="img/1.jpg" width="130" height="100">  

Toko Grea Bakery
</a> <buton class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

</nav>
<div>
 <style>


.banner {

    height: 80vh;
   
 background: url('img/2.jpg');
                
 background-size: cover;
   background-position: center;
}
   .banner-contain {
   height: 100%;
   display: flex;
   align-items: cover;
}
.background
background-color: skyblue;
width: 100%;


</style>
<body>
<!--banner-->
<div class="container-fluid banner">

<div class="container banner-contain col-ig-6">

<div class="my-5 text-center text-white">
<p class="fs-4">Selamat datang di Grea bakery</p>
<p class="container col-10 text-white">Setiap gigitan adalah sebuah kenangan manis yang takkan terlupakan.Dapatkan sekarang hanya di toko kami.</p>

<button class="btn btn-outline-light mt-3 btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Reservasi</button>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Formulir Reservasi</h1> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
<div class="mb-3">
<label for="nama" class="form-label">Nama</label>
<input type="text" class="form-control" id="nama">
</div>
<div class="mb-3">
<label for="handphone" class="form-label">No. Handphone</label>
<input type="number" id="nama" class="form-control">
</div>
<div class="mb-3">
<label for="tanggal" class="form-label">Tanggal Reservasi</label>
<input type="date" id="tanggal" class="form-control">
</div>
<div class="mb-3">
<label for="jam" class="form-label">Jam</label>
<input type="time" id="jam" class="form-control">
</div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Kirim</button>
      </div>
    </div>
  </div>
</div>

<div class="my-5 container col-10 col-sn-9 col-md-8 col-6">
<h2 class="text center mb-5">kenapa harus belanja di Great Bekery</h2>
<div class="accordion" id="accordionExample">
 

 <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        karena murah
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Fresh from oven
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" >
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
 <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       
        jaminan uang kembali
 </button> 
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" >
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
       
       ada cashback 30%
 </button> 
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" >
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="container-fluid py-5 bg-black text-white">
<div class="container"> 
 <h2 class="text center mb-5">Produk Terbaik Kami
</h2> 

<div id="carouselExampleIndicators" class="carousel slide col-lg-8 offset-lg-2">

<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/3.jpg" class="d-block w-100 alt="...">
<div class="carousel-caption d-none d-md-block">
        <h5>Produk 1</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block"> 
       
<h5>Produk 2</h5> <p>Some representative placeholder content for the first slide.</p>
 </div> 
</div>
    <div class="carousel-item">
     
 <img src="img/2.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block"> 
<h5>Produk 3</h5> 
<p>Some representative placeholder content for the first slide.</p> 
</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
 
 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"> 
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>
</div>
<div class="container-fluid py-5">
<div class="container">
<h2 class="text-center">Produk Terlaris</h2>

<div class="col-lg-4 col-md-8 d-blok mx-auto mt-5" style="width: 500px; boder: solid;">


<img src="img/3.jpg" class="img-fluid mg-thubnail" alt="">
</div> 

</div>
</div>
<div class="container-fluid py-5 bg-black">

<div class="container text-white">
<h2 class="text-center mb-5">Apa Kata Customer Kami</h2>
<figure class="text-center">
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Captain tsubasa
  </figcaption>
</figure>
</div>
</div>

<div class="container-fluid py-5">
<div class="container">
<h2 class="text-center mb-5">Produk Kami</h2>
 <div class="col-12">
  <div class="row">
 
  <div class="col-3">
<ul class="list-group">
    

<a class="list-group-item list-group-item-primary d-flex justify-content-between align-items-center">
Roti Kering 
<span class="badge bg-primary rounded-pill">10</span>
</a>
    <a class="list-group-item list-group-item-info d-flex justify-content-between align-items-center">
Roti Basah 
<span class="badge bg-primary rounded-pill">12</span>
</a>

<a class="list-group-item list-group-item-warning d-flex justify-content-between align-items-center">
Cake 
<span class="badge bg-primary rounded-pill">7</span>
</a>
<a class="list-group-item list-group-item-black d-flex justify-content-between align-items-center"> 
Kue Ultah
<span class="badge bg-primary rounded-pill">9</span>
 </a>
<a class="list-group-item list-group-item-white d-flex justify-content-between align-items-center">
Molen
<span class="badge bg-primary rounded-pill">18</span>
 </a>
  </ul>
</div>
<div class="col-9">
<div class="row">

<div class="col-3">

    <div class="card">
   <img src="img/3.jpg" class="card-img-top"  class="card-img-top" 	alt="...">
  <div class="card-body">
    <h5 class="card-title">Cake Coklate</h5>
    <p class="card-text">Cobalah Roti Coklat lezat dan lumer di mulut.</p>
<div class="dropend">
    <a href="#" class="btn btn-primary dropdown-toggle"data-bs-toggle="dropdown">Lihat</a>
<ul class="dropdown-menu"> <li><a class="dropdown-item" href="#">Lihat Detail</a></li>
<li><hr class="dropdown-divider"></li> 
<li><a class="dropdown-item" href="#">Beli</a></li> 
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item" href="#">Harga</a></li> 
</ul>
</div>
  </div>
</div>
</div>

<div class="col-3">
    <div class="card">
   <img src="img/3.jpg" class="card-img-top" class="card-img-top" 	alt="...">
  <div class="card-body">
    <h5 class="card-title">Cake Coklate</h5>
   
 <p class="card-text">Cobalah Roti Coklat lezat dan lumer di mulut.</p>
    <a href="#" class="btn btn-primary">Lihat</a>
  </div>
</div>
</div>

<div class="col-3">
    <div class="card">
   <img src="img/3.jpg" class="card-img-top"  class="card-img-top" 	alt="...">
  <div class="card-body">
    <h5 class="card-title">Cake Coklate</h5>
    <p class="card-text">Cobalah Roti Coklat lezat dan lumer di mulut.</p>
    <a href="#" class="btn btn-primary">Lihat</a>
  </div>
</div>
</div>

<div class="col-3">
   <div class="card">
   <img src="img/3.jpg" class="card-img-top" class="card-img-top" 	alt="...">
 

 <div class="card-body">
 
  <h5 class="card-title">Cake Coklate</h5>
    <p class="card-text">Cobalah Roti Coklat lezat dan lumer di mulut.</p>
    <a href="#" class="btn btn-primary">Lihat</a>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>

 </div>
</div>
<div class="container-fluid py-5">
<div class="container">


<h2 class="text-center mb-5">
Customer yang beruntung minggu ini<a tabindex="0" data-bs-trigger="focus"  class="btn btn-secondary"  data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" title="informasi" data-bs-content="Pengundian di lakukan setiap jum'at jam 17.00">
  ?
</a>

</h2>

</div>
</div>

<div class="table-responsive">
<table class="table table-striped-columns table table-hover table bordered border-black ">
  <thead>
    <tr>
      <th scope="col">No</th>
     
      <th scope="col">Nama</th>
       <th scope="col">No.Handphone</th>
      <th scope="col">Tanggal Pembelian</th>
      <th scope="col">No.Struk</th>
      <th scope="col">No.Undian</th>
      <th scope="col">Hadiah</th>
    </tr>
  </thead>
 <tbody>
    <tr class="table-info table bordered border-black">
      <td>1</td>
      <td>juan</td>
<td>08317657xxxx</td>
  <td>12 juni 2021</td>
      <td>01932211</td>
      <td>014</td>
 <td>1 paket roti basah</td>
    </tr>
<tr class="table-success table bordered border-black">
      <td>2</td>
      <td>fendy</td>
      <td>08317658xxxx</td>
     
     <td>13 juni 2021</td>
      <td>01932214</td>
      <td>017</td>
 <td>1 paket roti kering</td>
    </tr>
<tr class="table-secondary table bordered border-black">
      <td>3</td>
      <td>jamal</td>
      <td>08317656xxxx</td>
      <td>30 agustus 2021</td>
      <td>01932219</td>
      <td>041</td>
 <td>1 paket molen</td>
    </tr>

<tr class="table-warning table bordered border-black">
      <th>4</th>  
      <th>siti</td>
      <td>08317689xxxx</td>
     
       <td>24 juni 2021</td>
       <td>01932212</td>
        <td>019</td>
      <td>1 paket cake</td>
</tr>
 <tr class="table-primary table bordered border-black">
     <th>5</th>
      <td>pandi</td>
      <td>08317676xxxx</td>
      <td>25 juli 2021</td>
       <td>01932213</td>
      <td>030</td>
       <td>1 paket kue ultah</td>
    </tr>
<tr class="table-white table bordered border-black">
     <th>6</th>
      <td>sutaryo</td>
      <td>08317654xxxx</td>
      <td>27 juni 2021</td>
      <td>01932226</td>
      <td>019</td>
      <td>1 paket donat</td>
    </tr>


 </tbody>
</table>
</div>



<div class="container-fluid py-5 bg-black text-white">
<div class="container">
<h2 class="text-center mb-4">Hubungi Kami</h2>
<div class="offset-lg-2 col-lg-8">
<div class="alert alert-success alert-dismissible mb-4" id="myAlert">
<i class="bi bi-check2-square"></i> Formulir Berhasil Dikirim. klik <a herf="http://google.com"class="alert-link">disini</a> untuk melihat



<button type="button" class="btn-close" data-base-dismiss="alert" aria-label="close"></button>
</div>
<form>
<div class="mb-3">

<div class="row">
<div class="col-lg-6">
<label for="namadepan">nama depan</label>

<input type="text" id="namadepan" class="form-control"  autocomplete="off">
</div>

<div class="col-lg-6">
<label for="namabelakang">nama belakang</label>
<input type="text" id="namabelakang" class="form-control" autocomplete="off">
</div>
</div>
</div>
<div class="mb-3">
<label for="username">Username</label>
<div class="input-group">
<input type="text" class="form-control">
<span class="input-group-text">@</span>
<input type="text" class="form-control">
<span class="input-group-text">.com</span>
</div>
</div>
<div class="mb-3">
<label for="email" class="form-label">Email</label>

<input type="email" id="email" class="form-control" autocomplete="off">
<label class="form-text">*email anda tidak akan kami sebar luaskan</label>
</div>
<div class="mb-3">
<label for="tingkaturgensi" class="form-label">Tingkat Urgensi</label>
<select class="form-select" id="tingkaturgensi">
<option value="penting">Penting</option>
<option value="normal">Normal</option>
<option value="tidak penting">Tidak Penting</option>
</select>
</div>

<div class="mb-3 form-check">
<input type="radio" class="form-check-input" id="komplain" name="kategori">
<label for="komplain" class="form-check-label">Komplain</label>
</div>
<div class="mb-3 form-check">
<input type="radio" class="form-check-input" id="saran" name="kategori">
<label for="saran" class="form-check-label">Saran</label>
</div>

<div class="mb-3">
<label for="deskripsi"class="form-label">Deskripsi</label>
<textarea id="Deskripsi" class="form-control" cols="30" rows="10"></textarea>
</div>
<div class="mb-3">
 <button type="button" onclick="simpanform()" id="btnkirim" class="btn btn-primary w-100">Kirim</button>
<button type="button" id="btnloading" class="btn btn-primary w-100 mt-2">
<div class="spinner-border spiner-border-sm" role="status">
</div>
</button>

</div>
</from>

</div>
</div>
</div>

 <h1>Lezat dan Nikmat</h1>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 
<script>
var popoverTriggerList = [].slice.call (document.querySelectorAll('[data-bs-toggle="popover"]'))

var popoverList = popoverTriggerList.map
(Function (popoverTriggerEl) {
return new bootstrap.Popover(popoverTriggerEl)
)}

var myAlert = document.getElemenById('myAlert');

myAlert.style.display = 'none'

function myFunction(){
 myAlert.style.display = 'block'
}
var btnkirim=document.getElemenById('btnkirim');
var btnloading=document.getElemenById('btnloading');
btnloading.style.display= 'none'
function startProses(){
btnkirim.style.display= 'none'
btnloading.style.display= 'block'
}
function endProses(){
btnloading.style.display= 'none'
btnkirim.style.display= 'block'
}
function simpanform(){
startProses();

setTimeout(function(){
endproses(); myFunction()
}, 3000);
}

</script>

 </body>
</html>