<?php

namespace App\Http\Controllers;

use App\Models\Scoring;
use Illuminate\Http\Request;

class ScoringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('scoring.index', [
            'scoring' => Scoring::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('scoring.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'ReservationId' => 'required',
            'Name' => 'required',
            'Points' => 'required',
            'IsActive' => 'required',
            'Note' => 'nullable',
        ]);


        Scoring::create([
            'ReservationId' => $request->ReservationId,
            'name' => $request->Name,
            'points' => $request->Points,
            'isactive' => $request->IsActive,
            'note' => $request->Note,
        ]);

        return redirect()->route('scoring.index')
            ->with('success', 'Scoring created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Scoring $scoring)
    {
        return view('scoring.show', [
            'scoring' => $scoring,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scoring $scoring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Scoring $scoring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scoring $scoring)
    {
        $scoring->delete();

        return redirect()->route('scoring.index')
            ->with('success', 'Scoring deleted successfully');
    }
}
