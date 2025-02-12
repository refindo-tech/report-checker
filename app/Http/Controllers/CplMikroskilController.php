<?php

namespace App\Http\Controllers;

use App\Models\CplMikroskil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CplMikroskilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mikroskill = CplMikroskil::all();
        // dd($mikroskill);
        return view('cpl_mikroskil.index', compact('mikroskill'));
    }

    public function updateInline(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:cpl_mikroskils,id',
            'column' => 'required|string',
            'value' => 'required',
        ]);

        $data = CplMikroskil::findOrFail($request->id);
        $data->update([
            $request->column => $request->value,
        ]);

        return response()->json(['success' => 'Data berhasil diperbarui!']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mikroskill = CplMikroskil::all();
        return response()->json($mikroskill);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $validation = Validator::make($request->all(), [
            'rubrik' => 'required|array',
            'sks' => 'required|array',
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        foreach ($request->rubrik as $index => $rubrik) {
            CplMikroskil::create([
                'name' => $request->rubrik[$index] ?? null,
                'sks' => $request->sks[$index] ?? null, // Gunakan null jika sks tidak ada
            ]);
        }

        return redirect()->route('mikroskil.index')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CplMikroskil $cplMikroskil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CplMikroskil $cplMikroskil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CplMikroskil $cplMikroskil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CplMikroskil $cplMikroskil)
    {
        //
    }
}
