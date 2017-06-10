<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offers;

class OffersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['showOgrody', 'showWilla']]);
    }

    public function showOgrody() {

    	$offers = $this->getOffers('ogrody');

    	return view('ogrody', compact('offers'));
    }

    public function showWilla() {

    	$offers = $this->getOffers('willa');

    	return view('willa', compact('offers'));
	}

	private function getOffers($name) {

		return Offers::where('name', $name)
    		   			->orderBy('number')
    		   			->get();
	}

    public function addOffer() {

    	return view('admin.addoffer');

    }

    public function storeOffer() {

    	$offer = new Offers;
    	$offer->user_id = request()->user()->id;
    	$offer->name = request()->name;
    	$offer->number = (int)request()->number;
    	$offer->size = (double)request()->size;
    	$offer->garden = request()->garden;
    	$offer->parking = request()->parking;
    	$offer->mdm = request()->mdm;
    	$offer->path = request()->file('path')->store('public/images');
    	$offer->price = (int)request()->price;
    	$offer->availability = request()->availability;

    	//var_dump($offer);
    	$offer->save();

        session()->flash('message', 'Udało Ci się dodać ofertę');

    	return back();
    }

    public function offersList() {

        $ogrody = $this->getOffers('ogrody');
        $wille = $this->getOffers('willa');

       //return $willa;
        return view('admin.offerslist', compact('ogrody', 'wille'));

    }

    public function offerToEdit(Offers $offer) {

        return view('admin.editoffer', compact('offer'));

    }

    public function storeUpdatedOffer() {

        //return request()->all();

        if(array_key_exists('delete', request()->all())){
            Offers::where('id', request()->id)->delete();

            session()->flash('message', 'Udało Ci się usunąć ofertę');

            return redirect('admin');
        }

        $offer = Offers::where('id', request()->id)->first();
        //return $offer;
        //$offer = new Offers;
        $offer->user_id = request()->user()->id;
        $offer->name = request()->name;
        $offer->number = (int)request()->number;
        $offer->size = (double)request()->size;
        $offer->garden = request()->garden;
        $offer->parking = request()->parking;
        $offer->mdm = request()->mdm;
        if(array_key_exists('path', request()->all())){
        $offer->path = request()->file('path')->store('public/images');
        }
        $offer->price = (int)request()->price;
        $offer->availability = request()->availability;

        //var_dump($offer);
        $offer->save();

        session()->flash('message', 'Udało Ci się zmienić ofertę');
        return redirect('admin');
    }


    

        
}
