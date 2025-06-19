<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeContactController extends Controller
{
    //
    function index()
    {
        $data = [
            'content' => 'home/contact/index'
        ];
        return view('home.layouts.wrapper', $data);
    }

    function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required'
        ]);
        Saran::create($data);
        Alert::success('Sukses', 'Pesan anda berhasil terkirim');
        return redirect('/contact');
    }
}
