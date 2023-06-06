<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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
        $products = Product::all();
        return view ('toko/admin', compact('products'));
    }

    // P11 Laravel
    public function customer ()
    {
        $customers = Customer::all();
        return view ('toko/customer', compact('customers'));
    }

    // P12 CRUD Laravel
    public function  create ()
    {
        return view ('toko/create');
    }

    public function store (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required', 
        ]);

        Product::create($request->all());
        return redirect()->route('produk.admin')->with('succes', 'Product berhasil di simpan');
    }

    public function edit (Product $product)
    {
        return view ('toko/edit', compact('product'));
    }

    public function destroy (Product $product)
    {
        $product->delete();

        return redirect()->route('produk.admin')->with('delete', 'Product Berhasil Dihancurkan');
    }

    public function update (Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product->update($request->all());
        return redirect()->route('produk.admin')->with('update', 'Product Updated Completed');
        }
}