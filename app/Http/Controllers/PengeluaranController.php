<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;

class PengeluaranController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query = Pengeluaran::query();

        // Apply date filters if provided
        if ($request->has('start_date') && $request->has('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');

            $query->whereBetween('created_at', [$startDate, $endDate . ' 23:59:59']);
        }

        // Fetch donations sorted by created_at in descending order
        $pengeluaran = $query->orderBy('created_at', 'desc')->get();

        return view('pengeluaran.index', compact('pengeluaran'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nominal_uang' => 'required|numeric',
            'keterangan' => 'required|string|max:255',
        ]);

        Pengeluaran::create($request->all());
        return redirect()->route('pengeluaran.index')->with('msg', 'Pengeluaran created successfully.')->with('error',
        false);;
    }

    public function update(Request $request, $id)
    {
        // Validate the request with nullable fields
        $request->validate([
            'name' => 'nullable|string|max:255',
            'nominal_uang' => 'nullable|numeric',
            'keterangan' => 'nullable|string',
        ]);

        // Find the record by ID or fail
        $donasi = Pengeluaran::findOrFail($id);

        // Update only fields that are present in the request
        $data = $request->only(['name', 'nominal_uang', 'keterangan']);

        // Avoid setting fields to null if they are not provided in the request
        foreach ($data as $key => $value) {
            if (is_null($value)) {
                unset($data[$key]);
            }
        }

        // Perform the update
        $donasi->update($data);

        // Redirect with a success message
        return redirect()->route('pengeluaran.index')->with('msg', 'Pengeluaran updated successfully.')->with('error', false);
        ;
    }


    public function destroy($id)
    {
        $donasi = Pengeluaran::find($id);
        $donasi->delete();
        return redirect()->route('pengeluaran.index')->with('msg', 'Pengeluaran deleted successfully.')->with('error', false);
        ;
    }

}