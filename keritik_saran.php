<!DOCTYPE html>
<html>
<head>
<title>Kritik dan Saran - SDN Margajaya 4</title>

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

/* FORM */

.container{
max-width:700px;
margin:auto;
padding:60px 20px;
}

.form-box{
background:white;
padding:40px;
border-radius:12px;
box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

.form-box h2{
text-align:center;
color:#0f2a44;
margin-bottom:20px;
}

.input-group{
margin-bottom:20px;
}

.input-group label{
display:block;
margin-bottom:5px;
font-weight:bold;
}

.input-group input,
.input-group textarea{
width:100%;
padding:10px;
border-radius:6px;
border:1px solid #ccc;
font-size:14px;
}

.input-group textarea{
height:120px;
resize:none;
}

.btn{
width:100%;
padding:12px;
background:#0f2a44;
color:white;
border:none;
border-radius:6px;
font-size:16px;
cursor:pointer;
}

.btn:hover{
background:#1b3e66;
}

/* RESPONSIVE */

@media (max-width:768px){

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
<h1>Kritik dan Saran</h1>
<p>Sampaikan pendapat Anda untuk kemajuan sekolah</p>
</div>

</section>

<!-- FORM -->

<div class="container">

<div class="form-box">

<h2>Form Kritik dan Saran</h2>

<form>

<div class="input-group">
<label>Nama</label>
<input type="text" placeholder="Masukkan nama anda">
</div>

<div class="input-group">
<label>Email</label>
<input type="email" placeholder="Masukkan email anda">
</div>

<div class="input-group">
<label>Pesan / Saran</label>
<textarea placeholder="Tulis kritik atau saran anda..."></textarea>
</div>

<button class="btn">Kirim Pesan</button>

</form>

</div>

</div>

</body>
</html>