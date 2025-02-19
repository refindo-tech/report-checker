<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class KampusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kampus = Kampus::where('id', Auth::user()->id_kampus)->get();
        // dd($kampuses);
        return view('kampus.index', compact('kampus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kampus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:kampuses',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Kampus::create([
            'name' => $request->name,
        ]);
        return redirect()->route('kampus.index')->with('success', 'Nama kampus berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kampus $kampus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kampus $kampus, $id)
    {
        $kampus = Kampus::find($id);
        return view('kampus.edit', compact('kampus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kampus $kampus, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:kampuses,name,' . $id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $kampus = Kampus::findorFail($id);
        $kampus->update([
            'name' => $request->name,
        ]);
        return redirect()->route('kampus.index')->with('success', 'Nama kampus berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kampus $kampus, $id)
    {
        $kampus = Kampus::findorFail($id);
        $kampus->delete();

        return redirect()->route('kampus.index')->with('success', 'Nama kampus berhasil dihapus.');
    }
}
