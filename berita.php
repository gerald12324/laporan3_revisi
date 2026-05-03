<!DOCTYPE html>
<html lang="id">
<head>
<title>Berita - SDN Margajaya 4</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
<style>
:root{--navy:#0f2a44;--sky:#4fc3f7;--gold:#f9a825;--bg:#f0f4f8;--text:#2d3748;--shadow:0 20px 60px rgba(15,42,68,0.15);}
*{margin:0;padding:0;box-sizing:border-box;}
body{font-family:'Poppins',sans-serif;background:var(--bg);color:var(--text);overflow-x:hidden;}

header{background:var(--navy);position:sticky;top:0;z-index:100;box-shadow:0 4px 20px rgba(0,0,0,0.3);}
.navbar{display:flex;justify-content:space-between;align-items:center;padding:12px 40px;max-width:1400px;margin:auto;}
.logo{font-size:20px;font-weight:700;color:white;display:flex;align-items:center;gap:10px;text-decoration:none;}
.logo-icon{width:40px;height:40px;background:var(--gold);border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:20px;}
.navbar ul{display:flex;list-style:none;gap:5px;}
.navbar ul li a{color:rgba(255,255,255,0.85);text-decoration:none;font-size:13px;padding:7px 12px;border-radius:6px;transition:all 0.3s;font-weight:500;}
.navbar ul li a:hover,.navbar ul li a.active{background:rgba(79,195,247,0.2);color:var(--sky);}
.menu-toggle{display:none;font-size:24px;cursor:pointer;color:white;}

.hero{background:linear-gradient(135deg,rgba(15,42,68,0.9) 0%,rgba(21,101,192,0.75) 100%),url("profil_utama.jpg") center/cover no-repeat;min-height:360px;display:flex;align-items:center;justify-content:center;text-align:center;}
.hero-content{animation:fadeUp 1s ease both;}
@keyframes fadeUp{from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:translateY(0)}}
.hero-badge{display:inline-block;background:var(--gold);color:var(--navy);padding:5px 15px;border-radius:20px;font-size:12px;font-weight:700;margin-bottom:15px;text-transform:uppercase;}
.hero h1{font-family:'Playfair Display',serif;font-size:48px;color:white;margin-bottom:10px;}
.hero p{color:rgba(255,255,255,0.8);font-size:16px;}

.section{padding:70px 40px;max-width:1200px;margin:auto;}
.section-header{text-align:center;margin-bottom:50px;}
.section-header h2{font-family:'Playfair Display',serif;font-size:36px;color:var(--navy);}
.divider{width:60px;height:4px;background:var(--sky);margin:12px auto;border-radius:2px;}
.section-header p{color:#666;font-size:15px;}

/* BERITA UTAMA */
.berita-utama{display:grid;grid-template-columns:2fr 1fr;gap:25px;margin-bottom:50px;}
.berita-featured{background:white;border-radius:20px;overflow:hidden;box-shadow:0 15px 40px rgba(0,0,0,0.1);transition:all 0.4s;}
.berita-featured:hover{transform:translateY(-5px);box-shadow:var(--shadow);}
.featured-img{height:320px;background:var(--navy);display:flex;align-items:center;justify-content:center;font-size:80px;overflow:hidden;}
.featured-img img{width:100%;height:100%;object-fit:cover;}
.featured-body{padding:30px;}
.berita-tag{background:#e3f2fd;color:#1565c0;padding:4px 12px;border-radius:20px;font-size:11px;font-weight:700;display:inline-block;margin-bottom:12px;text-transform:uppercase;}
.featured-body h2{font-family:'Playfair Display',serif;font-size:24px;color:var(--navy);margin-bottom:12px;line-height:1.4;}
.featured-body p{color:#666;font-size:14px;line-height:1.8;}
.berita-meta{display:flex;gap:15px;margin-top:15px;font-size:12px;color:#aaa;}

/* BERITA SAMPING */
.berita-samping{display:flex;flex-direction:column;gap:15px;}
.berita-kecil{background:white;border-radius:14px;overflow:hidden;box-shadow:0 8px 20px rgba(0,0,0,0.07);display:flex;transition:all 0.3s;}
.berita-kecil:hover{transform:translateX(5px);box-shadow:0 12px 30px rgba(0,0,0,0.12);}
.bk-img{width:100px;flex-shrink:0;background:var(--navy);display:flex;align-items:center;justify-content:center;font-size:30px;overflow:hidden;}
.bk-img img{width:100%;height:100%;object-fit:cover;}
.bk-body{padding:12px;}
.bk-body .berita-tag{font-size:10px;margin-bottom:6px;}
.bk-body h4{font-size:13px;color:var(--navy);line-height:1.4;}
.bk-body .date{font-size:11px;color:#aaa;margin-top:5px;}

/* BERITA GRID */
.berita-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:25px;}
.berita-card{background:white;border-radius:16px;overflow:hidden;box-shadow:0 10px 25px rgba(0,0,0,0.07);transition:all 0.4s;}
.berita-card:hover{transform:translateY(-8px);box-shadow:var(--shadow);}
.berita-img-wrap{height:190px;background:var(--navy);display:flex;align-items:center;justify-content:center;font-size:50px;overflow:hidden;}
.berita-img-wrap img{width:100%;height:100%;object-fit:cover;}
.berita-body{padding:20px;}
.berita-body h3{color:var(--navy);font-size:16px;margin-bottom:8px;line-height:1.5;}
.berita-body p{font-size:13px;color:#777;line-height:1.7;}
.berita-body .meta{font-size:12px;color:#aaa;margin-top:10px;display:flex;gap:12px;}

.footer-main{background:var(--navy);color:white;padding:40px 40px 20px;}
.footer-bottom{text-align:center;padding:15px;background:#0a1f33;color:rgba(255,255,255,0.4);font-size:13px;}
.reveal{opacity:0;transform:translateY(40px);transition:all 0.8s cubic-bezier(0.25,0.46,0.45,0.94);}
.reveal.visible{opacity:1;transform:translateY(0);}

@media(max-width:900px){.berita-utama{grid-template-columns:1fr;}}
@media(max-width:768px){
  .navbar{padding:12px 20px;}
  .navbar ul{display:none;flex-direction:column;position:absolute;top:100%;left:0;right:0;background:var(--navy);padding:15px 20px;}
  .navbar ul.show{display:flex;}
  .menu-toggle{display:block;}
  .hero{min-height:260px;}
  .hero h1{font-size:30px;}
  .section{padding:50px 20px;}
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
      <li><a href="profil.php">Profil</a></li>
      <li><a href="unit_kerja.php">Unit Kerja</a></li>
      <li><a href="agenda.php">Agenda</a></li>
      <li><a href="ekstrakurikuler.php">Ekskul</a></li>
      <li><a href="kantin_sekolah.php">Kantin</a></li>
      <li><a href="perpustakaan.php">Perpustakaan</a></li>
      <li><a href="galeri.php">Galeri</a></li>
      <li><a href="berita.php" class="active">Berita</a></li>
      <li><a href="keritikandsaran.php">Saran</a></li>
      <li><a href="kelulusan.php">Alumni</a></li>
      <li><a href="kontak.php">Kontak</a></li>
    </ul>
  </div>
</header>

<section class="hero">
  <div class="hero-content">
    <div class="hero-badge">📰 Berita Sekolah</div>
    <h1>Berita & Informasi</h1>
    <p>Kabar terbaru dari SDN Margajaya 4</p>
  </div>
</section>

<section class="section">
  <div class="section-header reveal">
    <h2>Berita Terkini</h2>
    <div class="divider"></div>
    <p>Informasi dan kegiatan terbaru dari SDN Margajaya 4</p>
  </div>

  <!-- BERITA UTAMA -->
  <div class="berita-utama reveal">
    <div class="berita-featured">
      <div class="featured-img"><img src="img/berita1.jpg" alt="Berita Utama" onerror="this.parentElement.innerHTML='🏆'"></div>
      <div class="featured-body">
        <span class="berita-tag">Unggulan</span>
        <h2>SDN Margajaya 4 Raih Juara Lomba Kebersihan Kelas Tingkat Kecamatan</h2>
        <p>SDN Margajaya 4 berhasil meraih juara pertama dalam lomba kebersihan kelas tingkat kecamatan Bogor Barat. Keberhasilan ini merupakan buah dari kerja keras seluruh siswa dan bimbingan para guru dalam menjaga kebersihan lingkungan sekolah.</p>
        <div class="berita-meta">
          <span>📅 April 2026</span>
          <span>👁️ 1.2k views</span>
        </div>
      </div>
    </div>
    <div class="berita-samping">
      <div class="berita-kecil">
        <div class="bk-img"><img src="img/berita2.jpg" alt="" onerror="this.parentElement.innerHTML='🎓'"></div>
        <div class="bk-body">
          <span class="berita-tag">Peringatan</span>
          <h4>Upacara Peringatan Hari Pendidikan Nasional</h4>
          <div class="date">📅 2 Mei 2026</div>
        </div>
      </div>
      <div class="berita-kecil">
        <div class="bk-img"><img src="img/pramuka.jpg" alt="" onerror="this.parentElement.innerHTML='⛺'"></div>
        <div class="bk-body">
          <span class="berita-tag">Ekskul</span>
          <h4>Perkemahan Pramuka SDN Margajaya 4</h4>
          <div class="date">📅 15 Mei 2026</div>
        </div>
      </div>
      <div class="berita-kecil">
        <div class="bk-img">🎨</div>
        <div class="bk-body">
          <span class="berita-tag">Lomba</span>
          <h4>Lomba Mewarnai Tingkat SD se-Kota Bogor</h4>
          <div class="date">📅 Maret 2026</div>
        </div>
      </div>
    </div>
  </div>

  <!-- BERITA LAINNYA -->
  <div class="section-header reveal" style="margin-top:20px">
    <h2>Berita Lainnya</h2>
    <div class="divider"></div>
  </div>
  <div class="berita-grid">
    <div class="berita-card reveal">
      <div class="berita-img-wrap"><img src="img/berita2.jpg" alt="" onerror="this.parentElement.innerHTML='📚'"></div>
      <div class="berita-body">
        <span class="berita-tag">Kurikulum</span>
        <h3>Program Literasi Digital untuk Siswa Kelas 5 dan 6</h3>
        <p>Sekolah meluncurkan program literasi digital sebagai persiapan siswa menghadapi era teknologi.</p>
        <div class="meta"><span>📅 Feb 2026</span><span>👁️ 890</span></div>
      </div>
    </div>
    <div class="berita-card reveal">
      <div class="berita-img-wrap">🌱</div>
      <div class="berita-body">
        <span class="berita-tag">Lingkungan</span>
        <h3>Program Sekolah Hijau: Menanam 100 Pohon di Lingkungan Sekolah</h3>
        <p>Siswa dan guru bersama-sama menanam pohon untuk menjaga keindahan dan kesejukan sekolah.</p>
        <div class="meta"><span>📅 Jan 2026</span><span>👁️ 654</span></div>
      </div>
    </div>
    <div class="berita-card reveal">
      <div class="berita-img-wrap">🏅</div>
      <div class="berita-body">
        <span class="berita-tag">Prestasi</span>
        <h3>Siswa SDN Margajaya 4 Juara Olimpiade Matematika Kota Bogor</h3>
        <p>Ahmad Fauzi, siswa kelas 6A, berhasil meraih medali emas dalam olimpiade matematika tingkat kota.</p>
        <div class="meta"><span>📅 Des 2025</span><span>👁️ 1.5k</span></div>
      </div>
    </div>
  </div>
</section>

<div class="footer-main">
  <p style="text-align:center;color:rgba(255,255,255,0.65);font-size:14px;">📍 Jl. Dramaga Loceng No.3, Bogor &nbsp;|&nbsp; 📞 (+62) 856 95 333 888</p>
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
