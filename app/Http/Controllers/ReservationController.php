<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reservation');
    }
   
    /**
     * Upload data.
     */
    public function upload()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ReservationModel $reservationModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReservationModel $reservationModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReservationModel $reservationModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReservationModel $reservationModel)
    {
        //
    }
}
