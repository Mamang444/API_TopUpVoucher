<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::all();
        return $artikel;
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
        $user = new Artikel();
        $user->title = $request->input('title');
        $user->subtitle = $request->input('subtitle');
        $user->deskripsi = $request->input('deskripsi');
        $user->image = $request->input('image');
        $user->save();

        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Artikel::find($id);

        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json($data, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = Artikel::find($id);

        // if (!$data) {
        //     return response()->json(['message' => 'Data tidak ditemukan'], 404);
        // }

        // // Update data
        $user->update([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'deskripsi' => $request->input('deskripsi'),
            'image' => $request->input('image')
        ]);
        return response()->json(['message' => 'Data berhasil diperbarui'], 200);
        // return $user->title;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Artikel::find($id);

        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Data berhasil dihapus'], 200);
    }
}
