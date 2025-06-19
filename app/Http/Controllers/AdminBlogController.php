<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Blog',
            'blog' => Blog::get(),
            'content' => 'admin/blog/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'title' => 'Tambah Blog',
            'content' => 'admin/blog/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $data = $request->validate([
            'headline' => 'required',
            'desc' => 'required',
            // 'urutan' => 'required',
            'gambar' => 'required',
        ]);
        
        $data['urutan'] = 0;
        // upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();

            $storage = 'uploads/blogs/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        } else {
            $data['gambar'] = null;
        }

        Blog::create($data);
        Alert::success('Sukses', 'Data Berhasil ditambahkan');
        return redirect('/admin/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = [
            'title' => 'Update Blog',
            'blog' => Blog::find($id),
            'content' => 'admin/blog/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $blog = Blog::find($id);
        $data = $request->validate([
            'headline' => 'required',
            'desc' => 'required',
            // 'urutan' => 'required',
            // 'gambar' => 'required',
        ]);
        
        $data['urutan'] = 0;
        // upload gambar
        if ($request->hasFile('gambar')) {

            if($blog->gambar != null) {
                unlink($blog->gambar);
            }

            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();

            $storage = 'uploads/banners/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        } else {
            $data['gambar'] = $blog;
        }

        $blog->update($data);
        Alert::success('Sukses', 'Data Berhasil diupdate');
        return redirect('/admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $blog = Blog::find($id);

        if($blog->gambar != null) {
            unlink($blog->gambar);
        }
        
        $blog->delete();
        Alert::success('Sukses', 'Data Berhasil dihapus');
        return redirect('/admin/blog');
    }
}
