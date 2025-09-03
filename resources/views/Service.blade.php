<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Our Services | Car Auction</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    /* Base Styling */
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #0a0f2c, #111b3c);
      color: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
      padding: 50px 20px;
      overflow-x: hidden;
    }

    h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 40px;
      background: linear-gradient(45deg, #00d9ff, #0094ff, #ffffff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: fadeInDown 1s ease;
      text-shadow: 0 0 20px rgba(0, 153, 255, 0.7);
    }

    .services-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      width: 100%;
      max-width: 1200px;
    }

    .service-card {
      background: rgba(0, 30, 60, 0.6);
      border-radius: 20px;
      padding: 30px;
      backdrop-filter: blur(12px);
      box-shadow: 0 0 20px rgba(0, 153, 255, 0.3);
      border: 1px solid rgba(0, 153, 255, 0.2);
      transition: transform 0.4s ease, box-shadow 0.4s ease, opacity 0.4s ease;
      text-align: center;
      animation: fadeInUp 1s ease;
      position: relative;
      overflow: hidden;
    }

    .service-card::before {
      content: "";
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: conic-gradient(rgba(0, 200, 255, 0.4), transparent, rgba(0, 150, 255, 0.3));
      animation: rotate 6s linear infinite;
      z-index: 0;
    }

    .service-card > * {
      position: relative;
      z-index: 1;
    }

    /* Hover interaction (others shrink) */
    .services-container:hover .service-card {
      transform: scale(0.9);
      opacity: 0.7;
    }

    .service-card:hover {
      transform: scale(1.15);
      box-shadow: 0 0 40px rgba(0, 200, 255, 0.7);
      opacity: 1;
      z-index: 5;
    }

    .service-card h2 {
      font-size: 1.6rem;
      margin-bottom: 15px;
      color: #00d9ff;
      text-shadow: 0 0 10px rgba(0, 200, 255, 0.8);
    }

    .service-card p {
      font-size: 1rem;
      line-height: 1.6;
      color: #cce7ff;
    }

    /* Animations */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes rotate {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    /* Floating glowing orbs */
    .orb {
      position: absolute;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(0,200,255,0.7), transparent 70%);
      animation: float 12s ease-in-out infinite;
      z-index: -1;
    }

    .orb1 { width: 250px; height: 250px; top: -80px; left: -100px; animation-delay: 0s; }
    .orb2 { width: 300px; height: 300px; bottom: -100px; right: -120px; animation-delay: 3s; }
    .orb3 { width: 200px; height: 200px; top: 50%; left: 50%; animation-delay: 6s; }

    @keyframes float {
      0%, 100% { transform: translateY(0) translateX(0); }
      50% { transform: translateY(-40px) translateX(30px); }
    }

  </style>
</head>
<body>

  <!-- Floating glowing orbs -->
  <div class="orb orb1"></div>
  <div class="orb orb2"></div>
  <div class="orb orb3"></div>

  <h1>Our Premium Services</h1>




  <div class="services-container" onclick="location.href='/service1'">
    <div class="service-card">
      <h2>Car Servicing</h2>
      <p>Secure your car with our trusted insurance partners, offering affordable and reliable policies.</p>
    </div>
    <div class="service-card">
      <h2>Insurance Support</h2>
      <p>Secure your car with our trusted insurance partners, offering affordable and reliable policies.</p>
    </div>
    <div class="service-card">
      <h2>Online Auction Assistance</h2>
      <p>Need help with bidding? Our experts guide you throughout the auction process for smooth transactions.</p>
    </div>
    <div class="service-card">
      <h2>Secure Transactions</h2>
      <p>All payments are processed securely with fraud protection, ensuring safe and trusted dealings.</p>
    </div>
    <div class="service-card">
      <h2>Vehicle Delivery</h2>
      <p>Get your auctioned car delivered directly to your doorstep with our trusted logistics partners.</p>
    </div>
    <div class="service-card">
      <h2>24/7 Support</h2>
      <p>Our customer care team is available round the clock to resolve all your auction and car queries.</p>
    </div>
  </div>

</body>
</html>
