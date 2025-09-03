<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $car->car_name }} | Inspect</title>
</head>
<body>
    <h1>{{ $car->car_name }}</h1>
    <img src="{{ $car->car_image }}" alt="{{ $car->car_name }}" width="400">
    <p>{{ $car->car_specs }}</p>
    <p><strong>Starting Bid:</strong> ৳{{ number_format($car->starting_bid, 2) }}</p>
    <a href="{{ route('cars.view') }}">← Back to Cars</a>
</body>
</html>
