<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Winning Bid Receipt</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
<style>
/* -------------------- Base -------------------- */
body {
    margin: 0;
    font-family: 'Roboto Mono', monospace;
    background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
    color: #fff;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

/* -------------------- Glass Neon Receipt -------------------- */
.receipt {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(25px);
    border-radius: 25px;
    padding: 40px 30px;
    width: 480px;
    box-shadow: 0 0 30px rgba(0, 255, 255, 0.3), 0 0 60px rgba(0, 255, 255, 0.2);
    border: 1px solid rgba(0, 255, 255, 0.2);
    text-align: left;
    position: relative;
    color: #0ff;
    animation: fadeIn 1s ease forwards;
}

/* -------------------- Header -------------------- */
.receipt h2 {
    font-size: 2rem;
    text-align: center;
    margin-bottom: 25px;
    color: #00fff7;
    text-shadow: 0 0 12px #00fff7, 0 0 25px #0ff;
    letter-spacing: 1px;
}

/* -------------------- Car Image -------------------- */
.receipt img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 15px;
    margin-bottom: 20px;
    box-shadow: 0 5px 25px rgba(0,255,255,0.4);
    transition: transform 0.5s ease;
}

.receipt img:hover {
    transform: scale(1.05);
}

/* -------------------- Receipt Table -------------------- */
.receipt table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
}

.receipt table td {
    padding: 8px 5px;
    border-bottom: 1px dashed rgba(0,255,255,0.3);
}

.receipt table td:first-child {
    font-weight: 700;
    color: #00fff7;
}

.receipt table td:last-child {
    text-align: right;
    color: #fff;
}

/* -------------------- Print Button -------------------- */
button {
    margin-top: 25px;
    width: 100%;
    padding: 12px 0;
    border: none;
    border-radius: 25px;
    background: #00fff7;
    color: #000;
    font-weight: 700;
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 0 15px #00fff7, 0 0 30px rgba(0,255,255,0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
}

button:hover {
    transform: scale(1.05);
    box-shadow: 0 0 30px #00fff7, 0 0 60px rgba(0,255,255,0.5);
    background: #00e0e5;
}

/* -------------------- Shine Animation -------------------- */


@keyframes shine {
    0% { left: -100%; }
    50% { left: 100%; }
    100% { left: -100%; }
}

/* -------------------- Fade In -------------------- */
@keyframes fadeIn {
    from {opacity: 0; transform: translateY(30px);}
    to {opacity: 1; transform: translateY(0);}
}

/* -------------------- Confetti -------------------- */
.confetti {
    position: fixed;
    width: 10px;
    height: 10px;
    top: -10px;
    opacity: 0.8;
    z-index: 1;
    pointer-events: none;
    animation: fall linear forwards;
    border-radius: 50%;
}

@keyframes fall {
    to { transform: translateY(100vh) rotate(360deg); opacity: 0; }
}

</style>
</head>
<body>

<div class="receipt shine">
    <h2>Winning Bid Receipt</h2>
    <img src="<?php echo e($car->car_image); ?>" alt="<?php echo e($car->car_name); ?>">
    
    <table>
        <tr><td>Car</td><td><?php echo e($car->car_name); ?></td></tr>
        <tr><td>Auction Location</td><td><?php echo e($auction->auction_location); ?></td></tr>
        <tr><td>Auction Date</td><td><?php echo e(\Carbon\Carbon::parse($auction->auction_date)->format('d M, Y')); ?></td></tr>
        <tr><td>Start Time</td><td><?php echo e($auction->start_time); ?></td></tr>
        <tr><td>End Time</td><td><?php echo e($auction->end_time); ?></td></tr>
        <tr><td>Winning Amount</td><td>$<?php echo e($bid->bid_amount); ?></td></tr>
        <tr><td>Bid Placed At</td><td><?php echo e(\Carbon\Carbon::parse($bid->bid_time)->format('d M, Y H:i:s')); ?></td></tr>
    </table>

    <button onclick="window.print()">Print Receipt</button>
</div>

<script>
// Generate confetti animation
function createConfetti() {
    const confetti = document.createElement('div');
    confetti.classList.add('confetti');
    confetti.style.left = Math.random() * window.innerWidth + 'px';
    confetti.style.background = `hsl(${Math.random()*360}, 80%, 60%)`;
    confetti.style.width = confetti.style.height = (5 + Math.random()*10) + 'px';
    document.body.appendChild(confetti);
    setTimeout(() => confetti.remove(), 4000);
}

// Launch multiple confetti
for (let i=0; i<150; i++) {
    setTimeout(createConfetti, i*50);
}
</script>

</body>
</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel_Car_Project/resources/views/transaction.blade.php ENDPATH**/ ?>