<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TimezoneController extends Controller {
    function getTimezone(Request $request) { 
        if(isset($request->location)) {
            $location = $request->location;
            $todayDay = Carbon::now($location)->format('d-m-Y H:i:s');
            return view('timezone', compact('location', 'todayDay')); // return timezone view with location and today's date
        } else {
            return view('index'); // return index if no location
        }
    }   
}