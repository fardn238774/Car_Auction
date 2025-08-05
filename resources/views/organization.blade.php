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
        @forelse($cars as $car)
            <div class="car-box">
                <img src="{{ $car->image_url }}" alt="{{ $car->name }}">
                <div class="car-info">
                    <h2>{{ $car->name }} <span>({{ $car->model }})</span></h2>
                    <p><strong>Year:</strong> {{ $car->year }}</p>
                    <p><strong>Mileage:</strong> {{ $car->mileage }}</p>
                    <p><strong>Color:</strong> {{ $car->color }}</p>
                    <p><strong>Auction Location:</strong> {{ $car->auction_location }}</p>
                    <p><strong>Price Range:</strong> {{ $car->price_range }}</p>
                </div>
            </div>
        @empty
            <p class="no-cars">No cars found.</p>
        @endforelse
    </div>

</body>
</html>
