<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Honda | Car Showcase</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    /* Base Styling */
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #ffffff, #f3f4f6, #e5e7eb);
      color: #222;
      overflow-x: hidden;
    }

    header {
      background: rgba(255, 255, 255, 0.75);
      backdrop-filter: blur(10px);
      padding: 20px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 4px 18px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    header img {
      height: 60px;
    }

    nav a {
      color: #222;
      text-decoration: none;
      margin-left: 25px;
      font-weight: 600;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #c53030;
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
      filter: brightness(0.6);
      z-index: 0;
    }

    .hero-content {
      position: relative;
      z-index: 1;
      text-align: center;
    }

    .hero-content h1 {
      font-size: 4rem;
      margin: 0;
      letter-spacing: 2px;
    }

    .hero-content p {
      font-size: 1.5rem;
      margin-top: 15px;
      font-weight: 400;
    }

    /* Section */
    section {
      padding: 70px 10%;
    }

    section h2 {
      font-size: 2.5rem;
      margin-bottom: 40px;
      text-align: center;
      color: #c53030;
    }

    .car-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 35px;
    }

    .car-card {
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(12px);
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      animation: fadeInUp 0.8s ease forwards;
    }

    .car-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 12px 35px rgba(197, 48, 48, 0.4);
    }

    .car-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
    }

    .car-info {
      padding: 20px;
    }

    .car-info h3 {
      margin: 0;
      font-size: 1.6rem;
      color: #111;
    }

    .car-info p {
      margin: 8px 0;
      font-size: 0.95rem;
      color: #333;
    }

    footer {
      background: #111;
      color: #eee;
      text-align: center;
      padding: 25px;
      margin-top: 50px;
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
  <img src="https://images.seeklogo.com/logo-png/28/2/honda-silver-logo-png_seeklogo-289413.png" alt="Honda Logo">
  <nav>
    <a href="#">Home</a>
    <a href="#">Sedans</a>
    <a href="#">SUVs</a>
    <a href="#">Sports</a>
    <a href="#">Hybrid & EV</a>
    <a href="#">Contact</a>
  </nav>
</header>

<!-- Hero -->
<div class="hero">
  <img src="https://d3dup97zc5osq9.cloudfront.net/pages/hrc-40years/main_v-wp_large.jpg" alt="Honda Hero">
  <div class="hero-content">
    <h1>Honda Collection</h1>
    <p>Engineering Excellence. Innovation for Everyone.</p>
  </div>
</div>

<!-- Sedans -->
<section>
  <h2>Sedans</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://global.honda/content/dam/site/global-en/newsroom-new/cq_img/worldnews/2016/4161028/01.jpg" alt="Honda Civic">
      <div class="car-info">
        <h3>Honda Civic</h3>
        <p>Colors: Red, Black, Blue</p>
        <p>Horsepower: 158-180 HP</p>
        <p>Compact sedan with sporty design and efficiency.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://img.sm360.ca/images/article/bweb-honda-de-laval/135293//2025-honda-accord-hybride-1-1731427909797.jpg" alt="Honda Accord">
      <div class="car-info">
        <h3>Honda Accord</h3>
        <p>Colors: Silver, White, Black</p>
        <p>Horsepower: 192-252 HP</p>
        <p>Mid-size sedan blending comfort and performance.</p>
      </div>
    </div>
  </div>
</section>

<!-- SUVs -->
<section>
  <h2>SUVs</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://hips.hearstapps.com/hmg-prod/images/2025-honda-cr-v-hybrid-awd-sport-touring-102-679407cb80051.jpg?crop=0.702xw:0.590xh;0.0529xw,0.341xh&resize=2048:*" alt="Honda CR-V">
      <div class="car-info">
        <h3>Honda CR-V</h3>
        <p>Colors: White, Blue, Black</p>
        <p>Horsepower: 190 HP</p>
        <p>Popular SUV with space, safety, and versatility.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://media.ed.edmunds-media.com/honda/pilot/2025/oem/2025_honda_pilot_4dr-suv_black-edition_fq_oem_1_1600.jpg" alt="Honda Pilot">
      <div class="car-info">
        <h3>Honda Pilot</h3>
        <p>Colors: Grey, White, Black</p>
        <p>Horsepower: 280 HP</p>
        <p>Three-row SUV perfect for families and adventures.</p>
      </div>
    </div>
  </div>
</section>

<!-- Sports Cars -->
<section>
  <h2>Sports Cars</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://tadvantagebetaprod-com.cdn-convertus.com/uploads/sites/392/2023/07/b556236bb3cf69f0e3523d896c8fb0fax.jpg" alt="Honda Civic Type R">
      <div class="car-info">
        <h3>Civic Type R</h3>
        <p>Colors: Red, Blue, Black</p>
        <p>Horsepower: 315 HP</p>
        <p>Track-ready performance hatchback with aggressive style.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://www.carscoops.com/wp-content/uploads/2020/10/honda-nsx-australia-0.jpg" alt="Honda NSX">
      <div class="car-info">
        <h3>Honda NSX</h3>
        <p>Colors: Yellow, Red, Black</p>
        <p>Horsepower: 600 HP</p>
        <p>Supercar combining hybrid tech with breathtaking power.</p>
      </div>
    </div>
  </div>
</section>

<!-- Hybrid & EV -->
<section>
  <h2>Hybrid & EV</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://hips.hearstapps.com/hmg-prod/images/2021-honda-insight-02-1634321384.jpg?crop=0.923xw:0.779xh;0.0321xw,0.221xh&resize=2048:*" alt="Honda Insight">
      <div class="car-info">
        <h3>Honda Insight</h3>
        <p>Colors: Silver, White</p>
        <p>Horsepower: 151 HP</p>
        <p>Hybrid sedan offering excellent fuel efficiency.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://d9s1543upwp3n.cloudfront.net/wp-content/uploads/2023/04/01-2024-Honda-Prologue-Styling-Reveal.jpg" alt="Honda Prologue EV">
      <div class="car-info">
        <h3>Honda Prologue EV</h3>
        <p>Colors: White, Black, Blue</p>
        <p>Horsepower: 300+ HP</p>
        <p>Upcoming all-electric SUV for a sustainable future.</p>
      </div>
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 Honda Motor Co., Ltd. All Rights Reserved.</p>
</footer>

</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_Car_Project/resources/views/Honda.blade.php ENDPATH**/ ?>