<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class PesanController extends Controller
{
   public function store(Request $request)
   {
   \Log::info('Store method called');
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

 

}