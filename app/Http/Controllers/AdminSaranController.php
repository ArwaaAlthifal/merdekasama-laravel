<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Saran',
            'saran' => Saran::OrderBy('created_at', 'desc')->get(),
            'content' => 'admin/saran/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pesan = Saran::find($id);
        $pesan->is_read = 1;
        $pesan->save();

        $data = [
            'title' => 'Manajemen Saran',
            'saran' => $pesan,
            'content' => 'admin/saran/show'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pesan = Saran::find($id);


        $pesan->delete();
        Alert::success('Sukses', 'Data Berhasil dihapus');
        return redirect('/admin/saran');
    }
}
