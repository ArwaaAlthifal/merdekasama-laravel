<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminVisiController extends Controller
{
    //
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Visi',
            'visi' => Visi::first(),
            'content' => 'admin/visi/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request)
    {
        //
        $visi = Visi::first();
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            // 'cover' => 'required',
        ]);
        
        // upload cover
        if ($request->hasFile('cover')) {

            if($visi->cover != null) {
                unlink($visi->cover);
            }

            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();

            $storage = 'uploads/visis/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        } else {
            $data['cover'] = $visi->cover;
        }

        $visi->update($data);
        Alert::success('Sukses', 'Data Berhasil diupdate');
        return redirect('/admin/visi');
    }
}
