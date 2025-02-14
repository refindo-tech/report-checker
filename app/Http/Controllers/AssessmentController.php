<?php

namespace App\Http\Controllers;

use App\Models\CplMikroskil;
use App\Models\Kampus;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssessmentController extends Controller
{
    /**
     * Menampilkan daftar penilaian.
     */
    public function index()
    {
        $penilaian = CplMikroskil::all();
        $kampus = Kampus::all();
        $mahasiswa = Mahasiswa::all();

        return view('assessment.index', compact('penilaian', 'kampus', 'mahasiswa'));
    }

    /**
     * Mengambil data CPL Mikroskil dalam format JSON.
     */
    public function create()
    {
        $mikroskill = CplMikroskil::all();
        return response()->json($mikroskill);
    }

    /**
     * Menyimpan data penilaian baru.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_mahasiswa' => 'required|exists:mahasiswa,id',
            'id_cpl' => 'required|exists:cpl_mikroskil,id',
            'sks' => 'required|integer|min:1|max:10',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        CplMikroskil::create([
            'id_mahasiswa' => $request->id_mahasiswa,
            'id_cpl' => $request->id_cpl,
            'sks' => $request->sks,
        ]);

        return redirect()->route('mikroskil.index')->with('success', 'Penilaian berhasil disimpan.');
    }

    /**
     * Mengupdate data secara inline.
     */
    public function updateInline(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:cpl_mikroskil,id',
            'sks' => 'required|integer|min:1|max:10',
        ]);

        $mikroskill = CplMikroskil::findOrFail($request->id);
        $mikroskill->sks = $request->sks;
        $mikroskill->save();

        return response()->json(['success' => true, 'message' => 'Data berhasil diperbarui!']);
    }

    /**
     * Menghapus data berdasarkan ID.
     */
    public function destroy($id)
    {
        $cplMikroskil = CplMikroskil::findOrFail($id);
        $cplMikroskil->delete();

        return response()->json(['success' => true, 'message' => 'Data berhasil dihapus!']);
    }
}
