<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
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
}
