<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Service Booking</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* -------------------- Base -------------------- */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #0a1f44, #1f3a80);
            color: #fff;
            overflow-x: hidden;
        }

        /* Floating background shapes */
        .float-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(0, 200, 255, 0.1);
            animation: float 12s infinite linear;
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
            text-shadow: 0 0 10px #00eaff, 0 0 20px #00eaff;
            margin-bottom: 30px;
        }
        header h1 { font-size: 36px; font-weight: 700; }

        /* -------------------- Form Styling -------------------- */
        .service-form {
            background: rgba(0, 0, 40, 0.9);
            max-width: 600px;
            margin: 0 auto 50px;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 25px #00eaff, 0 0 40px #00c6ff inset;
        }
        .service-form label {
            display: block;
            margin-bottom: 8px;
            color: #00eaff;
            font-weight: 600;
            text-shadow: 0 0 6px #00c6ff;
        }
        .service-form select,
        .service-form input,
        .service-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 2px solid #00eaff;
            background: rgba(0, 0, 30, 0.8);
            color: #fff;
            box-shadow: 0 0 10px #00eaff inset;
            font-size: 14px;
            outline: none;
            transition: 0.3s ease;
        }
        .service-form select:focus,
        .service-form input:focus,
        .service-form textarea:focus {
            border-color: #00ffff;
            box-shadow: 0 0 15px #00eaff, 0 0 30px #00c6ff inset;
        }
        .service-form button {
            width: 100%;
            padding: 15px;
            border-radius: 12px;
            border: none;
            background: #00eaff;
            color: #000;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 0 20px #00eaff, 0 0 35px #00c6ff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .service-form button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px #00eaff, 0 0 50px #00c6ff;
        }

        /* -------------------- Service History -------------------- */
        .service-history {
            max-width: 900px;
            margin: 0 auto 50px;
            padding: 20px;
            border-radius: 15px;
            background: rgba(0, 0, 30, 0.8);
            box-shadow: 0 0 20px #00eaff;
        }
        .service-history h2 {
            margin-bottom: 15px;
            color: #00eaff;
            text-shadow: 0 0 8px #00c6ff;
        }
        .service-history table {
            width: 100%;
            border-collapse: collapse;
            color: #fff;
        }
        .service-history th, .service-history td {
            padding: 12px 10px;
            text-align: left;
            border-bottom: 1px solid #00eaff;
        }
        .service-history th {
            color: #00ffff;
            text-shadow: 0 0 6px #00c6ff;
        }

        .print-btn {
            margin-top: 15px;
            padding: 10px 20px;
            background: #00eaff;
            color: #000;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 0 15px #00eaff, 0 0 25px #00c6ff;
            transition: 0.3s ease;
        }
        .print-btn:hover { transform: scale(1.05); }

        /* Success Alert */
        .alert {
            background: #00eaff;
            color: #000;
            padding: 12px;
            text-align: center;
            border-radius: 12px;
            margin-bottom: 20px;
            box-shadow: 0 0 15px #00eaff;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .service-form, .service-history { width: 90%; }
        }
    </style>
</head>
<body>

    <!-- Floating Shapes -->
    <div class="float-shape shape1"></div>
    <div class="float-shape shape2"></div>
    <div class="float-shape shape3"></div>

    <header>
        <h1>Book Car Service</h1>
    </header>

    <div class="service-form">
        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        <!-- Service Booking Form -->
        <form method="POST" action="{{ route('service1.store') }}">
            @csrf
            <label for="car_id">Select Car</label>
            <select id="car_id" name="car_id" required>
                @foreach($cars as $car)
                    <option value="{{ $car->id }}">{{ $car->name }} - {{ $car->model }}</option>
                @endforeach
            </select>

            <label for="service_type">Service Type</label>
            <select id="service_type" name="service_type" required>
                <option value="General Checkup">General Checkup</option>
                <option value="Oil Change">Oil Change</option>
                <option value="Engine Service">Engine Service</option>
                <option value="Tyre Change">Tyre Change</option>
            </select>

            <label for="service_date">Service Date</label>
            <input type="date" id="service_date" name="service_date" required>

            <label for="notes">Notes</label>
            <textarea id="notes" name="notes" placeholder="Any additional notes..."></textarea>

            <button type="submit">Book Service</button>
        </form>
    </div>

    <!-- Service History -->
    <div class="service-history">
        <h2>Your Service History</h2>
        @if($services->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>Car</th>
                        <th>Service Type</th>
                        <th>Date</th>
                        <th>Notes</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                    <tr>
                        <td>{{ $service->car_name }} ({{ $service->car_model }})</td>
                        <td>{{ $service->service_type }}</td>
                        <td>{{ $service->service_date }}</td>
                        <td>{{ $service->notes }}</td>
                        <td>
                            <button class="print-btn" onclick="printService({{ $service->id }})">Print Slip</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p style="text-align:center; margin-top:15px;">No services booked yet.</p>
        @endif
    </div>

    <script>
        function printService(id) {
            // Open a new window with printable content
            let service = @json($services->keyBy('id'));
            let s = service[id];
            let printContent = `
                <h2 style="color:#00eaff;text-shadow:0 0 10px #00c6ff;">Service Slip</h2>
                <p><strong>Car:</strong> ${s.car_name} (${s.car_model})</p>
                <p><strong>Service Type:</strong> ${s.service_type}</p>
                <p><strong>Date:</strong> ${s.service_date}</p>
                <p><strong>Notes:</strong> ${s.notes}</p>
            `;
            let w = window.open('', '', 'width=600,height=400');
            w.document.write(printContent);
            w.print();
        }
    </script>

</body>
</html>
