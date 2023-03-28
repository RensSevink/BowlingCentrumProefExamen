<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\ReservationModel;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = reservation::all();
        return view('reservation', compact('data'));
    }
   
    /**
     * Upload data.
     */
    public function upload(Request $request)
    {
        $reservation = new reservation;
        $reservation->id=$request->id;
        $reservation->UserId=$request->UserId;
        $reservation->reservationnumber=$request->reservationnumber;
        $reservation->reservationdate=$request->reservationdate;
        $reservation->reservationtime=$request->reservationtime;
        $reservation->bowlingalley=$request->bowlingalley;
        $reservation->helpfences=$request->helpfences;
        $reservation->numberofadults=$request->numberofadults;
        $reservation->numberofchildren=$request->numberofchildren;
        $reservation->openingtime=$request->openingtime;
        $reservation->isactive=$request->isactive;
        $reservation->note=$request->note;
        $reservation->created_at=$request->created_at;
        $reservation->updated_at=$request->updated_at;

        $reservation->save();
        return redirect()->back();
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
    public function view(ReservationModel $reservationModel)
    {
        return view('display');
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
