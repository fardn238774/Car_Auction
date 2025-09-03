<!DOCTYPE html>
<html>
<head>
    <title>Car Auction Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('https://www.cnet.com/a/img/resize/b52d314707ec48cdfcb6607b4739de914c6c23cf/hub/2021/08/02/db583e5f-7825-4562-b17f-cdaf2abe5095/2022-acura-nsx-type-s-teaser-112.jpg?auto=webp&width=1200') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            animation: fadeIn 1s ease-in-out;
        }

        .card-header {
            border-radius: 15px;
            color: white;
            font-weight: bold;
        }

        .login-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .login-tabs a {
            text-decoration: none;
            border: none;
            padding: 10px 20px;
            margin: 0 5px;
            font-weight: bold;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
        }
        .login-tabs a.active {
            background-color: rgb(231, 144, 22);
            color: white;
            transform: scale(1.05);
        }
        .login-tabs a:not(.active) {
            background-color: rgba(255,255,255,0.3);
            color: #000;
        }
        .login-tabs a:hover {
            transform: scale(1.05);
        }

        .form-control {
            border-radius: 10px;
            background: rgba(255,255,255,0.7);
        }

        .btn {
            border-radius: 10px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 12px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center fadeIn">
        <div class="col-md-5">
            <div class="glass-card">
                <div class="card-header text-center mb-3">
                    <h4>Car Auction Login</h4>
                </div>
                <div class="card-body p-3">

                    <div class="login-tabs">
                        <a href="<?php echo e(route('login')); ?>" class="active">User Login</a>
                        <a href="<?php echo e(route('adminlogin')); ?>">Admin Login</a>
                    </div>

                    <!-- User Login Form -->
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" required value="<?php echo e(old('email')); ?>">
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="d-grid mb-2">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <small>Don't have an account? 
                            <a href="<?php echo e(url('register')); ?>">Register here</a>
                        </small>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_Car_Project/resources/views/auth/login.blade.php ENDPATH**/ ?>