<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;
use App\Models\Pengeluaran;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->query('filter', 'month'); // Default to 'month'

        $query = [
            'today' => Carbon::today(),
            'month' => Carbon::now()->startOfMonth(),
            'year' => Carbon::now()->startOfYear(),
        ];

        $startDate = $query[$filter];
        $endDate = $filter === 'today' ? Carbon::today()->endOfDay() : Carbon::now()->endOfMonth();

        $totalDonasi = Donasi::whereBetween('created_at', [$startDate, $endDate])->sum('nominal_uang');
        $totalPengeluaran = Pengeluaran::whereBetween('created_at', [$startDate, $endDate])->sum('nominal_uang');

        // Calculate net balance
        $totalSaldo = $totalDonasi - $totalPengeluaran;

        // Determine filter text for display
        $filterText = ucfirst($filter);

        return view('dashboard', [
            'totalDonasi' => $totalDonasi,
            'totalPengeluaran' => $totalPengeluaran,
            'totalSaldo' => $totalSaldo,
            'filterText' => $filterText,
        ]);
    }
}