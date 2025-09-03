<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Toyota | Car Showcase</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    /* Base Styling */
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #ffffff, #f2f2f2);
      color: #111;
      overflow-x: hidden;
    }

    header {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(12px);
      padding: 20px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    header img {
      height: 60px;
    }

    nav a {
      color: #111;
      text-decoration: none;
      margin-left: 25px;
      font-weight: 600;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #e60000; /* Toyota red hover */
    }

    /* Hero Section */
    .hero {
      position: relative;
      height: 80vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
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
      color: #fff;
    }

    .hero-content h1 {
      font-size: 4rem;
      letter-spacing: 2px;
      margin: 0;
      color: #e60000;
    }

    .hero-content p {
      font-size: 1.5rem;
      margin-top: 15px;
      font-weight: 400;
      color: #fff;
    }

    /* Section */
    section {
      padding: 70px 10%;
    }

    section h2 {
      font-size: 2.5rem;
      margin-bottom: 40px;
      text-align: center;
      color: #e60000;
    }

    .car-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 35px;
    }

    .car-card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(12px);
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      animation: fadeInUp 0.8s ease forwards;
    }

    .car-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 15px 40px rgba(230,0,0,0.25);
    }

    .car-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
    }

    .car-info {
      padding: 20px;
      color: #111;
    }

    .car-info h3 {
      margin: 0;
      font-size: 1.6rem;
      color: #e60000;
    }

    .car-info p {
      margin: 8px 0;
      font-size: 0.95rem;
      color: #333;
    }

    footer {
      background: #111;
      color: #ccc;
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
  <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Toyota_carlogo.svg" alt="Toyota Logo">
  <nav>
    <a href="#">Home</a>
    <a href="#">Sedans</a>
    <a href="#">SUVs</a>
    <a href="#">Performance</a>
    <a href="#">Hybrid/Electric</a>
    <a href="#">Contact</a>
  </nav>
</header>

<!-- Hero Section -->
<div class="hero">
  <img src="https://media.whichcar.com.au/uploads/2025/02/a2250a35-2019-Toyota-Yaris-AP4-rally-car-review.jpg" alt="Toyota Banner">
  <div class="hero-content">
    <h1>Toyota Collection</h1>
    <p>Reliability, Innovation, and Style</p>
  </div>
</div>

<!-- Sedans -->
<section>
  <h2>Luxury Sedans</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://www.motortrend.com/uploads/2023/11/2025-Toyota-Camry-hybrid-sedan-13.png" alt="Camry">
      <div class="car-info">
        <h3>Camry</h3>
        <p>Colors: White, Black, Silver, Red</p>
        <p>Horsepower: 203-301 HP</p>
        <p>Reliable and stylish sedan with advanced tech.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://scene7.toyota.eu/is/image/toyotaeurope/COR0004b_25_WEB_crop:Large-Landscape?ts=0&resMode=sharp2&op_usm=1.75,0.3,2,0&fmt=png-alpha" alt="Corolla">
      <div class="car-info">
        <h3>Corolla</h3>
        <p>Colors: White, Black, Blue, Silver</p>
        <p>Horsepower: 139-169 HP</p>
        <p>Compact sedan combining efficiency and comfort.</p>
      </div>
    </div>
  </div>
</section>

<!-- SUVs -->
<section>
  <h2>Luxury SUVs</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://www.topgear.com/sites/default/files/2024/09/Toyota-RAV4-Hybrid-036.jpg" alt="RAV4">
      <div class="car-info">
        <h3>RAV4</h3>
        <p>Colors: White, Black, Grey</p>
        <p>Horsepower: 203 HP</p>
        <p>Popular compact SUV with style and efficiency.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://bucket.dealervenom.com/2023/02/Toyota_Highlander.png?auto=compress%2Cformat&ixlib=php-3.3.1" alt="Highlander">
      <div class="car-info">
        <h3>Highlander</h3>
        <p>Colors: White, Black, Silver</p>
        <p>Horsepower: 295 HP</p>
        <p>Mid-size SUV with comfort, tech, and safety.</p>
      </div>
    </div>
  </div>
</section>

<!-- Hybrid/Electric -->
<section>
  <h2>Hybrid & Electric Models</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://gld-creative.s3.us-west-2.amazonaws.com/2025-toyota-prius-banner-ecd6319cc06a-1500x600.jpg" alt="Prius">
      <div class="car-info">
        <h3>Prius</h3>
        <p>Colors: White, Silver, Black</p>
        <p>Horsepower: 121 HP</p>
        <p>Iconic hybrid with outstanding efficiency.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://evbite.com/wp-content/uploads/2021/04/Toyota-bZ4x-Concept-Reveal-7-scaled.jpg" alt="bZ4X">
      <div class="car-info">
        <h3>bZ4X</h3>
        <p>Colors: White, Black, Silver</p>
        <p>Horsepower: 215 HP</p>
        <p>Modern electric SUV with futuristic design.</p>
      </div>
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 Toyota. All Rights Reserved.</p>
</footer>

</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_Car_Project/resources/views/Toyota.blade.php ENDPATH**/ ?>