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
        return redirect()->route('produk.admin')->with('success', 'Product berhasil di simpan');
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

    // Tugas P12 CRUD
    public function create2 ()
    {
        return view ('toko/create2');
    } 

    // Membuat fungsi store2 untuk menginsert data
    public function store2 (Request $request)
    {
        // Variable request perlu di validasi 
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required',
        ]);

        // Agar query sellect dapat berjalan
        Customer::create($request->all());
        return redirect()->route('customer.customer')->with('success', 'Customer berhasil disimpan');
    }

    // Membuat fungsi edit2 untuk menampilkan data dari data yang telah dipilih untuk di edit
    public function edit2 (Customer $customer)
    {
        // return digunakan untuk mengembalikan/menampilkan data
        return view ('toko/edit2', compact('customer'));
    }

    // membuat sebuah fungsi destroy2 untuk menghapus data
    // fungsi ini juga yang akan di panggil di route
    public function destroy2 (Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.customer')->with('delete', 'Customer Has Been Slain');       
    }

    // membuat sebuah fungsi update2 untuk melakukan perubahan dari data yang telah 
    // ditampilkan oleh fungsi edit2
    public function update2 (Request $request, Customer $customer)
    {
        // memvalidasi data agar variabel request yang dipanggil diatas tidak mubazir 
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required',
        ]);

        // agar variabel customer yang dipanggil diatas tidak mubazir juga maka kita panggil variabel
        // customer agar melaukan tugas nya yaitu mengeksekusi querinya
        $customer->update($request->all());
        // return untuk mengembalikan data sedangkan redirect agar refresh halamnya secara otomastis
        // route sendiri adalah arah halaman yang akan ditampilkan hasilnya. sedangkan with untuk
        // keterangan jika code sebelumnya berhasil dijalankan dengan benar
        return redirect()->route('customer.customer')->with('update', 'Customer Update Completed');
    }
}