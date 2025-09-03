<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Car;


Route::get('/', function () {
    return view('welcome');
});

#For login 1 

use App\Http\Controllers\AuthController;



#for login2
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', function () {
    return 'Welcome to Car Auction Dashboard!';
})->middleware('auth');



// admin login
Route::get('/adminlogin', [AuthController::class, 'showadminLoginForm'])->name('adminlogin');
Route::post('/adminlogin', [AuthController::class, 'adminlogin']);
Route::get('/adminDashboard', function () {
    return 'Welcome to Car Auction Dashboard!';
})->middleware('auth');

#for register pannel

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);



Route::get('/dashboard', function () {
    return view('dashboard');
});







Route::middleware(['auth'])->group(function () {
Route::get('/organization', [AuthController::class, 'organizationCars'])->name('organization');
});





Route::get('/licensed_organization', [AuthController::class, 'showOrganizations']);


Route::get('/organization', [AuthController::class, 'showOrganizationCars']);




// User login (already exists)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


// Admin login
Route::post('/adminlogin', [AuthController::class, 'showadminLoginForm'])->name('adminlogin');
Route::post('/adminlogin', [AuthController::class, 'adminlogin']);




Route::get('/adminDashboard', function () {
    return view('adminDashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/AdminManage', [AuthController::class, 'adminManage'])->name('AdminManage');
    Route::post('/admin/manage/store', [AuthController::class, 'storeCar'])->name('admin.storeCar');
    Route::get('/admin/manage/edit/{id}', [AuthController::class, 'editCar'])->name('admin.editCar');
    Route::post('/admin/manage/update/{id}', [AuthController::class, 'updateCar'])->name('admin.updateCar');
    Route::get('/admin/manage/delete/{id}', [AuthController::class, 'deleteCar'])->name('admin.deleteCar');
});




Route::get('rating', [AuthController::class, 'rating'])->name('rating');
Route::post('submit-rating', [AuthController::class, 'submitRating'])->name('submit-rating');


#brand page

Route::get('/brands', function () {
    return view('brands');
});

#BMW page
Route::get('/BMW', function () {
    return view('BMW');
});

#Benz page
Route::get('/Benz', function () {
    return view('Benz');
});

#Audi page
Route::get('/Audi', function () {
    return view('Audi');
});


#tesla page
Route::get('/Tesla', function () {
    return view('Tesla');
});

#toyota page
Route::get('/Toyota', function () {
    return view('Toyota');
});

#Honda page
Route::get('/Honda', function () {
    return view('Honda');
});


#Ferrari page
Route::get('/Ferrari', function () {
    return view('Ferrari');
});

#Lambo page
Route::get('/Lambo', function () {
    return view('Lambo');
});

#porscge page
Route::get('/Porsche', function () {
    return view('Porsche');
});

#porscge page
Route::get('/Time', function () {
    return view('Time');
});
Route::middleware(['auth'])->group(function() {
    Route::get('/Time', [AuthController::class, 'auctionTime'])->name('Time');
    Route::post('/Time', [AuthController::class, 'storeAuction'])->name('auction.store');
});



Route::middleware('auth')->group(function () {
    Route::get('/auction', [AuthController::class, 'auctionTime'])->name('auctions.list');
    Route::get('/auction/{id}', [AuthController::class, 'viewAuction'])->name('auction.view');
});
;


// Time page listing all auctions
Route::get('/auction', [AuthController::class, 'auctionTime'])->name('auctions.list');

// Individual auction page (shows cars in that auction)
Route::get('/auction/{id}', [AuthController::class, 'viewAuction'])->name('auction.view');

// Route for placing a bid (POST)
Route::post('/auction/bid', [AuthController::class, 'placeBid'])->name('auction.bid');







Route::get('/get-highest-bid/{car_id}', function($car_id){
    $highest = DB::table('bids')->where('auction_car_id', $car_id)->max('bid_amount') ?? 0;
    return response()->json(['highest_bid' => $highest]);
});



Route::middleware('auth')->group(function() {
    Route::get('/auction/{auction_id}', [AuthController::class, 'showAuction'])->name('auction.view');
    Route::post('/place-bid', [AuthController::class, 'placeBid']);
    Route::get('/transaction/{car_id}', [AuthController::class, 'transaction']);
});


Route::get('/transaction/{car_id}', [AuthController::class, 'transactionPage'])->name('transaction')->middleware('auth');


#service page
Route::get('/Service', function () {
    return view('Service');
});


Route::get('/compare', function (Illuminate\Http\Request $request) {
    $carIds = $request->get('cars', []);
    $cars = Car::whereIn('id', $carIds)->get();
    return view('compare', compact('cars'));
});


Route::get('/cars', [AuthController::class, 'viewCars'])->name('cars.view');
Route::get('/cars/{id}/inspect', [AuthController::class, 'inspectCar'])->name('cars.inspect');


Route::get('/cars', [App\Http\Controllers\AuthController::class, 'viewCars'])->name('cars.list');

Route::get('/view', [AuthController::class, 'showCars'])->name('cars.view');


Route::get('/view', [AuthController::class, 'showCars'])->name('cars.view');






Route::get('/go-to-auction/{carId}', [AuthController::class, 'goToAuction'])->name('cars.goToAuction');

// Live auction page
Route::get('/auction/{auctionId}', [AuthController::class, 'liveAuction'])->name('auction.show');


Route::get('/buy-now/{id}', [AuthController::class, 'buyNow'])->name('buy.now');


Route::get('/cheackout', function () {
    return view('cheackout');
});

Route::middleware(['auth'])->group(function () {
    // Show the Car Service page
    Route::get('/service1', [AuthController::class, 'showService1Page'])->name('service1.page');

    // Store Service Booking
    Route::post('/service1/store', [AuthController::class, 'storeService1'])->name('service1.store');
});





Route::middleware(['auth'])->group(function () {
    Route::get('/service1', [AuthController::class, 'showService1Page'])->name('service1.page');
    Route::post('/service1/store', [AuthController::class, 'storeService1'])->name('service1.store');
});

