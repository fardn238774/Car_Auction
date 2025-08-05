<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Licensed Organizations | Car Auction</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #e1f5fe, #ffffff);
            color: #333;
            animation: fadeIn 1.5s ease-in;
        }

        .header {
            background-color: #111;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            animation: slideInDown 1s ease-out;
        }

        .organization-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 40px 20px;
            gap: 30px;
        }

        .org-card {
            background-color: #ffffff;
            width: 300px;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            cursor: pointer;
            animation: fadeInUp 1s ease;
        }

        .org-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }

        .org-card img {
            height: 100px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .org-name {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .org-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }

        .org-rating {
            font-size: 16px;
            font-weight: bold;
            color: #ff9800;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideInDown {
            from { transform: translateY(-100px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes fadeInUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>

<div class="header">Licensed Organizations</div>

<div class="organization-container">
    <?php $__currentLoopData = $organizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="org-card">
            <img src="<?php echo e($org->image_url); ?>" alt="<?php echo e($org->name); ?>">
            <div class="org-name"><?php echo e($org->name); ?></div>
            <div class="org-description"><?php echo e($org->description); ?></div>
            <div class="org-rating">⭐ Rating: <?php echo e(number_format($org->rating, 1)); ?></div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

</body>
</html>

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_Car_Project/resources/views/licensed_organization.blade.php ENDPATH**/ ?>