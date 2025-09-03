<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brands</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #0a1f44, #1f3a80);
            color: #fff;
        }

        header {
            text-align: center;
            padding: 50px 20px;
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
        }

        header h1 {
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        header p {
            font-size: 18px;
            color: #ccc;
        }

        /* Brand Grid */
        .brand-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            padding: 50px;
            max-width: 1300px;
            margin: auto;
        }

        .brand-card {
            background: #fff;
            color: #111;
            border-radius: 20px;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .brand-card:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
        }

        .brand-card img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 20px;
        }

        .brand-card h2 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #0a1f44;
        }

        .brand-card p {
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }

        .brand-card a {
            display: inline-block;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            color: #fff;
            padding: 10px 18px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .brand-card a:hover {
            background: linear-gradient(135deg, #0072ff, #0056b3);
            transform: translateY(-2px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            header h1 { font-size: 32px; }
            .brand-card { padding: 20px; }
        }
    </style>
</head>
<body>

    <header>
        <h1>Explore Car Brands</h1>
        <p>Choose from top automobile brands and view their cars</p>
    </header>

    <div class="brand-container">
        <!-- BMW -->
        <div class="brand-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/BMW.svg" alt="BMW">
            <h2>BMW</h2>
            <p>Luxury German brand known for performance, technology, and premium driving experience.</p>
            <a href="BMW">View Cars</a>
        </div>

        <!-- Mercedes-Benz -->
        <div class="brand-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/90/Mercedes-Logo.svg" alt="Mercedes">
            <h2>Mercedes-Benz</h2>
            <p>Leader in luxury and innovation with cutting-edge safety and comfort features.</p>
            <a href="Benz">View Cars</a>
        </div>

        <!-- Audi -->
        <div class="brand-card">
            <img src="https://logoeps.com/wp-content/uploads/2013/07/audi-eps-vector-logo.png" alt="Audi">
            <h2>Audi</h2>
            <p>Famous for quattro AWD, elegant designs, and advanced infotainment systems.</p>
            <a href="Audi">View Cars</a>
        </div>

        <!-- Tesla -->
        <div class="brand-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/bd/Tesla_Motors.svg" alt="Tesla">
            <h2>Tesla</h2>
            <p>Revolutionary EV manufacturer offering high-tech electric cars and autopilot features.</p>
            <a href="Tesla">View Cars</a>
        </div>

        <!-- Toyota -->
        <div class="brand-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Toyota_carlogo.svg" alt="Toyota">
            <h2>Toyota</h2>
            <p>Reliable and fuel-efficient cars, leading in hybrid technology worldwide.</p>
            <a href="Toyota">View Cars</a>
        </div>

        <!-- Honda -->
        <div class="brand-card">
            <img src="https://images.seeklogo.com/logo-png/28/2/honda-silver-logo-png_seeklogo-289413.png" alt="Honda">
            <h2>Honda</h2>
            <p>Affordable and durable cars with a focus on innovation and safety.</p>
            <a href="Honda">View Cars</a>
        </div>

        <!-- Nissan -->
        <div class="brand-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/23/Nissan_2020_logo.svg" alt="Nissan">
            <h2>Nissan</h2>
            <p>Global brand with stylish vehicles, from sedans to powerful SUVs.</p>
            <a href="#">View Cars</a>
        </div>

        <!-- Ford -->
        <div class="brand-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/Ford_logo_flat.svg" alt="Ford">
            <h2>Ford</h2>
            <p>Iconic American automaker, known for trucks, Mustangs, and modern SUVs.</p>
            <a href="#">View Cars</a>
        </div>

        <!-- Hyundai -->
        <div class="brand-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Hyundai_Motor_Company_logo.svg" alt="Hyundai">
            <h2>Hyundai</h2>
            <p>Korean automaker delivering affordable, stylish, and safe vehicles.</p>
            <a href="#">View Cars</a>
        </div>

        <!-- Lamborghini -->
        <div class="brand-card">
            <img src="https://www.pngmart.com/files/23/Lambo-Logo-PNG-Pic.png" alt="Lamborghini">
            <h2>Lamborghini</h2>
            <p>Exotic Italian supercars famous for speed, power, and aggressive designs.</p>
            <a href="Lambo">View Cars</a>
        </div>

        <!-- Ferrari -->
        <div class="brand-card">
            <img src="https://upload.wikimedia.org/wikipedia/sco/thumb/d/d1/Ferrari-Logo.svg/688px-Ferrari-Logo.svg.png?20150601144908" alt="Ferrari">
            <h2>Ferrari</h2>
            <p>Legendary Italian brand known for Formula 1 heritage and luxury supercars.</p>
            <a href="Ferrari">View Cars</a>
        </div>

        <!-- Porsche -->
        <div class="brand-card">
            <img src="https://upload.wikimedia.org/wikipedia/en/8/8c/Porsche_logo.svg" alt="Porsche">
            <h2>Porsche</h2>
            <p>Luxury sports cars, renowned for performance and timeless design.</p>
            <a href="Porsche">View Cars</a>
        </div>
    </div>

</body>
</html>
