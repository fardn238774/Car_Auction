<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Live Auction</title>
<style>
body {font-family: Arial, sans-serif; background:#111; color:#fff;}
.container {width: 90%; margin:auto; padding:20px;}
.car-card {background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); padding:15px; margin-bottom:20px; border-radius:15px; display:flex; flex-direction:column; align-items:center;}
.car-card img {width:300px; height:200px; object-fit:cover; border-radius:10px;}
.bid-section {margin-top:10px; display:flex; flex-direction:column; align-items:center;}
.bid-section input {padding:8px; width:150px; margin-bottom:10px;}
.highest-bid {font-weight:bold; margin-bottom:10px;}
#countdown {font-weight:bold; color:#ff0;}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container">
<h1>{{ $auction->auction_location }} - Auction</h1>
<p>Date: {{ \Carbon\Carbon::parse($auction->auction_date)->format('d M, Y') }}</p>
<p>Start: {{ $auction->start_time }} | End: {{ $auction->end_time }}</p>

<div class="cars-grid">
@foreach($cars as $car)
<div class="car-card" id="car-{{ $car->id }}">
    <div class="highest-bid">Highest: $<span id="highest-{{ $car->id }}">{{ $car->highest_bid }}</span></div>
    <img src="{{ $car->car_image }}" alt="{{ $car->car_name }}">
    <h3>{{ $car->car_name }}</h3>
    <p>{{ $car->car_specs }}</p>
    <p><strong>Starting Bid:</strong> ${{ $car->starting_bid }}</p>
    <div class="bid-section">
        <input type="number" id="bid-input-{{ $car->id }}" placeholder="Enter your bid">
        <button onclick="placeBid({{ $car->id }})">Place Bid</button>
        <p id="countdown-{{ $car->id }}">Winning Timer: --</p>
    </div>
</div>
@endforeach
</div>
</div>

<script>
function placeBid(carId) {
    let bidAmount = document.getElementById('bid-input-' + carId).value;

    fetch('/place-bid', {
        method:'POST',
        headers:{
            'Content-Type':'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            auction_car_id: carId,
            bid_amount: bidAmount
        })
    })
    .then(res=>res.json())
    .then(data=>{
        if(data.error){
            alert(data.error);
        } else {
            document.getElementById('highest-' + carId).innerText = data.highest_bid;

            // Start 20 sec countdown for winning
            let countdown = 20;
            let countdownEl = document.getElementById('countdown-' + carId);
            countdownEl.innerText = 'Winning Timer: ' + countdown + 's';

            let interval = setInterval(() => {
                if(countdown > 0){
                    countdown--;
                    countdownEl.innerText = 'Winning Timer: ' + countdown + 's';
                } else {
                    clearInterval(interval);
                    window.location.href = '/transaction/' + carId;
                }
            }, 1000);
        }
    });
}

// Optional: Live highest bid update every 5s
setInterval(() => {
    @foreach($cars as $car)
    fetch('/get-highest-bid/{{ $car->id }}')
        .then(res=>res.json())
        .then(data=>{
            document.getElementById('highest-{{ $car->id }}').innerText = data.highest_bid;
        });
    @endforeach
}, 5000);
</script>
</body>
</html>
