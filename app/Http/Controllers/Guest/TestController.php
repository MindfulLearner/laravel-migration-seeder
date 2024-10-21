<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $Trains = Train::all();
        return view('welcome', compact('Trains'));
    }
}
