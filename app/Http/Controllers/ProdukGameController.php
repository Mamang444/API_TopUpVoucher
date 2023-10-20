<?php

namespace App\Http\Controllers;

use App\Models\ProdukGame;
use Illuminate\Http\Request;

class ProdukGameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = ProdukGame::all();
        return $produk;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new ProdukGame();
        $user->nama_produk = $request->input('nama_produk');
        $user->pengembang = $request->input('pengembang');
        $user->harga = $request->input('harga');
        $user->image = $request->input('image');
        $user->deskripsi = $request->input('deskripsi');
        $user->save();

        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = ProdukGame::find($id);

        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json($data, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProdukGame $produkGame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProdukGame $produkGame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProdukGame $produkGame)
    {
        //
    }
}
