<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nusa Bangsa</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,500&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/filament/filament/home.css') }}">
</head>
<body>
<header class="navbar">
  <div class="container navbar__inner">
    <a href="#" class="brand">
      <span class="brand__mark">NB</span>
      <span class="brand__name">Nusa Bangsa</span>
    </a>
    <nav class="nav">
      <a href="#home" class="nav__link is-active">Home</a>
      <a href="#about" class="nav__link">About Us</a>
      <a href="#programs" class="nav__link">Programs</a>
      <a href="#gallery" class="nav__link">Gallery</a>
      <a href="#team" class="nav__link">Team</a>
      <a href="#ppdb" class="nav__link">Admissions</a>
    </nav>
    <a href="#ppdb" class="btn btn--primary btn--sm">Daftar Sekarang</a>
  </div>
</header>
<section class="hero" id="home">
  <div class="hero__overlay"></div>
  <div class="container hero__content">
    <p class="eyebrow eyebrow--light">SMK Unggulan Berbasis Industri &amp; Karakter</p>
    <h1 class="hero__title">Membentuk Generasi Unggul,<br>Berkarakter &amp; Siap Kerja</h1>
    <p class="hero__desc">SMK Nusa Bangsa hadir dengan kurikulum berstandar industri modern, sertifikasi keahlian nasional, dan penanaman karakter profesional untuk menyongsong masa depan gemilang.</p>
    <div class="hero__actions">
      <a href="#ppdb" class="btn btn--primary">Daftar Sekarang (PPDB)</a>
      <a href="#programs" class="btn btn--outline-light">Lihat Program Keahlian</a>
    </div>
  </div>
</section>

<section class="stats">
  <div class="container stats__grid">
    <div class="stat">
      <div class="stat__icon">
        <svg viewBox="0 0 24 24" fill="none"><path d="M4 12l6 6L20 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </div>
      <div class="stat__num">98%</div>
      <div class="stat__label">Tingkat Serapan Kerja &amp; Kuliah</div>
    </div>
    <div class="stat">
      <div class="stat__icon">
        <svg viewBox="0 0 24 24" fill="none"><rect x="3" y="7" width="18" height="13" rx="1.5" stroke="currentColor" stroke-width="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" stroke="currentColor" stroke-width="2"/></svg>
      </div>
      <div class="stat__num">50+</div>
      <div class="stat__label">Mitra Industri Nasional</div>
    </div>
    <div class="stat">
      <div class="stat__icon">
        <svg viewBox="0 0 24 24" fill="none"><path d="M12 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10Z" stroke="currentColor" stroke-width="2"/><path d="M8.5 13.5 7 21l5-2.5L17 21l-1.5-7.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg>
      </div>
      <div class="stat__num">100%</div>
      <div class="stat__label">Lulusan Tersertifikasi BNSP</div>
    </div>
    <div class="stat">
      <div class="stat__icon">
        <svg viewBox="0 0 24 24" fill="none"><path d="M3 9.5 12 4l9 5.5-9 5.5-9-5.5Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M7 12v4.5c0 1 2.2 2.5 5 2.5s5-1.5 5-2.5V12" stroke="currentColor" stroke-width="2"/></svg>
      </div>
      <div class="stat__num">25+</div>
      <div class="stat__label">Tahun Berdiri</div>
    </div>
  </div>
</section>

<section class="section" id="about">
  <div class="container">
    <div class="section__head">
      <p class="eyebrow">Profil &amp; Dedikasi Kami</p>
      <h2 class="section__title">Tentang SMK Nusa Bangsa</h2>
      <p class="section__desc">Pusat pendidikan vokasi berintegritas tinggi yang memadukan keahlian praktis, penguasaan sains teknologi mutakhir, serta budi pekerti luhur.</p>
    </div>

    <div class="about-grid">
      <div class="info-card">
        <div class="info-card__icon">
          <svg viewBox="0 0 24 24" fill="none"><path d="M4 4h16v16H4z" stroke="currentColor" stroke-width="2"/><path d="M8 4v16M4 9h4" stroke="currentColor" stroke-width="2"/></svg>
        </div>
        <h3>Tentang Sekolah</h3>
        <p>SMK Nusa Bangsa merupakan sekolah menengah kejuruan modern yang mengedepankan integritas akademik dan kesalehan hidup di tengah dunia usaha dan dunia industri (DUDI).</p>
        <p>Dengan tenaga pendidik berpengalaman, instruktur praktisi industri dan fasilitas laboratorium ISO, kami membekali peserta didik agar siap, adaptif, serta siap berkontribusi langsung di kancah nasional maupun global.</p>
        <div class="info-card__tag">
          <svg viewBox="0 0 24 24" fill="none" width="16" height="16"><path d="M4 12l6 6L20 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Terakreditasi A Unggul oleh BAN-S/M
        </div>
      </div>

      <div class="info-card">
        <div class="info-card__icon">
          <svg viewBox="0 0 24 24" fill="none"><path d="M12 3v18M4 8l8-5 8 5-8 5-8-5Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg>
        </div>
        <h3>Sejarah Singkat</h3>
        <p>Berdiri pada tahun 1998 di bawah naungan Yayasan Pendidikan Nusa Bangsa, sekolah ini berkomitmen menjawab tantangan krisis tenaga kerja terampil di Indonesia.</p>
        <p>Dari sekedar berpuluh, kini SMK Nusa Bangsa telah meluluskan ribuan alumni yang berkarier di berbagai perusahaan multinasional serta melanjutkan studi ke universitas ternama.</p>
        <div class="info-card__tag">
          <svg viewBox="0 0 24 24" fill="none" width="16" height="16"><path d="M12 6v6l4 2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/></svg>
          25+ Tahun Mengabdi Membangun Bangsa
        </div>
      </div>
    </div>

    <div class="split-grid">
      <div class="panel panel--dark">
        <p class="eyebrow eyebrow--gold">Visi &amp; Misi Sekolah</p>
        <div class="panel__block">
          <span class="panel__label">Visi Utama</span>
          <p class="panel__quote">"Menjadi pusat keunggulan pendidikan vokasi terkemuka di Indonesia yang mencetak insan terampil, berintegritas, mandiri, dan berdaya saing global."</p>
        </div>
        <div class="panel__block">
          <span class="panel__label">Misi Pendidikan</span>
          <ul class="check-list check-list--light">
            <li>Menyelenggarakan proses pembelajaran link-and-match yang diselaraskan dengan kurikulum industri terkini.</li>
            <li>Mengembangkan kompetensi peserta didik yang terarah, mulia, disiplin, dan berdaya saing tinggi.</li>
            <li>Menyediakan sarana laboratorium riset dan pengalaman terstruktur dengan teknologi terbarukan.</li>
            <li>Membangun jaringan kerja sama strategis penyalur kerja, sertifikasi profesi BNSP, dan magang industri.</li>
          </ul>
        </div>
      </div>

      <div class="panel panel--light">
        <p class="eyebrow">Keunggulan Kami</p>
        <ul class="feature-list">
          <li>
            <span class="feature-list__icon">
              <svg viewBox="0 0 24 24" fill="none" width="18" height="18"><path d="M3 21h18M5 21V8l7-5 7 5v13M9 21v-6h6v6" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg>
            </span>
            <div><strong>Laboratorium Standar Industri</strong><p>Fasilitas lab instrumen kimia, apotek dan komputer full lab.</p></div>
          </li>
          <li>
            <span class="feature-list__icon">
              <svg viewBox="0 0 24 24" fill="none" width="18" height="18"><path d="m9 12 2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/></svg>
            </span>
            <div><strong>Sertifikat Profesi Nasional (BNSP)</strong><p>Seluruh lulusan dibekali sertifikat kompetensi berbasis LSP-P1 berlisensi BNSP.</p></div>
          </li>
          <li>
            <span class="feature-list__icon">
              <svg viewBox="0 0 24 24" fill="none" width="18" height="18"><path d="M17 20h5v-2a4 4 0 0 0-3-3.87M9 20H4v-2a4 4 0 0 1 3-3.87m5-3.13a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm6-1a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM5 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" stroke="currentColor" stroke-width="1.8"/></svg>
            </span>
            <div><strong>Kemitraan Industri &amp; Penyaluran</strong><p>Didukung kerja sama dengan lebih dari 50+ mitra industri untuk penempatan magang dan kerja.</p></div>
          </li>
          <li>
            <span class="feature-list__icon">
              <svg viewBox="0 0 24 24" fill="none" width="18" height="18"><path d="M4 4h16v12H4z" stroke="currentColor" stroke-width="2"/><path d="M2 20h20M9 8h6M9 11h6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
            </span>
            <div><strong>Kurikulum Berbasis Teknologi Modern</strong><p>Adopsi coding modern, cloud AI, instrumen laboratorium hingga studi kasus terkini.</p></div>
          </li>
        </ul>
        <a href="#programs" class="link-arrow">Pelajari Kompetensi Lulusan</a>
      </div>
    </div>
  </div>
</section>

<section class="section section--muted" id="gallery">
  <div class="container">
    <div class="section__head section__head--split">
      <div>
        <h2 class="section__title section__title--sm">Gallery Album</h2>
        <p class="section__desc">Kumpulan kegiatan sekolah yang diambil dari data album.</p>
      </div>
      <a href="#" class="link-arrow">Lihat Galeri Lengkap</a>
    </div>

    <div class="gallery-grid">
      @forelse ($albums as $index => $album)
        @if ($index === 0)
          <div class="gallery-grid__main">
            <img src="{{ asset('storage/' . $album->foto) }}" alt="{{ $album->judul }}">
          </div>
        @elseif ($index === 1 || $index === 2)
          <div class="gallery-grid__side">
            <img src="{{ asset('storage/' . $album->foto) }}" alt="{{ $album->judul }}">
          </div>
        @else
          <div class="gallery-grid__bottom">
            <img src="{{ asset('storage/' . $album->foto) }}" alt="{{ $album->judul }}">
          </div>
        @endif
      @empty
        <div class="gallery-grid__main">
          <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?w=900&q=80" alt="Default gallery">
        </div>
      @endforelse
    </div>
  </div>
</section>

<section class="section" id="team">
  <div class="container">
    <div class="section__head">
      <h2 class="section__title section__title--sm">Staf &amp; Team</h2>
      <p class="section__desc">Data team diambil dari artikel/staf yang tersedia di sistem.</p>
    </div>

    <div class="team-grid">
      @forelse ($team as $member)
        <div class="team-card">
          <img src="{{ $member->image ? asset('storage/' . $member->image) : 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&q=80' }}" alt="{{ $member->title }}">
          <h4>{{ $member->title }}</h4>
          <span>{{ $member->category->name ?? 'Tim Sekolah' }}</span>
        </div>
      @empty
        <div class="team-card">
          <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&q=80" alt="Default team">
          <h4>Tim Sekolah</h4>
          <span>Staff Administrasi</span>
        </div>
      @endforelse
    </div>
  </div>
</section>

<section class="section section--muted" id="programs">
  <div class="container">
    <div class="section__head">
      <p class="eyebrow">Konsentrasi Kompetensi</p>
      <h2 class="section__title">Program Keahlian</h2>
      <p class="section__desc">Pilih jurusan vokasi unggulan dengan kurikulum link &amp; match standar industri untuk percepatan karier masa depan Anda.</p>
    </div>

    <div class="program-grid">
      @forelse ($categories as $category)
        <div class="program-card">
          <div class="program-card__top">
            <div class="program-card__icon">
              <svg viewBox="0 0 24 24" fill="none"><path d="M9 3h6M10 3v6.2L5.5 18a2 2 0 0 0 1.8 3h9.4a2 2 0 0 0 1.8-3L14 9.2V3" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
            </div>
            <span class="program-card__duration">Program Studi</span>
          </div>
          <h3>{{ $category->name }}</h3>
          <span class="program-card__sub">JURUSAN</span>
          <p>{{ Str::limit($category->description, 180) }}</p>
          <ul class="check-list">
            <li>Link and match industri</li>
            <li>Praktik lapangan &amp; project</li>
          </ul>
          <a href="#ppdb" class="link-arrow">Enrollment / Pendaftaran</a>
        </div>
      @empty
        <div class="program-card">
          <div class="program-card__top">
            <div class="program-card__icon">
              <svg viewBox="0 0 24 24" fill="none"><path d="M9 3h6M10 3v6.2L5.5 18a2 2 0 0 0 1.8 3h9.4a2 2 0 0 0 1.8-3L14 9.2V3" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg>
            </div>
            <span class="program-card__duration">Program Studi</span>
          </div>
          <h3>Belum ada jurusan</h3>
          <span class="program-card__sub">JURUSAN</span>
          <p>Silakan tambahkan data program studi dari panel admin.</p>
          <ul class="check-list">
            <li>Program belum tersedia</li>
            <li>Tambah data di admin</li>
          </ul>
          <a href="#ppdb" class="link-arrow">Enrollment / Pendaftaran</a>
        </div>
      @endforelse
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    @forelse ($testimonials as $testimonial)
      <blockquote class="testimonial">
        <p>"{{ $testimonial->content }}"</p>
        <cite>— {{ $testimonial->user_name }}, Alumni</cite>
      </blockquote>
    @empty
      <blockquote class="testimonial">
        <p>"Nusa Bangsa tidak hanya mengajarkan keahlian teknis berkualitas tinggi..."</p>
        <cite>— Dimas Arya, S.TR.T., Alumni Nusa Bangsa</cite>
      </blockquote>
    @endforelse
  </div>
</section>

<section class="section section--muted" id="ppdb">
  <div class="container">
    <div class="section__head">
      <p class="eyebrow">Penerimaan Peserta Didik Baru (PPDB)</p>
      <h2 class="section__title">Pendaftaran Siswa Baru Nusa Bangsa</h2>
      <p class="section__desc">Bergabunglah bersama SMK Nusa Bangsa. Proses pendaftaran terbuka secara daring dengan jalur prestasi maupun reguler.</p>
    </div>

    <div class="steps-grid">
      <div class="step-card">
        <div class="step-card__num">1</div>
        <h4>Registrasi Online</h4>
        <p>Mengisi formulir Sistem calon siswa dan memilih jurusan keahlian pilihan.</p>
      </div>
      <div class="step-card">
        <div class="step-card__num">2</div>
        <h4>Tes Minat &amp; Bakat</h4>
        <p>Asesmen potensi minat, tes dasar logika, dan wawancara koordinasi.</p>
      </div>
      <div class="step-card">
        <div class="step-card__num">3</div>
        <h4>Verifikasi Dokumen</h4>
        <p>Pemeriksaan kelengkapan rapor SMP/MTs, ijazah/SKL, dan berkas pendukung.</p>
      </div>
      <div class="step-card step-card--active">
        <div class="step-card__num">4</div>
        <h4>Pengumuman &amp; Daftar Ulang</h4>
        <p>Hasil seleksi resmi diumumkan daring dilanjutkan registrasi ulang di kampus.</p>
      </div>
    </div>

    <div class="cta-banner">
      <div class="cta-banner__text">
        <span class="pill">Gelombang PPDB Dibuka</span>
        <h3>Siap Menjadi Bagian dari Nusa Bangsa?</h3>
        <p>Tersedia jalur Beasiswa Prestasi Akademik/Non-Akademik hingga Jalur Reguler Mitra Industri. Kuota putra-putri terbaik daftar terbatas.</p>
        <div class="cta-banner__dates">
          <span><svg viewBox="0 0 24 24" fill="none" width="16" height="16"><rect x="3" y="4" width="18" height="17" rx="2" stroke="currentColor" stroke-width="1.8"/><path d="M3 9h18M8 3v3M16 3v3" stroke="currentColor" stroke-width="1.8"/></svg> Gelombang 1: Jan – Apr</span>
          <span><svg viewBox="0 0 24 24" fill="none" width="16" height="16"><rect x="3" y="4" width="18" height="17" rx="2" stroke="currentColor" stroke-width="1.8"/><path d="M3 9h18M8 3v3M16 3v3" stroke="currentColor" stroke-width="1.8"/></svg> Gelombang 2: Mei – Jul</span>
        </div>
      </div>
      <div class="cta-banner__actions">
        <a href="#" class="btn btn--primary">Enrollment / Pendaftaran</a>
        <a href="#" class="btn btn--outline-light">Unduh Brosur PPDB</a>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container footer__grid">
    <div class="footer__about">
      <a href="#" class="brand brand--footer">
        <span class="brand__mark">NB</span>
        <span class="brand__name">Nusa Bangsa</span>
      </a>
      <p>Sekolah Menengah Kejuruan berorientasi A, mencetak tenaga profesional di bidang Kimia Analis, Farmasi Klinis, dan Rekayasa Perangkat Lunak.</p>
      <div class="footer__contact">
        <p><svg viewBox="0 0 24 24" fill="none" width="16" height="16"><path d="M12 21s7-6.5 7-11.5A7 7 0 0 0 5 9.5C5 14.5 12 21 12 21Z" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="9.5" r="2.3" stroke="currentColor" stroke-width="1.8"/></svg> Jl. KH. Sholeh Iskandar Km.4 RT04/04 No.91, Cibadak, Tanah Sareal, Bogor, Jawa Barat 16166</p>
        <p><svg viewBox="0 0 24 24" fill="none" width="16" height="16"><path d="M4 5h4l2 5-2.5 1.5a11 11 0 0 0 5 5L14 14l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 2 7a2 2 0 0 1 2-2Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/></svg> (0251) 7533816</p>
        <p><svg viewBox="0 0 24 24" fill="none" width="16" height="16"><rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.8"/><path d="m3 7 9 6 9-6" stroke="currentColor" stroke-width="1.8"/></svg> ppdb@nusabangsa.sch.id</p>
      </div>
    </div>

    <div class="footer__col">
      <h5>Navigasi</h5>
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#programs">Program Keahlian</a>
      <a href="#ppdb">Pendaftaran (PPDB)</a>
      <a href="#gallery">Galeri Kampus</a>
    </div>

    <div class="footer__col">
      <h5>Informasi</h5>
      <a href="#">Bursa Kerja Khusus (BKK)</a>
      <a href="#">Sertifikasi Profesi BNSP</a>
      <a href="#">Ikatan Alumni Nusa Bangsa</a>
      <a href="#">Kebijakan Privasi</a>
    </div>

    <div class="footer__form">
      <h5>Konsultasi PPDB Nusa Bangsa</h5>
      <form onsubmit="return false;">
        <input type="text" placeholder="Nama Lengkap Calon Siswa / Wali">
        <input type="tel" placeholder="Nomor WhatsApp Aktif">
        <select>
          <option>Pilih Program Keahlian...</option>
          <option>Analis Kimia</option>
          <option>Farmasi</option>
          <option>PPLG</option>
        </select>
        <textarea rows="3" placeholder="Tuliskan pertanyaan atau rencana pendaftaran Anda..."></textarea>
        <button type="submit" class="btn btn--primary btn--block">Kirim Pesan / Konsultasi PPDB</button>
      </form>
    </div>
  </div>

  <div class="footer__map" style="position: relative; width: 100%; height: 350px;">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7087640244795!2d106.78652307587002!3d-6.558394464112196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4f7be415b39%3A0xbcc0e51ee11c52d8!2sSMK%20AK%20NUSA%20BANGSA!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid" 
      width="100%" 
      height="100%" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>

  <div class="footer__bottom">
    <div class="container footer__bottom-inner">
      <span>© 2026 SMK Nusa Bangsa. Seluruh Hak Cipta Dilindungi Undang-Undang.</span>
      <div class="footer__social">
        <a href="https://instagram.com/smkaknusabangsa" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
          <svg viewBox="0 0 24 24" fill="none" width="16" height="16"><rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.6"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor"/></svg>
        </a>
        <a href="https://tiktok.com/@smkaknusabangsa" target="_blank" rel="noopener noreferrer" aria-label="TikTok">
          <svg viewBox="0 0 24 24" fill="none" width="16" height="16"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="https://github.com/raihanAlk" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
          <svg viewBox="0 0 24 24" fill="none" width="16" height="16"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" fill="currentColor"/></svg>
        </a>
      </div>
    </div>
  </div>
</footer>

</body>
</html>