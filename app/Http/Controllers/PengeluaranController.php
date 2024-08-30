<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;
use Mpdf\Mpdf;

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
           // Apply date filters if provided
           if ($request->has('start_date') && $request->has('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');

            // Sanitize input to prevent any malformed data
            $query->whereBetween('tgl_pengeluaran', [filter_var($startDate, FILTER_SANITIZE_STRING), filter_var($endDate, FILTER_SANITIZE_STRING) . ' 23:59:59']);
        }

    
        

        // Fetch expenses sorted by created_at in descending order
        $pengeluaran = $query->orderBy('tgl_pengeluaran', 'desc')->get();

        return view('pengeluaran.index', compact('pengeluaran'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nominal_uang' => 'required|numeric',
            'keterangan' => 'required|string|max:255',
            'tgl_pengeluaran' => 'required|date',
        ]);

        Pengeluaran::create($request->all());

        return redirect()->route('pengeluaran.index')->with('msg', 'Pengeluaran created successfully.')->with('error', false);
    }

    public function update(Request $request, $id)
    {
        // Validate the request with nullable fields
        $request->validate([
            'name' => 'sometimes|max:255',
            'nominal_uang' => 'nullable|numeric',
            'keterangan' => 'nullable|string|max:255',
          'tgl_pengeluaran' => 'sometimes|date'
        ]);

        // Find the record by ID or fail
        $pengeluaran = Pengeluaran::findOrFail($id);

        // Update only fields that are present in the request
        $data = $request->only(['name', 'nominal_uang', 'keterangan','tgl_pengeluaran']);

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
    
        if (!$pengeluaran) {
            return redirect()->route('pengeluaran.index')
                             ->with('msg', 'Pengeluaran tidak ditemukan.')
                             ->with('error', true);
        }
    
        $pengeluaran->delete();
    
        return redirect()->route('pengeluaran.index')
                         ->with('msg', 'Pengeluaran berhasil dihapus.')
                         ->with('error', false);
    }

    public function pdfpengeluaran(Request $request)
{
    // Validate input dates
    $request->validate([
        'start_date' => 'nullable|date_format:Y-m-d',
        'end_date' => 'nullable|date_format:Y-m-d',
    ]);

    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');

    $query = Pengeluaran::query();

    // Apply date filters if provided
    if ($startDate && $endDate) {
        $query->whereBetween('tgl_pengeluaran', [
            $startDate . ' 00:00:00', 
            $endDate . ' 23:59:59'
        ]);
    }

    // Fetch data sorted by 'tgl_pengeluaran' in descending order
    $pengeluaran = $query->orderBy('tgl_pengeluaran', 'desc')->get();

    // Generate HTML view with dates
    $html = view('pengeluaranpdf', [
        'pengeluaran' => $pengeluaran,
        'start_date' => $startDate,
        'end_date' => $endDate
    ])->render();

    try {
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);

        return $mpdf->Output('pengeluaran.pdf', 'D');
    } catch (\Exception $e) {
        // Handle exception
        return response()->json(['error' => 'Failed to generate PDF'], 500);
    }
}

    
    
}
