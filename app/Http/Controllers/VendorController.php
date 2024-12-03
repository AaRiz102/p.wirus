<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor; // Pastikan model Vendor sudah ada.

class VendorController extends Controller
{
    // Menampilkan halaman form registrasi vendor dan daftar vendor
    public function index()
    {
        $vendors = Vendor::all(); // Ambil semua data vendor
        return view('vendor.index', compact('vendors'));
    }

    // Menyimpan data vendor
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'store_name' => 'required|string|max:50',
            'store_description' => 'required|string',
            'address' => 'required|string',
            'password' => 'required|string|confirmed|min:8', // Validasi password
        ]);

        // Membuat vendor baru
        $vendor = new Vendor();
        $vendor->store_name = $request->store_name;
        $vendor->store_description = $request->store_description;
        $vendor->address = $request->address;
        $vendor->password = bcrypt($request->password); // Enkripsi password
        $vendor->save();

        // Redirect ke halaman daftar vendor
        return redirect()->route('vendor.index')->with('success', 'Vendor berhasil didaftarkan!');
    }
}
