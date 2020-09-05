<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\User;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.admins.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admins.create');
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
            'email' => 'required',
            'password' => 'required'
        ],[
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'email.required' => 'Email Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong'
        ]);

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(60) //embo
        ]);

        return redirect('/admins')->with('status','Data Berhasil Ditambahkan!');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $user = User::find($id);
        return view('admin.admins.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required'
        ],[
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'email.required' => 'Email Tidak Boleh Kosong',
            'password.required' => 'Password Tidak Boleh Kosong'
        ]);

        User::where('id', $id)
            ->update([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(60) //embo
        ]);

        return redirect('/admins')->with('status','Data Berhasil Ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/admins')->with('status','Data Berhasil Dihapus!');
    }
}
