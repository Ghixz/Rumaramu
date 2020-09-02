<?php

namespace App\Http\Controllers;

use App\Complaint;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complaints = Complaint::all();
        return view('admin/complaints/index', compact('complaints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'whatsapp' => 'required|numeric|digits_between:11,13',
            'keluhan' => 'required',
        ],[
                'nama.required' => 'Mohon untuk diisi.',
                'whatsapp.required' => 'Mohon untuk diisi.',
                'whatsapp.numeric' => 'Nomor anda tidak valid.',
                'whatsapp.digits_between' => 'Nomor anda tidak valid.',
                'keluhan.required' => 'Mohon untuk diisi.'
            ]);
        
        Complaint::create([
            'nama' => $request->nama,
            'whatsapp' => $request->whatsapp,
            'keluhan' => $request->keluhan
        ]);
        
        // Complaint::create($request->all());

        return redirect('/faq')->with('status','Terima Kasih atas Sarannya');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function show(Complaint $complaint)
    {
        return view('admin/complaints/details', compact('complaint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function edit(Complaint $complaint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complaint $complaint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complaint $complaint)
    {
        Complaint::destroy($complaint->id);
        return redirect('/complaints')->with('status','Data Berhasil Dihapus!');
    }
}
