<!DOCTYPE html>
<html lang="id">
<head>
<title>Kontak - SDN Margajaya 4</title>
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

.section{padding:70px 40px;max-width:1100px;margin:auto;}
.section-header{text-align:center;margin-bottom:50px;}
.section-header h2{font-family:'Playfair Display',serif;font-size:36px;color:var(--navy);}
.divider{width:60px;height:4px;background:var(--sky);margin:12px auto;border-radius:2px;}

/* KONTAK GRID */
.kontak-grid{display:grid;grid-template-columns:1fr 1.4fr;gap:30px;}

/* INFO */
.kontak-info{display:flex;flex-direction:column;gap:20px;}
.info-card{background:white;border-radius:16px;padding:25px;box-shadow:0 10px 25px rgba(0,0,0,0.07);display:flex;gap:18px;align-items:flex-start;transition:all 0.3s;}
.info-card:hover{transform:translateX(5px);box-shadow:var(--shadow);}
.info-icon{width:50px;height:50px;background:linear-gradient(135deg,var(--navy),#1565c0);border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;}
.info-text h4{color:var(--navy);font-size:15px;margin-bottom:5px;}
.info-text p{color:#777;font-size:13px;line-height:1.7;}
.info-text a{color:var(--sky);text-decoration:none;}

.map-box{background:white;border-radius:16px;overflow:hidden;box-shadow:0 10px 25px rgba(0,0,0,0.07);}
.map-box iframe{display:block;}

/* FORM */
.kontak-form-box{background:white;border-radius:20px;padding:40px;box-shadow:0 15px 40px rgba(0,0,0,0.1);}
.kontak-form-box h2{font-family:'Playfair Display',serif;font-size:26px;color:var(--navy);margin-bottom:8px;}
.kontak-form-box p{color:#888;font-size:14px;margin-bottom:30px;}
.form-group{margin-bottom:20px;}
.form-group label{display:block;margin-bottom:8px;font-size:13px;font-weight:600;color:var(--navy);}
.form-group input,.form-group textarea{width:100%;padding:14px 16px;border:2px solid #e8ecf0;border-radius:10px;font-family:'Poppins',sans-serif;font-size:14px;transition:border 0.3s;outline:none;color:var(--text);}
.form-group input:focus,.form-group textarea:focus{border-color:var(--sky);}
.form-group textarea{height:130px;resize:none;}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:15px;}
.btn-wa{width:100%;padding:16px;background:#25D366;color:white;border:none;border-radius:12px;font-family:'Poppins',sans-serif;font-size:16px;font-weight:700;cursor:pointer;transition:all 0.3s;display:flex;align-items:center;justify-content:center;gap:10px;}
.btn-wa:hover{background:#1ebe5d;transform:translateY(-2px);box-shadow:0 10px 30px rgba(37,211,102,0.4);}

/* SOSMED */
.sosmed{display:flex;gap:12px;margin-top:20px;}
.sosmed a{display:flex;align-items:center;gap:8px;padding:10px 16px;background:white;border-radius:10px;text-decoration:none;font-size:13px;font-weight:600;color:var(--navy);box-shadow:0 5px 15px rgba(0,0,0,0.07);transition:all 0.3s;}
.sosmed a:hover{transform:translateY(-3px);box-shadow:0 10px 25px rgba(0,0,0,0.12);}

footer{background:var(--navy);color:white;text-align:center;padding:20px;font-size:13px;}
.reveal{opacity:0;transform:translateY(40px);transition:all 0.8s cubic-bezier(0.25,0.46,0.45,0.94);}
.reveal.visible{opacity:1;transform:translateY(0);}

@media(max-width:900px){.kontak-grid{grid-template-columns:1fr;}.form-row{grid-template-columns:1fr;}}
@media(max-width:768px){
  .navbar{padding:12px 20px;}
  .navbar ul{display:none;flex-direction:column;position:absolute;top:100%;left:0;right:0;background:var(--navy);padding:15px 20px;}
  .navbar ul.show{display:flex;}
  .menu-toggle{display:block;}
  .hero{min-height:260px;}
  .hero h1{font-size:30px;}
  .section{padding:50px 20px;}
  .kontak-form-box{padding:25px;}
  .sosmed{flex-wrap:wrap;}
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
      <li><a href="kelulusan.php">Alumni</a></li>
      <li><a href="kontak.php" class="active">Kontak</a></li>
    </ul>
  </div>
</header>

<section class="hero">
  <div class="hero-content">
    <div class="hero-badge">📞 Hubungi Kami</div>
    <h1>Kontak Sekolah</h1>
    <p>Kami siap membantu Anda — jangan ragu untuk menghubungi kami</p>
  </div>
</section>

<section class="section">
  <div class="section-header reveal">
    <h2>Informasi Kontak</h2>
    <div class="divider"></div>
    <p>Hubungi SDN Margajaya 4 melalui berbagai saluran komunikasi</p>
  </div>

  <div class="kontak-grid">
    <div>
      <div class="kontak-info">
        <div class="info-card reveal">
          <div class="info-icon">📍</div>
          <div class="info-text">
            <h4>Alamat Sekolah</h4>
            <p>Jl. Dramaga Loceng No.3, RT.03/RW.04, Kel. Margajaya, Kec. Bogor Barat, Kota Bogor, Jawa Barat 16115</p>
          </div>
        </div>
        <div class="info-card reveal">
          <div class="info-icon">📞</div>
          <div class="info-text">
            <h4>Telepon / WhatsApp</h4>
            <p><a href="https://wa.me/6283812821267">0838-1282-1267</a><br><a href="tel:+6283812821267">(+62) 838-1282-1267</a></p>
          </div>
        </div>
        <div class="info-card reveal">
          <div class="info-icon">📧</div>
          <div class="info-text">
            <h4>Email Sekolah</h4>
            <p><a href="/cdn-cgi/l/email-protection#60090e060f2013040e0d011207010a011901544e1303084e0904"><span class="__cf_email__" data-cfemail="5930373f36192a3d3734382b3e38333820386d772a3a3177303d">[email&#160;protected]</span></a></p>
          </div>
        </div>
        <div class="info-card reveal">
          <div class="info-icon">🕗</div>
          <div class="info-text">
            <h4>Jam Operasional</h4>
            <p>Senin – Jumat: 07.00 – 14.00 WIB<br>Sabtu: 07.00 – 12.00 WIB</p>
          </div>
        </div>
      </div>
      <div class="map-box reveal" style="margin-top:20px">
        <iframe src="https://www.google.com/maps?q=SDN%20Margajaya%204%20Bogor&output=embed" width="100%" height="220" style="border:0;" loading="lazy"></iframe>
      </div>
      <div class="sosmed reveal">
        <a href="#">📘 Facebook</a>
        <a href="https://www.instagram.com/callme_rall/">📸 Instagram</a>
        <a href="https://wa.me/6283812821267">💬 WhatsApp</a>
      </div>
    </div>

    <div class="kontak-form-box reveal">
      <h2>Kirim Pesan</h2>
      <p>Isi formulir di bawah ini dan pesan Anda akan kami teruskan melalui WhatsApp</p>
      <div class="form-row">
        <div class="form-group">
          <label>Nama Lengkap *</label>
          <input type="text" id="nama" placeholder="Nama Anda">
        </div>
        <div class="form-group">
          <label>Email *</label>
          <input type="email" id="email" placeholder="email@contoh.com">
        </div>
      </div>
      <div class="form-group">
        <label>Nomor HP</label>
        <input type="tel" id="hp" placeholder="+62 ...">
      </div>
      <div class="form-group">
        <label>Subjek Pesan</label>
        <input type="text" id="subjek" placeholder="Cth: Informasi PPDB 2026">
      </div>
      <div class="form-group">
        <label>Pesan *</label>
        <textarea id="pesan" placeholder="Tulis pesan Anda di sini..."></textarea>
      </div>
      <button class="btn-wa" onclick="kirimWA()">
        <span>💬</span> Kirim via WhatsApp
      </button>
    </div>
  </div>
</section>

<footer><p>© 2026 SDN Margajaya 4 · Jl. Dramaga Loceng No.3, Kota Bogor, Jawa Barat</p></footer>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
function toggleMenu(){ document.getElementById('menu').classList.toggle('show'); }

function kirimWA(){
  const nama = document.getElementById('nama').value;
  const email = document.getElementById('email').value;
  const hp = document.getElementById('hp').value;
  const subjek = document.getElementById('subjek').value;
  const pesan = document.getElementById('pesan').value;

  if(!nama || !pesan){ alert('Mohon isi nama dan pesan Anda terlebih dahulu.'); return; }

  const nomor = "6283812821267";
  const text = `Halo SDN Margajaya 4,\n\n*Nama:* ${nama}\n*Email:* ${email || '-'}\n*No. HP:* ${hp || '-'}\n*Subjek:* ${subjek || '-'}\n\n*Pesan:*\n${pesan}\n\nTerima kasih.`;
  window.location.href = "https://wa.me/" + nomor + "?text=" + encodeURIComponent(text);
}

const reveals = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1 });
reveals.forEach(el => observer.observe(el));
</script>
</body>
</html>
