<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Porsche | Car Showcase</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    /* Base Styling */
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background: #f9f9f9; /* clean white background */
      color: #111;
      overflow-x: hidden;
    }

    header {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
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
      color: #e6c200; /* subtle yellow accent */
      text-decoration: none;
      margin-left: 25px;
      font-weight: 600;
      letter-spacing: 1px;
      transition: color 0.3s, transform 0.2s;
    }

    nav a:hover {
      color: #111;
      transform: scale(1.05);
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
      background: #fff;
    }

    .hero img {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
      top: 0;
      left: 0;
      filter: brightness(0.7);
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
      text-transform: uppercase;
      color: #e6c200; /* subtle yellow */
      text-shadow: 0 3px 10px rgba(0,0,0,0.3);
    }

    .hero-content p {
      font-size: 1.5rem;
      margin-top: 12px;
      font-weight: 500;
      color: #111;
      text-shadow: 0 2px 8px rgba(255,255,255,0.5);
    }

    /* Section */
    section {
      padding: 60px 10%;
    }

    section h2 {
      font-size: 2.5rem;
      margin-bottom: 40px;
      text-align: center;
      color: #111;
      letter-spacing: 1.5px;
    }

    .car-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .car-card {
      background: #fff;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 6px 18px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      animation: fadeInUp 0.8s ease forwards;
    }

    .car-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 28px rgba(230,194,0,0.2); /* subtle yellow glow */
    }

    .car-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .car-info {
      padding: 18px;
    }

    .car-info h3 {
      margin: 0;
      font-size: 1.6rem;
      color: #111;
      text-transform: uppercase;
    }

    .car-info p {
      margin: 6px 0;
      font-size: 1rem;
      color: #555;
    }

    footer {
      background: #111;
      color: #e6c200;
      text-align: center;
      padding: 20px;
      letter-spacing: 1px;
    }

    /* Animations */
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

<header>
  <img src="https://upload.wikimedia.org/wikipedia/en/8/8c/Porsche_logo.svg" alt="Porsche Logo">
  <nav>
    <a href="#">Home</a>
    <a href="#">911 Series</a>
    <a href="#">Cayman</a>
    <a href="#">Taycan</a>
    <a href="#">Macan</a>
    <a href="#">Contact</a>
  </nav>
</header>

<!-- Hero -->
<div class="hero">
  <img src="https://media.porsche-motorsport-asia-pacific.com/admin/202504/XNSZinsUwZbXvTu6ZQ6mnZohk2sQSsxLo8nFomVT_xs@2x.jpg" alt="Porsche Hero">
  <div class="hero-content">
    <h1>Porsche Collection</h1>
    <p>Precision. Performance. Prestige.</p>
  </div>
</div>

<!-- 911 Series -->
<section>
  <h2>911 Series</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://hips.hearstapps.com/hmg-prod/images/2025-porsche-911-carrera-gts-101-668d444c83859.jpg?crop=0.616xw:0.518xh;0.159xw,0.304xh&resize=1200:*" alt="Porsche 911 Carrera">
      <div class="car-info">
        <h3>911 Carrera</h3>
        <p>Colors: White, Yellow, Black</p>
        <p>Horsepower: 379 HP</p>
        <p>Iconic sports car with timeless handling and style.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://images-porsche.imgix.net/-/media/3A6188B4DDBD4F44808E01F877E550A3_807C7768A6F34454B3160A5C6BC7A064_911-turbo-s-rear?w=999&q=85&auto=format" alt="Porsche 911 Turbo S">
      <div class="car-info">
        <h3>911 Turbo S</h3>
        <p>Colors: Yellow, Silver, White</p>
        <p>Horsepower: 640 HP</p>
        <p>High-performance sports car delivering speed and luxury.</p>
      </div>
    </div>
  </div>
</section>

<!-- Cayman -->
<section>
  <h2>Cayman Series</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://hips.hearstapps.com/hmg-prod/amv-prod-cad-assets/images/15q4/662479/2016-porsche-cayman-gt4-test-review-car-and-driver-photo-662955-s-original.jpg?fill=4:3&resize=1200:*" alt="Porsche Cayman GT4">
      <div class="car-info">
        <h3>Cayman GT4</h3>
        <p>Colors: White, Yellow, Black</p>
        <p>Horsepower: 414 HP</p>
        <p>Driver-focused sports coupe with thrilling dynamics.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://hips.hearstapps.com/hmg-prod/images/2025-porsche-718-cayman-101-66f6f7b824e6d.jpg?crop=0.631xw:0.535xh;0.208xw,0.161xh&resize=1200:*" alt="Porsche Cayman S">
      <div class="car-info">
        <h3>Cayman S</h3>
        <p>Colors: Red, Yellow, White</p>
        <p>Horsepower: 350 HP</p>
        <p>Compact sports car with precise handling and agility.</p>
      </div>
    </div>
  </div>
</section>

<!-- Taycan -->
<section>
  <h2>Taycan & Electric</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://motorillustrated.com/wp-content/uploads/2020/08/Prior-Design-Porsche-Taycan-Turbo-S-6.jpg" alt="Porsche Taycan Turbo S">
      <div class="car-info">
        <h3>Taycan Turbo S</h3>
        <p>Colors: White, Yellow, Black</p>
        <p>Horsepower: 750 HP</p>
        <p>All-electric sports sedan combining performance with sustainability.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://www.topgear.com/sites/default/files/2021/10/DSC07108.jpg" alt="Porsche Taycan 4S">
      <div class="car-info">
        <h3>Taycan 4S</h3>
        <p>Colors: Yellow, Silver, White</p>
        <p>Horsepower: 562 HP</p>
        <p>High-performance electric sports car with timeless Porsche design.</p>
      </div>
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 Porsche AG. All Rights Reserved.</p>
</footer>

</body>
</html>

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_Car_Project/resources/views/Porsche.blade.php ENDPATH**/ ?>