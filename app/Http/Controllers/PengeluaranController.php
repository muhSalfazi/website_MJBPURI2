<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;
use Illuminate\Support\Facades\Gate;

class PengeluaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('throttle:60,1')->only(['store', 'update', 'destroy']);
    }

    public function index(Request $request)
    {
        $query = Pengeluaran::query();

        // Apply date filters if provided
        if ($request->has('start_date') && $request->has('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');

            // Sanitize input to prevent any malformed data
            $query->whereBetween('created_at', [
                filter_var($startDate, FILTER_SANITIZE_STRING), 
                filter_var($endDate, FILTER_SANITIZE_STRING) . ' 23:59:59'
            ]);
        }

        // Fetch expenses sorted by created_at in descending order
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

        return redirect()->route('pengeluaran.index')->with('msg', 'Pengeluaran created successfully.')->with('error', false);
    }

    public function update(Request $request, $id)
    {
        // Validate the request with nullable fields
        $request->validate([
            'name' => 'nullable|string|max:255',
            'nominal_uang' => 'nullable|numeric',
            'keterangan' => 'nullable|string|max:255',
        ]);

        // Find the record by ID or fail
        $pengeluaran = Pengeluaran::findOrFail($id);

        // Update only fields that are present in the request
        $data = $request->only(['name', 'nominal_uang', 'keterangan']);

        // Avoid setting fields to null if they are not provided in the request
        foreach ($data as $key => $value) {
            if (is_null($value)) {
                unset($data[$key]);
            }
        }

        // Perform the update
        $pengeluaran->update($data);

        // Redirect with a success message
        return redirect()->route('pengeluaran.index')->with('msg', 'Pengeluaran updated successfully.')->with('error', false);
    }

    public function destroy($id)
    {
    

        $pengeluaran = Pengeluaran::find($id);
        $pengeluaran->delete();

        return redirect()->route('pengeluaran.index')->with('msg', 'Pengeluaran deleted successfully.')->with('error', false);
    }
}
