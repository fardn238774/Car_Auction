<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Slip</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #0d1117;
            margin: 0;
            padding: 20px;
            color: #e0e0e0;
        }
        .container {
            max-width: 700px;
            margin: auto;
            background: #111827;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(0, 153, 255, 0.6);
            border: 1px solid rgba(0, 153, 255, 0.4);
        }
        h2 {
            text-align: center;
            font-size: 26px;
            margin-bottom: 25px;
            color: #00d9ff;
            text-shadow: 0 0 8px #00d9ff, 0 0 15px #00d9ff;
        }
        .car-info, .user-info, .payment-info {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid rgba(0,153,255,0.4);
            border-radius: 12px;
            background: rgba(17, 24, 39, 0.9);
            box-shadow: 0 0 15px rgba(0, 153, 255, 0.2);
        }
        .car-info h3, .user-info h3, .payment-info h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #00d9ff;
            text-shadow: 0 0 6px #00d9ff;
        }
        .car-info img {
            max-width: 100%;
            border-radius: 10px;
            margin-top: 10px;
            box-shadow: 0 0 15px rgba(0,153,255,0.5);
        }
        .btn {
            display: block;
            width: 100%;
            background: #00d9ff;
            color: #111827;
            text-align: center;
            padding: 12px;
            margin-top: 12px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0 0 10px #00d9ff, 0 0 20px #00d9ff;
            transition: 0.3s;
        }
        .btn:hover {
            background: #0099ff;
            box-shadow: 0 0 20px #00d9ff, 0 0 35px #00d9ff;
            color: #fff;
        }
        @media print {
            .btn {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container" id="slip">
        <h2>Payment Slip</h2>

        <!-- ✅ Car Info -->
        <div class="car-info">
            <h3>Car Details</h3>
            <p><strong>Name:</strong> {{ $car->name }}</p>
            <p><strong>Model:</strong> {{ $car->model }}</p>
            <p><strong>Year:</strong> {{ $car->year }}</p>
            <p><strong>Color:</strong> {{ $car->color }}</p>
            <p><strong>Price Range:</strong> {{ $car->price_range }}</p>
            <img src="{{ $car->image_url }}" alt="Car Image">
        </div>

        <!-- ✅ User Info -->
        <div class="user-info">
            <h3>Customer Details</h3>
            <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        </div>

        <!-- ✅ Payment Info -->
        <div class="payment-info">
            <h3>Payment Information</h3>
            <p><strong>Transaction ID:</strong> #TXN{{ rand(100000,999999) }}</p>
            <p><strong>Date:</strong> {{ date('d M Y, h:i A') }}</p>
            <p><strong>Status:</strong> <span style="color: #00ffae; font-weight: bold;">Paid</span></p>
        </div>

        <!-- ✅ Buttons -->
        <button class="btn" onclick="window.print()">🖨️ Print Slip</button>
        <button class="btn" onclick="downloadPDF()">⬇️ Download PDF</button>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script>
        function downloadPDF() {
            const element = document.getElementById("slip");
            const opt = {
                margin: 0.5,
                filename: 'Payment_Slip.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().set(opt).from(element).save();
        }
    </script>
</body>
</html>
