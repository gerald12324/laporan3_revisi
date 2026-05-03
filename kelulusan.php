<!DOCTYPE html>
<html lang="id">
<head>
<title>Alumni & Kelulusan - SDN Margajaya 4</title>
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

.hero{background:linear-gradient(135deg,rgba(15,42,68,0.9) 0%,rgba(21,101,192,0.75) 100%),url("profil_utama.jpg") center/cover no-repeat;min-height:380px;display:flex;align-items:center;justify-content:center;text-align:center;}
.hero-content{animation:fadeUp 1s ease both;}
@keyframes fadeUp{from{opacity:0;transform:translateY(30px)}to{opacity:1;transform:translateY(0)}}
.hero-badge{display:inline-block;background:var(--gold);color:var(--navy);padding:5px 15px;border-radius:20px;font-size:12px;font-weight:700;margin-bottom:15px;text-transform:uppercase;}
.hero h1{font-family:'Playfair Display',serif;font-size:48px;color:white;margin-bottom:10px;}
.hero p{color:rgba(255,255,255,0.8);font-size:16px;}

.section{padding:70px 40px;max-width:1100px;margin:auto;}
.section-header{text-align:center;margin-bottom:50px;}
.section-header h2{font-family:'Playfair Display',serif;font-size:36px;color:var(--navy);}
.divider{width:60px;height:4px;background:var(--sky);margin:12px auto;border-radius:2px;}

/* CEK KELULUSAN */
.cek-box{background:white;border-radius:24px;padding:50px;box-shadow:0 20px 60px rgba(0,0,0,0.1);max-width:600px;margin:0 auto;text-align:center;}
.cek-box h2{font-family:'Playfair Display',serif;font-size:28px;color:var(--navy);margin-bottom:8px;}
.cek-box p{color:#777;margin-bottom:30px;font-size:14px;}
.input-wrap{position:relative;margin-bottom:20px;}
.input-wrap input{width:100%;padding:16px 20px;border-radius:12px;border:2px solid #e0e0e0;font-size:15px;font-family:'Poppins',sans-serif;transition:border 0.3s;outline:none;}
.input-wrap input:focus{border-color:var(--sky);}
.btn-cek{width:100%;padding:16px;background:var(--navy);color:white;border:none;border-radius:12px;font-size:16px;font-weight:600;cursor:pointer;transition:all 0.3s;font-family:'Poppins',sans-serif;}
.btn-cek:hover{background:#1b3e66;transform:translateY(-2px);box-shadow:0 10px 30px rgba(15,42,68,0.3);}
.hasil{margin-top:25px;padding:25px;border-radius:16px;display:none;text-align:left;}
.hasil.lulus{background:linear-gradient(135deg,#e8f5e9,#f1f8e9);border:2px solid #66bb6a;}
.hasil.tidak{background:linear-gradient(135deg,#fff3e0,#fce4ec);border:2px solid #ef9a9a;}
.hasil-icon{font-size:48px;text-align:center;display:block;margin-bottom:15px;}
.hasil h3{font-size:20px;color:var(--navy);text-align:center;margin-bottom:10px;}
.hasil p{font-size:14px;color:#555;text-align:center;line-height:1.7;}

/* ALUMNI GRID */
.alumni-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:25px;margin-top:60px;}
.alumni-card{background:white;border-radius:16px;padding:30px;text-align:center;box-shadow:0 10px 25px rgba(0,0,0,0.07);transition:all 0.4s;}
.alumni-card:hover{transform:translateY(-8px);box-shadow:var(--shadow);}
.alumni-avatar{width:80px;height:80px;border-radius:50%;background:linear-gradient(135deg,var(--navy),var(--sky));display:flex;align-items:center;justify-content:center;font-size:30px;margin:0 auto 15px;}
.alumni-card h4{color:var(--navy);font-size:16px;margin-bottom:5px;}
.alumni-card .tahun{background:#e3f2fd;color:#1565c0;padding:3px 12px;border-radius:20px;font-size:12px;font-weight:600;display:inline-block;margin-bottom:8px;}
.alumni-card p{font-size:13px;color:#888;}

/* FOOTER */
.footer-main{background:var(--navy);color:white;padding:40px 40px 20px;}
.footer-bottom{text-align:center;padding:15px;background:#0a1f33;color:rgba(255,255,255,0.4);font-size:13px;}

/* REVEAL */
.reveal{opacity:0;transform:translateY(40px);transition:all 0.8s cubic-bezier(0.25,0.46,0.45,0.94);}
.reveal.visible{opacity:1;transform:translateY(0);}

@media(max-width:768px){
  .navbar{padding:12px 20px;}
  .navbar ul{display:none;flex-direction:column;position:absolute;top:100%;left:0;right:0;background:var(--navy);padding:15px 20px;}
  .navbar ul.show{display:flex;}
  .menu-toggle{display:block;}
  .hero{min-height:260px;}
  .hero h1{font-size:30px;}
  .section{padding:50px 20px;}
  .cek-box{padding:30px 20px;}
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
      <li><a href="berita.php">Berita</a></li>
      <li><a href="keritikandsaran.php">Saran</a></li>
      <li><a href="kelulusan.php" class="active">Alumni</a></li>
      <li><a href="kontak.php">Kontak</a></li>
    </ul>
  </div>
</header>

<section class="hero">
  <div class="hero-content">
    <div class="hero-badge">🎓 Kelulusan Siswa</div>
    <h1>Pengumuman Kelulusan</h1>
    <p>SDN Margajaya 4 — Tahun Ajaran 2025/2026</p>
  </div>
</section>

<section class="section">
  <div class="cek-box reveal">
    <div style="font-size:60px;margin-bottom:15px">🎓</div>
    <h2>Cek Status Kelulusan</h2>
    <p>Masukkan nama lengkap atau NISN siswa untuk mengecek status kelulusan</p>
    <div class="input-wrap">
      <input type="text" id="nama" placeholder="Contoh: Budi Santoso atau 1234567890">
    </div>
    <button class="btn-cek" onclick="cekKelulusan()">🔍 Cek Kelulusan</button>
    <div class="hasil lulus" id="hasil-lulus">
      <span class="hasil-icon">🎉</span>
      <h3>Selamat! Anda Dinyatakan LULUS</h3>
      <p>Siswa atas nama <strong id="nama-siswa"></strong> dinyatakan <strong>LULUS</strong> dari SDN Margajaya 4. Selamat atas pencapaian luar biasa ini! Teruslah belajar dan raih cita-cita setinggi langit.</p>
    </div>
    <div class="hasil tidak" id="hasil-tidak">
      <span class="hasil-icon">⚠️</span>
      <h3>Data Tidak Ditemukan</h3>
      <p>Nama atau NISN yang Anda masukkan tidak ditemukan dalam database. Silakan hubungi pihak sekolah untuk informasi lebih lanjut di 📞 (62) 8381 2821 267.</p>
    </div>
  </div>

  <!-- DATA DEMO ALUMNI -->
  <div class="section-header reveal" style="margin-top:70px">
    <h2>Alumni Berprestasi</h2>
    <div class="divider"></div>
    <p>Lulusan terbaik SDN Margajaya 4 yang telah meraih prestasi</p>
  </div>
  <div class="alumni-grid">
    <div class="alumni-card reveal">
      <div class="alumni-avatar">👦</div>
      <span class="tahun">Lulusan 2023</span>
      <h4>Ahmad Fauzi</h4>
      <p>Juara 1 Olimpiade Matematika Tingkat Kota Bogor</p>
    </div>
    <div class="alumni-card reveal">
      <div class="alumni-avatar">👧</div>
      <span class="tahun">Lulusan 2022</span>
      <h4>Siti Rahayu</h4>
      <p>Juara Tari Tradisional Tingkat Provinsi Jawa Barat</p>
    </div>
    <div class="alumni-card reveal">
      <div class="alumni-avatar">👦</div>
      <span class="tahun">Lulusan 2024</span>
      <h4>Rizky Pratama</h4>
      <p>Atlet Pramuka Penggalang Terbaik Kwarcab Bogor</p>
    </div>
    <div class="alumni-card reveal">
      <div class="alumni-avatar">👧</div>
      <span class="tahun">Lulusan 2021</span>
      <h4>Dewi Anggraeni</h4>
      <p>Juara Lomba Baca Puisi Tingkat Kabupaten</p>
    </div>
  </div>
</section>

<div class="footer-main">
  <p style="text-align:center;color:rgba(255,255,255,0.65);font-size:14px;">📍 Jl. Dramaga Loceng No.3, Bogor &nbsp;|&nbsp; 📞 (+62) 8381 2821 267</p>
</div>
<div class="footer-bottom"><p>© 2026 SDN Margajaya 4 · Semua Hak Dilindungi</p></div>

<script>
function toggleMenu(){ document.getElementById('menu').classList.toggle('show'); }

// Data siswa contoh (dalam implementasi nyata, ambil dari database)
const dataSiswa = ['budi santoso','siti aminah','ahmad fauzi','rizky pratama','dewi anggraeni','siti rahayu'];

function cekKelulusan(){
  const nama = document.getElementById('nama').value.trim();
  if(!nama){ alert('Silakan masukkan nama atau NISN terlebih dahulu.'); return; }

  document.getElementById('hasil-lulus').style.display = 'none';
  document.getElementById('hasil-tidak').style.display = 'none';

  // Simulasi pengecekan (untuk demo)
  const lulus = dataSiswa.some(n => nama.toLowerCase().includes(n)) || nama.length > 3;

  setTimeout(() => {
    if(lulus){
      document.getElementById('nama-siswa').textContent = nama;
      document.getElementById('hasil-lulus').style.display = 'block';
      document.getElementById('hasil-lulus').style.animation = 'fadeUp 0.5s ease';
    } else {
      document.getElementById('hasil-tidak').style.display = 'block';
    }
  }, 500);
}

// Enter key support
document.getElementById('nama').addEventListener('keypress', e => {
  if(e.key === 'Enter') cekKelulusan();
});

const reveals = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1 });
reveals.forEach(el => observer.observe(el));
</script>
</body>
</html>
