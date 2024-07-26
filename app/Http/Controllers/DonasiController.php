<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;

class DonasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
    $query = Donasi::query();

    // Apply date filters if provided
    if ($request->has('start_date') && $request->has('end_date')) {
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');

    $query->whereBetween('created_at', [$startDate, $endDate . ' 23:59:59']);
    }

    // Fetch donations sorted by created_at in descending order
    $donasi = $query->orderBy('created_at', 'desc')->get();

    return view('donasi.showdata', compact('donasi'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nominal_uang' => 'required',
            'alamat' => 'required',
            'keterangan' => 'sometimes',
        ]);

        Donasi::create($request->all());
        return redirect()->route('donasi.index')->with('msg', 'Donasi created successfully.')->with('error', false);
        
    }


    public function update(Request $request, $id)
    {
        // Validate the request with nullable fields
        $request->validate([
            'name' => 'nullable|string|max:255',
            'nominal_uang' => 'nullable|numeric',
            'alamat' => 'nullable|string',
            'keterangan' => 'nullable|string|max:255',
        ]);

        // Find the record by ID or fail
        $donasi = Donasi::findOrFail($id);

        // Update only fields that are present in the request
        $data = $request->only(['name', 'nominal_uang', 'alamat', 'keterangan']);

        // Avoid setting fields to null if they are not provided in the request
        foreach ($data as $key => $value) {
            if (is_null($value)) {
                unset($data[$key]);
            }
        }

        // Perform the update
        $donasi->update($data);

        // Redirect with a success message
       return redirect()->route('donasi.index')->with('msg', 'Donasi Update successfully.')->with('error', false);
    }

    public function destroy($id)
    {
        $donasi = Donasi::find($id);
        $donasi->delete();
      return redirect()->route('donasi.index')->with('msg', 'Donasi Deleted successfully.')->with('error', false);
    }
}