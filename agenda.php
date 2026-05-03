<!DOCTYPE html>
<html lang="id">
<head>
<title>Agenda - SDN Margajaya 4</title>
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

.hero{background:linear-gradient(135deg,rgba(15,42,68,0.9) 0%,rgba(21,101,192,0.75) 100%),url("profil_utama.jpg") center/cover no-repeat;min-height:380px;display:flex;align-items:center;padding:0 80px;}
.hero-content{animation:fadeUp 1s ease both;max-width:600px;}
@keyframes fadeUp{from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:translateY(0)}}
.hero-badge{display:inline-block;background:var(--gold);color:var(--navy);padding:5px 15px;border-radius:20px;font-size:12px;font-weight:700;margin-bottom:15px;text-transform:uppercase;}
.hero h1{font-family:'Playfair Display',serif;font-size:48px;color:white;margin-bottom:10px;}
.hero p{color:rgba(255,255,255,0.8);font-size:16px;}

.section{padding:70px 40px;max-width:1200px;margin:auto;}
.section-header{text-align:center;margin-bottom:50px;}
.section-header h2{font-family:'Playfair Display',serif;font-size:36px;color:var(--navy);}
.divider{width:60px;height:4px;background:var(--sky);margin:12px auto;border-radius:2px;}
.section-header p{color:#666;font-size:15px;}

/* FILTER BULAN */
.filter-bar{display:flex;gap:10px;justify-content:center;flex-wrap:wrap;margin-bottom:40px;}
.filter-btn{padding:8px 20px;border-radius:20px;border:2px solid #ddd;background:white;cursor:pointer;font-family:'Poppins',sans-serif;font-size:13px;font-weight:500;transition:all 0.3s;color:var(--text);}
.filter-btn:hover,.filter-btn.active{background:var(--navy);color:white;border-color:var(--navy);}

/* AGENDA GRID */
.agenda-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:25px;}
.agenda-card{background:white;border-radius:20px;padding:30px;box-shadow:0 10px 30px rgba(0,0,0,0.07);transition:all 0.4s;position:relative;overflow:hidden;}
.agenda-card::before{content:'';position:absolute;top:0;left:0;right:0;height:5px;background:var(--sky);}
.agenda-card:nth-child(2)::before{background:var(--gold);}
.agenda-card:nth-child(3)::before{background:#43a047;}
.agenda-card:nth-child(4)::before{background:#e53935;}
.agenda-card:nth-child(5)::before{background:#8e24aa;}
.agenda-card:nth-child(6)::before{background:#f4511e;}
.agenda-card:hover{transform:translateY(-10px);box-shadow:var(--shadow);}

.tanggal-badge{display:flex;align-items:center;gap:12px;margin-bottom:18px;}
.tanggal-box{background:var(--navy);color:white;width:65px;height:65px;border-radius:14px;display:flex;flex-direction:column;align-items:center;justify-content:center;font-weight:800;font-size:22px;flex-shrink:0;line-height:1;}
.tanggal-box span{font-size:10px;font-weight:600;letter-spacing:1px;opacity:0.8;text-transform:uppercase;}
.tanggal-info .bulan{font-size:12px;color:#aaa;}
.tanggal-info .hari{font-size:14px;font-weight:600;color:var(--navy);}

.agenda-card h3{color:var(--navy);font-size:17px;margin-bottom:10px;line-height:1.4;}
.agenda-card p{color:#777;font-size:13px;line-height:1.7;}
.agenda-card .tempat{display:flex;align-items:center;gap:6px;margin-top:12px;font-size:13px;color:#555;font-weight:500;}
.agenda-card .kategori{display:inline-block;background:#e3f2fd;color:#1565c0;padding:3px 10px;border-radius:12px;font-size:11px;font-weight:600;margin-bottom:10px;}

/* TIMELINE VIEW */
.timeline{max-width:800px;margin:0 auto;position:relative;}
.timeline::before{content:'';position:absolute;left:30px;top:0;bottom:0;width:3px;background:linear-gradient(var(--sky),var(--navy));border-radius:2px;}
.timeline-item{display:flex;gap:25px;margin-bottom:35px;position:relative;}
.tl-dot{width:60px;height:60px;flex-shrink:0;background:var(--navy);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:22px;border:4px solid white;box-shadow:0 5px 15px rgba(0,0,0,0.2);z-index:1;}
.tl-content{background:white;flex:1;border-radius:16px;padding:20px;box-shadow:0 8px 20px rgba(0,0,0,0.07);transition:all 0.3s;}
.tl-content:hover{transform:translateX(5px);box-shadow:0 15px 35px rgba(0,0,0,0.12);}
.tl-content h4{color:var(--navy);font-size:16px;margin-bottom:6px;}
.tl-content p{font-size:13px;color:#777;}
.tl-date{font-size:12px;color:var(--sky);font-weight:700;margin-bottom:5px;}

.view-toggle{display:flex;gap:10px;justify-content:center;margin-bottom:30px;}
.view-btn{padding:8px 20px;border-radius:8px;border:2px solid #ddd;background:white;cursor:pointer;font-family:'Poppins',sans-serif;font-size:13px;transition:all 0.3s;}
.view-btn.active{background:var(--navy);color:white;border-color:var(--navy);}

footer{background:var(--navy);color:white;text-align:center;padding:20px;margin-top:60px;font-size:13px;}
.reveal{opacity:0;transform:translateY(40px);transition:all 0.8s cubic-bezier(0.25,0.46,0.45,0.94);}
.reveal.visible{opacity:1;transform:translateY(0);}

@media(max-width:768px){
  .navbar{padding:12px 20px;}
  .navbar ul{display:none;flex-direction:column;position:absolute;top:100%;left:0;right:0;background:var(--navy);padding:15px 20px;}
  .navbar ul.show{display:flex;}
  .menu-toggle{display:block;}
  .hero{padding:0 25px;min-height:280px;}
  .hero h1{font-size:30px;}
  .section{padding:50px 20px;}
  .timeline::before{left:25px;}
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
      <li><a href="agenda.php" class="active">Agenda</a></li>
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
    <div class="hero-badge">📅 Jadwal Kegiatan</div>
    <h1>Agenda Sekolah</h1>
    <p>Informasi kegiatan terbaru SDN Margajaya 4 Tahun 2026</p>
  </div>
</section>

<section class="section">
  <div class="section-header reveal">
    <h2>Agenda Kegiatan</h2>
    <div class="divider"></div>
    <p>Berikut kegiatan yang akan dilaksanakan di sekolah</p>
  </div>

  <div class="filter-bar reveal">
    <button class="filter-btn active" onclick="filterAgenda('semua',this)">Semua</button>
    <button class="filter-btn" onclick="filterAgenda('april',this)">April</button>
    <button class="filter-btn" onclick="filterAgenda('mei',this)">Mei</button>
    <button class="filter-btn" onclick="filterAgenda('juni',this)">Juni</button>
  </div>

  <div class="view-toggle reveal">
    <button class="view-btn active" onclick="switchView('grid',this)">🔲 Grid</button>
    <button class="view-btn" onclick="switchView('timeline',this)">📋 Timeline</button>
  </div>

  <!-- GRID VIEW -->
  <div id="grid-view" class="agenda-grid">
    <div class="agenda-card reveal" data-bulan="april">
      <div class="tanggal-badge">
        <div class="tanggal-box">25<span>APR</span></div>
        <div class="tanggal-info"><div class="hari">Jumat</div><div class="bulan">April 2026</div></div>
      </div>
      <span class="kategori">📝 Akademik</span>
      <h3>Ujian Tengah Semester (UTS)</h3>
      <p>Pelaksanaan Ujian Tengah Semester untuk seluruh siswa kelas 1 hingga kelas 6.</p>
      <div class="tempat">📍 Ruang Kelas Masing-masing</div>
    </div>
    <div class="agenda-card reveal" data-bulan="mei">
      <div class="tanggal-badge">
        <div class="tanggal-box">02<span>MEI</span></div>
        <div class="tanggal-info"><div class="hari">Sabtu</div><div class="bulan">Mei 2026</div></div>
      </div>
      <span class="kategori">🎌 Peringatan</span>
      <h3>Hari Pendidikan Nasional (Hardiknas)</h3>
      <p>Upacara bendera dan berbagai kegiatan dalam rangka memperingati Hardiknas.</p>
      <div class="tempat">📍 Lapangan Sekolah</div>
    </div>
    <div class="agenda-card reveal" data-bulan="mei">
      <div class="tanggal-badge">
        <div class="tanggal-box">15<span>MEI</span></div>
        <div class="tanggal-info"><div class="hari">Kamis</div><div class="bulan">Mei 2026</div></div>
      </div>
      <span class="kategori">⛺ Ekskul</span>
      <h3>Perkemahan Pramuka</h3>
      <p>Kegiatan perkemahan tahunan siswa pramuka untuk melatih kemandirian dan kerja sama.</p>
      <div class="tempat">📍 Bumi Perkemahan Cibubur</div>
    </div>
    <div class="agenda-card reveal" data-bulan="juni">
      <div class="tanggal-badge">
        <div class="tanggal-box">10<span>JUN</span></div>
        <div class="tanggal-info"><div class="hari">Rabu</div><div class="bulan">Juni 2026</div></div>
      </div>
      <span class="kategori">🎭 Seni</span>
      <h3>Pentas Seni Sekolah</h3>
      <p>Penampilan bakat siswa dalam bidang seni, musik, tari, dan budaya tradisional.</p>
      <div class="tempat">📍 Aula Sekolah</div>
    </div>
    <div class="agenda-card reveal" data-bulan="juni">
      <div class="tanggal-badge">
        <div class="tanggal-box">20<span>JUN</span></div>
        <div class="tanggal-info"><div class="hari">Sabtu</div><div class="bulan">Juni 2026</div></div>
      </div>
      <span class="kategori">🎓 Kelulusan</span>
      <h3>Wisuda & Perpisahan Kelas 6</h3>
      <p>Acara wisuda dan perpisahan siswa kelas 6 yang akan melanjutkan ke jenjang SMP.</p>
      <div class="tempat">📍 Aula Sekolah</div>
    </div>
    <div class="agenda-card reveal" data-bulan="april">
      <div class="tanggal-badge">
        <div class="tanggal-box">21<span>APR</span></div>
        <div class="tanggal-info"><div class="hari">Selasa</div><div class="bulan">April 2026</div></div>
      </div>
      <span class="kategori">👩 Peringatan</span>
      <h3>Hari Kartini</h3>
      <p>Peringatan Hari Kartini dengan lomba busana adat dan berbagai kegiatan budaya.</p>
      <div class="tempat">📍 Lapangan Sekolah</div>
    </div>
  </div>

  <!-- TIMELINE VIEW (hidden by default) -->
  <div id="timeline-view" class="timeline" style="display:none">
    <div class="timeline-item reveal">
      <div class="tl-dot">🎌</div>
      <div class="tl-content"><div class="tl-date">21 April 2026</div><h4>Hari Kartini</h4><p>Peringatan Hari Kartini dengan lomba busana adat — Lapangan Sekolah</p></div>
    </div>
    <div class="timeline-item reveal">
      <div class="tl-dot">📝</div>
      <div class="tl-content"><div class="tl-date">25 April 2026</div><h4>Ujian Tengah Semester</h4><p>UTS seluruh siswa kelas 1-6 — Ruang Kelas</p></div>
    </div>
    <div class="timeline-item reveal">
      <div class="tl-dot">🎓</div>
      <div class="tl-content"><div class="tl-date">2 Mei 2026</div><h4>Hari Pendidikan Nasional</h4><p>Upacara Hardiknas — Lapangan Sekolah</p></div>
    </div>
    <div class="timeline-item reveal">
      <div class="tl-dot">⛺</div>
      <div class="tl-content"><div class="tl-date">15 Mei 2026</div><h4>Perkemahan Pramuka</h4><p>Kemah tahunan siswa pramuka — Bumi Perkemahan Cibubur</p></div>
    </div>
    <div class="timeline-item reveal">
      <div class="tl-dot">🎭</div>
      <div class="tl-content"><div class="tl-date">10 Juni 2026</div><h4>Pentas Seni Sekolah</h4><p>Penampilan seni dan budaya siswa — Aula Sekolah</p></div>
    </div>
    <div class="timeline-item reveal">
      <div class="tl-dot">🎊</div>
      <div class="tl-content"><div class="tl-date">20 Juni 2026</div><h4>Wisuda & Perpisahan Kelas 6</h4><p>Acara kelulusan siswa kelas 6 — Aula Sekolah</p></div>
    </div>
  </div>
</section>

<footer><p>© 2026 SDN Margajaya 4 · Jl. Dramaga Loceng No.3, Bogor</p></footer>

<script>
function toggleMenu(){ document.getElementById('menu').classList.toggle('show'); }

function filterAgenda(bulan, btn) {
  document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('.agenda-card').forEach(card => {
    if(bulan === 'semua' || card.dataset.bulan === bulan){
      card.style.display = 'block';
      card.style.animation = 'fadeUp 0.4s ease';
    } else {
      card.style.display = 'none';
    }
  });
}

function switchView(view, btn) {
  document.querySelectorAll('.view-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.getElementById('grid-view').style.display = view === 'grid' ? 'grid' : 'none';
  document.getElementById('timeline-view').style.display = view === 'timeline' ? 'block' : 'none';
}

const reveals = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1 });
reveals.forEach(el => observer.observe(el));
</script>
</body>
</html>
