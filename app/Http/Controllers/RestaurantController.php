<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;  // <-- Pastikan ini ada!

class RestaurantController extends Controller
{
    /**
     * Menampilkan tampilan pencarian restoran.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSearchForm()
    {
        return view('layouts.search');
    }

    /**
     * Display a listing of the restaurants with optional filters.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Mulai query builder
        $query = Restaurant::query();

        // Filter: keyword search pada nama restaurant
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Filter: jenis cuisine
        if ($request->filled('cuisine')) {
            $query->where('food_type', $request->cuisine);
        }

        // Filter: minimal discount
        if ($request->filled('discount')) {
            $query->where('discount_percentage', '>=', (int) $request->discount);
        }

        // Ambil hasil dengan pagination dan pertahankan query string
        $restaurants = $query
            ->orderBy('created_at', 'desc')
            ->paginate(9)
            ->appends($request->only(['search', 'cuisine', 'discount']));

        // Kirim data ke view
        return view('restaurants.index', compact('restaurants'));
    }
    public function search(Request $request)
{
    // Query yang sama seperti di index()
    $query = Restaurant::query();

    if ($request->filled('search')) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    if ($request->filled('cuisine')) {
        $query->where('food_type', $request->cuisine);
    }

    if ($request->filled('discount')) {
        $query->where('discount_percentage', '>=', (int) $request->discount);
    }

    $restaurants = $query
        ->orderBy('created_at', 'desc')
        ->paginate(9)
        ->appends($request->only(['search', 'cuisine', 'discount']));

    // Tampilkan halaman layouts.search, bukan index
    return view('layouts.search', compact('restaurants'));
}

    
}

