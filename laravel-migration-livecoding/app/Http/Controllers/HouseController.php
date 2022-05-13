<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    //
    public function index(){
        $houses = House::all();

        // $this->createNewHouse("via santo spirito", "00442", 'Milano');

        return view('houses.index', ["houses" => $houses]);
    }

    public function createNewHouse($address, $postalCode, $city){
        $newHouse = new House();
        $newHouse->fill([
            'address' => $address,
            "postal_code" => $postalCode,
            'city' => $city,
            'region' => 'Lombardia',
            'nation' => 'Italia',
            'square_meters' => '90',
            'rooms' => 4,
            'bathrooms' => 1,
            'description' => 'Tipica casa milanese, incluse gratuitamente tre mesi di scorte di cotolette e cartoline del duomo e della madunnina',
            'price' => 4000000.90,
            'is_for_sale' => 1,
            'is_available' => 1,
            'image' => 'https://media-cdn.tripadvisor.com/media/vr-splice-j/01/da/fc/e3.jpg'
        ]);

        $newHouse->save();
    }
}
