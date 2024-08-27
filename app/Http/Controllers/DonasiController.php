<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;
use Mpdf\Mpdf;
use Illuminate\Support\Facades\Gate;

class DonasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('throttle:60,1')->only(['store', 'update', 'destroy']);
    }

    public function index(Request $request)
    {
        $query = Donasi::query();

        // Apply date filters if provided
        if ($request->has('start_date') && $request->has('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            
            // Sanitize input to prevent any malformed data
            $query->whereBetween('created_at', [filter_var($startDate, FILTER_SANITIZE_STRING), filter_var($endDate, FILTER_SANITIZE_STRING) . ' 23:59:59']);
        }

        // Fetch donations sorted by created_at in descending order
        $donasi = $query->orderBy('created_at', 'desc')->get();

        return view('donasi.showdata', compact('donasi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'nominal_uang' => 'required|numeric',
            'alamat' => 'required|string',
            'kategori' => 'sometimes|string',
            'tgl_donasi' => 'required|date'
        ]);

        Donasi::create($request->all());

        return redirect()->route('donasi.index')->with('msg', 'Donasi created successfully.')->with('error', false);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'nominal_uang' => 'nullable|numeric',
            'alamat' => 'nullable|string',
            'kategori' => 'nullable|string|max:255',
            'tgl_donasi' => 'sometimes|date'
        ]);

        $donasi = Donasi::findOrFail($id);

        $data = $request->only(['name', 'nominal_uang', 'alamat', 'kategori', 'tgl_donasi']);

        foreach ($data as $key => $value) {
            if (is_null($value)) {
                unset($data[$key]);
            }
        }

        $donasi->update($data);

        return redirect()->route('donasi.index')->with('msg', 'Donasi updated successfully.')->with('error', false);
    }

    public function destroy($id)
    {
      

        $donasi = Donasi::find($id);
        $donasi->delete();

        return redirect()->route('donasi.index')->with('msg', 'Donasi deleted successfully.')->with('error', false);
    }

    public function viewpdf()
    {
        $donasi = Donasi::all();

        $html = view('export_pdf', compact('donasi'))->render();

        $mpdf = new Mpdf();

        $mpdf->WriteHTML($html);

        return $mpdf->Output('donasi.pdf', 'D');
    }
}
