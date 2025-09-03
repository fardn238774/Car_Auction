<!DOCTYPE html>
<html>
<head>
    <title>Manage Cars - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Manage Cars</h2>

    <!-- Success Message -->
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <!-- Add Car Form -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">Add New Car</div>
        <div class="card-body">
            <form action="<?php echo e(route('admin.cars.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <input type="text" name="name" class="form-control" placeholder="Car Name" required>
                    </div>
                    <div class="col-md-4 mb-2">
                        <input type="text" name="model" class="form-control" placeholder="Model" required>
                    </div>
                    <div class="col-md-4 mb-2">
                        <input type="number" name="year" class="form-control" placeholder="Year" required>
                    </div>
                    <div class="col-md-4 mb-2">
                        <input type="text" name="mileage" class="form-control" placeholder="Mileage">
                    </div>
                    <div class="col-md-4 mb-2">
                        <input type="text" name="color" class="form-control" placeholder="Color">
                    </div>
                    <div class="col-md-4 mb-2">
                        <input type="text" name="auction_location" class="form-control" placeholder="Auction Location">
                    </div>
                    <div class="col-md-4 mb-2">
                        <input type="text" name="price_range" class="form-control" placeholder="Price Range">
                    </div>
                    <div class="col-md-8 mb-2">
                        <input type="text" name="image_url" class="form-control" placeholder="Image URL">
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2">Add Car</button>
            </form>
        </div>
    </div>

    <!-- Cars List -->
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Model</th>
                <th>Year</th>
                <th>Mileage</th>
                <th>Color</th>
                <th>Auction Location</th>
                <th>Price Range</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($car->id); ?></td>
                <td><?php echo e($car->name); ?></td>
                <td><?php echo e($car->model); ?></td>
                <td><?php echo e($car->year); ?></td>
                <td><?php echo e($car->mileage); ?></td>
                <td><?php echo e($car->color); ?></td>
                <td><?php echo e($car->auction_location); ?></td>
                <td><?php echo e($car->price_range); ?></td>
                <td><img src="<?php echo e($car->image_url); ?>" alt="Car Image" width="80"></td>
                <td>
                    <a href="<?php echo e(route('admin.cars.edit', $car->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?php echo e(route('admin.cars.delete', $car->id)); ?>" class="btn btn-danger btn-sm"
                       onclick="return confirm('Are you sure you want to delete this car?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_Car_Project/resources/views/adminManage.blade.php ENDPATH**/ ?>