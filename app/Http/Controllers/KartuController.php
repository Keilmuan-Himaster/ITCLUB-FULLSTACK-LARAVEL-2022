<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kartu;

class KartuController extends Controller
{
    public function index(){
        $data = Kartu::all();

        return view('kartu', compact('data'));
    }
}
