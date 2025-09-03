<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Audi | Car Showcase</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
    /* Base Styling */
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #f4f4f4, #e0e0e0);
      color: #222;
      overflow-x: hidden;
    }

    header {
      background: rgba(0, 0, 0, 0.7);
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
      color: #fff;
      text-decoration: none;
      margin-left: 25px;
      font-weight: 600;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #ff0000; /* Audi red hover */
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
      color: #fff;
    }

    .hero-content p {
      font-size: 1.5rem;
      margin-top: 15px;
      font-weight: 400;
      color: #ddd;
    }

    /* Section */
    section {
      padding: 70px 10%;
    }

    section h2 {
      font-size: 2.5rem;
      margin-bottom: 40px;
      text-align: center;
      color: #111;
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
      background: #111;
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
  <img src="https://logoeps.com/wp-content/uploads/2013/07/audi-eps-vector-logo.png" alt="Audi Logo">
  <nav>
    <a href="#">Home</a>
    <a href="#">Sedans</a>
    <a href="#">SUVs</a>
    <a href="#">Sport</a>
    <a href="#">Electric</a>
    <a href="#">Contact</a>
  </nav>
</header>

<!-- Hero with Banner Image -->
<div class="hero">
  <img src="https://hips.hearstapps.com/hmg-prod/images/2023-audi-r8-gt-front-1664827956.jpg?crop=1xw:1xh;center,top&resize=980:*" 
       alt="Audi Collection Banner">
  <div class="hero-content">
    <h1>Audi Collection</h1>
    <p>Progressive Design, High Performance & Innovation</p>
  </div>
</div>

<!-- Sedans -->
<section>
  <h2>Luxury Sedans</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://cdn.motor1.com/images/mgl/ZngoLK/s1/audi-a6-avant-2025.webp" alt="A6">
      <div class="car-info">
        <h3>A6</h3>
        <p>Colors: Black, Silver, White</p>
        <p>Horsepower: 245-340 HP</p>
        <p>Elegant sedan blending comfort and technology.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://hips.hearstapps.com/hmg-prod/images/a218141-medium-1635867809.jpg?crop=0.777xw:0.655xh;0.115xw,0.209xh&resize=2048:*" alt="A8">
      <div class="car-info">
        <h3>A8</h3>
        <p>Colors: Silver, Black</p>
        <p>Horsepower: 335-563 HP</p>
        <p>The flagship luxury sedan of Audi.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://hips.hearstapps.com/hmg-prod/images/2021-audi-a4-45-tfsi-quattro-104-1607927016.jpg?crop=0.450xw:0.380xh;0.226xw,0.399xh&resize=2048:*" alt="A4">
      <div class="car-info">
        <h3>A4</h3>
        <p>Colors: White, Black, Grey</p>
        <p>Horsepower: 201-261 HP</p>
        <p>Compact luxury sedan with sportiness and style.</p>
      </div>
    </div>
  </div>
</section>

<!-- SUVs -->
<section>
  <h2>Luxury SUVs</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://images.prismic.io/carwow/Zrn4-0aF0TcGI3Db_LHDAudiQ72024Exterior3.jpg?auto=format&cs=tinysrgb&fit=max&q=60" alt="Q7">
      <div class="car-info">
        <h3>Q7</h3>
        <p>Colors: White, Grey, Black</p>
        <p>Horsepower: 248-500 HP</p>
        <p>Full-size SUV with premium features and space.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://hips.hearstapps.com/hmg-prod/images/2025-audi-q5-9400-684737872393b.jpg?crop=0.615xw:0.520xh;0.203xw,0.322xh&resize=1200:*" alt="Q5">
      <div class="car-info">
        <h3>Q5</h3>
        <p>Colors: Silver, White, Black</p>
        <p>Horsepower: 261 HP</p>
        <p>Mid-size SUV combining style and performance.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://car-images.bauersecure.com/wp-images/3075/audi-q3-100.jpg" alt="Q3">
      <div class="car-info">
        <h3>Q3</h3>
        <p>Colors: Red, Black, Grey</p>
        <p>Horsepower: 184-228 HP</p>
        <p>Compact SUV with sporty design and technology.</p>
      </div>
    </div>
  </div>
</section>

<!-- Sport & RS -->
<section>
  <h2>Sport & RS Models</h2>
  <div class="car-grid">
    <div class="car-card">
      <img src="https://motorillustrated.com/wp-content/uploads/2019/08/Audi-RS7-rendering.jpg" alt="RS7">
      <div class="car-info">
        <h3>RS7</h3>
        <p>Colors: Red, Black, Silver</p>
        <p>Horsepower: 591 HP</p>
        <p>High-performance sports sedan with aggressive design.</p>
      </div>
    </div>
    <div class="car-card">
      <img src="https://static0.carbuzzimages.com/wordpress/wp-content/uploads/gallery-images/original/1059000/300/1059335.jpg" alt="R8">
      <div class="car-info">
        <h3>R8</h3>
        <p>Colors: Red, White, Grey</p>
        <p>Horsepower: 394-760 HP</p>
        <p>Compact sporty coupe with a fun driving experience.</p>
      </div>
    </div>
  </div>
</section>



<footer>
  <p>&copy; 2025 Audi. All Rights Reserved.</p>
</footer>

</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_Car_Project/resources/views/Audi.blade.php ENDPATH**/ ?>