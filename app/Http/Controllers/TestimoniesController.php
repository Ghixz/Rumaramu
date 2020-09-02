<?php

namespace App\Http\Controllers;

use App\Testimony;
use Illuminate\Http\Request;

class TestimoniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonies = Testimony::all();
        return view('admin/testimonies/index', compact('testimonies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/testimonies/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'testimoni' => 'required',
            'foto' => 'required|mimes:jpeg'
        ],[
                'nama.required' => 'Nama tidak boleh kosong.',
                'jabatan.required' => 'jabatan tidak boleh kosong.',
                'testimoni.required' => 'Kategori tidak boleh kosong.',
                'foto.required' => 'Foto tidak boleh kosong.',
                'foto.mimes' => 'File foto harus memiliki format: jpeg.'
            ]);

        if($request->hasfile('foto')){
            $fileFoto = file_get_contents($_FILES['foto']['tmp_name']); 
        }
        
        Testimony::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'testimoni' => $request->testimoni,
            'foto' => $fileFoto
        ]);
        
        // Testimony::create($request->all());

        return redirect('/testimonies')->with('status','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function show(Testimony $testimony)
    {
        return view('admin/testimonies/details', compact('testimony'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimony $testimony)
    {
        return view('admin/testimonies/edit', compact('testimony'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimony $testimony)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'testimoni' => 'required',
            'foto' => 'required|mimes:jpeg'
        ],[
                'nama.required' => 'Nama tidak boleh kosong.',
                'jabatan.required' => 'jabatan tidak boleh kosong.',
                'testimoni.required' => 'Kategori tidak boleh kosong.',
                'foto.required' => 'Silahkan upload ulang foto.',
                'foto.mimes' => 'File foto harus memiliki format: jpeg.'
            ]);

        if($request->hasfile('foto')){
            $fileFoto = file_get_contents($_FILES['foto']['tmp_name']); 
        }

        Testimony::where('id', $testimony->id)
            ->update([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'testimoni' => $request->testimoni,
                'foto' => $fileFoto
            ]);
        return redirect('/testimonies')->with('status','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimony $testimony)
    {
        Testimony::destroy($testimony->id);
        return redirect('/testimonies')->with('status','Data Berhasil Dihapus!');
    }
}
