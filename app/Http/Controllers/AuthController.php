<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Car;
use App\Models\Rating;
use App\Models\Organization;

use Illuminate\Support\Facades\DB;


use App\Models\AuctionCar;





class AuthController extends Controller
{
 

    public function showLoginForm()
    {
        return view('auth.login');

    }


    public function showadminLoginForm()
    {
        return view('auth.adminlogin');

    }
    




    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
    }




    public function adminlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/adminDashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
        

        }





public function showRegisterForm()
{
    return view('register');
}

public function register(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed'
    ]);

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();

    return redirect('/login')->with('success', 'Registration successful. Please login.');
}




public function organizationCars(Request $request)
{
    // Optional: Only show cars added by this organization, if you track user_id
    // $cars = Car::where('user_id', Auth::id())->get();

    $cars = Car::orderBy('created_at', 'desc')->get(); // all cars

    return view('organization', compact('cars'));
}



public function showOrganizations()
{
    $organizations = Organization::all();
    return view('licensed_organization', compact('organizations'));
}


public function showOrganizationCars(Request $request)
{
    $query = Car::query();

    // Apply filters
    if ($request->year) {
        $query->where('year', $request->year);
    }

    if ($request->model) {
        $query->where('model', $request->model);
    }

    if ($request->color) {
        $query->where('color', $request->color);
    }

    if ($request->price_range) {
        $range = explode('-', $request->price_range);
        if (count($range) == 2) {
            $min = (int) trim($range[0]);
            $max = (int) trim($range[1]);
            $query->whereBetween('price_range', [$min, $max]);
        }
    }

    $cars = $query->get();

    // Get distinct values for filters
    $years = Car::distinct()->pluck('year');
    $models = Car::distinct()->pluck('model');
    $colors = Car::distinct()->pluck('color');

    return view('organization', compact('cars', 'years', 'models', 'colors'));
}




public function adminManage()
{
    $cars = \App\Models\Car::orderBy('created_at', 'desc')->get();
    return view('AdminManage', compact('cars')); // ✅ Pass $cars to the view
}

public function storeCar(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:100',
        'model' => 'required|string|max:100',
        'year' => 'required|integer',
        'mileage' => 'required|string|max:50',
        'color' => 'required|string|max:50',
        'auction_location' => 'required|string|max:100',
        'price_range' => 'required|string|max:100',
        'image_url' => 'nullable|url|max:255',
    ]);

    Car::create($request->all());

    return redirect()->route('AdminManage')->with('success', 'Car added successfully.');
    return redirect()->route('dashboard')->with('success', 'New car added successfully!');
}

public function editCar($id)
{
    $car = Car::findOrFail($id);
    return view('AdminEditCar', compact('car'));
}

public function updateCar(Request $request, $id)
{
    $car = Car::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:100',
        'model' => 'required|string|max:100',
        'year' => 'required|integer',
        'mileage' => 'required|string|max:50',
        'color' => 'required|string|max:50',
        'auction_location' => 'required|string|max:100',
        'price_range' => 'required|string|max:100',
        'image_url' => 'nullable|url|max:255',
    ]);

    $car->update($request->all());

    return redirect()->route('AdminManage')->with('success', 'Car updated successfully.');
}

public function deleteCar($id)
{
    $car = Car::findOrFail($id);
    $car->delete();

    return redirect()->route('AdminManage')->with('success', 'Car deleted successfully.');
}

    // Show rating form
    public function rating(Request $request)
    {
        $orgId = $request->get('org_id');
        $organization = DB::table('organizations')->where('id', $orgId)->first();

        return view('rating', ['organization' => (array)$organization]);
    }

    // Submit rating
    public function submitRating(Request $request)
    {
        $orgId = $request->input('organization_id');
        $rating = $request->input('rating');
        $description = $request->input('description');

        // Insert into ratings table
        DB::table('ratings')->insert([
            'organization_id' => $orgId,
            'rating' => $rating,
            'description' => $description,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Recalculate average rating
        $avgRating = DB::table('ratings')
            ->where('organization_id', $orgId)
            ->avg('rating');

        // Update organizations table
        DB::table('organizations')
            ->where('id', $orgId)
            ->update(['rating' => $avgRating]);

        return redirect('licensed_organization')->with('success', 'Rating submitted successfully!');
    }

    // Show all auctions
    public function auctionTime()
    {
        $auctions = DB::table('auctions')->orderBy('auction_date', 'asc')->get();
        return view('Time', compact('auctions'));
    }

    public function viewAuction($id)
    {
        $auction = DB::table('auctions')->where('id', $id)->first();
        $cars = DB::table('auction_cars')->where('auction_id', $id)->get();
    
        foreach ($cars as $car) {
            $highestBid = DB::table('bids')
                ->where('auction_car_id', $car->id)
                ->orderBy('bid_amount','desc')
                ->first();
            $car->highest_bid = $highestBid->bid_amount ?? $car->starting_bid;
        }
    
        return view('auction', compact('auction','cars'));
    }



    

    // Show Auction Page
    public function showAuction($auction_id)
    {
        $auction = DB::table('auctions')->where('id', $auction_id)->first();
    
        $cars = DB::table('auction_cars')
            ->where('auction_id', $auction_id)
            ->get()
            ->map(function($car){
                $car->highest_bid = DB::table('bids')
                    ->where('auction_car_id', $car->id)
                    ->max('bid_amount') ?? $car->starting_bid;
                return $car;
            });
    
        return view('auction', compact('auction', 'cars'));
    }
    
    public function placeBid(Request $request)
    {
        $request->validate([
            'auction_car_id' => 'required|integer',
            'bid_amount' => 'required|numeric|min:0',
        ]);
    
        $userId = Auth::id();
        if(!$userId){
            return response()->json(['error' => 'Please login first']);
        }
    
        $carId = $request->auction_car_id;
        $bidAmount = $request->bid_amount;
    
        $currentHighest = DB::table('bids')
            ->where('auction_car_id', $carId)
            ->max('bid_amount') ?? 0;
    
        if($bidAmount <= $currentHighest){
            return response()->json(['error' => 'Your bid must be higher than the current highest bid.']);
        }
    
        DB::table('bids')->insert([
            'auction_car_id' => $carId,
            'user_id' => $userId,
            'bid_amount' => $bidAmount,
            'bid_time' => now(),
        ]);
    
        return response()->json([
            'success' => true,
            'highest_bid' => $bidAmount
        ]);
    }
    // Live highest bid API
    public function auctionHighest($auction_id)
    {
        $cars = DB::table('auction_cars')->where('auction_id', $auction_id)->get()->map(function($car){
            $highest = DB::table('bids')->where('auction_car_id', $car->id)->max('bid_amount');
            $car->highest_bid = $highest ?? $car->starting_bid;
            return $car;
        });

        return response()->json($cars);
    }

public function transactionPage($car_id)
{
    $userId = Auth::id();

    // Get the winning bid for this car by this user
    $bid = DB::table('bids')
        ->where('auction_car_id', $car_id)
        ->where('user_id', $userId)
        ->orderByDesc('bid_amount')
        ->first();

    if(!$bid){
        return redirect('/')->with('error', 'No winning bid found for this car.');
    }

    // Get car info
    $car = DB::table('auction_cars')->where('id', $car_id)->first();

    // Get auction info
    $auction = DB::table('auctions')->where('id', $car->auction_id)->first();

    return view('transaction', compact('bid', 'car', 'auction'));
}

public function viewCars()
{
    // Using query builder to fetch cars from auction_cars2
    $cars = DB::table('auction_cars2')->get();

    return view('view', compact('cars'));
}

public function showAuctionCar($carId)
{
    // Get the car from auction_cars (live auction table)
    $car = DB::table('auction_cars')->where('id', $carId)->first();

    if (!$car) {
        return redirect()->back()->with('error', 'Car not found in the auction.');
    }

    // Pass the car to the auction.blade.php view
    return view('auction', compact('car'));
}


public function goToAuction($carId)
{
    // Get the car from auction_cars2
    $car = DB::table('auction_cars2')->where('id', $carId)->first();

    if (!$car) {
        return redirect()->back()->with('error', 'Car not found.');
    }

    // Check if the car is already in auction_cars
    $existingCar = DB::table('auction_cars')
        ->where('auction_id', $car->auction_id)
        ->where('car_name', $car->car_name)
        ->first();

    if (!$existingCar) {
        // Add car to auction_cars
        $newCarId = DB::table('auction_cars')->insertGetId([
            'auction_id'   => $car->auction_id,
            'car_name'     => $car->car_name,
            'car_image'    => $car->car_image,
            'car_specs'    => $car->car_specs,
            'starting_bid' => $car->starting_bid,
            'highest_bid'  => $car->starting_bid, // optional field for live auction
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);
    } else {
        $newCarId = $existingCar->id;
    }

    // Redirect to live auction page for the auction
    return redirect('/auction/' . $car->auction_id);
}


public function showCars()
{
    // Fetch all cars from auction_cars2 table
    $cars = DB::table('auction_cars2')->get();

    // Return the view with cars
    return view('view', compact('cars'));
}




public function buyNow($id)
{
    // Fetch the car info from DB
    $car = DB::table('cars')->where('id', $id)->first();

    if (!$car) {
        return redirect()->back()->with('error', 'Car not found.');
    }

    // Send car data to checkout page
    return view('checkout', compact('car'));
}


// Show the Service Page
public function showService1Page()
{
    $cars = DB::table('cars')->get();

    $services = DB::table('services')
        ->join('cars', 'services.car_id', '=', 'cars.id')
        ->where('services.user_id', Auth::id())
        ->select('services.*', 'cars.name as car_name', 'cars.model as car_model')
        ->orderBy('services.service_date', 'desc')
        ->get();

    return view('service1', compact('cars', 'services'));
}

// Store Service Booking
public function storeService1(Request $request)
{
    $request->validate([
        'car_id' => 'required|integer',
        'service_type' => 'required|string',
        'service_date' => 'required|date',
    ]);

    DB::table('services')->insert([
        'user_id' => Auth::id(),
        'car_id' => $request->car_id,
        'service_type' => $request->service_type,
        'service_date' => $request->service_date,
        'notes' => $request->notes,
    ]);

    return redirect()->back()->with('success', 'Service booked successfully!');
}


}

