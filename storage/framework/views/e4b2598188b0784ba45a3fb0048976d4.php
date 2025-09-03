<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mercedes-Benz | Car Showcase</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    /* Base Styling */
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #f7f7f7, #e0e0e0);
      color: #222;
      overflow-x: hidden;
    }

    header {
      background: rgba(255, 255, 255, 0.6);
      backdrop-filter: blur(12px);
      padding: 20px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 4px 20px rgba(0,0,0,0.15);
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
      color: #888;
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
      letter-spacing: 2px;
      margin: 0;
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
      color: #333;
    }

    .car-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 35px;
    }

    .car-card {
      background: rgba(255, 255, 255, 0.65);
      backdrop-filter: blur(15px);
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      animation: fadeInUp 0.8s ease forwards;
    }

    .car-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 15px 40px rgba(0,0,0,0.3);
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
      background: #222;
      color: #ddd;
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
  <img src="https://upload.wikimedia.org/wikipedia/commons/9/90/Mercedes-Logo.svg" alt="Mercedes Logo">
  <nav>
    <a href="#">Home</a>
    <a href="#">Sedans</a>
    <a href="#">SUVs</a>
    <a href="#">AMG</a>
    <a href="#">Electric</a>
    <a href="#">Contact</a>
  </nav>
</header>

<!-- Hero with Banner Image -->
<div class="hero">
  <img src="https://partners.wsj.com/pure-storage/winning-with-data/wp-content/uploads/sites/1077/2023/05/PureStorage_Hero_CustomArticle01_1600x930.jpg" 
       alt="Mercedes Collection Banner">
  <div class="hero-content">
    <h1>Mercedes-Benz Collection</h1>
    <p>The Future of Luxury, Performance & Innovation</p>
  </div>
</div>

<!-- Sedans -->
<section>
  <h2>Luxury Sedans</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://media.ed.edmunds-media.com/mercedes-benz/e-class/2025/oem/2025_mercedes-benz_e-class_sedan_amg-e-53-hybrid_fq_oem_1_1280x855.jpg" alt="E-Class">
      <div class="car-info">
        <h3>E-Class</h3>
        <p>Colors: Black, Silver, White</p>
        <p>Horsepower: 255-362 HP</p>
        <p>Technology and elegance for every journey.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://images.cdn.autocar.co.uk/sites/autocar.co.uk/files/styles/gallery_slide/public/1-mercedes-benz-s-class-2022-road-test-review-tracking-front.jpg?itok=G-x3Q9Hv" alt="S-Class">
      <div class="car-info">
        <h3>S-Class</h3>
        <p>Colors: Silver, Black, Navy Blue</p>
        <p>Horsepower: 362-496 HP</p>
        <p>The pinnacle of luxury and innovation.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://www.topgear.com/sites/default/files/2021/11/Mercedes_C300D_0000.jpg?w=1784&h=1004" alt="C-Class">
      <div class="car-info">
        <h3>C-Class</h3>
        <p>Colors: Black, Red, Silver</p>
        <p>Horsepower: 255 HP</p>
        <p>Compact luxury with sportiness and comfort.</p>
      </div>
    </div>
  </div>
</section>

<!-- SUVs -->
<section>
  <h2>Luxury SUVs</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://hips.hearstapps.com/hmg-prod/images/2025-mercedes-maybach-gls-600-140-684896af6131c.jpg?crop=0.635xw:0.536xh;0.221xw,0.180xh&resize=1200:*" alt="GLS">
      <div class="car-info">
        <h3>GLS</h3>
        <p>Colors: White, Grey, Black</p>
        <p>Horsepower: 362-603 HP</p>
        <p>Full-size luxury SUV with comfort and space.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://rendezvous-dubai.com/wp-content/uploads/2023/04/G-class-Rendez-vous-dubai-1-960x1149.jpg" alt="G-Class">
      <div class="car-info">
        <h3>G-Class</h3>
        <p>Colors: Black, White, Olive Green</p>
        <p>Horsepower: 416-577 HP</p>
        <p>Iconic off-road SUV blending ruggedness with luxury.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://media.ed.edmunds-media.com/mercedes-benz/glc-class/2025/oem/2025_mercedes-benz_glc-class_4dr-suv_amg-glc-43_fq_oem_1_1280x855.jpg" alt="GLC">
      <div class="car-info">
        <h3>GLC</h3>
        <p>Colors: Silver, White, Black</p>
        <p>Horsepower: 255-362 HP</p>
        <p>Mid-size SUV with style and performance.</p>
      </div>
    </div>
  </div>
</section>

<!-- AMG & Sports -->
<section>
  <h2>AMG & Sports</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://carsguide-res.cloudinary.com/image/upload/c_fit,h_841,w_1490,f_auto,t_cg_base/v1/editorial/2020-Mercedes-AMG-GT-C-1001x565p%20%281%29.jpg" alt="AMG GT">
      <div class="car-info">
        <h3>AMG GT</h3>
        <p>Colors: Yellow, Red, Silver</p>
        <p>Horsepower: 523 HP</p>
        <p>High-performance sports coupe for thrill seekers.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://www.topgear.com/sites/default/files/2021/06/Large-39047-E220dCoupe.jpg" alt="E-Class Coupe">
      <div class="car-info">
        <h3>E-Class Coupe</h3>
        <p>Colors: Blue, Black, Silver</p>
        <p>Horsepower: 362 HP</p>
        <p>Elegant coupe with dynamic performance.</p>
      </div>
    </div>
  </div>
</section>

<!-- Electric EQ -->
<section>
  <h2>Electric EQ Models</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://images.cars.com/cldstatic/wp-content/uploads/mercedes-eq-eqe-suv-2023-01-exterior-front-angle-charging-oem-scaled.jpg" alt="EQE SUV">
      <div class="car-info">
        <h3>EQE SUV</h3>
        <p>Colors: Silver, Black, White</p>
        <p>Horsepower: 288 HP</p>
        <p>Fully electric SUV with cutting-edge tech and sustainability.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://elbil.no/content/uploads/2021/05/6137e5535b8d8.jpeg" alt="EQA">
      <div class="car-info">
        <h3>EQA</h3>
        <p>Colors: White, Blue, Black</p>
        <p>Horsepower: 188 HP</p>
        <p>Compact electric SUV designed for urban mobility.</p>
      </div>
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 Mercedes-Benz. All Rights Reserved.</p>
</footer>

</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_Car_Project/resources/views/Benz.blade.php ENDPATH**/ ?>