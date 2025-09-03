<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auction Cars</title>
    <style>
        /* --------- Base --------- */
        body {
            font-family: 'Arial', sans-serif;
            background: #0d0d0d;
            color: #fff;
            margin: 0;
            padding: 30px;
        }

        h1 {
            text-align: center;
            font-size: 36px;
            letter-spacing: 2px;
            color: #00f0ff;
            text-shadow: 0 0 10px #00f0ff, 0 0 20px #00f0ff;
            margin-bottom: 50px;
        }

        /* --------- Car List Grid --------- */
        .car-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        /* --------- Car Card --------- */
        .car-card {
            background: rgba(0, 0, 0, 0.6);
            border: 1px solid #00f0ff;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 20px #00f0ff33, 0 0 40px #00f0ff22 inset;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .car-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 30px #00f0ff77, 0 0 50px #00f0ff44 inset;
        }

        /* --------- Car Image --------- */
        .car-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 12px;
            border: 2px solid #00f0ff;
            box-shadow: 0 0 15px #00f0ff66;
            margin-bottom: 15px;
            transition: transform 0.3s;
        }

        .car-card img:hover {
            transform: scale(1.05);
        }

        /* --------- Car Info --------- */
        .car-name {
            font-size: 20px;
            font-weight: bold;
            margin: 10px 0 5px;
            color: #00f0ff;
            text-shadow: 0 0 5px #00f0ff;
        }

        .car-specs {
            font-size: 14px;
            color: #a0f0ff;
            margin-bottom: 10px;
        }

        .starting-bid {
            font-size: 16px;
            font-weight: bold;
            color: #00f0ff;
            margin-bottom: 15px;
        }

        /* --------- Button --------- */
        .inspect-btn {
            display: inline-block;
            padding: 10px 20px;
            font-weight: bold;
            color: #0d0d0d;
            background: #00f0ff;
            border-radius: 8px;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 0 10px #00f0ff, 0 0 20px #00f0ff inset;
            transition: all 0.3s;
        }

        .inspect-btn:hover {
            color: #fff;
            background: #005577;
            box-shadow: 0 0 20px #00f0ff, 0 0 30px #00f0ff inset;
        }

        /* --------- Messages --------- */
        .message {
            text-align: center;
            margin-bottom: 25px;
            font-weight: bold;
            font-size: 18px;
        }

        .message.success {
            color: #0f0;
            text-shadow: 0 0 5px #0f0;
        }

        .message.error {
            color: #ff3300;
            text-shadow: 0 0 5px #ff3300;
        }

    </style>
</head>
<body>

<h1>Auction Cars</h1>

<!-- Success/Error Messages -->
@if(session('success'))
    <div class="message success">{{ session('success') }}</div>
@endif
@if(session('error'))
    <div class="message error">{{ session('error') }}</div>
@endif

<div class="car-list">
    @forelse($cars as $car)
        <div class="car-card">
            <img src="{{ filter_var($car->car_image, FILTER_VALIDATE_URL) ? $car->car_image : asset('storage/' . $car->car_image) }}" alt="{{ $car->car_name }}">
            <div class="car-name">{{ $car->car_name }}</div>
            <div class="car-specs">{{ $car->car_specs }}</div>
            <div class="starting-bid">Starting Bid: ৳{{ number_format($car->starting_bid, 2) }}</div>
            <a href="{{ route('cars.goToAuction', $car->id) }}" class="inspect-btn">Go to Auction</a>
        </div>
    @empty
        <p>No cars available in this auction.</p>
    @endforelse
</div>

</body>
</html>

