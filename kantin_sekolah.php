<!DOCTYPE html>
<html>
<head>
<title>Kantin Sekolah - SDN Margajaya 4</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
font-family: Arial, sans-serif;
margin:0;
background:#f4f7fb;
color:#333;
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
padding:15px 30px;
max-width:1200px;
margin:auto;
flex-wrap:wrap;
}

.nav ul{
display:flex;
list-style:none;
padding:0;
margin:0;
flex-wrap:wrap;
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
background:url("kantin.jpg") center/cover no-repeat;
height:260px;
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
max-width:1100px;
margin:auto;
padding:30px 20px;
}

/* CARD */

.kantin{
display:flex;
align-items:center;
gap:25px;
background:white;
margin-bottom:25px;
padding:20px;
border-radius:12px;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
transition:0.3s;
}

.kantin:hover{
transform:translateY(-5px);
box-shadow:0 15px 30px rgba(0,0,0,0.15);
}

/* GAMBAR */

.kantin img{
width:170px;
height:120px;
object-fit:cover;
border-radius:8px;
}

/* TEXT */

.kantin-text h3{
margin:0;
color:#0f2a44;
}

.kantin-text p{
margin:6px 0;
font-size:14px;
color:#555;
}

/* RESPONSIVE */

@media (max-width:768px){

.hero{
height:200px;
padding-left:20px;
}

.hero h1{
font-size:26px;
}

.kantin{
flex-direction:column;
align-items:flex-start;
}

.kantin img{
width:100%;
height:180px;
}

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
<li><a href="keritikandsaran.php">Keritik Dan Saran</a></li>
<li><a href="kelulusan.php">Alumni</a></li>
<li><a href="kontak.php">Kontak</a></li>

</ul>

</div>

</header>

<!-- HERO -->

<section class="hero">

<div class="hero-text">
<h1>Kantin Sekolah</h1>
<p>Kantin sehat dan bersih untuk siswa SDN Margajaya 4</p>
</div>

</section>

<!-- JUDUL -->

<div class="judul">
<h2>Fasilitas Kantin</h2>
<p>Kantin menyediakan makanan sehat dan higienis untuk siswa</p>
</div>

<!-- ISI -->

<div class="container">

<div class="kantin">
<img src="kantin1.jpg">
<div class="kantin-text">
<h3>Kantin Utama</h3>
<p>Kantin utama menyediakan berbagai makanan ringan dan minuman sehat.</p>
<p><b>Jam Buka:</b> 07:00 - 13:00</p>
</div>
</div>

<div class="kantin">
<img src="kantin2.jpg">
<div class="kantin-text">
<h3>Makanan Sehat</h3>
<p>Semua makanan yang dijual di kantin dijaga kebersihan dan kesehatannya.</p>
<p><b>Menu:</b> Nasi, mie, roti, susu, dan buah.</p>
</div>
</div>

<div class="kantin">
<img src="kantin3.jpg">
<div class="kantin-text">
<h3>Tempat Makan Siswa</h3>
<p>Tersedia tempat makan yang bersih dan nyaman untuk siswa.</p>
<p><b>Lokasi:</b> Area Kantin Sekolah</p>
</div>
</div>

</div>

</body>
</html>