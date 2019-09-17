<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripController extends Controller
{


    public function create(Request $request)
         {
           $trips = new Trip();

             $trips->country = $request->input('country');
             $trips->accommodation = $request->input('accommodation');
             $trips->checkin = $request->input('checkin');
             $trips->checkout = $request->input('checkout');
             $trips->nop = $request->input('nop');
             $trips->other = $request->input('other');

             $trips->save();
             return response()->json($trips);




         }
}
