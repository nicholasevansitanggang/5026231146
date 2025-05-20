<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portofolio Saya</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f7fa;
      color: #333;
      line-height: 1.6;
      padding: 0 0.5rem;
    }
    a {
      color: #1e90ff;
      text-decoration: none;
      transition: color 0.3s;
    }
    a:hover {
      color: #0c64c1;
    }
    header {
      background-color: #1e90ff;
      color: white;
      padding: 2rem 1rem;
      text-align: center;
    }
    header h1 {
      font-size: 2.5rem;
      margin-bottom: 0.3rem;
    }
    header p {
      font-size: 1.2rem;
      opacity: 0.85;
    }
    nav {
      display: flex;
      justify-content: center;
      background-color: #1464c1;
      padding: 0.8rem 0;
      gap: 1rem;
      flex-wrap: wrap;
    }
    nav a {
      color: white;
      font-weight: 600;
      padding: 0.5rem 1.2rem;
      border-radius: 4px;
    }
    nav a:hover {
      background-color: #0a3e7f;
    }
    main {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 0 1rem;
    }
    section h2 {
      font-size: 2rem;
      margin-bottom: 1rem;
      border-bottom: 3px solid #1e90ff;
      display: inline-block;
      padding-bottom: 0.2rem;
      color: #1464c1;
      text-align: left;
    }
    #about {
      text-align: left;
      margin-bottom: 2rem;
    }
    #about img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      margin-top: 1rem;
      border-radius: 0;
      display: block;
    }
    .portfolio-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 1.5rem;
      margin-top: 1rem;
    }
    .portfolio-item {
      background-color: white;
      border-radius: 6px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
      max-width: 100%;
    }
    .portfolio-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    .portfolio-img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }
    .portfolio-content {
      padding: 1rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .portfolio-title {
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
      color: #1464c1;
    }
    .portfolio-desc {
      flex-grow: 1;
      font-size: 0.95rem;
      color: #555;
      margin-bottom: 1rem;
    }
    .portfolio-link {
      align-self: flex-start;
      padding: 0.4rem 1rem;
      background-color: #1e90ff;
      color: white;
      border-radius: 4px;
      font-weight: 600;
      transition: background-color 0.3s;
      text-decoration: none;
    }
    .portfolio-link:hover {
      background-color: #1464c1;
    }
    footer {
      text-align: center;
      padding: 1rem;
      margin-top: 3rem;
      font-size: 0.9rem;
      color: #777;
      border-top: 1px solid #ddd;
    }
    @media (max-width: 768px) {
      header h1 {
        font-size: 1.8rem;
      }
      nav a {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
      }
      .portfolio-img {
        height: 140px;
      }
      .portfolio-title {
        font-size: 1rem;
      }
      .portfolio-desc {
        font-size: 0.85rem;
      }
      #about img {
        width: 80px;
        height: 80px;
        margin-top: 0.8rem;
      }
    }
    @media (max-width: 480px) {
      header h1 {
        font-size: 1.5rem;
      }
      nav {
        gap: 0.5rem;
        padding: 0.5rem 0;
      }
      nav a {
        padding: 0.4rem 0.8rem;
        font-size: 0.85rem;
      }
      .portfolio-img {
        height: 120px;
      }
      .portfolio-title {
        font-size: 0.95rem;
      }
      .portfolio-desc {
        font-size: 0.8rem;
      }
      #about img {
        width: 70px;
        height: 70px;
        margin-top: 0.6rem;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Project Nicholas Evan S</h1>
    <p>Seluruh project dari pertemuan 1 hingga ETS</p>
  </header>

  <nav>
    <a href="#about">About</a>
    <a href="#portfolio">Project</a>
  </nav>

  <main>
    <section id="about">
      <h2>About</h2>
      <p>
        <img src="Evan.jpg" alt="Foto Profil Nicholas Evan S" />
        Nama : Nicholas Evan Sitanggang<br />
        NRP : 5026231146<br />
        Kelas : C
      </p>
    </section>

    <section id="portfolio">
      <h2>Project</h2>
      <div class="portfolio-grid">
        <div class="portfolio-item">
          <img src="frontend1.png" alt="Pertama" class="portfolio-img" />
          <div class="portfolio-content">
            <div class="portfolio-title">Pertama</div>
            <div class="portfolio-desc">Blog ITS.</div>
            <a href="pertama" class="portfolio-link">Lihat Detail</a>
          </div>
        </div>
        <div class="portfolio-item">
          <img src="frontend2.png" alt="Tugas Video 1 & 2" class="portfolio-img" />
          <div class="portfolio-content">
            <div class="portfolio-title">Tugas Video 1 & 2</div>
            <div class="portfolio-desc">Mempelajari layout CSS dan tools pendukung.</div>
            <a href="https://youtu.be/_eHGlhxzWqc" class="portfolio-link">Lihat Detail</a>
          </div>
        </div>
        <div class="portfolio-item">
          <img src="frontend3.png" alt="Code untuk Image Sprites" class="portfolio-img" />
          <div class="portfolio-content">
            <div class="portfolio-title">Code untuk Image Sprites</div>
            <div class="portfolio-desc">Sarana pendukung tugas Video.</div>
            <a href="imagesprites" class="portfolio-link">Lihat Detail</a>
          </div>
        </div>
        <div class="portfolio-item">
          <img src="frontend4.png" alt="Code untuk RWD Images" class="portfolio-img" />
          <div class="portfolio-content">
            <div class="portfolio-title">Code untuk RWD Images</div>
            <div class="portfolio-desc">Sarana pendukung tugas Video.</div>
            <a href="rwdimages" class="portfolio-link">Lihat Detail</a>
          </div>
        </div>
        <div class="portfolio-item">
          <img src="frontend5.png" alt="Bootstrap 1" class="portfolio-img" />
          <div class="portfolio-content">
            <div class="portfolio-title">Bootstrap 1</div>
            <div class="portfolio-desc">Latihan menggunakan Bootstrap responsif 1.</div>
            <a href="bootstrap1" class="portfolio-link">Lihat Detail</a>
          </div>
        </div>
        <div class="portfolio-item">
          <img src="frontend6.png" alt="Bootstrap 2" class="portfolio-img" />
          <div class="portfolio-content">
            <div class="portfolio-title">Bootstrap 2</div>
            <div class="portfolio-desc">Latihan menggunakan Bootstrap responsif 2.</div>
            <a href="bootstrap2" class="portfolio-link">Lihat Detail</a>
          </div>
        </div>
        <div class="portfolio-item">
          <img src="frontend7.png" alt="Javascript 1" class="portfolio-img" />
          <div class="portfolio-content">
            <div class="portfolio-title">Javascript 1</div>
            <div class="portfolio-desc">Latihan javascript 1.</div>
            <a href="js1" class="portfolio-link">Lihat Detail</a>
          </div>
        </div>
        <div class="portfolio-item">
          <img src="frontend8.png" alt="Javascript 2" class="portfolio-img" />
          <div class="portfolio-content">
            <div class="portfolio-title">Javascript 2</div>
            <div class="portfolio-desc">Latihan javascript 2.</div>
            <a href="js2" class="portfolio-link">Lihat Detail</a>
          </div>
        </div>
        <div class="portfolio-item">
          <img src="frontend9.png" alt="Tugas ITS TV" class="portfolio-img" />
          <div class="portfolio-content">
            <div class="portfolio-title">Tugas ITS TV</div>
            <div class="portfolio-desc">Membuat copy design berdasarkan soal.</div>
            <a href="soal6" class="portfolio-link">Lihat Detail</a>
          </div>
        </div>
        <div class="portfolio-item">
          <img src="frontend10.png" alt="Tugas Linktree" class="portfolio-img" />
          <div class="portfolio-content">
            <div class="portfolio-title">Tugas Linktree</div>
            <div class="portfolio-desc">Membuat copy design linktree.</div>
            <a href="tugaslinktree" class="portfolio-link">Lihat Detail</a>
          </div>
        </div>
        <div class="portfolio-item">
          <img src="frontend11.png" alt="Danantara" class="portfolio-img" />
          <div class="portfolio-content">
            <div class="portfolio-title">Danantara</div>
            <div class="portfolio-desc">Latihan untuk ETS.</div>
            <a href="danantara" class="portfolio-link">Lihat Detail</a>
          </div>
        </div>
        <div class="portfolio-item">
          <img src="frontend12.png" alt="ETS" class="portfolio-img" />
          <div class="portfolio-content">
            <div class="portfolio-title">ETS</div>
            <div class="portfolio-desc">Evaluasi Tengah Semester, redesign company profile.</div>
            <a href="indexx" class="portfolio-link">Lihat Detail</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    &copy; 2025 Nicholas Evan S. Semua hak cipta dilindungi.
  </footer>

</body>
</html>
