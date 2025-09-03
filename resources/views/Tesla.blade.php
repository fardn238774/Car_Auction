<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tesla | Car Showcase</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    /* Base Styling */
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #0d0d0d, #1a1a1a);
      color: #fff;
      overflow-x: hidden;
    }

    header {
      background: rgba(0, 0, 0, 0.8);
      backdrop-filter: blur(12px);
      padding: 20px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 4px 20px rgba(0,0,0,0.3);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    header img {
      height: 60px;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin-left: 25px;
      font-weight: 600;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #00e6ff; /* Tesla neon accent */
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
      font-size: 4rem;
      letter-spacing: 2px;
      margin: 0;
      color: #00e6ff;
    }

    .hero-content p {
      font-size: 1.5rem;
      margin-top: 15px;
      font-weight: 400;
      color: #cceeff;
    }

    /* Section */
    section {
      padding: 70px 10%;
    }

    section h2 {
      font-size: 2.5rem;
      margin-bottom: 40px;
      text-align: center;
      color: #00e6ff;
    }

    .car-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 35px;
    }

    .car-card {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(15px);
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0,0,0,0.5);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      animation: fadeInUp 0.8s ease forwards;
    }

    .car-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 15px 40px rgba(0,230,255,0.5);
    }

    .car-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
    }

    .car-info {
      padding: 20px;
      color: #e0f7ff;
    }

    .car-info h3 {
      margin: 0;
      font-size: 1.6rem;
      color: #00e6ff;
    }

    .car-info p {
      margin: 8px 0;
      font-size: 0.95rem;
      color: #cceeff;
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
  <img src="https://upload.wikimedia.org/wikipedia/commons/b/bd/Tesla_Motors.svg" alt="Tesla Logo">
  <nav>
    <a href="#">Home</a>
    <a href="#">Sedans</a>
    <a href="#">SUVs</a>
    <a href="#">Performance</a>
    <a href="#">Electric</a>
    <a href="#">Contact</a>
  </nav>
</header>

<!-- Hero with Banner Image -->
<div class="hero">
  <img src="https://www.tesla.com/sites/default/files/modelsx-new/social/model-x-social.jpg" 
       alt="Tesla Banner">
  <div class="hero-content">
    <h1>Tesla Collection</h1>
    <p>Electric Innovation. Sustainable Performance.</p>
  </div>
</div>

<!-- Sedans -->
<section>
  <h2>Luxury Sedans</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://hips.hearstapps.com/hmg-prod/images/2025-tesla-model-s-1-672d42e172407.jpg?crop=0.465xw:0.466xh;0.285xw,0.361xh&resize=1200:*" alt="Model S">
      <div class="car-info">
        <h3>Model S</h3>
        <p>Colors: Black, White, Silver, Red</p>
        <p>Horsepower: 670-1020 HP</p>
        <p>High-performance electric sedan with long range.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://media.ed.edmunds-media.com/tesla/model-3/2025/oem/2025_tesla_model-3_sedan_long-range_fq_oem_1_1600.jpg" alt="Model 3">
      <div class="car-info">
        <h3>Model 3</h3>
        <p>Colors: White, Black, Blue, Red</p>
        <p>Horsepower: 283-450 HP</p>
        <p>Compact electric sedan with sleek design and tech.</p>
      </div>
    </div>
  </div>
</section>

<!-- SUVs -->
<section>
  <h2>Luxury SUVs</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://hips.hearstapps.com/hmg-prod/images/2025-tesla-model-x-6734b3d48460d.jpg?crop=0.633xw:0.507xh;0.201xw,0.236xh&resize=1200:*" alt="Model X">
      <div class="car-info">
        <h3>Model X</h3>
        <p>Colors: White, Black, Silver</p>
        <p>Horsepower: 670-1020 HP</p>
        <p>Full-size electric SUV with Falcon Wing doors and tech.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://static0.carbuzzimages.com/wordpress/wp-content/uploads/2025/02/tesla-model-y.jpg" alt="Model Y">
      <div class="car-info">
        <h3>Model Y</h3>
        <p>Colors: Black, White, Silver, Blue</p>
        <p>Horsepower: 346-450 HP</p>
        <p>Compact electric SUV for modern urban lifestyle.</p>
      </div>
    </div>
  </div>
</section>

<!-- Performance -->
<section>
  <h2>Performance & Plaid</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://ev-database.org/img/auto/Tesla_Model_S_2021/Tesla_Model_S_2021-01.jpg" alt="Model S Plaid">
      <div class="car-info">
        <h3>Model S Plaid</h3>
        <p>Colors: Red, White, Black</p>
        <p>Horsepower: 1020 HP</p>
        <p>Ultimate performance electric sedan with insane acceleration.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://uncrate.com/p/2022/04/omaze-tesla-model-x-plaid-1.jpg" alt="Model X Plaid">
      <div class="car-info">
        <h3>Model X Plaid</h3>
        <p>Colors: White, Black, Silver</p>
        <p>Horsepower: 1020 HP</p>
        <p>Full-size SUV with extreme performance and tech features.</p>
      </div>
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 Tesla. All Rights Reserved.</p>
</footer>

</body>
</html>
