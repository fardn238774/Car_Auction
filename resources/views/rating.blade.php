<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rate Organization | Car Auction</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #e1f5fe, #ffffff);
            margin: 0;
            padding: 0;
            animation: fadeIn 1s ease-in;
        }
        .container {
            max-width: 600px;
            margin: 60px auto;
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            animation: slideUp 1s ease-out;
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 26px;
            font-weight: 700;
            color: #222;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 20px;
            margin-bottom: 8px;
            font-size: 15px;
        }
        .stars {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-bottom: 15px;
        }
        .star {
            font-size: 30px;
            cursor: pointer;
            transition: transform 0.2s, color 0.2s;
            color: #ccc;
        }
        .star:hover,
        .star.active {
            transform: scale(1.2);
            color: #ff9800;
        }
        textarea {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #ccc;
            margin-top: 5px;
            font-size: 14px;
            transition: border 0.3s ease;
        }
        textarea:focus {
            border-color: #111;
            outline: none;
        }
        button {
            margin-top: 25px;
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 12px;
            background: #111;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }
        button:hover {
            background: #333;
            transform: translateY(-2px);
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to   { opacity: 1; }
        }
        @keyframes slideUp {
            from { transform: translateY(40px); opacity: 0; }
            to   { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Rate {{ $organization['name'] }}</h2>
        <form action="{{ url('submit-rating') }}" method="post">
            @csrf
            <input type="hidden" name="organization_id" value="{{ $organization['id'] }}">
            
            <label>Rating:</label>
            <div class="stars" id="starRating">
                <span class="star" data-value="1">★</span>
                <span class="star" data-value="2">★</span>
                <span class="star" data-value="3">★</span>
                <span class="star" data-value="4">★</span>
                <span class="star" data-value="5">★</span>
            </div>
            <input type="hidden" name="rating" id="ratingValue" required>
            
            <label for="description">Your Review:</label>
            <textarea name="description" rows="4" placeholder="Share your experience..."></textarea>
            
            <button type="submit">Submit Rating</button>
        </form>
    </div>

    <script>
        const stars = document.querySelectorAll('.star');
        const ratingInput = document.getElementById('ratingValue');

        stars.forEach(star => {
            star.addEventListener('click', () => {
                stars.forEach(s => s.classList.remove('active'));
                star.classList.add('active');
                ratingInput.value = star.getAttribute('data-value');
            });
            star.addEventListener('mouseover', () => {
                stars.forEach(s => {
                    if (s.getAttribute('data-value') <= star.getAttribute('data-value')) {
                        s.classList.add('active');
                    } else {
                        s.classList.remove('active');
                    }
                });
            });
            star.addEventListener('mouseout', () => {
                stars.forEach(s => {
                    if (s.getAttribute('data-value') <= ratingInput.value) {
                        s.classList.add('active');
                    } else {
                        s.classList.remove('active');
                    }
                });
            });
        });
    </script>
</body>
</html>




