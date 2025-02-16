<?php

namespace App\Http\Controllers;

use App\Models\finalReport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FinalReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $report = finalReport::with('user')->orderBy('created_at', 'desc')->get();
        $reportUser = finalReport::where('user_id', Auth::user()->id)->with('user')->orderBy('created_at', 'desc')->get();
        $reports = finalReport::where('user_id', Auth::user()->id)->with('user')->latest()->first();
        // dd($reports);
        return view('final_report.index', compact('report', 'reports', 'reportUser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function review(Request $request, $id)
    {
        $report = finalReport::find($id)->latest()->first();
        $report->status = '2';
        $report->reviewer_id = Auth::user()->id;
        $report->save();
        // dd($report, $id);
        return view('final_report.review', compact('report'));
    }

    public function reviewstore(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        // dd($request->all());
        $report = finalReport::find($id)->latest()->first();
        if ($request->feedback != null) {
            $report->feedback = $request->feedback;
            $report->save();
        }
        $report->status = $request->status;
        $report->save();

        // alihkan halaman ke halaman slider.index  
        return redirect()->route('report.index')->with('success', 'Berkas berhasil diupload.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:pdf,doc,docx',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        // ubah nama file gambar dengan angka random
        $fileName = time() . '.' . $request->file->extension();

        // upload file gambar ke folder slider
        Storage::putFileAs('public/report', $request->file('file'), $fileName);

        // insert data ke table sliders
        $report = finalReport::create([
            'user_id' => Auth::user()->id,
            'status' => '1',
            'berkas' => $fileName,
        ]);

        // alihkan halaman ke halaman slider.index
        return redirect()->route('report.index')->with('success', 'Berkas berhasil diupload.');
    }

    /**
     * Display the specified resource.
     */
    public function show(finalReport $finalReport, $id)
    {
        $finalReport = finalReport::with('user', 'reviewer')->find($id);
        // dd($finalReport);
        return view('final_report.show', compact('finalReport'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(finalReport $finalReport, $id)
    {
        $report = finalReport::find($id);
        return view('final_report.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, finalReport $finalReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(finalReport $finalReport, $id)
    {
        $report = finalReport::find($id);
        $report->delete();
        return redirect()->route('report.index')->with('success', 'Berkas berhasil dihapus.');
    }

    public function cetak_pdf(finalReport $finalReport, $id)
    {
        // $PurchaseOrder = PurchaseOrder::with('product', 'supplier', 'user')->find($id);
        // // dd($PurchaseOrder);

        // // Ambil data pivot
        // $pivotData = purchase_has_product_komponen::where('id_purchase', $PurchaseOrder->id)->get();
        // $pivotDataPurchase = product_has_purchase::where('id_purchase', $PurchaseOrder->id)->with('product')->get();
        // $pivotKomponen = Komponen_has_purchase::where('id_purchase', $PurchaseOrder->id)->with('komponen')->get();
        // $pivotkompro = purchase_has_product_kompro::where('id_purchase', $PurchaseOrder->id)->with('product')->get();
        // dd($pivotData, $pivotDataPurchase);

        // Ambil data komponen
        // $komponens = Komponen::whereIn('id', $pivotData->pluck('id_komponen'))->get();

        // Ambil data product
        // $products = Product::whereIn('id', $pivotDataPurchase->pluck('id_product'))->get();
        // dd($komponens, $products);

        $opciones_ssl = array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
            ),
        );

        $img_path = public_path('admin/img/logountirta.png');
        $extencion = pathinfo($img_path, PATHINFO_EXTENSION);
        $data = file_get_contents($img_path, false, stream_context_create($opciones_ssl));
        $img_base_64 = base64_encode($data);
        $path_img = 'data:image/' . $extencion . ';base64,' . $img_base_64;

        if (file_exists($img_path)) {
            $data = file_get_contents($img_path);
            $extencion = pathinfo($img_path, PATHINFO_EXTENSION);
            $img_base_64 = base64_encode($data);
            $path_img = "data:image/{$extencion};charset=utf-8;base64,{$img_base_64}";
        } else {
            dd("File tidak ditemukan!");
        }



        // Pastikan data dikirim sebagai array
        $pdf = Pdf::loadView('final_report.print', [
            'path_img' => $path_img,
        ]);

        // Download file PDF
        return $pdf->stream();
    }
}
