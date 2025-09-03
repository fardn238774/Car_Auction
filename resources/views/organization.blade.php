<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Organization Car Listings</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* -------------------- Base -------------------- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #0a1f44, #1f3a80);
            color: #fff;
            overflow-x: hidden;
            position: relative;
        }

        /* Floating background shapes */
        .float-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(0, 200, 255, 0.1);
            animation: float 10s infinite linear;
            box-shadow: 0 0 30px rgba(0, 200, 255, 0.3);
        }

        .float-shape.shape1 { width: 150px; height: 150px; top: 10%; left: 5%; }
        .float-shape.shape2 { width: 100px; height: 100px; top: 40%; left: 80%; }
        .float-shape.shape3 { width: 200px; height: 200px; top: 70%; left: 20%; }

        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
            100% { transform: translateY(0px) rotate(360deg); }
        }

        header {
            background-color: rgba(0, 0, 50, 0.4);
            color: #00eaff;
            padding: 30px 20px;
            text-align: center;
            position: relative;
            z-index: 2;
            text-shadow: 0 0 10px #00eaff, 0 0 20px #00eaff;
        }

        header h1 {
            font-size: 38px;
            font-weight: 700;
        }

        /* -------------------- Filter Section -------------------- */
        .filter-form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            background: rgba(255, 255, 255, 0.05);
            padding: 25px;
            margin: 20px auto;
            width: 90%;
            max-width: 1200px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 200, 255, 0.3);
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 2;
        }

        .filter-form select,
        .filter-form input[type="text"] {
            padding: 12px 15px;
            border: 2px solid #00eaff;
            border-radius: 10px;
            min-width: 160px;
            font-size: 14px;
            outline: none;
            background: rgba(0, 0, 30, 0.8);
            color: #fff;
            box-shadow: 0 0 10px #00eaff inset;
            transition: 0.3s ease;
        }

        .filter-form input[type="text"]:focus,
        .filter-form select:focus {
            border-color: #00ffff;
            box-shadow: 0 0 15px #00eaff, 0 0 30px #00c6ff inset;
        }

        .filter-form button {
            background: #00eaff;
            color: #000;
            border: none;
            padding: 12px 20px;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 600;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 0 15px #00eaff, 0 0 25px #00c6ff;
        }

        .filter-form button:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 0 25px #00eaff, 0 0 40px #00c6ff;
        }

        /* -------------------- Car Cards -------------------- */
        .car-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 40px 20px;
            position: relative;
            z-index: 2;
        }

        .car-box {
            background-color: rgba(0, 0, 40, 0.9);
            width: 300px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 200, 255, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border 0.3s ease;
            cursor: pointer;
            position: relative;
            border: 2px solid transparent;
        }

        .car-box:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 0 35px #00eaff, 0 0 55px #00c6ff;
            border: 2px solid #00eaff;
        }

        .car-box img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
            border-bottom: 2px solid #00eaff;
        }

        .car-box:hover img {
            transform: scale(1.08);
        }

        .car-info {
            padding: 20px;
            color: #fff;
        }

        .car-info h2 {
            margin-bottom: 10px;
            font-size: 22px;
            font-weight: 700;
            color: #00eaff;
            text-shadow: 0 0 8px #00c6ff;
        }

        .car-info span {
            font-weight: 500;
            color: #fff;
        }

        .car-info p {
            margin: 6px 0;
            font-size: 14px;
            color: #ccc;
        }

        label {
            color: #00eaff;
            font-weight: 600;
            text-shadow: 0 0 6px #00c6ff;
        }

        .no-cars {
            text-align: center;
            margin-top: 60px;
            font-size: 20px;
            color: #fff;
            text-shadow: 0 0 10px #00eaff;
        }

        /* -------------------- Compare Button -------------------- */
        .compare-btn {
            background: #00eaff;
            color: #000;
            padding: 12px 25px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 0 20px #00eaff, 0 0 35px #00c6ff;
            transition: 0.3s ease;
        }

        .compare-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 0 30px #00eaff, 0 0 50px #00c6ff;
        }

        /* -------------------- Responsive -------------------- */
        @media (max-width: 768px) {
            .filter-form {
                flex-direction: column;
                align-items: center;
            }
            .car-box { width: 90%; }
        }
    </style>
</head>
<body>

    <!-- Floating Background Shapes -->
    <div class="float-shape shape1"></div>
    <div class="float-shape shape2"></div>
    <div class="float-shape shape3"></div>

    <header>
        <h1>Cars Listed by Your Organization</h1>
    </header>

    <!-- Filter Section -->
    <form method="GET" action="{{ url()->current() }}" class="filter-form">
        <select name="year">
            <option value="">Filter by Year</option>
            @foreach($years as $y)
                <option value="{{ $y }}" {{ request('year') == $y ? 'selected' : '' }}>{{ $y }}</option>
            @endforeach
        </select>

        <select name="model">
            <option value="">Filter by Model</option>
            @foreach($models as $m)
                <option value="{{ $m }}" {{ request('model') == $m ? 'selected' : '' }}>{{ $m }}</option>
            @endforeach
        </select>

        <select name="color">
            <option value="">Filter by Color</option>
            @foreach($colors as $c)
                <option value="{{ $c }}" {{ request('color') == $c ? 'selected' : '' }}>{{ ucfirst($c) }}</option>
            @endforeach
        </select>

        <input type="text" name="price_range" placeholder="Enter price (e.g., 18-25)" value="{{ request('price_range') }}">

        <button type="submit">Filter</button>
    </form>

    <!-- Car List Section -->
    <form method="GET" action="{{ url('/compare') }}">
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
                        <p><strong>Price Range:</strong> {{ $car->price_range }} Lakh BDT</p>
                        
                        <!-- ✅ Checkbox to select cars for comparison -->
                        <label>
                            <input type="checkbox" name="cars[]" value="{{ $car->id }}"> Compare this car
                        </label>

                        <!-- ✅ Buy Now Button -->
                        <div style="margin-top:12px; text-align:center;">
                            <a href="{{ url('/buy-now/'.$car->id) }}" 
                               style="display:inline-block; background:#00ff88; color:#000; 
                                      padding:10px 18px; border-radius:10px; font-weight:600; 
                                      text-decoration:none; box-shadow:0 0 15px #00ff88, 0 0 25px #00c6ff; 
                                      transition:0.3s;">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="no-cars">No cars found.</p>
            @endforelse
        </div>

        <!-- ✅ Compare Button -->
        <div style="text-align:center; margin-top:20px;">
            <button type="submit" class="compare-btn">Compare Selected Cars</button>
        </div>
    </form>

</body>
</html>
