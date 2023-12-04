<?php

namespace App\Http\Controllers;

use App\Models\showroom_mobil;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function create(){
        return view('showroom.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'brand' => 'required',
            'warna' => 'required',
            'tipe'=> 'required',
            'harga' => 'required'
        ]);

        showroom_mobil::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'warna' => $request->warna,
            'tipe'=> $request->tipe,
            'harga' => $request->harga,
        ]);
    }
    public function index(){
        $showroom_mobil = showroom_mobil::all();

        return view('showroom_mobil.showroom_mobil', compact('showroom_mobil'));
    }
}


