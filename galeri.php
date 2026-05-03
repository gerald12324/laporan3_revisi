<!DOCTYPE html>
<html>
<head>
<title>Galeri Sekolah - SDN Margajaya 4</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
font-family:Arial, Helvetica, sans-serif;
margin:0;
background:#f4f7fb;
}

/* NAVBAR */

header{
background:#0f2a44;
color:white;
}

.nav{
display:flex;
justify-content:space-between;
align-items:center;
padding:15px 40px;
max-width:1200px;
margin:auto;
}

.nav ul{
display:flex;
list-style:none;
margin:0;
padding:0;
}

.nav ul li{
margin-left:18px;
}

.nav ul li a{
color:white;
text-decoration:none;
font-size:14px;
}

.nav ul li a:hover{
color:#4fc3f7;
}

/* HERO */

.hero{
background:url("sekolah.jpg") center/cover no-repeat;
height:260px;
display:flex;
align-items:center;
justify-content:center;
color:white;
text-align:center;
}

.hero-text{
background:rgba(0,0,0,0.5);
padding:25px;
border-radius:10px;
}

/* JUDUL */

.judul{
text-align:center;
padding:50px 20px 20px;
}

.judul h2{
color:#0f2a44;
}

/* GRID GALERI */

.galeri{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:20px;
max-width:1100px;
margin:auto;
padding:40px 20px 60px;
}

/* FOTO */

.foto{
overflow:hidden;
border-radius:10px;
box-shadow:0 5px 15px rgba(0,0,0,0.15);
cursor:pointer;
}

.foto img{
width:100%;
height:220px;
object-fit:cover;
transition:0.4s;
}

.foto img:hover{
transform:scale(1.1);
}

/* MODAL GAMBAR */

.modal{
display:none;
position:fixed;
z-index:999;
padding-top:80px;
left:0;
top:0;
width:100%;
height:100%;
background:rgba(0,0,0,0.9);
}

.modal img{
display:block;
margin:auto;
max-width:80%;
max-height:80%;
}

.close{
position:absolute;
top:20px;
right:40px;
color:white;
font-size:35px;
cursor:pointer;
}

/* RESPONSIVE */

@media (max-width:900px){

.galeri{
grid-template-columns:repeat(2,1fr);
}

}

@media (max-width:600px){

.nav{
flex-direction:column;
align-items:flex-start;
}

.nav ul{
flex-direction:column;
margin-top:10px;
}

.nav ul li{
margin:6px 0;
}

.galeri{
grid-template-columns:1fr;
}

}

</style>

</head>

<body>

<header>

<div class="nav">

<h2>SDN Margajaya 4</h2>

<ul id="menu">

<li><a href="index.php">Beranda</a></li>
<li><a href="profil.php">Profil Sekolah</a></li>
<li><a href="unit_kerja.php">Unit Kerja</a></li>
<li><a href="agenda.php">Agenda</a></li>
<li><a href="ekstrakurikuler.php">Ekstrakurikuler</a></li>
<li><a href="kantin_sekolah.php">Kantin</a></li>
<li><a href="perpustakaan.php">Perpustakaan</a></li>
<li><a href="galeri.php">Galeri</a></li>
<li><a href="keritikandsaran.php">Keritik Dan Saran</a></li>
<li><a href="kelulusan.php">Alumni</a></li>
<li><a href="kontak.php">Kontak</a></li>

</ul>

</div>

</header>

<!-- HERO -->

<section class="hero">

<div class="hero-text">
<h1>Galeri Sekolah</h1>
<p>Kegiatan dan suasana di SDN Margajaya 4</p>
</div>

</section>

<div class="judul">
<h2>Foto Kegiatan Sekolah</h2>
<p>Dokumentasi kegiatan siswa dan sekolah</p>
</div>

<!-- GALERI -->

<div class="galeri">

<div class="foto">
<img src="galeri/foto1.jpg" onclick="buka(this)">
</div>

<div class="foto">
<img src="galeri/foto2.jpg" onclick="buka(this)">
</div>

<div class="foto">
<img src="galeri/foto3.jpg" onclick="buka(this)">
</div>

<div class="foto">
<img src="galeri/foto4.jpg" onclick="buka(this)">
</div>

<div class="foto">
<img src="galeri/foto5.jpg" onclick="buka(this)">
</div>

<div class="foto">
<img src="galeri/foto6.jpg" onclick="buka(this)">
</div>

</div>

<!-- MODAL -->

<div id="modal" class="modal">
<span class="close" onclick="tutup()">&times;</span>
<img id="gambar">
</div>

<script>

function buka(img){
document.getElementById("modal").style.display="block";
document.getElementById("gambar").src=img.src;
}

function tutup(){
document.getElementById("modal").style.display="none";
}

</script>

</body>
</html>