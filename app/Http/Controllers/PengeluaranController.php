<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengeluaran;
use Auth;

class PengeluaranController extends Controller
{
    public function Index()
    {
    $pengeluaran = Pengeluaran::get();
        return view('pengeluaran', [
            'pengeluaran' => $pengeluaran
        ]);
    }
    public function create()
    {
        $pengeluaran = Pengeluaran::all();
        return view('pengeluaran.create', [
            'pengeluaran'=> $pengeluaran,
        ]);
    }
}
