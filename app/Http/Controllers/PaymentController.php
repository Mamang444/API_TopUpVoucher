<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pembayaran(Request $request) {
        $data = User::find($request->input('id'));
        if ($data->saldo < $request->input('harga_produk')) {
            return "Saldo tidak cukup";
        }
        $saldo = $data->saldo - $request->input('harga_produk');
        $data->update(['saldo' =>$saldo]);

        return $data;
    }
}
