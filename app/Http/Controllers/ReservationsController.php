<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservations;
use App\Mail\ReservationMail;

class ReservationsController extends Controller
{

    public function __construct() {

        $this->middleware('auth', ['except' => 'storeReservation']);
    }
    
    
    public function storeReservation() {

    	//return request()->all();
    	$reservation = new Reservations;

    	$reservation->name = request()->name;
    	$reservation->phone = request()->phone;
    	$reservation->email = request()->email;
    	$reservation->apartment = request()->apartment;
    	$reservation->body = request()->body;
    	if(!array_key_exists('terms', request()->all())) {
    		return back();
    	}
    	$reservation->terms = request()->terms;

    	$reservation->save();

        \Mail::to(['marcinhe@interia.pl', 'hedrzak.marcin@gmail.com'])->send(new ReservationMail($reservation));

        session()->flash('message', 'Otrzymaliśmy Twoją wiadomość, skontaktujemy się najszybciej jak to tylko możliwe');

    	return redirect('/');

    }

    public function reservationsList() {

    	$reservations = Reservations::orderBy('created_at', 'DESC')->paginate(5);

    	return view('admin.reservations', compact('reservations'));

    }
    
}
