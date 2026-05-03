<!DOCTYPE html>
<html>
<head>
<title>Ekstrakurikuler - SDN Margajaya 4</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
font-family:Arial, Helvetica, sans-serif;
margin:0;
background:#f4f7fb;
color:#333;
}

/* NAVBAR */

header{
background:#0f2a44;
color:white;
}

.navbar{
display:flex;
justify-content:space-between;
align-items:center;
padding:15px 30px;
}

.logo{
font-size:22px;
font-weight:bold;
}

.navbar ul{
display:flex;
list-style:none;
margin:0;
padding:0;
}

.navbar ul li{
margin-left:20px;
}

.navbar ul li a{
color:white;
text-decoration:none;
font-size:15px;
}

.navbar ul li a:hover{
color:#4fc3f7;
}

/* HERO */

.hero{
background:url("ekstrakurikuler.jpg") center/cover no-repeat;
height:300px;
display:flex;
align-items:center;
padding-left:60px;
color:white;
}

.hero-text{
background:rgba(0,0,0,0.35);
padding:25px;
border-radius:10px;
}

.hero h1{
font-size:36px;
margin:0;
}

/* JUDUL */

.judul{
text-align:center;
padding:50px 20px 10px;
}

.judul h2{
color:#0f2a44;
}

/* CONTAINER */

.container{
width:90%;
max-width:1000px;
margin:auto;
padding:30px 0;
}

/* CARD EKSTRA */

.ekstra{
display:flex;
align-items:center;
gap:25px;
background:white;
margin-bottom:25px;
padding:20px;
border-radius:12px;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
transition:0.3s;
}

.ekstra:hover{
transform:translateY(-5px);
box-shadow:0 15px 30px rgba(0,0,0,0.15);
}

/* GAMBAR */

.ekstra img{
width:170px;
height:120px;
object-fit:cover;
border-radius:8px;
}

/* TEXT */

.ekstra-text h3{
margin:0;
color:#0f2a44;
}

.ekstra-text p{
margin:6px 0;
font-size:14px;
color:#555;
}

/* FOOTER */

footer{
background:#0f2a44;
color:white;
text-align:center;
padding:15px;
margin-top:40px;
}

/* RESPONSIVE */

@media (max-width:768px){

.navbar{
flex-direction:column;
align-items:flex-start;
}

.navbar ul{
flex-direction:column;
width:100%;
margin-top:10px;
}

.navbar ul li{
margin:8px 0;
}

.hero{
height:200px;
padding-left:20px;
}

.hero h1{
font-size:26px;
}

.ekstra{
flex-direction:column;
text-align:center;
}

.ekstra img{
width:100%;
height:auto;
}

}

</style>

</head>

<body>

<header>

<div class="navbar">

<div class="logo">
SDN Margajaya 4
</div>

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
<h1>Ekstrakurikuler</h1>
<p>Kegiatan siswa untuk mengembangkan minat dan bakat</p>
</div>

</section>

<!-- JUDUL -->

<div class="judul">
<h2>Daftar Ekstrakurikuler</h2>
<p>Berikut kegiatan ekstrakurikuler di SDN Margajaya 4</p>
</div>

<!-- ISI EKSTRA -->

<div class="container">

<div class="ekstra">
<img src="pramuka.jpg">
<div class="ekstra-text">
<h3>Pramuka</h3>
<p>Kegiatan untuk melatih kemandirian dan kepemimpinan siswa.</p>
<p><b>Hari:</b> Jumat</p>
<p><b>Tempat:</b> Lapangan Sekolah</p>
</div>
</div>

<div class="ekstra">
<img src="futsal.jpg">
<div class="ekstra-text">
<h3>Futsal</h3>
<p>Kegiatan olahraga untuk meningkatkan kebugaran dan kerja sama tim.</p>
<p><b>Hari:</b> Sabtu</p>
<p><b>Tempat:</b> Lapangan Olahraga</p>
</div>
</div>

<div class="ekstra">
<img src="tari.jpg">
<div class="ekstra-text">
<h3>Tari Tradisional</h3>
<p>Kegiatan seni untuk mengembangkan bakat dan kreativitas siswa.</p>
<p><b>Hari:</b> Rabu</p>
<p><b>Tempat:</b> Aula Sekolah</p>
</div>
</div>

<div class="ekstra">
<img src="silat.jpg">
<div class="ekstra-text">
<h3>Pencak Silat</h3>
<p>Melatih kedisiplinan dan kemampuan bela diri siswa.</p>
<p><b>Hari:</b> Kamis</p>
<p><b>Tempat:</b> Lapangan Sekolah</p>
</div>
</div>

</div>

<footer>
<p>© 2026 SDN Margajaya 4</p>
</footer>

</body>
</html>
