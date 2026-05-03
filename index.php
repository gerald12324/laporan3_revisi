<!DOCTYPE html>
<html lang="id">
<head>
<title>SDN Margajaya 4 - Beranda</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
<style>
:root {
  --navy: #0f2a44;
  --navy-light: #1b3e66;
  --blue: #1565c0;
  --sky: #4fc3f7;
  --gold: #f9a825;
  --white: #ffffff;
  --bg: #f0f4f8;
  --text: #2d3748;
}

* { margin:0; padding:0; box-sizing:border-box; }

body {
  font-family: 'Poppins', sans-serif;
  background: var(--bg);
  color: var(--text);
  overflow-x: hidden;
}

/* ===== LOADER ===== */
#loader {
  position: fixed; inset:0; background: var(--navy);
  display:flex; align-items:center; justify-content:center;
  z-index: 9999; transition: opacity 0.6s, visibility 0.6s;
}
#loader.hide { opacity:0; visibility:hidden; }
.loader-logo {
  text-align:center; color:white; animation: pulse 1s infinite;
}
.loader-logo h2 { font-size:28px; letter-spacing:3px; }
.loader-bar {
  width:200px; height:3px; background:rgba(255,255,255,0.2);
  border-radius:10px; margin:15px auto 0; overflow:hidden;
}
.loader-bar-fill {
  height:100%; background: var(--sky);
  animation: loadBar 1.5s ease forwards;
}
@keyframes loadBar { from{width:0} to{width:100%} }
@keyframes pulse { 0%,100%{opacity:1} 50%{opacity:0.7} }

/* ===== NAVBAR ===== */
header {
  background: var(--navy);
  position: sticky; top:0; z-index: 100;
  box-shadow: 0 4px 20px rgba(0,0,0,0.3);
}
.navbar {
  display:flex; justify-content:space-between; align-items:center;
  padding: 12px 40px; max-width:1400px; margin:auto;
}
.logo {
  font-size:20px; font-weight:700; color:white;
  display:flex; align-items:center; gap:10px;
  text-decoration:none;
}
.logo-icon {
  width:40px; height:40px; background: var(--gold);
  border-radius:8px; display:flex; align-items:center;
  justify-content:center; font-size:20px;
}
.navbar ul {
  display:flex; list-style:none; gap:5px;
}
.navbar ul li a {
  color:rgba(255,255,255,0.85); text-decoration:none;
  font-size:13px; padding:7px 12px; border-radius:6px;
  transition:all 0.3s; font-weight:500;
}
.navbar ul li a:hover, .navbar ul li a.active {
  background: rgba(79,195,247,0.2); color: var(--sky);
}
.menu-toggle {
  display:none; font-size:24px; cursor:pointer; color:white;
}

/* ===== HERO ===== */
.hero {
  background: linear-gradient(135deg, rgba(15,42,68,0.85) 0%, rgba(21,101,192,0.7) 100%),
              url("profil_utama.jpg") center/cover no-repeat;
  min-height: 90vh;
  display:flex; align-items:center; padding: 0 80px;
  position:relative; overflow:hidden;
}
.hero::after {
  content:''; position:absolute; bottom:0; left:0; right:0;
  height:120px;
  background: linear-gradient(transparent, var(--bg));
}
.hero-content {
  max-width:650px; animation: heroFadeIn 1s ease 1.6s both;
}
@keyframes heroFadeIn {
  from { opacity:0; transform:translateY(40px); }
  to { opacity:1; transform:translateY(0); }
}
.hero-badge {
  display:inline-block; background: var(--gold); color: var(--navy);
  padding:5px 15px; border-radius:20px; font-size:12px;
  font-weight:700; letter-spacing:1px; margin-bottom:20px;
  text-transform:uppercase;
}
.hero h1 {
  font-family: 'Playfair Display', serif;
  font-size:58px; color:white; line-height:1.2;
  margin-bottom:20px;
}
.hero h1 span { color: var(--sky); }
.hero p {
  color:rgba(255,255,255,0.85); font-size:18px;
  margin-bottom:35px; line-height:1.7;
}
.hero-btns { display:flex; gap:15px; flex-wrap:wrap; }
.btn-primary {
  padding:14px 30px; background: var(--sky); color: var(--navy);
  border-radius:50px; text-decoration:none; font-weight:700;
  transition:all 0.3s; display:inline-flex; align-items:center; gap:8px;
}
.btn-primary:hover {
  transform:translateY(-3px);
  box-shadow: 0 10px 30px rgba(79,195,247,0.4);
}
.btn-outline {
  padding:14px 30px; background:transparent;
  border:2px solid rgba(255,255,255,0.5); color:white;
  border-radius:50px; text-decoration:none; font-weight:600;
  transition:all 0.3s;
}
.btn-outline:hover { border-color:white; background:rgba(255,255,255,0.1); }

/* ===== STATS ===== */
.stats {
  display:flex; justify-content:center; gap:0;
  max-width:800px; margin: -50px auto 0;
  position:relative; z-index:10; padding:0 20px;
}
.stat-card {
  background:white; flex:1; padding:30px 20px; text-align:center;
  box-shadow: var(--shadow);
  border-top:4px solid transparent;
  transition: all 0.3s;
}
.stat-card:first-child { border-radius:16px 0 0 16px; border-color: var(--sky); }
.stat-card:last-child { border-radius:0 16px 16px 0; border-color: var(--gold); }
.stat-card:nth-child(2) { border-color: var(--blue); }
.stat-card:nth-child(3) { border-color: #43a047; }
.stat-card:hover { transform:translateY(-5px); }
.stat-num {
  font-size:42px; font-weight:800; color: var(--navy);
  line-height:1;
}
.stat-label { font-size:13px; color:#666; margin-top:5px; font-weight:500; }

/* ===== SECTION STYLES ===== */
.section { padding:80px 40px; max-width:1200px; margin:auto; }
.section-header { text-align:center; margin-bottom:50px; }
.section-header h2 {
  font-family:'Playfair Display',serif;
  font-size:38px; color: var(--navy); margin-bottom:10px;
}
.section-header p { color:#666; font-size:16px; }
.divider {
  width:60px; height:4px; background: var(--sky);
  margin:15px auto; border-radius:2px;
}

/* ===== MENU CARDS ===== */
.menu-grid {
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(220px,1fr));
  gap:20px;
}
.menu-card {
  background:white; border-radius:16px; padding:30px 20px;
  text-align:center; box-shadow:0 10px 30px rgba(0,0,0,0.06);
  text-decoration:none; color: var(--text);
  transition:all 0.4s; border:2px solid transparent;
  position:relative; overflow:hidden;
}
.menu-card::before {
  content:''; position:absolute; top:0; left:0; right:0;
  height:4px; background: var(--sky);
  transform:scaleX(0); transition:transform 0.3s;
}
.menu-card:hover::before { transform:scaleX(1); }
.menu-card:hover {
  transform:translateY(-10px);
  box-shadow: 0 25px 60px rgba(15,42,68,0.15);
  border-color: var(--sky);
}
.menu-icon { font-size:42px; margin-bottom:15px; display:block; }
.menu-card h3 { color: var(--navy); font-size:17px; font-weight:700; }
.menu-card p { font-size:13px; color:#888; margin-top:8px; }

/* ===== AGENDA PREVIEW ===== */
.agenda-preview {
  background: var(--navy); border-radius:24px; padding:50px;
  margin:0 40px; color:white;
}
.agenda-grid {
  display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:20px; margin-top:30px;
}
.agenda-item {
  background:rgba(255,255,255,0.08); border-radius:12px;
  padding:20px; border:1px solid rgba(255,255,255,0.1);
  transition:all 0.3s;
}
.agenda-item:hover { background:rgba(255,255,255,0.15); transform:translateY(-4px); }
.agenda-date {
  background: var(--gold); color: var(--navy);
  display:inline-block; padding:4px 12px; border-radius:20px;
  font-size:12px; font-weight:700; margin-bottom:12px;
}
.agenda-item h4 { font-size:15px; margin-bottom:6px; }
.agenda-item p { font-size:13px; color:rgba(255,255,255,0.65); }

/* ===== BERITA ===== */
.berita-grid {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
  gap:25px;
}
.berita-card {
  background:white; border-radius:16px; overflow:hidden;
  box-shadow:0 10px 30px rgba(0,0,0,0.06); transition:all 0.4s;
}
.berita-card:hover { transform:translateY(-10px); box-shadow: var(--shadow); }
.berita-img {
  height:200px; background: var(--navy);
  display:flex; align-items:center; justify-content:center;
  font-size:60px; overflow:hidden;
}
.berita-img img { width:100%; height:100%; object-fit:cover; }
.berita-body { padding:20px; }
.berita-tag {
  background:#e3f2fd; color: var(--blue);
  padding:4px 12px; border-radius:20px;
  font-size:11px; font-weight:600; display:inline-block;
  margin-bottom:10px;
}
.berita-body h3 { color: var(--navy); font-size:16px; line-height:1.5; }
.berita-body p { font-size:13px; color:#888; margin-top:8px; }

/* ===== FOOTER ===== */
.footer-main {
  background: var(--navy); color:white;
  padding:60px 40px 30px;
}
.footer-grid {
  display:grid; grid-template-columns:2fr 1fr 1fr;
  gap:50px; max-width:1200px; margin:auto;
}
.footer-about h3 {
  font-family:'Playfair Display',serif;
  font-size:22px; margin-bottom:15px; color: var(--sky);
}
.footer-about p { color:rgba(255,255,255,0.7); line-height:1.8; font-size:14px; }
.footer-links h4 { margin-bottom:20px; color: var(--gold); font-size:14px; letter-spacing:1px; text-transform:uppercase; }
.footer-links ul { list-style:none; }
.footer-links ul li { margin-bottom:10px; }
.footer-links ul li a {
  color:rgba(255,255,255,0.65); text-decoration:none;
  font-size:13px; transition:color 0.3s;
}
.footer-links ul li a:hover { color: var(--sky); }
.footer-contact h4 { margin-bottom:20px; color: var(--gold); font-size:14px; letter-spacing:1px; text-transform:uppercase; }
.contact-item { display:flex; gap:10px; align-items:flex-start; margin-bottom:12px; }
.contact-item span { color:rgba(255,255,255,0.65); font-size:13px; line-height:1.6; }
.footer-bottom {
  text-align:center; padding:20px 40px;
  background:#0a1f33; color:rgba(255,255,255,0.4); font-size:13px;
}
.map-embed { border-radius:10px; overflow:hidden; margin-top:15px; }

/* ===== SCROLL ANIMATIONS ===== */
.reveal {
  opacity:0; transform:translateY(50px);
  transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.reveal.left { transform:translateX(-50px); }
.reveal.right { transform:translateX(50px); }
.reveal.visible { opacity:1; transform:translate(0); }

/* ===== RESPONSIVE ===== */
@media (max-width:768px) {
  .navbar { padding:12px 20px; }
  .navbar ul { display:none; flex-direction:column; position:absolute; top:100%; left:0; right:0; background:var(--navy); padding:15px 20px; }
  .navbar ul.show { display:flex; }
  .menu-toggle { display:block; }
  .hero { padding:0 25px; min-height:70vh; }
  .hero h1 { font-size:36px; }
  .stats { flex-direction:column; }
  .stat-card:first-child, .stat-card:last-child { border-radius:12px; }
  .section { padding:50px 20px; }
  .agenda-preview { margin:0 20px; padding:30px 20px; }
  .footer-grid { grid-template-columns:1fr; gap:30px; }
  .footer-main { padding:40px 20px 20px; }
}
</style>
</head>
<body>

<!-- LOADER -->
<div id="loader">
  <div class="loader-logo">
    <div style="font-size:48px; margin-bottom:10px;">🏫</div>
    <h2>SDN MARGAJAYA 4</h2>
    <p style="font-size:13px; opacity:0.7; margin-top:5px;">Memuat halaman...</p>
    <div class="loader-bar"><div class="loader-bar-fill"></div></div>
  </div>
</div>

<!-- NAVBAR -->
<header>
  <div class="navbar">
    <a href="index.php" class="logo">
      <div class="logo-icon">🏫</div>
      <span>SDN Margajaya 4</span>
    </a>
    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    <ul id="menu">
      <li><a href="index.php" class="active">Beranda</a></li>
      <li><a href="profil.php">Profil</a></li>
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

<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    <div class="hero-badge">🏆 Akreditasi A</div>
    <h1>Selamat Datang di<br><span>SDN Margajaya 4</span></h1>
    <p>Berkarakter, Berprestasi, dan Berakhlak Mulia. Mendidik generasi unggul sejak 1998 di Kota Bogor.</p>
    <div class="hero-btns">
      <a href="profil.php" class="btn-primary">📋 Lihat Profil</a>
      <a href="kontak.php" class="btn-outline">📞 Hubungi Kami</a>
    </div>
  </div>
</section>

<!-- STATS -->
<div class="stats reveal">
  <div class="stat-card">
    <div class="stat-num" data-target="1998">0</div>
    <div class="stat-label">📅 Tahun Berdiri</div>
  </div>
  <div class="stat-card">
    <div class="stat-num" data-target="500">0</div>
    <div class="stat-label">👦 Siswa Aktif</div>
  </div>
  <div class="stat-card">
    <div class="stat-num" data-target="30">0</div>
    <div class="stat-label">👩‍🏫 Guru & Staf</div>
  </div>
  <div class="stat-card">
    <div class="stat-num">A</div>
    <div class="stat-label">⭐ Akreditasi</div>
  </div>
</div>

<!-- MENU UTAMA -->
<section class="section">
  <div class="section-header reveal">
    <h2>Jelajahi Sekolah Kami</h2>
    <div class="divider"></div>
    <p>Temukan informasi lengkap tentang SDN Margajaya 4</p>
  </div>
  <div class="menu-grid">
    <a href="profil.php" class="menu-card reveal">
      <span class="menu-icon">🏛️</span>
      <h3>Profil Sekolah</h3>
      <p>Visi, misi & identitas sekolah</p>
    </a>
    <a href="unit_kerja.php" class="menu-card reveal">
      <span class="menu-icon">👥</span>
      <h3>Unit Kerja</h3>
      <p>Struktur organisasi & tenaga pendidik</p>
    </a>
    <a href="agenda.php" class="menu-card reveal">
      <span class="menu-icon">📅</span>
      <h3>Agenda</h3>
      <p>Jadwal kegiatan sekolah</p>
    </a>
    <a href="ekstrakurikuler.php" class="menu-card reveal">
      <span class="menu-icon">⚽</span>
      <h3>Ekstrakurikuler</h3>
      <p>Pramuka, futsal, tari & silat</p>
    </a>
    <a href="perpustakaan.php" class="menu-card reveal">
      <span class="menu-icon">📚</span>
      <h3>Perpustakaan</h3>
      <p>Koleksi buku cerita anak</p>
    </a>
    <a href="galeri.php" class="menu-card reveal">
      <span class="menu-icon">🖼️</span>
      <h3>Galeri</h3>
      <p>Foto kegiatan sekolah</p>
    </a>
  </div>
</section>

<!-- AGENDA PREVIEW -->
<div class="agenda-preview reveal">
  <div class="section-header" style="color:white">
    <h2 style="color:white">📅 Agenda Mendatang</h2>
    <div class="divider"></div>
  </div>
  <div class="agenda-grid">
    <div class="agenda-item">
      <span class="agenda-date">25 Apr 2026</span>
      <h4>Ujian Tengah Semester</h4>
      <p>📍 Ruang Kelas</p>
    </div>
    <div class="agenda-item">
      <span class="agenda-date">02 Mei 2026</span>
      <h4>Hari Pendidikan Nasional</h4>
      <p>📍 Lapangan Sekolah</p>
    </div>
    <div class="agenda-item">
      <span class="agenda-date">15 Mei 2026</span>
      <h4>Perkemahan Pramuka</h4>
      <p>📍 Bumi Perkemahan</p>
    </div>
    <div class="agenda-item">
      <span class="agenda-date">10 Jun 2026</span>
      <h4>Pentas Seni Sekolah</h4>
      <p>📍 Aula Sekolah</p>
    </div>
  </div>
  <div style="text-align:center;margin-top:25px">
    <a href="agenda.php" class="btn-primary">Lihat Semua Agenda →</a>
  </div>
</div>

<!-- BERITA -->
<section class="section">
  <div class="section-header reveal">
    <h2>Berita & Kegiatan</h2>
    <div class="divider"></div>
    <p>Informasi terkini dari SDN Margajaya 4</p>
  </div>
  <div class="berita-grid">
    <div class="berita-card reveal left">
      <div class="berita-img"><img src="img/berita1.jpg" alt="Berita 1" onerror="this.parentElement.innerHTML='🏆'"></div>
      <div class="berita-body">
        <span class="berita-tag">Lomba</span>
        <h3>Lomba Kebersihan Kelas</h3>
        <p>Siswa antusias mengikuti lomba kebersihan kelas antar angkatan.</p>
      </div>
    </div>
    <div class="berita-card reveal">
      <div class="berita-img"><img src="img/berita2.jpg" alt="Berita 2" onerror="this.parentElement.innerHTML='🎓'"></div>
      <div class="berita-body">
        <span class="berita-tag">Peringatan</span>
        <h3>Hari Pendidikan Nasional</h3>
        <p>Upacara bendera memperingati Hardiknas bersama seluruh siswa.</p>
      </div>
    </div>
    <div class="berita-card reveal right">
      <div class="berita-img"><img src="img/pramuka.jpg" alt="Pramuka" onerror="this.parentElement.innerHTML='⛺'"></div>
      <div class="berita-body">
        <span class="berita-tag">Ekskul</span>
        <h3>Kegiatan Pramuka Aktif</h3>
        <p>Siswa pramuka SDN Margajaya 4 aktif berlatih setiap minggu.</p>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<div class="footer-main">
  <div class="footer-grid">
    <div class="footer-about reveal">
      <h3>🏫 SDN Margajaya 4</h3>
      <p>Sekolah Dasar Negeri Margajaya 4 berkomitmen mendidik generasi berkarakter, berprestasi, dan berakhlak mulia sejak tahun 1998.</p>
      <div class="map-embed">
        <iframe src="https://www.google.com/maps?q=SDN%20Margajaya%204%20Bogor&output=embed"
          width="100%" height="180" style="border:0;" loading="lazy"></iframe>
      </div>
    </div>
    
    <div class="footer-contact reveal">
      <h4>Kontak</h4>
      <div class="contact-item"><span>📍</span><span>Jl. Dramaga Loceng No.3, RT.03/RW.04, Kel. Margajaya, Kec. Bogor Barat, Kota Bogor, Jawa Barat</span></div>
      <div class="contact-item"><span>📞</span><span>(+62) 856 95 333 888</span></div>
      <div class="contact-item"><span>📧</span><span>info@sdnmargajaya4.sch.id</span></div>
    </div>
  </div>
</div>
<div class="footer-bottom">
  <p>© 2026 SDN Margajaya 4 · Jl. Dramaga Loceng No.3, Bogor</p>
</div>

<script>
// LOADER
window.addEventListener('load', () => {
  setTimeout(() => {
    document.getElementById('loader').classList.add('hide');
  }, 1600);
});

// HAMBURGER
function toggleMenu() {
  document.getElementById('menu').classList.toggle('show');
}

// SCROLL REVEAL
const reveals = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.1 });
reveals.forEach(el => observer.observe(el));

// COUNTER ANIMATION
function animateCounter(el, target, suffix='') {
  let start = 0;
  const dur = 2000;
  const step = target / (dur / 16);
  const timer = setInterval(() => {
    start += step;
    if (start >= target) { start = target; clearInterval(timer); }
    el.textContent = Math.floor(start) + suffix;
  }, 16);
}

const counterObs = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const el = entry.target;
      const target = parseInt(el.dataset.target);
      if (!isNaN(target)) {
        const suffix = el.closest('.stat-card').querySelector('.stat-label').textContent.includes('Siswa') ? '+' : '';
        animateCounter(el, target, suffix);
        counterObs.unobserve(el);
      }
    }
  });
}, { threshold: 0.5 });
document.querySelectorAll('[data-target]').forEach(el => counterObs.observe(el));
</script>
</body>
</html>
