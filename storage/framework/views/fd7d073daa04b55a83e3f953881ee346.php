<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard | Car Auction</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<style>
/* -------------------- Base -------------------- */
body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    background: #0a1f44;
    color: #fff;
    overflow-x: hidden;
    scroll-behavior: smooth;
    position: relative;
}
a { text-decoration: none; color: inherit; }

/* -------------------- Floating Orbs -------------------- */
.orb {
    position: absolute;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(0,200,255,0.4), transparent 70%);
    animation: float 12s ease-in-out infinite;
    z-index: -1;
    filter: blur(100px);
}
.orb1 { width: 350px; height: 350px; top: -120px; left: -180px; }
.orb2 { width: 450px; height: 450px; bottom: -180px; right: -250px; animation-delay: 3s; }
.orb3 { width: 300px; height: 300px; top: 40%; left: 50%; animation-delay: 6s; }

@keyframes float {
    0%,100% { transform: translate(0,0); }
    50% { transform: translate(50px,-40px); }
}

/* -------------------- Popup -------------------- */
.popup {
    display: none;
    position: fixed;
    top: 20px;
    right: 20px;
    background: #00c3ff;
    color: white;
    padding: 15px 25px;
    border-radius: 8px;
    font-weight: bold;
    box-shadow: 0 0 20px rgba(0,200,255,0.8);
    z-index: 9999;
}
.popup.error { background: #e53935; }

/* -------------------- Header -------------------- */
.header {
    background: linear-gradient(90deg, #0d47a1, #1976d2);
    color: white;
    padding: 18px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 10;
    box-shadow: 0 8px 25px rgba(0,200,255,0.4);
    backdrop-filter: blur(6px);
    border-bottom: 1px solid rgba(0,200,255,0.2);
}
.logo { font-size: 28px; font-weight: bold; letter-spacing: 1px; color: #00e5ff; text-shadow: 0 0 12px #00e5ff; }
.nav-links { list-style: none; display: flex; gap: 30px; }
.nav-links a { font-weight: 500; transition: color 0.3s ease, transform 0.3s ease; }
.nav-links a:hover { color: #00e5ff; transform: translateY(-2px); text-shadow: 0 0 8px #00e5ff; }

/* -------------------- Hero -------------------- */
.hero {
    position: relative;
    background: url('https://cdn.mos.cms.futurecdn.net/CFaRozpoNpyjZtLm7K7crV-1920-80.jpg.webp') center/cover no-repeat;
    color: white;
    text-align: center;
    padding: 140px 20px;
    overflow: hidden;
}
.hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(10,31,68,0.75);
    backdrop-filter: blur(2px);
}
.hero-text { position: relative; z-index: 2; animation: fadeInUp 1.2s ease forwards; opacity: 0; }
.hero h1 { 
    font-size: 52px; 
    margin-bottom: 20px; 
    text-shadow: 0 0 25px rgba(0,200,255,0.9); 
    color: #00e5ff;
}
.hero p { 
    font-size: 18px; 
    max-width: 650px; 
    margin: 0 auto; 
    text-shadow: 0 0 12px rgba(0,200,255,0.7); 
}
@keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } from { opacity: 0; transform: translateY(30px); } }

/* -------------------- Feature Cards -------------------- */
.features { display: flex; flex-wrap: wrap; justify-content: center; gap: 35px; padding: 60px 20px; }
.feature-card {
    width: 270px; padding: 25px; cursor: pointer; text-align: center;
    border-radius: 18px; background: rgba(20,40,80,0.85); border: 1px solid rgba(0,200,255,0.3);
    box-shadow: 0 0 18px rgba(0,200,255,0.3);
    transition: transform 0.4s ease, box-shadow 0.4s ease, background 0.4s ease;
}
.feature-card img { width: 80px; height: 80px; margin-bottom: 15px; }
.feature-card h2 { color: #00e5ff; text-shadow: 0 0 12px #00e5ff; margin-bottom: 10px; }
.feature-card p { color: #ccc; font-size: 14px; }

/* Hover effect */
.feature-card:hover {
    transform: translateY(-10px) scale(1.08);
    box-shadow: 0 0 40px #00e5ff, 0 0 60px rgba(0,200,255,0.5);
    background: rgba(0,30,60,0.9);
}

/* -------------------- Gallery -------------------- */
.car-gallery { padding: 60px 20px; text-align: center; }
.gallery-grid { display: flex; flex-wrap: wrap; justify-content: center; gap: 25px; }
.gallery-item { width: 250px; border-radius: 16px; overflow: hidden; box-shadow: 0 0 20px rgba(0,200,255,0.3); transition: transform 0.4s ease, box-shadow 0.4s ease; }
.gallery-item img { width: 100%; height: 180px; object-fit: cover; }
.gallery-item:hover { transform: scale(1.06); box-shadow: 0 0 35px #00e5ff; }

/* -------------------- Auction Cards -------------------- */
.upcoming-auctions { padding: 60px 20px; text-align: center; }
.auction-grid { display: flex; flex-wrap: wrap; justify-content: center; gap: 25px; }
.auction-card { width: 220px; padding: 20px; border-radius: 16px; background: rgba(20,40,80,0.85); border: 1px solid rgba(0,200,255,0.3); box-shadow: 0 0 15px rgba(0,200,255,0.3); transition: transform 0.3s ease, box-shadow 0.3s ease; }
.auction-card:hover { transform: scale(1.08); box-shadow: 0 0 40px #00e5ff; }

/* -------------------- Testimonials & Stats -------------------- */
.testimonials, .statistics { padding: 60px 20px; text-align: center; }
.testimonial-grid, .stats-grid { display: flex; flex-wrap: wrap; justify-content: center; gap: 25px; }
.testimonial-card, .stat-card { padding: 20px; width: 220px; border-radius: 16px; background: rgba(20,40,80,0.85); border: 1px solid rgba(0,200,255,0.3); box-shadow: 0 0 15px rgba(0,200,255,0.3); transition: transform 0.3s ease, box-shadow 0.3s ease; }
.testimonial-card:hover, .stat-card:hover { transform: scale(1.07); box-shadow: 0 0 35px #00e5ff; }
.stat-card h3 { font-size: 32px; color: #00e5ff; text-shadow: 0 0 8px #00e5ff; margin-bottom: 5px; }

/* -------------------- CTA Banner -------------------- */
.cta-banner { padding: 60px 20px; text-align: center; background: linear-gradient(90deg,#0d47a1,#1976d2); box-shadow: 0 0 25px rgba(0,200,255,0.3); border-radius: 16px; margin: 50px 20px; }
.cta-banner button { padding: 14px 28px; border: none; border-radius: 10px; background: #00e5ff; color: #0d47a1; font-weight: bold; cursor: pointer; transition: transform 0.3s ease, box-shadow 0.3s ease; box-shadow: 0 0 20px rgba(0,200,255,0.6); }
.cta-banner button:hover { transform: scale(1.08); box-shadow: 0 0 45px rgba(0,200,255,1); }

/* -------------------- Footer -------------------- */
footer { background: #0a1f44; padding: 25px; text-align: center; color: #aaa; border-top: 1px solid rgba(0,200,255,0.2); text-shadow: 0 0 5px rgba(0,200,255,0.6); }

/* -------------------- Responsive -------------------- */
@media(max-width:1024px){ .feature-card,.gallery-item,.auction-card,.testimonial-card,.stat-card { width: 45%; margin-bottom:20px; } }
@media(max-width:768px){ .feature-card,.gallery-item,.auction-card,.testimonial-card,.stat-card { width: 90%; margin-bottom:20px; } }
</style>
</head>
<body>

<!-- Neon Orbs -->
<div class="orb orb1"></div>
<div class="orb orb2"></div>
<div class="orb orb3"></div>

<!-- Popup -->
<?php if(session('success')): ?>
<div id="popup-message" class="popup"><?php echo e(session('success')); ?></div>
<?php elseif(session('error')): ?>
<div id="popup-message" class="popup error"><?php echo e(session('error')); ?></div>
<?php endif; ?>

<header class="header">
<div class="logo">CAR BIDDING</div>
<nav>
    <ul class="nav-links">
        <li><a href="dashboard">Home</a></li>
        <li><a href="/licensed_organization">Organizations</a></li>
        <li><a href="/brands">Brands</a></li>
    
        <li><a href="/auction">Auction</a></li>
        <li><a href="/Service">Services</a></li>
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
    <img src="https://png.pngtree.com/png-vector/20190728/ourmid/pngtree-workforce-business-human-leadership-management-organization-png-image_1619107.jpg" alt="Organization">
    <h2>Used Car</h2>
    <p>Browse all verified sellers and auction agencies.</p>
</div>
<div class="feature-card" onclick="location.href='/licensed_organization'">
    <img src="https://www.shutterstock.com/image-vector/25-car-logo-vector-including-600nw-2411915029.jpg" alt="Brands">
    <h2>Licensed Organization</h2>
    <p>Explore cars by brand — BMW, Audi, Toyota, and more.</p>
</div>
<div class="feature-card" onclick="location.href='/brands'">
    <img src="https://cdn-icons-png.flaticon.com/512/1265/1265907.png" alt="Search">
    <h2>Car Brands</h2>
    <p>Find your dream car by price, color, model & features.</p>
</div>
<div class="feature-card" onclick="location.href='/Time'">
    <img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/auction-documents-2869689-2500573.png?f=webp&w=512" alt="Auction Time">
    <h2>Auction Timer</h2>
    <p>See current live auctions and countdown timers.</p>
</div>
<div class="feature-card" onclick="location.href='/Service'">
    <img src="https://cdn-icons-png.flaticon.com/512/9727/9727444.png" alt="Services">
    <h2>Our Services</h2>
    <p>Vehicle inspection, certification, and delivery services.</p>
</div>
</section>

<section class="car-gallery">
<h2>Featured Cars</h2>
<div class="gallery-grid" id="galleryGrid">
    <div class="gallery-item"><img src="https://www.spinny.com/blog/wp-content/uploads/2024/06/image-70.png" alt="Car 1"></div>
    <div class="gallery-item"><img src="https://4kwallpapers.com/images/walls/thumbs_3t/11125.jpeg" alt="Car 2"></div>
    <div class="gallery-item"><img src="https://motorillustrated.com/wp-content/uploads/2020/10/02_bolide_front.jpg" alt="Car 3"></div>
    <div class="gallery-item"><img src="https://acuraconnected.com/wp-content/uploads/2021/08/nsx_2021_08_22_01.jpg" alt="Car 4"></div>
</div>
</section>

<section class="upcoming-auctions">
<h2>Upcoming Auctions</h2>
<div class="auction-grid">
    <div class="auction-card"><h3>BMW Series X</h3><p>Starts in: <span class="countdown" data-time="2025-09-05T12:00:00"></span></p></div>
    <div class="auction-card"><h3>Audi Q7</h3><p>Starts in: <span class="countdown" data-time="2025-09-06T15:30:00"></span></p></div>
    <div class="auction-card"><h3>Toyota Camry</h3><p>Starts in: <span class="countdown" data-time="2025-09-07T10:00:00"></span></p></div>
</div>
</section>

<section class="testimonials">
<h2>Customer Testimonials</h2>
<div class="testimonial-grid">
    <div class="testimonial-card"><p>"Great platform! Bidding was fast and easy."</p><h4>- Rahim H.</h4></div>
    <div class="testimonial-card"><p>"I found my dream car here. Highly recommended!"</p><h4>- Sohana K.</h4></div>
    <div class="testimonial-card"><p>"Professional service and secure transactions."</p><h4>- Tanvir M.</h4></div>
</div>
</section>

<section class="statistics">
<h2>Our Impact</h2>
<div class="stats-grid">
    <div class="stat-card"><h3>500+</h3><p>Cars Sold</p></div>
    <div class="stat-card"><h3>150+</h3><p>Active Sellers</p></div>
    <div class="stat-card"><h3>3000+</h3><p>Registered Users</p></div>
    <div class="stat-card"><h3>4500+</h3><p>Total Bids</p></div>
</div>
</section>

<section class="cta-banner">
<h2>Join the Auction Today!</h2>
<p>Sign up now to participate in exclusive auctions and win your dream car.</p>
<button onclick="location.href='/register'">Register Now</button>
</section>

<footer class="footer">
<p>&copy; 2025 Car Bidding Bangladesh. All rights reserved.</p>
</footer>

<script>
// Popup
document.addEventListener("DOMContentLoaded", function() {
    let popup = document.getElementById("popup-message");
    if(popup){
        popup.style.display = "block";
        setTimeout(() => { popup.style.display = "none"; }, 4000);
    }

    // Countdown timers
    const timers = document.querySelectorAll('.countdown');
    timers.forEach(timer => {
        const targetTime = new Date(timer.getAttribute('data-time')).getTime();
        setInterval(() => {
            const now = new Date().getTime();
            let distance = targetTime - now;
            if(distance < 0) distance = 0;
            const days = Math.floor(distance / (1000*60*60*24));
            const hours = Math.floor((distance % (1000*60*60*24))/(1000*60*60));
            const minutes = Math.floor((distance % (1000*60*60))/(1000*60));
            const seconds = Math.floor((distance % (1000*60))/1000);
            timer.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
        },1000);
    });
});
</script>

</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_Car_Project/resources/views/dashboard.blade.php ENDPATH**/ ?>