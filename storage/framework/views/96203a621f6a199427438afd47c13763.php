<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Organization Car Listings</title>
    <link rel="stylesheet" href="organization.css">
</head>
<body>

    <header>
        <h1> Cars Listed by Your Organization</h1>
    </header>

    <div class="car-container">
        <?php $__empty_1 = true; $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="car-box">
                <img src="<?php echo e($car->image_url); ?>" alt="<?php echo e($car->name); ?>">
                <div class="car-info">
                    <h2><?php echo e($car->name); ?> <span>(<?php echo e($car->model); ?>)</span></h2>
                    <p><strong>Year:</strong> <?php echo e($car->year); ?></p>
                    <p><strong>Mileage:</strong> <?php echo e($car->mileage); ?></p>
                    <p><strong>Color:</strong> <?php echo e($car->color); ?></p>
                    <p><strong>Auction Location:</strong> <?php echo e($car->auction_location); ?></p>
                    <p><strong>Price Range:</strong> <?php echo e($car->price_range); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="no-cars">No cars found.</p>
        <?php endif; ?>
    </div>

</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_Car_Project/resources/views/organization.blade.php ENDPATH**/ ?>