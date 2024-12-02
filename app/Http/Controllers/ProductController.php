<?php

namespace App\Http\Controllers;

use App\Models\Product;  // Pastikan ini ada
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan daftar produk
    public function index()
    {
        $products = Product::all();  // Ambil semua produk dari database
        return view('products.index', compact('products'));  // Kirim data produk ke view
    }

    // Menampilkan form tambah produk
    public function create()
    {
        $categories = Category::all();  // Ambil semua kategori produk
        return view('products.create', compact('categories'));  // Tampilkan form tambah produk
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create($request->all());  // Simpan data produk baru ke database
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }
}
