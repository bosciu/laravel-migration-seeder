<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class TravelController extends Controller
{
    public function index(){
        $packages = Package::all();
        return view('travel', compact('packages'));
    }
}
