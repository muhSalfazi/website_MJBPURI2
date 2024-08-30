<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use Illuminate\Support\Facades\Log;

class PesanController extends Controller
{
   public function store(Request $request)
   {
      // \Log::info('Metode penyimpanan dipanggil');
      // Validasi data input
      $request->validate([
         'name' => 'required|string|max:255',
         'phone' => 'required|string|max:15',
         'pesan' => 'required|string',
      ]);

      // Simpan data ke database
      Pesan::create($request->all());

      // Redirect dengan pesan sukses
      return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
   }

   public function markAccessed($id)
   {
      $pesan = Pesan::findOrFail($id);
      $pesan->is_accessed = true;
      $pesan->save();

      return response()->json(['success' => true]);
   }
}
