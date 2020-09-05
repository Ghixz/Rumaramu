<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin/products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin/products/create', compact('categories'));
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
            'categories_id' => 'required',
            'harga' => 'required|numeric|max:1000000000',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpeg'
        ],[
                'nama.required' => 'Nama tidak boleh kosong.',
                'categories_id.required' => 'Kategori tidak boleh kosong.',
                'deskripsi.required' => 'Deskripsi tidak boleh kosong.',
                'harga.required' => 'Harga tidak boleh kosong.',
                'harga.numeric' => 'Harga hanya berbentuk nominal.',
                'harga.max' => 'Harga hanya bisa < 1 Miliar.',
                'gambar.required' => 'Gambar tidak boleh kosong.',
                'gambar.mimes' => 'File gambar harus memiliki format: jpeg.'
            ]);
        
        if($request->hasfile('gambar')){
            $fileGambar = file_get_contents($_FILES['gambar']['tmp_name']); 
        }
        
        Product::create([
            'nama' => $request->nama,
            'categories_id' => $request->categories_id,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $fileGambar
        ]);
        
        // Product::create($request->all());

        return redirect('/products')->with('status','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin/products/details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {   
        $categories = Category::all();
        return view('admin/products/edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nama' => 'required',
            'categories_id' => 'required',
            'harga' => 'required|numeric|max:1000000000',
            'deskripsi' => 'required',
            'gambar' => 'required|mimes:jpeg'
        ],[
                'nama.required' => 'Nama tidak boleh kosong.',
                'categories_id.required' => 'Kategori tidak boleh kosong.',
                'deskripsi.required' => 'Deskripsi tidak boleh kosong.',
                'harga.required' => 'Harga tidak boleh kosong.',
                'harga.numeric' => 'Harga hanya berbentuk nominal.',
                'harga.max' => 'Harga hanya bisa < 1 Miliar.',
                'gambar.required' => 'Silahkan upload ulang gambar produk ini.',
                'gambar.mimes' => 'File gambar harus memiliki format: jpeg.'
            ]);

        if($request->hasfile('gambar')){
            $fileGambar = file_get_contents($_FILES['gambar']['tmp_name']); 
        }

        Product::where('id', $product->id)
            ->update([
                'nama' => $request->nama,
                'categories_id' => $request->categories_id,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'gambar' => $fileGambar
            ]);
        return redirect('/products')->with('status','Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/products')->with('status','Data Berhasil Dihapus!');
    }
}
