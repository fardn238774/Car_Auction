<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lamborghini | Car Showcase</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    /* Base Styling */
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #000000, #1a1a0d, #3d3d29);
      color: #eee;
      overflow-x: hidden;
    }

    header {
      background: rgba(0, 0, 0, 0.85);
      backdrop-filter: blur(12px);
      padding: 20px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 6px 25px rgba(0,0,0,0.6);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    header img {
      height: 65px;
    }

    nav a {
      color: #b5b642; /* Olive accent */
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
      filter: brightness(0.45);
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
      color: #b5b642;
      text-shadow: 0 4px 15px rgba(0,0,0,0.8);
    }

    .hero-content p {
      font-size: 1.6rem;
      margin-top: 15px;
      font-weight: 500;
      color: #eee;
      text-shadow: 0 3px 12px rgba(0,0,0,0.9);
    }

    /* Section */
    section {
      padding: 70px 10%;
    }

    section h2 {
      font-size: 2.8rem;
      margin-bottom: 40px;
      text-align: center;
      color: #b5b642;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .car-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 35px;
    }

    .car-card {
      background: rgba(0, 0, 0, 0.85);
      backdrop-filter: blur(12px);
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 10px 28px rgba(181,182,66,0.5);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      animation: fadeInUp 0.8s ease forwards;
    }

    .car-card:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 15px 40px rgba(255,255,204,0.7);
    }

    .car-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
    }

    .car-info {
      padding: 20px;
      color: #b5b642;
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
      color: #b5b642;
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
  <img src="https://www.pngmart.com/files/23/Lambo-Logo-PNG-Pic.png" alt="Lamborghini Logo">
  <nav>
    <a href="#">Home</a>
    <a href="#">Supercars</a>
    <a href="#">Huracán</a>
    <a href="#">Aventador</a>
    <a href="#">Urus</a>
    <a href="#">Contact</a>
  </nav>
</header>

<!-- Hero -->
<div class="hero">
  <img src="https://medialamborghini-meride-tv.akamaized.net/meride/lamborghini/video/images/folder1/1938/FENOMENO_slider_hp.jpg" alt="Lamborghini Hero">
  <div class="hero-content">
    <h1>Lamborghini Collection</h1>
    <p>Bold. Fearless. Legendary.</p>
  </div>
</div>

<!-- Supercars -->
<section>
  <h2>Supercars</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://motorillustrated.com/wp-content/uploads/2019/03/Lamborghini-Huracan-EVO-Spyder-Geneva-9639.jpg" alt="Huracán EVO">
      <div class="car-info">
        <h3>Huracán EVO</h3>
        <p>Colors: Green, Yellow, Black</p>
        <p>Horsepower: 631 HP</p>
        <p>Dynamic V10 supercar blending agility with raw Lamborghini power.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://media.wired.com/photos/6423826d7f6ce88e606d7b55/1:1/w_1800,h_1800,c_limit/Lamborghini-Revuelto-Featured-Gear.jpg" alt="Lamborghini Revuelto">
      <div class="car-info">
        <h3>Revuelto</h3>
        <p>Colors: Orange, Black, Grey</p>
        <p>Horsepower: 1001 HP</p>
        <p>The first V12 plug-in hybrid Lamborghini redefining performance.</p>
      </div>
    </div>
  </div>
</section>

<!-- GT / Aventador -->
<section>
  <h2>Aventador Series</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://imgx.gridoto.com/crop/0x0:0x0/700x465/photo/2021/07/08/588377jpg-20210708040246.jpg" alt="Aventador Ultimae">
      <div class="car-info">
        <h3>Aventador Ultimae</h3>
        <p>Colors: Yellow, White, Black</p>
        <p>Horsepower: 769 HP</p>
        <p>The final and most powerful Aventador ever made.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://www.wcdreammachines.com/wp-content/uploads/2024/07/2019_Lamborghini_Aventador_S_38.jpg" alt="Aventador S">
      <div class="car-info">
        <h3>Aventador S</h3>
        <p>Colors: Red, Grey, Black</p>
        <p>Horsepower: 730 HP</p>
        <p>A timeless V12 masterpiece combining power and design.</p>
      </div>
    </div>
  </div>
</section>

<!-- Urus / SUV -->
<section>
  <h2>Urus & Performance SUV</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://media.autoexpress.co.uk/image/private/s--X-WVjvBW--/f_auto,t_content-image-full-desktop@1/v1665673408/autoexpress/2022/10/Lamborghini%20Urus%20Performante.jpg" alt="Lamborghini Urus Performante">
      <div class="car-info">
        <h3>Urus Performante</h3>
        <p>Colors: Olive, Black, White</p>
        <p>Horsepower: 657 HP</p>
        <p>The ultimate Lamborghini SUV – sportiness meets versatility.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://www.diariomotor.com/imagenes/2022/08/lamborghini-urus-performante-noresizing-00-6303587c8a7a8.jpg?class=XL" alt="Lamborghini Urus S">
      <div class="car-info">
        <h3>Urus S</h3>
        <p>Colors: Blue, Black, Grey</p>
        <p>Horsepower: 657 HP</p>
        <p>Luxury SUV with Lamborghini soul and everyday usability.</p>
      </div>
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 Automobili Lamborghini S.p.A. All Rights Reserved.</p>
</footer>

</body>
</html>
