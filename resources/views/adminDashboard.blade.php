<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard - Car Auction</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
/* Body & General */
body {
    background: rgb(33, 33, 33);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #111;
    overflow-x: hidden;
}

/* Sidebar */
.sidebar {
    height: 100vh;
    position: fixed;
    width: 260px;
    background: #1a1a1a;
    box-shadow: 4px 0 15px rgba(255, 0, 0, 0.3);
    padding-top: 30px;
    transition: width 0.3s;
    z-index: 1000;
}

.sidebar h3 {
    color: #ff0033;
    text-align: center;
    margin-bottom: 30px;
    font-weight: 700;
    text-shadow: 0 0 10px #ff0033, 0 0 20px #ff0033;
}

.sidebar a {
    color: #ff0033;
    display: block;
    padding: 14px 25px;
    text-decoration: none;
    margin: 5px 10px;
    border-radius: 8px;
    transition: 0.3s;
    font-weight: 500;
    text-shadow: 0 0 5px #ff0033;
}

.sidebar a:hover {
    background: rgba(255, 0, 0, 0.1);
    box-shadow: 0 0 10px #ff0033, 0 0 20px #ff0033;
    transform: translateX(5px);
}

.sidebar button {
    margin: 20px 10px 0;
    font-weight: bold;
    text-shadow: 0 0 5px #ff0000;
    box-shadow: 0 0 10px #ff0000;
}

/* Content */
.content {
    margin-left: 280px;
    padding: 30px 40px;
    min-height: 100vh;
}

/* Cards */
.card {
    border-radius: 15px;
    background: #fff;
    border: none;
    box-shadow: 0 0 20px rgba(255, 0, 0, 0.5);
    transition: transform 0.5s, box-shadow 0.5s, opacity 0.5s;
    opacity: 0;
    transform: translateY(50px);
}

.card.visible {
    opacity: 1;
    transform: translateY(0);
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 0 25px #ff0000, 0 0 40px #ff0000;
}

.card h5 {
    font-weight: 700;
    text-shadow: 0 0 5px #ff0000;
}

/* Buttons */
.btn-primary, .btn-success {
    border-radius: 50px;
    text-shadow: 0 0 5px #ff0033;
    box-shadow: 0 0 10px #ff0033, 0 0 20px #ff0033;
    transition: all 0.3s;
}

.btn-primary:hover, .btn-success:hover {
    transform: translateY(-3px);
    box-shadow: 0 0 20px #ff0033, 0 0 35px #ff0033;
}

/* Quick Actions */
.quick-actions a {
    margin-right: 15px;
    margin-top: 10px;
}

/* Neon glow effect for headings */
h2, h4 {
    color: #ff0033;
    text-shadow: 0 0 5px #ff0033, 0 0 10px #ff0033, 0 0 20px #ff0033;
}

/* Scrollbar styling */
::-webkit-scrollbar {
    width: 8px;
}
::-webkit-scrollbar-track {
    background: #fdfdfd;
}
::-webkit-scrollbar-thumb {
    background: #ff0033;
    border-radius: 10px;
    box-shadow: 0 0 5px #ff0033;
}
</style>
</head>
<body>

<div class="sidebar">
    <h3>Admin Panel</h3>
    <a href="adminlogin">Dashboard</a>
    <a href="organization">Cars</a>
    <a href="licensed_organization">Organizations</a>
    <a href="#">Users</a>
    <a href="#">Bids</a>

    <form action="#" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger w-100 mt-3">Logout</button>
    </form>
</div>

<div class="content">
    <h2>Welcome Admin</h2>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card p-4 text-center stat-card">
                <h5>Total Cars</h5>
                <p class="display-6 text-danger counter" data-target="120">0</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 text-center stat-card">
                <h5>Total Users</h5>
                <p class="display-6 text-danger counter" data-target="85">0</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 text-center stat-card">
                <h5>Organizations</h5>
                <p class="display-6 text-danger counter" data-target="12">0</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 text-center stat-card">
                <h5>Bids</h5>
                <p class="display-6 text-danger counter" data-target="340">0</p>
            </div>
        </div>
    </div>

    <div class="mt-5 quick-actions">
        <h4>Quick Actions</h4>
        <a href="AdminManage" class="btn btn-primary">Car Information</a>
        <a href="#" class="btn btn-success">Manage Organizations</a>
    </div>
</div>

<script>
// Animate counter numbers
const counters = document.querySelectorAll('.counter');
counters.forEach(counter => {
    const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const increment = target / 100;

        if(count < target){
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 20);
        } else {
            counter.innerText = target;
        }
    };
    updateCount();
});

// Slide-in animation for cards
const cards = document.querySelectorAll('.stat-card');
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add('visible');
        }
    });
}, { threshold: 0.5 });

cards.forEach(card => observer.observe(card));
</script>

</body>
</html>
