<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    // Home

    public function home()
    {
        return view ('home');
    }

    // Kategori
    public function kategori()
    {
        $products = Product::all();
        return view ('kategori', compact('products'));
    }

    public function kategoriSort($id)
    {
        if($id == 1){
            $products = Product::where('kategori', 'Pernikahan')
                        ->get();
            return view ('kategori', compact('products'));
        } 
        elseif($id == 2){
            $products = Product::where('kategori', 'Khitanan')
                        ->get();
            return view ('kategori', compact('products'));
        } 
        elseif($id == 3){
            $products = Product::where('kategori', 'Wisuda')
                        ->get();
            return view ('kategori', compact('products'));
        } 
        elseif($id == 4){
            $products = Product::where('kategori', 'Ulang Tahun')
                        ->get();
            return view ('kategori', compact('products'));
        } 
        elseif($id == 5){
            $products = Product::where('kategori', 'Tahlilan')
                        ->get();
            return view ('kategori', compact('products'));
        } 
        elseif($id == 6){
            $products = Product::where('kategori', 'Pindah Tugas')
                        ->get();
            return view ('kategori', compact('products'));
        } 
        elseif($id == 7){
            $products = Product::where('kategori', 'Parcel')
                        ->get();
            return view ('kategori', compact('products'));
        } 
        elseif($id == 8){
            $products = Product::where('kategori', 'Custom')
                        ->get();
            return view ('kategori', compact('products'));
        }
    }

    public function kategoriCari(Request $request){
        $cari = $request->cari;

        $products = DB::table('products')
                    ->where('nama','like',"%".$cari."%")
                    ->paginate();

    return view('kategori', compact('products'));
    }
    
    public function detail(Product $product)
    {   
        $products = Product::all();
        return view ('detail', compact('products','product'));
    }

    // FAQ
    public function faqIndex()
    {
        $faqs = Faq::all();
        return view('faq', compact('faqs'));
    }
    public function faqShow()
    {
        return view('faq', compact('faq'));
    }

    // Tentang
    public function tentang()
    {
        return view ('tentang');
    }

    // Admin
    public function admin()
    {
        return view ('dashboard');
    
    }
}
