<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cars in Stock</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* -------------------- Base -------------------- */
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #0a1f44, #1f3a80);
            color: #fff;
            overflow-x: hidden;
            position: relative;
        }

        /* Floating shapes for neon effect */
        .float-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(0, 200, 255, 0.1);
            animation: float 10s infinite linear;
            box-shadow: 0 0 30px rgba(0, 200, 255, 0.3);
        }
        .float-shape.shape1 { width: 150px; height: 150px; top: 10%; left: 5%; }
        .float-shape.shape2 { width: 100px; height: 100px; top: 40%; left: 80%; }
        .float-shape.shape3 { width: 200px; height: 200px; top: 70%; left: 20%; }

        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
            100% { transform: translateY(0px) rotate(360deg); }
        }

        header {
            background-color: rgba(0, 0, 50, 0.4);
            color: #00eaff;
            padding: 30px 20px;
            text-align: center;
            position: relative;
            z-index: 2;
            text-shadow: 0 0 10px #00eaff, 0 0 20px #00eaff;
        }

        header h1 { font-size: 38px; font-weight: 700; }

        /* Car List Section */
        .car-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 40px 20px;
            position: relative;
            z-index: 2;
        }

        .car-box {
            background-color: rgba(0, 0, 40, 0.9);
            width: 300px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 200, 255, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .car-box:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 0 35px #00eaff, 0 0 55px #00c6ff;
            border: 2px solid #00eaff;
        }

        .car-box img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
            border-bottom: 2px solid #00eaff;
        }

        .car-box:hover img { transform: scale(1.08); }

        .car-info {
            padding: 20px;
            color: #fff;
        }

        .car-info h2 {
            margin-bottom: 10px;
            font-size: 22px;
            font-weight: 700;
            color: #00eaff;
            text-shadow: 0 0 8px #00c6ff;
        }

        .car-info p {
            margin: 6px 0;
            font-size: 14px;
            color: #ccc;
        }

        .no-cars {
            text-align: center;
            margin-top: 60px;
            font-size: 20px;
            color: #fff;
            text-shadow: 0 0 10px #00eaff;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .car-box { width: 90%; }
        }
    </style>
</head>
<body>

    <!-- Floating Neon Shapes -->
    <div class="float-shape shape1"></div>
    <div class="float-shape shape2"></div>
    <div class="float-shape shape3"></div>

    <header>
        <h1>Cars in Stock</h1>
    </header>

    <div class="car-container">
        <?php $__empty_1 = true; $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="car-box">
                <img src="<?php echo e($car->car_image); ?>" alt="<?php echo e($car->car_name); ?>">
                <div class="car-info">
                    <h2><?php echo e($car->car_name); ?></h2>
                    <p><strong>Specs:</strong> <?php echo e($car->car_specs); ?></p>
                    <p><strong>Price:</strong> <?php echo e($car->price); ?> BDT</p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="no-cars">No cars found in stock.</p>
        <?php endif; ?>
    </div>

</body>
</html>

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_Car_Project/resources/views/view_cars.blade.php ENDPATH**/ ?>