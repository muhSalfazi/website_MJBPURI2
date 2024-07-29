<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;
use App\Models\Pengeluaran;

class WelcomeController extends Controller
{
    /**
     * Show the welcome page with total balance.
     */
    public function showWelcome()
    {
        // Calculate total donations and expenses
        $totalDonasi = Donasi::sum('nominal_uang');
        $totalPengeluaran = Pengeluaran::sum('nominal_uang');

        // Calculate net balance
        $totalSaldo = $totalDonasi - $totalPengeluaran;

        return view('welcome', [
            'totalDonasi' => $totalDonasi,
            'totalPengeluaran' => $totalPengeluaran,
            'totalSaldo' => $totalSaldo,
        ]);
    }

     public function donasi(Request $request)
     {
         $donasi = Donasi::all();
        return view('tbl_donasi',compact('donasi'));
     }
    
}