<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Car</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f4f6f9; font-family: 'Segoe UI', sans-serif; padding: 30px; }
        h1 { color: #0d3f6c; font-weight: bold; margin-bottom: 30px; }
        .edit-car-form { background: #fff; padding: 25px; border-radius: 15px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); max-width: 500px; margin: auto; transition: transform 0.3s ease; }
        .edit-car-form:hover { transform: translateY(-5px); }
        .edit-car-form input, .edit-car-form button { margin-bottom: 10px; }
        .edit-car-form button { background: #0d6efd; color: white; border: none; padding: 10px 20px; border-radius: 10px; cursor: pointer; transition: 0.3s ease; }
        .edit-car-form button:hover { background: #0b5ed7; }
        a.back-btn { display: inline-block; margin-top: 15px; text-decoration: none; color: #0d6efd; }
        a.back-btn:hover { text-decoration: underline; }
    </style>
</head>
<body>

<h1>✏️ Edit Car: {{ $car->name }}</h1>

<form class="edit-car-form" action="{{ route('admin.updateCar', $car->id) }}" method="POST">
    @csrf
    <input type="text" name="name" value="{{ $car->name }}" class="form-control" required>
    <input type="text" name="model" value="{{ $car->model }}" class="form-control" required>
    <input type="number" name="year" value="{{ $car->year }}" class="form-control" required>
    <input type="text" name="mileage" value="{{ $car->mileage }}" class="form-control" required>
    <input type="text" name="color" value="{{ $car->color }}" class="form-control" required>
    <input type="text" name="auction_location" value="{{ $car->auction_location }}" class="form-control" required>
    <input type="text" name="price_range" value="{{ $car->price_range }}" class="form-control" required>
    <input type="text" name="image_url" value="{{ $car->image_url }}" class="form-control">
    <button type="submit">Update Car</button>
</form>

<a href="{{ route('AdminManage') }}" class="back-btn">← Back to Admin Dashboard</a>

</body>
</html>
