<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card shadow p-4" style="width: 400px;">
        <h4 class="text-center mb-3">Admin Login</h4>

        <form method="POST" action="{{ route('adminlogin') }}">
            @csrf
            <div class="mb-3">
                <label>Admin Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="d-grid">
                <button class="btn btn-danger" type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
