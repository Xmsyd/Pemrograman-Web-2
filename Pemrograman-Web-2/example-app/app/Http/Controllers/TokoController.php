<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Customer;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail ()
    {
        return view('toko/detail');
    }

    //P10 Tugas
    public function profile ()
    {
        return view('toko/profile');
    }

    // P11 Laravel
    public function admin ()
    {
        $products = Produk::all();
        return view ('toko/admin', compact('products'));
    }

    // P11 Laravel
    public function customer ()
    {
        $customers = Customer::all();
        return view ('toko/customer', compact('customers'));
    }
}
