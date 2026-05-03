<!DOCTYPE html>
<html>
<head>
<title>Unit Kerja - SDN Margajaya 4</title>

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
background:url("profil_utama.jpg") center/cover no-repeat;
height:350px;
display:flex;
align-items:center;
padding-left:60px;
color:white;
}

.hero-text{
background:rgba(0,0,0,0.45);
padding:30px;
border-radius:10px;
}

.hero h1{
font-size:40px;
margin:0;
}

/* UNIT */

.unit{
padding:60px 40px;
max-width:1000px;
margin:auto;
}

.unit h2{
text-align:center;
margin-bottom:40px;
color:#0f2a44;
}

.unit-item{
display:flex;
align-items:center;
gap:30px;
background:white;
padding:25px;
border-radius:12px;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
margin-bottom:30px;
transition:0.3s;
}

.unit-item:hover{
transform:translateY(-5px);
box-shadow:0 15px 35px rgba(0,0,0,0.15);
}

.unit-item img{
width:140px;
height:140px;
border-radius:50%;
object-fit:cover;
}

.unit-text h3{
margin:0;
color:#0f2a44;
}

.unit-text p{
margin:5px 0;
}

/* BALIK POSISI */

.reverse{
flex-direction:row-reverse;
text-align:right;
}

/* SCROLL ANIMATION */

.scroll{
opacity:0;
transform:translateY(40px);
transition:all 0.8s ease;
}

.scroll.show{
opacity:1;
transform:translateY(0);
}

/* FOOTER */

footer{
background:#0f2a44;
color:white;
text-align:center;
padding:15px;
margin-top:50px;
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
height:250px;
padding-left:20px;
}

.hero h1{
font-size:28px;
}

.unit-item{
flex-direction:column;
text-align:center;
}

.reverse{
flex-direction:column;
text-align:center;
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

</header>

<!-- HERO -->

<section class="hero">

<div class="hero-text">
<h1>Unit Kerja</h1>
<p>Struktur Organisasi SDN Margajaya 4</p>
</div>

</section>

<!-- UNIT -->

<section class="unit">

<h2 class="scroll">Unit Kerja Sekolah</h2>

<div class="unit-item scroll">

<img src="img/kepsek.jpg">

<div class="unit-text">
<h3>Drs. Agus Suryana</h3>
<p>Kepala Sekolah</p>
<p>Memimpin seluruh kegiatan pendidikan dan manajemen sekolah.</p>
</div>

</div>

<div class="unit-item reverse scroll">

<img src="img/guru1.jpg">

<div class="unit-text">
<h3>Budi Santoso</h3>
<p>Wakil Kepala Sekolah</p>
<p>Membantu kepala sekolah dalam pengelolaan kurikulum dan kegiatan sekolah.</p>
</div>

</div>

<div class="unit-item scroll">

<img src="img/guru2.jpg">

<div class="unit-text">
<h3>Siti Aminah</h3>
<p>Kepala Tata Usaha</p>
<p>Mengelola administrasi dan pelayanan dokumen sekolah.</p>
</div>

</div>

</section>

<footer>

<p>© 2026 SDN Margajaya 4</p>

</footer>

<script>

const scrollElements = document.querySelectorAll(".scroll");

const elementInView = (el, offset = 100) => {
const elementTop = el.getBoundingClientRect().top;
return elementTop <= ((window.innerHeight || document.documentElement.clientHeight) - offset);
};

const displayScrollElement = (element) => {
element.classList.add("show");
};

const handleScrollAnimation = () => {
scrollElements.forEach((el) => {
if (elementInView(el, 100)) {
displayScrollElement(el);
}
});
};

window.addEventListener("scroll", () => {
handleScrollAnimation();
});

</script>

</body>
</html>
```
