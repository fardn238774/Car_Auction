<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Compare Cars</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #0a1f44, #1f3a80);
            color: #fff;
            padding: 40px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 32px;
        }
        .compare-table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            overflow: hidden;
        }
        .compare-table th, .compare-table td {
            padding: 20px;
            border: 1px solid rgba(255,255,255,0.2);
        }
        .compare-table th {
            background: rgba(255,255,255,0.2);
            font-weight: 700;
        }
        .compare-table img {
            width: 180px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Car Comparison</h1>

    @if($cars->count() > 0)
    <table class="compare-table">
        <tr>
            <th>Feature</th>
            @foreach($cars as $car)
                <th>{{ $car->name }} ({{ $car->model }})</th>
            @endforeach
        </tr>
        <tr>
            <td>Image</td>
            @foreach($cars as $car)
                <td><img src="{{ $car->image_url }}" alt="{{ $car->name }}"></td>
            @endforeach
        </tr>
        <tr>
            <td>Year</td>
            @foreach($cars as $car)
                <td>{{ $car->year }}</td>
            @endforeach
        </tr>
        <tr>
            <td>Mileage</td>
            @foreach($cars as $car)
                <td>{{ $car->mileage }}</td>
            @endforeach
        </tr>
        <tr>
            <td>Color</td>
            @foreach($cars as $car)
                <td>{{ $car->color }}</td>
            @endforeach
        </tr>
        <tr>
            <td>Auction Location</td>
            @foreach($cars as $car)
                <td>{{ $car->auction_location }}</td>
            @endforeach
        </tr>
        <tr>
            <td>Price Range</td>
            @foreach($cars as $car)
                <td>{{ $car->price_range }} Lakh BDT</td>
            @endforeach
        </tr>
    </table>
    @else
        <p style="text-align:center;">No cars selected for comparison.</p>
    @endif
</body>
</html>
