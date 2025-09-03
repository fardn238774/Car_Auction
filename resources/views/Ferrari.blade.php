<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ferrari | Car Showcase</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    /* Base Styling */
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #ff0000, #ff4d00, #ffcc00);
      color: #111;
      overflow-x: hidden;
    }

    header {
      background: rgba(0, 0, 0, 0.8);
      backdrop-filter: blur(12px);
      padding: 20px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 6px 25px rgba(0,0,0,0.5);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    header img {
      height: 65px;
    }

    nav a {
      color: #ffcc00;
      text-decoration: none;
      margin-left: 25px;
      font-weight: 700;
      letter-spacing: 1px;
      transition: color 0.3s, transform 0.2s;
    }

    nav a:hover {
      color: #fff;
      transform: scale(1.1);
    }

    /* Hero Section */
    .hero {
      position: relative;
      height: 90vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
      overflow: hidden;
    }

    .hero img {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
      top: 0;
      left: 0;
      filter: brightness(0.5);
      z-index: 0;
    }

    .hero-content {
      position: relative;
      z-index: 1;
      text-align: center;
    }

    .hero-content h1 {
      font-size: 4.5rem;
      margin: 0;
      letter-spacing: 3px;
      text-transform: uppercase;
      color: #ffcc00;
      text-shadow: 0 4px 15px rgba(0,0,0,0.7);
    }

    .hero-content p {
      font-size: 1.6rem;
      margin-top: 15px;
      font-weight: 500;
      color: #fff;
      text-shadow: 0 3px 12px rgba(0,0,0,0.8);
    }

    /* Section */
    section {
      padding: 70px 10%;
    }

    section h2 {
      font-size: 2.8rem;
      margin-bottom: 40px;
      text-align: center;
      color: #ff0000;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .car-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 35px;
    }

    .car-card {
      background: rgba(0, 0, 0, 0.8);
      backdrop-filter: blur(12px);
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 10px 28px rgba(255,0,0,0.5);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      animation: fadeInUp 0.8s ease forwards;
    }

    .car-card:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 15px 40px rgba(255,204,0,0.6);
    }

    .car-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
    }

    .car-info {
      padding: 20px;
      color: #ffcc00;
    }

    .car-info h3 {
      margin: 0;
      font-size: 1.7rem;
      color: #fff;
      text-transform: uppercase;
    }

    .car-info p {
      margin: 8px 0;
      font-size: 1rem;
      color: #ddd;
    }

    footer {
      background: #000;
      color: #ffcc00;
      text-align: center;
      padding: 25px;
      margin-top: 50px;
      letter-spacing: 1px;
    }

    /* Animations */
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

<header>
  <img src="https://upload.wikimedia.org/wikipedia/sco/thumb/d/d1/Ferrari-Logo.svg/688px-Ferrari-Logo.svg.png?20150601144908" alt="Ferrari Logo">
  <nav>
    <a href="#">Home</a>
    <a href="#">Supercars</a>
    <a href="#">GT</a>
    <a href="#">Special Series</a>
    <a href="#">Hybrid & EV</a>
    <a href="#">Contact</a>
  </nav>
</header>

<!-- Hero -->
<div class="hero">
  <img src="https://www.fiawec.com/assets/ressources/2025/FERRARI_499P_2025_06.jpg" alt="Ferrari Hero">
  <div class="hero-content">
    <h1>Ferrari Collection</h1>
    <p>Pure Performance. Passion. Legacy.</p>
  </div>
</div>

<!-- Supercars -->
<section>
  <h2>Supercars</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://i.ytimg.com/vi/n0aD3T-VfRA/maxresdefault.jpg" alt="Ferrari SF90 Stradale">
      <div class="car-info">
        <h3>SF90 Stradale</h3>
        <p>Colors: Red, Yellow, Black</p>
        <p>Horsepower: 986 HP</p>
        <p>Hybrid supercar blending electric innovation with Ferrari DNA.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://turismo-wheels.com/wp-content/smush-webp/2024/03/FERRARI-F8-TRIBUTO-C3-GLOSS-BLACK_03.jpg.webp" alt="Ferrari F8 Tributo">
      <div class="car-info">
        <h3>F8 Tributo</h3>
        <p>Colors: Red, Silver, Yellow</p>
        <p>Horsepower: 710 HP</p>
        <p>A tribute to Ferrari’s V8 legacy with breathtaking performance.</p>
      </div>
    </div>
  </div>
</section>

<!-- GT Cars -->
<section>
  <h2>Grand Tourers</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://www.exoticcarhacks.com/wp-content/uploads/2025/01/Used-2024-Ferrari-Roma-w-FULL-Stealth-PPF-Custom-Specs-Carbon-Driver-Zone-1731015795.jpg" alt="Ferrari Roma">
      <div class="car-info">
        <h3>Ferrari Roma</h3>
        <p>Colors: Blue, Silver, Red</p>
        <p>Horsepower: 612 HP</p>
        <p>Elegant GT with timeless design and cutting-edge performance.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://media.autoexpress.co.uk/image/private/s--X-WVjvBW--/f_auto,t_content-image-full-desktop@1/v1742840320/evo/2025/03%20March/Ferrari_812Superfast_evo_07_usccyu.jpg" alt="Ferrari 812 Superfast">
      <div class="car-info">
        <h3>812 Superfast</h3>
        <p>Colors: Yellow, Red, Black</p>
        <p>Horsepower: 789 HP</p>
        <p>Iconic V12 GT delivering ultimate Ferrari driving thrills.</p>
      </div>
    </div>
  </div>
</section>

<!-- Special Series -->
<section>
  <h2>Special Series</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://cdn.ferrari.com/cms/network/media/img/resize/5d371735c3f9ec0af647572d-ferrari_488pista_intro_socialshare?width=1080" alt="Ferrari 488 Pista">
      <div class="car-info">
        <h3>488 Pista</h3>
        <p>Colors: Red, Yellow</p>
        <p>Horsepower: 710 HP</p>
        <p>Track-focused evolution with lightweight design and racing DNA.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://cdn.ferrari.com/cms/dws/media/img/resize/64d65307883b4f003214f0cb?width=830&height=0" alt="Ferrari Daytona SP3">
      <div class="car-info">
        <h3>Daytona SP3</h3>
        <p>Colors: Red, Silver, Black</p>
        <p>Horsepower: 828 HP</p>
        <p>A limited-series masterpiece inspired by Ferrari’s racing history.</p>
      </div>
    </div>
  </div>
</section>

<!-- Hybrid & EV -->
<section>
  <h2>Hybrid & EV</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://www.novitecgroup.com/assets/images/news/ferrari/sf90-spider/1__FitMaxWzEyODAsMTAyNF0.jpg" alt="Ferrari SF90 Spider">
      <div class="car-info">
        <h3>SF90 Spider</h3>
        <p>Colors: Red, Yellow</p>
        <p>Horsepower: 986 HP</p>
        <p>Convertible hybrid supercar redefining Ferrari’s future.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://static0.hotcarsimages.com/wordpress/wp-content/uploads/2022/09/2023_ferrari_purosangue_9_1920x1080.jpg" alt="Ferrari Purosangue">
      <div class="car-info">
        <h3>Purosangue</h3>
        <p>Colors: Grey, Red, Black</p>
        <p>Horsepower: 715 HP</p>
        <p>Ferrari’s first SUV – uncompromised performance meets practicality.</p>
      </div>
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 Ferrari S.p.A. All Rights Reserved.</p>
</footer>

</body>
</html>
