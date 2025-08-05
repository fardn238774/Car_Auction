<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Car Auction</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background: #f5f5f5;
            color: #333;
        }

        .header {
            background-color: #111;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            animation: fadeInDown 1s ease;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #00bcd4;
        }

        .hero {
            background: url('https://cdn.mos.cms.futurecdn.net/CFaRozpoNpyjZtLm7K7crV-1920-80.jpg.webp') center/cover no-repeat;
            color: white;
            padding: 100px 20px;
            text-align: center;
            animation: fadeIn 2s ease-in-out;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 50px 20px;
            background: #fff;
            animation: fadeInUp 1.5s ease;
        }

        .feature-card {
            background-color: #e0f7fa;
            padding: 20px;
            border-radius: 16px;
            width: 250px;
            text-align: center;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .feature-card img {
            width: 80px;
            height: 80px;
            margin-bottom: 15px;
        }

        .footer {
            background-color: #111;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .about-section {
            background: #f1f8e9;
            padding: 40px 20px;
            text-align: center;
            animation: fadeInUp 2s ease;
        }

        .section-title {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .about-text {
            max-width: 700px;
            margin: 0 auto;
        }

        .car-gallery {
            padding: 40px 20px;
            background: #fff;
            text-align: center;
            animation: fadeIn 2s ease-in;
        }

        .car-gallery h2 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        .gallery-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .gallery-item {
            width: 300px;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 12px;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="logo">CAR BIDDING</div>
        <nav>
            <ul class="nav-links">
                <li><a href="login">Home</a></li>
                <li><a href="#">Organizations</a></li>
                <li><a href="#">Brands</a></li>
                <li><a href="#">Search</a></li>
                <li><a href="#">Auction</a></li>
                <li><a href="#">Services</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h1>Welcome to Car Bidding</h1>
            <p>Bid smart, drive smarter. Trusted auctions from certified vendors.</p>
        </div>
    </section>

    <section class="features">
        <div class="feature-card" onclick="location.href='/organization'">
            <img src="/images/org.png" alt="Organization">
            <h2>Organizations</h2>
            <p>Browse all verified sellers and auction agencies.</p>
        </div>
        <div class="feature-card" onclick="location.href='/licensed_organization'">  
            <img src="/images/brands.png" alt="Brands">
            <h2>Car Brands</h2>
            <p>Explore cars by brand — BMW, Audi, Toyota, and more.</p>
        </div>
        <div class="feature-card" onclick="location.href='/search'">
            <img src="/images/search.png" alt="Search">
            <h2>Search</h2>
            <p>Find your dream car by price, color, model & features.</p>
        </div>
        <div class="feature-card" onclick="location.href='/auction'">
            <img src="/images/auction.png" alt="Auction Time">
            <h2>Auction Timer</h2>
            <p>See current live auctions and countdown timers.</p>
        </div>
        <div class="feature-card" onclick="location.href='/services'">
            <img src="/images/services.png" alt="Services">
            <h2>Our Services</h2>
            <p>Vehicle inspection, certification, and delivery services.</p>
        </div>
    </section>

    <!-- Car Gallery Section -->
    <section class="car-gallery">
        <h2>Featured Cars</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="https://www.spinny.com/blog/wp-content/uploads/2024/06/image-70.png" alt="Car 1">
            </div>
            <div class="gallery-item">
                <img src="https://4kwallpapers.com/images/walls/thumbs_3t/11125.jpeg" alt="Car 2">
            </div>
            <div class="gallery-item">
                <img src="https://motorillustrated.com/wp-content/uploads/2020/10/02_bolide_front.jpg" alt="Car 3">
            </div>
            <div class="gallery-item">
                <img src="https://acuraconnected.com/wp-content/uploads/2021/08/nsx_2021_08_22_01.jpg" alt="Car 4">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <h2 class="section-title">Why Choose Us?</h2>
        <p class="about-text">
            We provide a transparent, secure, and innovative car auction experience backed by partnerships with certified organizations and real-time auction updates.
        </p>
    </section>

    <footer class="footer">
        <p>&copy; 2025 Car Bidding Bangladesh. All rights reserved.</p>
    </footer>

</body>
</html>


<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_Car_Project/resources/views/dashboard.blade.php ENDPATH**/ ?>