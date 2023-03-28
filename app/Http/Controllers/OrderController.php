<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('order.index', [
            'order' => Order::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Food' => 'nullable',
            'Drinks' => 'nullable',
            'Price' => 'required',
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

        return redirect()->route('order.index')
            ->with('success', 'Order created successfully.');
    }
}