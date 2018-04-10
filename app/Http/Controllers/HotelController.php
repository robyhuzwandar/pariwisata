<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function create()
    {
        $hotel = Hotel::all();
        return view('hotel.create', compact('hotel'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'fax' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'npwp' => 'required'
        ]);

        Hotel::create([
            'name' => request('name'),
            'phone' => request('phone'),
            'fax' => request('fax'),
            'email' => request('email'),
            'npwp' => request('npwp')
            
        ]);
        return redirect()->back()->withSuccess('Data Berhasil di Simpan');
    }
}
