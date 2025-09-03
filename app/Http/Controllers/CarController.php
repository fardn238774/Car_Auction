<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $query = Car::query();
    
        // Search filter
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('model', 'like', '%' . $request->search . '%');
        }
    
        // Sort
        switch ($request->sort) {
            case 'price_asc':
                $query->orderBy('price_range', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price_range', 'desc');
                break;
            case 'year_asc':
                $query->orderBy('year', 'asc');
                break;
            case 'year_desc':
                $query->orderBy('year', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc');
        }
    
        $cars = $query->get();
    
        return view('organization', compact('cars'));
    }


    
}



