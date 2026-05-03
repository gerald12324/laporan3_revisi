<!DOCTYPE html>
<html lang="id">
<head>
<title>Profil Sekolah - SDN Margajaya 4</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
<style>
:root { --navy:#0f2a44; --navy-light:#1b3e66; --blue:#1565c0; --sky:#4fc3f7; --gold:#f9a825; --bg:#f0f4f8; --text:#2d3748; --shadow:0 20px 60px rgba(15,42,68,0.15); }
*{margin:0;padding:0;box-sizing:border-box;}
body{font-family:'Poppins',sans-serif;background:var(--bg);color:var(--text);overflow-x:hidden;}

/* NAVBAR */
header{background:var(--navy);position:sticky;top:0;z-index:100;box-shadow:0 4px 20px rgba(0,0,0,0.3);}
.navbar{display:flex;justify-content:space-between;align-items:center;padding:12px 40px;max-width:1400px;margin:auto;}
.logo{font-size:20px;font-weight:700;color:white;display:flex;align-items:center;gap:10px;text-decoration:none;}
.logo-icon{width:40px;height:40px;background:var(--gold);border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:20px;}
.navbar ul{display:flex;list-style:none;gap:5px;}
.navbar ul li a{color:rgba(255,255,255,0.85);text-decoration:none;font-size:13px;padding:7px 12px;border-radius:6px;transition:all 0.3s;font-weight:500;}
.navbar ul li a:hover,.navbar ul li a.active{background:rgba(79,195,247,0.2);color:var(--sky);}
.menu-toggle{display:none;font-size:24px;cursor:pointer;color:white;}

/* HERO */
.hero{background:linear-gradient(135deg,rgba(15,42,68,0.88) 0%,rgba(21,101,192,0.75) 100%),url("profil_utama.jpg") center/cover no-repeat;min-height:420px;display:flex;align-items:center;padding:0 80px;position:relative;overflow:hidden;}
.hero::before{content:'';position:absolute;right:-100px;top:-100px;width:500px;height:500px;border-radius:50%;background:rgba(79,195,247,0.05);}
.hero-content{max-width:600px;animation:fadeUp 1s ease both;}
@keyframes fadeUp{from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:translateY(0)}}
.hero-badge{display:inline-block;background:var(--gold);color:var(--navy);padding:5px 15px;border-radius:20px;font-size:12px;font-weight:700;letter-spacing:1px;margin-bottom:15px;text-transform:uppercase;}
.hero h1{font-family:'Playfair Display',serif;font-size:48px;color:white;line-height:1.2;margin-bottom:12px;}
.hero h1 span{color:var(--sky);}
.hero p{color:rgba(255,255,255,0.85);font-size:16px;}

/* SECTION */
.section{padding:70px 40px;max-width:1200px;margin:auto;}
.section-header{text-align:center;margin-bottom:50px;}
.section-header h2{font-family:'Playfair Display',serif;font-size:36px;color:var(--navy);}
.divider{width:60px;height:4px;background:var(--sky);margin:12px auto;border-radius:2px;}
.section-header p{color:#666;font-size:15px;}

/* SAMBUTAN */
.sambutan{display:flex;gap:40px;background:white;padding:40px;border-radius:20px;box-shadow:0 15px 40px rgba(0,0,0,0.08);max-width:1100px;margin:0 auto 60px;align-items:center;}
.sambutan-img{position:relative;flex-shrink:0;}
.sambutan-img img{width:220px;height:270px;object-fit:cover;border-radius:16px;display:block;}
.sambutan-img::before{content:'';position:absolute;inset:-8px;border:3px solid var(--sky);border-radius:20px;z-index:-1;}
.sambutan-text h2{font-family:'Playfair Display',serif;font-size:26px;color:var(--navy);margin-bottom:15px;}
.sambutan-text p{color:#555;line-height:1.9;font-size:15px;margin-bottom:20px;}
.sambutan-name{font-weight:700;color:var(--navy);font-size:16px;}
.sambutan-title{color:#888;font-size:13px;}

/* STATS */
.stats-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-bottom:60px;}
.stat-card{background:white;padding:30px 20px;text-align:center;border-radius:16px;box-shadow:0 10px 30px rgba(0,0,0,0.06);transition:all 0.3s;border-top:4px solid var(--sky);}
.stat-card:nth-child(2){border-color:var(--gold);}
.stat-card:nth-child(3){border-color:#43a047;}
.stat-card:nth-child(4){border-color:#e53935;}
.stat-card:hover{transform:translateY(-8px);box-shadow:var(--shadow);}
.stat-num{font-size:42px;font-weight:800;color:var(--navy);line-height:1;}
.stat-label{font-size:13px;color:#777;margin-top:8px;}

/* VISI MISI */
.vimis{display:grid;grid-template-columns:1fr 1fr;gap:25px;margin-bottom:60px;}
.vimis-card{background:var(--navy);color:white;padding:35px;border-radius:20px;}
.vimis-card.misi{background:white;color:var(--text);}
.vimis-card h3{font-family:'Playfair Display',serif;font-size:24px;margin-bottom:15px;color:var(--sky);}
.vimis-card.misi h3{color:var(--navy);}
.vimis-card p{line-height:1.9;color:rgba(255,255,255,0.85);font-size:14px;}
.vimis-card.misi p{color:#555;}
.misi-list{list-style:none;padding:0;}
.misi-list li{padding:8px 0;font-size:14px;color:#555;display:flex;gap:10px;align-items:flex-start;}
.misi-list li::before{content:'✅';flex-shrink:0;}

/* PROGRAM */
.program-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:25px;}
.program-card{background:white;border-radius:16px;overflow:hidden;box-shadow:0 10px 25px rgba(0,0,0,0.07);transition:all 0.4s;}
.program-card:hover{transform:translateY(-8px);box-shadow:var(--shadow);}
.program-img{height:180px;background:var(--navy);display:flex;align-items:center;justify-content:center;font-size:50px;overflow:hidden;}
.program-img img{width:100%;height:100%;object-fit:cover;}
.program-body{padding:20px;}
.program-body h3{color:var(--navy);font-size:16px;}
.program-body p{font-size:13px;color:#777;margin-top:6px;}

/* GALERI GRID */
.galeri-mini{display:grid;grid-template-columns:repeat(6,1fr);gap:10px;margin-top:40px;}
.galeri-mini .foto{border-radius:10px;overflow:hidden;height:120px;}
.galeri-mini .foto img{width:100%;height:100%;object-fit:cover;transition:0.4s;}
.galeri-mini .foto:hover img{transform:scale(1.1);}

/* FOOTER */
.footer-main{background:var(--navy);color:white;padding:50px 40px 20px;}
.footer-grid{display:grid;grid-template-columns:2fr 1fr 1fr;gap:50px;max-width:1200px;margin:auto;}
.footer-about h3{font-family:'Playfair Display',serif;font-size:22px;margin-bottom:15px;color:var(--sky);}
.footer-about p{color:rgba(255,255,255,0.7);line-height:1.8;font-size:14px;}
.footer-links h4,.footer-contact h4{margin-bottom:20px;color:var(--gold);font-size:14px;letter-spacing:1px;text-transform:uppercase;}
.footer-links ul{list-style:none;}
.footer-links ul li{margin-bottom:10px;}
.footer-links ul li a{color:rgba(255,255,255,0.65);text-decoration:none;font-size:13px;transition:color 0.3s;}
.footer-links ul li a:hover{color:var(--sky);}
.contact-item{display:flex;gap:10px;align-items:flex-start;margin-bottom:12px;}
.contact-item span{color:rgba(255,255,255,0.65);font-size:13px;line-height:1.6;}
.footer-bottom{text-align:center;padding:15px;background:#0a1f33;color:rgba(255,255,255,0.4);font-size:13px;}

/* REVEAL */
.reveal{opacity:0;transform:translateY(40px);transition:all 0.8s cubic-bezier(0.25,0.46,0.45,0.94);}
.reveal.left{transform:translateX(-40px);}
.reveal.right{transform:translateX(40px);}
.reveal.visible{opacity:1;transform:translate(0);}

/* RESPONSIVE */
@media(max-width:900px){
  .stats-grid{grid-template-columns:repeat(2,1fr);}
  .vimis{grid-template-columns:1fr;}
  .program-grid{grid-template-columns:repeat(2,1fr);}
  .galeri-mini{grid-template-columns:repeat(3,1fr);}
  .footer-grid{grid-template-columns:1fr;gap:30px;}
}
@media(max-width:768px){
  .navbar{padding:12px 20px;}
  .navbar ul{display:none;flex-direction:column;position:absolute;top:100%;left:0;right:0;background:var(--navy);padding:15px 20px;}
  .navbar ul.show{display:flex;}
  .menu-toggle{display:block;}
  .hero{padding:0 25px;min-height:300px;}
  .hero h1{font-size:30px;}
  .section{padding:50px 20px;}
  .sambutan{flex-direction:column;padding:25px;}
  .sambutan-img img{width:100%;height:220px;}
  .stats-grid{grid-template-columns:1fr 1fr;}
  .program-grid{grid-template-columns:1fr;}
  .galeri-mini{grid-template-columns:repeat(2,1fr);}
}
</style>
</head>
<body>

<header>
  <div class="navbar">
    <a href="index.php" class="logo">
      <div class="logo-icon">🏫</div>
      <span>SDN Margajaya 4</span>
    </a>
    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    <ul id="menu">
      <li><a href="index.php">Beranda</a></li>
      <li><a href="profil.php" class="active">Profil</a></li>
      <li><a href="unit_kerja.php">Unit Kerja</a></li>
      <li><a href="agenda.php">Agenda</a></li>
      <li><a href="ekstrakurikuler.php">Ekskul</a></li>
      <li><a href="kantin_sekolah.php">Kantin</a></li>
      <li><a href="perpustakaan.php">Perpustakaan</a></li>
      <li><a href="galeri.php">Galeri</a></li>
      <li><a href="berita.php">Berita</a></li>
      <li><a href="keritikandsaran.php">Saran</a></li>
      <li><a href="kelulusan.php">Alumni</a></li>
      <li><a href="kontak.php">Kontak</a></li>
    </ul>
  </div>
</header>

<section class="hero">
  <div class="hero-content">
    <div class="hero-badge">📋 Profil Sekolah</div>
    <h1>Mengenal <span>SDN Margajaya 4</span></h1>
    <p>Berkarakter, Berprestasi, dan Berakhlak Mulia sejak 1998</p>
  </div>
</section>

<!-- SAMBUTAN -->
<section class="section">
  <div class="sambutan reveal">
    <div class="sambutan-img">
      <img src="testi_profil1.jpg" alt="Kepala Sekolah">
    </div>
    <div class="sambutan-text">
      <h2>Sambutan Kepala Sekolah</h2>
      <p>Assalamualaikum Wr. Wb. Selamat datang di website resmi SDN Margajaya 4. Kami berkomitmen untuk mendidik siswa menjadi generasi yang berkarakter, berprestasi, dan berakhlak mulia. Kami percaya bahwa setiap anak memiliki potensi luar biasa yang perlu dikembangkan dengan baik melalui pendidikan berkualitas.</p>
      <p>Bersama seluruh tenaga pendidik yang berdedikasi, kami terus berinovasi demi memberikan pengalaman belajar terbaik bagi setiap siswa kami.</p>
      <div class="sambutan-name">Drs. Agus Suryana, M.Pd.</div>
      <div class="sambutan-title">Kepala Sekolah SDN Margajaya 4</div>
    </div>
  </div>

  <!-- STATS -->
  <div class="stats-grid">
    <div class="stat-card reveal">
      <div class="stat-num">1998</div>
      <div class="stat-label">📅 Tahun Berdiri</div>
    </div>
    <div class="stat-card reveal">
      <div class="stat-num">500+</div>
      <div class="stat-label">👦 Siswa Aktif</div>
    </div>
    <div class="stat-card reveal">
      <div class="stat-num">30+</div>
      <div class="stat-label">👩‍🏫 Guru & Staf</div>
    </div>
    <div class="stat-card reveal">
      <div class="stat-num">A</div>
      <div class="stat-label">⭐ Akreditasi BAN-S/M</div>
    </div>
  </div>
</section>

<!-- VISI MISI -->
<section class="section" style="padding-top:0">
  <div class="section-header reveal">
    <h2>Visi & Misi</h2>
    <div class="divider"></div>
  </div>
  <div class="vimis">
    <div class="vimis-card reveal left">
      <h3>🎯 Visi</h3>
      <p>Terwujudnya sekolah yang bermutu, berkarakter, dan berwawasan lingkungan untuk menghasilkan lulusan yang berprestasi, beriman, dan berakhlak mulia serta mampu bersaing di era globalisasi.</p>
    </div>
    <div class="vimis-card misi reveal right">
      <h3>🚀 Misi</h3>
      <ul class="misi-list">
        <li>Melaksanakan pembelajaran aktif, inovatif, kreatif, dan menyenangkan</li>
        <li>Menumbuhkan semangat keunggulan dan kompetitif kepada warga sekolah</li>
        <li>Meningkatkan kompetensi dan profesionalisme tenaga pendidik</li>
        <li>Menciptakan lingkungan sekolah yang bersih, sehat dan kondusif</li>
        <li>Menjalin kerjasama dengan orang tua dan masyarakat</li>
      </ul>
    </div>
  </div>
</section>

<!-- PROGRAM UNGGULAN -->
<section class="section" style="background:white;max-width:100%;padding:70px 40px;">
  <div style="max-width:1200px;margin:auto">
    <div class="section-header reveal">
      <h2>Program Unggulan</h2>
      <div class="divider"></div>
      <p>Kegiatan dan program terbaik untuk siswa</p>
    </div>
    <div class="program-grid">
      <div class="program-card reveal left">
        <div class="program-img"><img src="img/berita1.jpg" alt="Hardiknas" onerror="this.parentElement.innerHTML='🏆'"></div>
        <div class="program-body"><h3>Peringatan Hari Pendidikan</h3><p>Upacara dan lomba dalam rangka memperingati Hari Pendidikan Nasional.</p></div>
      </div>
      <div class="program-card reveal">
        <div class="program-img"><img src="img/berita2.jpg" alt="Kunjungan" onerror="this.parentElement.innerHTML='🏛️'"></div>
        <div class="program-body"><h3>Kunjungan Edukatif</h3><p>Kunjungan ke museum dan tempat bersejarah untuk memperluas wawasan siswa.</p></div>
      </div>
      <div class="program-card reveal right">
        <div class="program-img"><img src="img/berita3.jpg" alt="Lomba" onerror="this.parentElement.innerHTML='🎨'"></div>
        <div class="program-body"><h3>Lomba Kreativitas</h3><p>Berbagai lomba untuk mengembangkan bakat dan kreativitas siswa.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- GALERI MINI -->
<section class="section">
  <div class="section-header reveal">
    <h2>Galeri Kegiatan</h2>
    <div class="divider"></div>
  </div>
  <div class="galeri-mini">
    <div class="foto reveal"><img src="img/berita1.jpg" alt="Foto 1" onerror="this.style.background='#0f2a44'"></div>
    <div class="foto reveal"><img src="img/berita2.jpg" alt="Foto 2" onerror="this.style.background='#1565c0'"></div>
    <div class="foto reveal"><img src="img/berita3.jpg" alt="Foto 3" onerror="this.style.background='#0f2a44'"></div>
    <div class="foto reveal"><img src="img/pramuka.jpg" alt="Pramuka" onerror="this.style.background='#1565c0'"></div>
    <div class="foto reveal"><img src="img/sekolah.jpg" alt="Sekolah" onerror="this.style.background='#0f2a44'"></div>
    <div class="foto reveal"><img src="profil_utama.jpg" alt="Profil" onerror="this.style.background='#1565c0'"></div>
  </div>
</section>

<!-- FOOTER -->
<div class="footer-main">
  <div class="footer-grid">
    <div class="footer-about"><h3>🏫 SDN Margajaya 4</h3><p>Sekolah Dasar Negeri Margajaya 4 berkomitmen mendidik generasi berkarakter, berprestasi, dan berakhlak mulia sejak tahun 1998.</p></div>
    <div class="contact-item"><span>📍</span><span>Jl. Dramaga Loceng No.3, Bogor</span></div><div class="contact-item"><span>📞</span><span>(+62) 8381 2821 267</span></div><div class="contact-item"><span>📧</span><span>info@sdnmargajaya4.sch.id</span></div></div>
  </div>
</div>
<div class="footer-bottom"><p>© 2026 SDN Margajaya 4 · Semua Hak Dilindungi</p></div>

<script>
function toggleMenu(){ document.getElementById('menu').classList.toggle('show'); }
const reveals = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1 });
reveals.forEach(el => observer.observe(el));
</script>
</body>
</html>
