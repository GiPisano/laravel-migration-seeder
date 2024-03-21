<?php

namespace App\Http\Controllers;

use App\Models\train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::whereDate('departure_time', today()->toDateString())->get();
        return view('home', compact('trains'));
    }
}
