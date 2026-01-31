<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        $products = [
            ['name' => 'Pompa Sentrifugal', 'desc' => 'Efisiensi tinggi, aliran besar.', 'price' => 'Hubungi Kami'],
            ['name' => 'Pompa Submersible', 'desc' => 'Tahan karat, untuk air limbah.', 'price' => 'Hubungi Kami'],
            ['name' => 'Pompa Booster', 'desc' => 'Meningkatkan tekanan air.', 'price' => 'Hubungi Kami'],
        ];
        
        return view('products', compact('products'));
    }

    public function contact()
    {
        return view('contact');
    }
}