<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BMW Series | Car Auction</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* -------- Base Styles -------- */
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #0a1f44, #000000);
            color: #fff;
        }

        .hero-image {
    margin-top: 30px;
    display: flex;
    justify-content: center;
}

.hero-image img {
    width: 70%;
    max-width: 900px;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.5);
    transition: transform 0.5s ease, box-shadow 0.5s ease;
}

.hero-image img:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 35px rgba(30,144,255,0.7);
}


        header {
            background: #000;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header img {
            height: 50px;
        }

        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        nav a:hover {
            color: #1e90ff;
        }

        .hero {
            text-align: center;
            padding: 60px 20px;
            background: url("https://www.bmw.com/content/dam/bmw/marketBMWCOM/bmw_com/categories/Design/design_overview_stage-teaser.jpg") center/cover no-repeat;
            color: #fff;
        }
        .hero h1 {
            font-size: 48px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
        }

        /* -------- Series Section -------- */
        .series {
            padding: 50px 80px;
        }
        .series h2 {
            font-size: 32px;
            margin-bottom: 20px;
            border-left: 6px solid #1e90ff;
            padding-left: 10px;
        }

        .car-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .car-card {
            background: #0f1b2e;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 6px 16px rgba(0,0,0,0.6);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        .car-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 25px rgba(30,144,255,0.6);
        }

        .car-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .car-info {
            padding: 20px;
        }
        .car-info h3 {
            margin: 0;
            font-size: 22px;
            color: #1e90ff;
        }
        .car-info p {
            font-size: 14px;
            margin: 6px 0;
        }

        /* -------- Specs -------- */
        .specs {
            margin-top: 15px;
            font-size: 13px;
            line-height: 1.6;
        }

        /* -------- Animations -------- */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .car-card {
            animation: fadeInUp 0.8s ease forwards;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #000;
            margin-top: 40px;
            color: #bbb;



    
        }
    </style>
</head>
<body>

    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/BMW.svg" alt="BMW Logo">
        <nav>
            <a href="#">Home</a>
            <a href="#">Series</a>
            <a href="#">Models</a>
            <a href="#">Contact</a>
        </nav>
    </header>

<section class="hero">
    <h1>BMW – Sheer Driving Pleasure</h1>
    <p>Explore the full lineup of BMW luxury cars and performance vehicles</p>

    <!-- Featured Image under tagline -->
    <div class="hero-image">
        <img src="https://bmwpc.nyc3.cdn.digitaloceanspaces.com/images/m4-gt4/bmw-m4-meet-beast.jpg" 
             alt="BMW Featured Car">
    </div>
 </section>

    
    <!-- BMW 3 Series -->
    <section class="series">
        <h2>BMW 3 Series</h2>
        <div class="car-grid">
            <div class="car-card">
                <img src="https://www.completecar.ie/img/testdrives/9951_large.jpg" alt="BMW 330i">
                <div class="car-info">
                    <h3>BMW 330i</h3>
                    <p>Luxury Sedan</p>
                    <div class="specs">
                        <p>Horsepower: 255 HP</p>
                        <p>Colors: Black, Blue, White</p>
                        <p>0-100 km/h: 5.8s</p>
                    </div>
                </div>
            </div>
            <div class="car-card">
                <img src="https://media.whichcar.com.au/uploads/2025/02/7a2d6d82-2017-bmw-340i-mperformance-review-front-side-static.jpg" alt="BMW M340i">
                <div class="car-info">
                    <h3>BMW M340i</h3>
                    <p>Performance Sedan</p>
                    <div class="specs">
                        <p>Horsepower: 382 HP</p>
                        <p>Colors: Red, Black Sapphire, Alpine White</p>
                        <p>0-100 km/h: 4.1s</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BMW 5 Series -->
    <section class="series">
        <h2>BMW 5 Series</h2>
        <div class="car-grid">
            <div class="car-card">
                <img src="https://s3.amazonaws.com/cka-dash/110-0822-BTA21460/mainimage.jpg" alt="BMW 530i">
                <div class="car-info">
                    <h3>BMW 530i</h3>
                    <p>Executive Sedan</p>
                    <div class="specs">
                        <p>Horsepower: 248 HP</p>
                        <p>Colors: Blue Metallic, Silver, White</p>
                        <p>0-100 km/h: 6.1s</p>
                    </div>
                </div>
            </div>
            <div class="car-card">
                <img src="https://www.topgear.com/sites/default/files/2024/04/TopGear%20-%20First%20Drive%20-%20BMW%205%20Series%202024-031.jpg?w=1784&h=1004" alt="BMW M550i">
                <div class="car-info">
                    <h3>BMW M550i</h3>
                    <p>Luxury Performance Sedan</p>
                    <div class="specs">
                        <p>Horsepower: 523 HP</p>
                        <p>Colors: Black, Mineral White, Blue</p>
                        <p>0-100 km/h: 3.6s</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BMW 7 Series -->
    <section class="series">
        <h2>BMW 7 Series</h2>
        <div class="car-grid">
            <div class="car-card">
                <img src="https://hips.hearstapps.com/hmg-prod/images/2023-bmw-760i-xdrive-101-1650340309.jpg?crop=0.886xw:0.748xh;0.101xw,0.188xh&resize=1200:*" alt="BMW 740i">
                <div class="car-info">
                    <h3>BMW 740i</h3>
                    <p>Luxury Flagship Sedan</p>
                    <div class="specs">
                        <p>Horsepower: 375 HP</p>
                        <p>Colors: Jet Black, Carbon Black, White</p>
                        <p>0-100 km/h: 5.2s</p>
                    </div>
                </div>
            </div>
            <div class="car-card">
                <img src="https://www.bmw.co.uk/content/dam/bmw/common/home/teaser/g70-bmw-7-series-i7-hometeaser-desktop.jpg/jcr:content/renditions/cq5dam.resized.img.1680.large.time1649832808968.jpg" alt="BMW i7">
                <div class="car-info">
                    <h3>BMW i7 (Electric)</h3>
                    <p>Luxury Electric Sedan</p>
                    <div class="specs">
                        <p>Horsepower: 536 HP</p>
                        <p>Colors: Frozen Grey, Blue, White</p>
                        <p>Range: 480 km</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        © 2025 BMW Motors | Designed in BMW Theme
    </footer>

</body>
</html>
