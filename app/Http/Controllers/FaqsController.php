<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('admin/faqs/index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/faqs/create');
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
            'pertanyaan' => 'required',
            'jawaban' => 'required'
        ],[
                'pertanyaan.required' => 'Pertanyaan tidak boleh kosong.',
                'jawaban.required' => 'Jawaban tidak boleh kosong.',
            ]);
        
        Faq::create($request->all());
        return redirect('/faqs')->with('status','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        return view('admin/faqs/index', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('admin/faqs/edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required'
        ],[
                'pertanyaan.required' => 'Pertanyaan tidak boleh kosong.',
                'jawaban.required' => 'Jawaban tidak boleh kosong.',
            ]);

        Faq::where('id', $faq->id)
            ->update([
                'pertanyaan' => $request->pertanyaan,
                'jawaban' => $request->jawaban
            ]);
        return redirect('/faqs')->with('status','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        Faq::destroy($faq->id);
        return redirect('/faqs')->with('status','Data Berhasil Dihapus!');
    }
}
