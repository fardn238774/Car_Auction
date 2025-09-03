<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Car Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f4f6f9; font-family: 'Segoe UI', sans-serif; padding: 20px; }
        h1, h2 { color: #0d3f6c; font-weight: bold; margin-bottom: 20px; }

        /* Add Car Form */
        .add-car-form {
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            margin-bottom: 40px;
            transition: transform 0.3s ease;
        }
        .add-car-form:hover { transform: translateY(-5px); }
        .add-car-form input, .add-car-form button { margin-bottom: 10px; }
        .add-car-form button { background: #0d6efd; color: white; border: none; padding: 10px 20px; border-radius: 10px; cursor: pointer; transition: 0.3s ease; }
        .add-car-form button:hover { background: #0b5ed7; }

        /* Car Cards Grid */
        .car-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 25px; }
        .car-card {
            background: white; border-radius: 15px; box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .car-card:hover { transform: translateY(-8px); box-shadow: 0 15px 25px rgba(0,0,0,0.2); }
        .car-card img { width: 100%; height: 180px; object-fit: cover; }
        .car-card-body { padding: 15px; }
        .car-card-body h5 { margin-bottom: 10px; color: #0d3f6c; }
        .car-card-body p { margin: 5px 0; font-size: 14px; color: #333; }
        .car-card-actions { display: flex; justify-content: space-between; margin-top: 10px; }
        .car-card-actions a { text-decoration: none; padding: 6px 12px; border-radius: 8px; font-size: 14px; transition: 0.3s ease; }
        .car-card-actions a.edit { background: #198754; color: white; }
        .car-card-actions a.edit:hover { background: #157347; }
        .car-card-actions a.delete { background: #dc3545; color: white; }
        .car-card-actions a.delete:hover { background: #b02a37; }
    </style>
</head>
<body>

<h1>🛠️ Admin Car Management</h1>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<h2>Add New Car</h2>
<div class="add-car-form">
    <form action="{{ route('admin.storeCar') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Car Name" class="form-control" required>
        <input type="text" name="model" placeholder="Model" class="form-control" required>
        <input type="number" name="year" placeholder="Year" class="form-control" required>
        <input type="text" name="mileage" placeholder="Mileage" class="form-control" required>
        <input type="text" name="color" placeholder="Color" class="form-control" required>
        <input type="text" name="auction_location" placeholder="Auction Location" class="form-control" required>
        <input type="text" name="price_range" placeholder="Price Range" class="form-control" required>
        <input type="text" name="image_url" placeholder="Image URL" class="form-control">
        <button type="submit">Add Car</button>
    </form>
</div>

<h2>All Cars</h2>
<div class="car-grid">
    @foreach($cars as $car)
    <div class="car-card">
        <img src="{{ $car->image_url ?? 'https://via.placeholder.com/300x180?text=No+Image' }}" alt="{{ $car->name }}">
        <div class="car-card-body">
            <h5>{{ $car->name }} ({{ $car->model }})</h5>
            <p><strong>Year:</strong> {{ $car->year }}</p>
            <p><strong>Mileage:</strong> {{ $car->mileage }}</p>
            <p><strong>Color:</strong> {{ $car->color }}</p>
            <p><strong>Auction Location:</strong> {{ $car->auction_location }}</p>
            <p><strong>Price Range:</strong> {{ $car->price_range }}</p>
            <div class="car-card-actions">
                <a href="{{ route('admin.editCar', $car->id) }}" class="edit">Edit</a>
                <a href="{{ route('admin.deleteCar', $car->id) }}" onclick="return confirm('Are you sure?')" class="delete">Delete</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

</body>
</html>
