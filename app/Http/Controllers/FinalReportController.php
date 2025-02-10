<?php

namespace App\Http\Controllers;

use App\Models\finalReport;
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
        $report = finalReport::where('user_id', Auth::user()->id)->with('user')->orderBy('created_at', 'desc')->get();
        $reports = finalReport::where('user_id', Auth::user()->id)->with('user')->latest()->first();
        return view('final_report.index', compact('report', 'reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function review(Request $request, $id)
    {
        $report = finalReport::find($id)->latest()->first();
        $report->status = '2';
        $report->save();
        // dd($report, $id);
        return view('final_report.review', compact('report'));
    }

    public function reviewstore(Request $request, $id)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'status' => 'required',
            'feedback' => 'string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $report = finalReport::find($id)->latest()->first();
        $report->status = $request->status;
        $report->feedback = $request->feedback;
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
    public function show(finalReport $finalReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(finalReport $finalReport)
    {
        //
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
    public function destroy(finalReport $finalReport)
    {
        //
    }
}
