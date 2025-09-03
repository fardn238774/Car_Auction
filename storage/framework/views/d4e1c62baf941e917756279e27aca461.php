<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Licensed Organizations | Car Auction</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Body with Professional Gradient Background */
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
            overflow-x: hidden;
            perspective: 1200px;
            position: relative;
            color: #f1f5f9;
        }

        /* Floating Car SVGs */
        .floating-car {
            position: absolute;
            width: 80px;
            height: 40px;
            z-index: 0;
            opacity: 0.08;
            animation: floatCars linear infinite;
        }

        .floating-car svg {
            width: 100%;
            height: 100%;
            fill: #38bdf8;
        }

        .car1 { top: 10%; left: -100px; animation-duration: 28s; }
        .car2 { top: 45%; left: -120px; animation-duration: 33s; }
        .car3 { top: 70%; left: -90px; animation-duration: 25s; }

        @keyframes floatCars {
            0% { transform: translateX(0) rotate(0deg); opacity: 0.08; }
            50% { transform: translateX(50vw) rotate(5deg); opacity: 0.15; }
            100% { transform: translateX(100vw) rotate(0deg); opacity: 0.08; }
        }

        /* Header */
        .header {
            background: linear-gradient(90deg, #0284c7, #0ea5e9);
            color: #ffffff;
            padding: 25px 20px;
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            position: relative;
            z-index: 1;
            animation: slideInDown 1s ease-out;
        }

        /* Organization Container */
        .organization-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 60px 20px;
            gap: 30px;
            position: relative;
            z-index: 1;
        }

        /* Cards with tilt effect */
        .org-card {
            background: linear-gradient(145deg, #1e293b, #334155);
            width: 320px;
            border-radius: 25px;
            padding: 25px 20px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.5s ease, box-shadow 0.4s ease, background 0.4s ease;
            text-align: center;
            cursor: pointer;
            color: #f1f5f9;
        }

        .org-card:hover {
            transform: translateY(-10px) scale(1.03) rotateX(2deg) rotateY(3deg);
            box-shadow: 0 25px 50px rgba(0,0,0,0.35);
            background: linear-gradient(145deg, #334155, #1e293b);
        }

        .org-card img {
            height: 120px;
            width: 120px;
            object-fit: cover;
            margin-bottom: 20px;
            border-radius: 50%;
            border: 2px solid #0ea5e9;
            transition: transform 0.3s ease;
        }
        .org-card img:hover {
            transform: scale(1.1);
        }

        .org-name {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #ffffff;
        }

        .org-description {
            font-size: 15px;
            color: #cbd5e1;
            margin-bottom: 15px;
            min-height: 50px;
        }

        /* Rating stars with hover animation */
        .org-rating {
            font-size: 16px;
            font-weight: bold;
            color: #facc15;
            margin-bottom: 15px;
            transition: transform 0.2s ease;
        }
        .org-rating:hover {
            transform: scale(1.2);
        }

        /* Gradient Button */
        .rate-btn {
            padding: 12px 18px;
            border: none;
            background: linear-gradient(90deg, #0284c7, #0ea5e9);
            color: #fff;
            border-radius: 14px;
            cursor: pointer;
            font-weight: bold;
            font-size: 15px;
            transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.3s ease;
        }

        .rate-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            background: linear-gradient(90deg, #0ea5e9, #0284c7);
        }

        @keyframes slideInDown {
            from { transform: translateY(-120px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .org-card { width: 90%; }
        }
    </style>
</head>
<body>

    <!-- Floating Car SVG Shapes -->
    <div class="floating-car car1">
        <svg viewBox="0 0 64 32">
            <path d="M2 24h60l-4-12H6z"/>
            <circle cx="16" cy="26" r="4"/>
            <circle cx="48" cy="26" r="4"/>
        </svg>
    </div>
    <div class="floating-car car2">
        <svg viewBox="0 0 64 32">
            <path d="M2 24h60l-4-12H6z"/>
            <circle cx="16" cy="26" r="4"/>
            <circle cx="48" cy="26" r="4"/>
        </svg>
    </div>
    <div class="floating-car car3">
        <svg viewBox="0 0 64 32">
            <path d="M2 24h60l-4-12H6z"/>
            <circle cx="16" cy="26" r="4"/>
            <circle cx="48" cy="26" r="4"/>
        </svg>
    </div>

    <div class="header">Licensed Organizations</div>

    <div class="organization-container">
    <?php foreach($organizations as $org): ?>
        <div class="org-card">
            <img src="<?= $org['image_url'] ?: 'https://via.placeholder.com/120' ?>" alt="<?= $org['name'] ?>">
            <div class="org-name"><?= $org['name'] ?></div>
            <div class="org-rating">⭐ Rating: <?= number_format($org['rating'], 1) ?></div>

            <div style="display:flex; justify-content:center; gap:10px;">
                <!-- Rate Service Button -->
                <form action="rating" method="get">
                    <input type="hidden" name="org_id" value="<?= $org['id'] ?>">
                    <button type="submit" class="rate-btn">Rate Service</button>
                </form>

                <!-- View Cars Button -->
                <form action="view" method="get">
                    
                    <button type="submit" class="rate-btn" style="background:#facc15; color:#111;">View Cars</button>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>


</body>
</html>

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_Car_Project/resources/views/licensed_organization.blade.php ENDPATH**/ ?>