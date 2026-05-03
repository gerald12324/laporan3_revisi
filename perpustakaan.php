<!DOCTYPE html>
<html>
<head>
<title>Perpustakaan - SDN Margajaya 4</title>

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
background:url("perpus.jpg") center/cover no-repeat;
height:260px;
display:flex;
align-items:center;
}

.hero-text{
background:rgba(0,0,0,0.4);
padding:30px;
border-radius:10px;
margin-left:80px;
color:white;
}

/* JUDUL */

.judul{
text-align:center;
padding:50px 20px;
}

.judul h2{
color:#0f2a44;
}

/* GRID BUKU */

.buku-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:25px;
max-width:1100px;
margin:auto;
padding-bottom:50px;
}

/* CARD BUKU */

.buku{
background:white;
padding:15px;
border-radius:10px;
text-align:center;
box-shadow:0 5px 15px rgba(0,0,0,0.1);
transition:0.3s;
}

.buku:hover{
transform:translateY(-6px);
box-shadow:0 15px 30px rgba(0,0,0,0.2);
}

.buku img{
width:100%;
height:180px;
object-fit:cover;
border-radius:6px;
}

.buku h3{
margin:10px 0;
color:#0f2a44;
}

/* BUTTON */

.btn{
display:inline-block;
padding:8px 15px;
background:#0f2a44;
color:white;
text-decoration:none;
border-radius:5px;
margin-top:8px;
}

.btn:hover{
background:#1c3f66;
}

/* RESPONSIVE */

@media (max-width:900px){

.buku-grid{
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
width:100%;
margin-top:10px;
}

.nav ul li{
margin:6px 0;
}

.hero{
height:200px;
}

.hero-text{
margin-left:20px;
}

.buku-grid{
grid-template-columns:1fr;
}

}

</style>

</head>

<body>

<header>

<div class="nav">

<h2>SDN Margajaya 4</h2>

<ul>

<li><a href="index.php">Beranda</a></li>
<li><a href="profil.php">Profil Sekolah</a></li>
<li><a href="unit_kerja.php">Unit Kerja</a></li>
<li><a href="agenda.php">Agenda</a></li>
<li><a href="ekstrakurikuler.php">Ekstrakurikuler</a></li>
<li><a href="kantin_sekolah.php">Kantin</a></li>
<li><a href="perpustakaan.php">Perpustakaan</a></li>
<li><a href="galeri.php">Galeri</a></li>
<li><a href="keritikandsaran.php">Kritik Dan Saran</a></li>
<li><a href="kelulusan.php">Alumni</a></li>
<li><a href="kontak.php">Kontak</a></li>

</ul>

</div>

</header>

<!-- HERO -->

<section class="hero">

<div class="hero-text">
<h1>Perpustakaan Sekolah</h1>
<p>Tempat membaca dan belajar siswa</p>
</div>

</section>

<!-- JUDUL -->

<div class="judul">

<h2>Buku Cerita Anak</h2>
<p>Silakan pilih buku untuk dibaca</p>

</div>

<!-- BUKU -->

<div class="buku-grid">

<div class="buku">
<img src="foto_perpus/kancil.jpg">
<h3>Kancil dan Buaya</h3>
<a href="foto_perpus/cerita1.php" class="btn">Baca Buku</a>
</div>

<div class="buku">
<img src="foto_perpus/malin.jpg">
<h3>Malin Kundang</h3>
<a href="foto_perpus/malin.php" class="btn">Baca Buku</a>
</div>

<div class="buku">
<img src="foto_perpus/timun_mas.jpg">
<h3>Timun Mas Dan Raksasa</h3>
<a href="foto_perpus/timun.php" class="btn">Baca Buku</a>
</div>

</div>

</body>
</html>