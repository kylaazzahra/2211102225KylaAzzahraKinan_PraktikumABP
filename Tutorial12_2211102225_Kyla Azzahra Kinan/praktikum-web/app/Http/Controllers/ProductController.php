<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Variant;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('variants')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'variants.*.variant_name' => 'required|string|max:255',
        ]);

        // Simpan produk
        $product = Product::create([
            'nama' => $request->nama,
        ]);

        // Simpan variannya
        $product->variants()->createMany($request->variants);

        return redirect('/products')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect('/products')->with('success', 'Produk dihapus!');
    }
}
