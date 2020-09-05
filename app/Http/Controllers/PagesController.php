<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Product;
use App\Category;
use App\Testimony;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    // Home

    public function home()
    {
        $products = Product::all();
        $contacts = Contact::all();
        $categories = Category::all();
        $testimonies = Testimony::all();
        return view ('home', compact('products', 'testimonies', 'contacts', 'categories'));
    }

    // Kategori
    public function kategori(Request $request)
    {
        if($request->has('cari')){
            $products = Product::where('nama','like',"%".$request->cari."%")->get();
            $categories = Category::all();
        }
        else{
            $products = Product::all();
            $categories = Category::all();
        }
        return view ('kategori', compact('products', 'categories'));
    }

    public function kategoriSort($id)
    {   
        $categories = Category::all();
        $products = Product::where('categories_id', $id)->get();
        return view ('kategori', compact('products', 'categories'));
    }
    
    public function detail(Product $product)
    {   
        $products = Product::all();
        $contacts = Contact::all();
        return view ('detail', compact('products','product','contacts'));
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
        $contacts = Contact::all();
        return view ('tentang', compact('contacts'));
    }

    // Admin
    public function admin()
    {
        return view ('dashboard');
    
    }
}
