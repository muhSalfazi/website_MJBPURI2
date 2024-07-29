<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class ShowPesanController extends Controller
{
    //
       public function index(Request $request)
    {
    $query = Pesan::query();

    if ($request->filled('start_date') && $request->filled('end_date')) {
    $query->whereBetween('created_at', [
    $request->start_date . ' 00:00:00',
    $request->end_date . ' 23:59:59'
    ]);
    }

    $pesans = $query->get();

    return view('pesan.index', compact('pesans'));
    }

      public function destroy($id)
      {
      $pesan = Pesan::findOrFail($id);
      $pesan->delete();

      return redirect()->route('pesan.index')->with('success', 'Pesan berhasil dihapus.');
      }
}