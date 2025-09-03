<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auction Times | Car Auction</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Base Styles */
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #1e2a38, #0f1620);
            color: #fff;
            min-height: 100vh;
        }

        header {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(12px);
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        }

        header img {
            height: 50px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin-left: 25px;
            font-weight: 600;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #1e90ff;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 60px 20px;
            background: url("https://images.unsplash.com/photo-1552519507-da3b142c6e3d?auto=format&fit=crop&w=1950&q=80") center/cover no-repeat;
            color: #fff;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.7);
        }

        .hero p {
            font-size: 1.5rem;
            text-shadow: 1px 1px 8px rgba(0,0,0,0.6);
        }

        /* Auction Cards */
        .auction-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            padding: 40px 10%;
        }

        .auction-item {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            animation: fadeInUp 0.8s ease forwards;
        }

        .auction-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 35px rgba(30,144,255,0.6);
        }

        .auction-item p {
            margin: 8px 0;
            font-size: 1rem;
            color: #fff;
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        footer {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(12px);
            text-align: center;
            padding: 20px;
            margin-top: 50px;
            color: #bbb;
        }

        @media (max-width: 768px){
            .hero h1 { font-size: 2rem; }
            .hero p { font-size: 1.2rem; }
        }
    </style>
</head>
<body>

<header>
    <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/BMW.svg" alt="Logo">
    <nav>
        <a href="#">Home</a>
        <a href="#">Auctions</a>
        <a href="#">Cars</a>
        <a href="#">Contact</a>
    </nav>
</header>

<section class="hero">
    <h1>Upcoming Auctions</h1>
    <p>Check the schedule and locations of our next car auctions</p>
</section>

<div class="auction-list">
    @forelse($auctions as $auction)
        <a href="{{ route('auction.view', $auction->id) }}" style="text-decoration:none;">
            <div class="auction-item">
                <p><strong>Location:</strong> {{ $auction->auction_location }}</p>
                <p><strong>Capacity:</strong> {{ $auction->capacity }}</p>
                <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($auction->auction_date)->format('d M, Y') }}</p>
                <p><strong>Start Time:</strong> {{ $auction->start_time }}</p>
                <p><strong>End Time:</strong> {{ $auction->end_time }}</p>
            </div>
        </a>
    @empty
        <p style="text-align:center; grid-column: 1/-1;">No upcoming auctions available.</p>
    @endforelse
</div>

<footer>
    &copy; 2025 Car Auction | All Rights Reserved
</footer>

</body>
</html>
