<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of reservations with linked users
     * and resources. Ordered by the begining
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Reservation::with('user', 'resource')
            ->orderBy('begin')
            ->get();
    }

    /**
     * Store a newly created reservation in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    //TODO: Get user_id out of here when Auth is working
    {
        $reservation = Reservation::create(request([
            'name',
            'user_id',
            'resource_id',
            'begin',
            'end'
        ]));
        return $reservation->load('user', 'resource');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        return $reservation->load('user', 'resource');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        $reservation->update(request()->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
    }
}
