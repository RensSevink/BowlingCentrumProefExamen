<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class SpecialOccasionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('specialoccasion.index', [
            'specialoccasion' => Order::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('specialoccasion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'TypeOfOccasion' => 'nullable',
            'is_active' => 'required',
            'note' => 'nullable',
        ]);

        Order::create([
            'Food' => $request->Food,
            'Drinks' => $request->Drinks,
            'Price' => $request->Price,
            'is_active' => $request->IsActive,
            'note' => $request->Note,
        ]);

        return redirect()->route('specialoccasion.index')
            ->with('success', 'SpecialOccasion created successfully.');
    }
}