<?php

namespace App\Http\Controllers;

use App\Models\Produkternak;
use App\Models\Datatransaksi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProdukternakRequest;
use App\Http\Requests\UpdateProdukternakRequest;

class ProdukternakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('toko.produkternak', [
            'title' => 'Halaman Produk Ternak',
            "produkternaks" => Produkternak::all()
        ]);
    }
    /////////////////////cobacoba/////////////////
    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $product = Produkternak::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "product_name" => $product->product_name,
                "photo" => $product->photo,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
    /////////////////////cobacoba/////////////////

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProdukternakRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdukternakRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produkternak  $produkternak
     * @return \Illuminate\Http\Response
     */
    public function show(Produkternak $produkternak)
    {
        return view('toko.produk', [
            "title" => "Halaman Produk",
            'produkternak' => $produkternak
            // "datatransaksis" => Datatransaksi::with(['pembayarantransaksi', 'dataproduk'])->latest()->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produkternak  $produkternak
     * @return \Illuminate\Http\Response
     */
    public function edit(Produkternak $produkternak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdukternakRequest  $request
     * @param  \App\Models\Produkternak  $produkternak
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateProdukternakRequest $request, Produkternak $produkternak)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produkternak  $produkternak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produkternak $produkternak)
    {
        //
    }
}