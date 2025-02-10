<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('dosen', 'mahasiswa')->get();

        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        // dd(request()->all());

        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', 'string', 'max:255'],
        ];

        $validated = $request->validate($rules, [
            'email.unique' => 'Email already exists.',
        ]);

        if (request()->role == 'Dosen') {
            // Simpan data ke database
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
            ]);

            // assign Role menggunakan spatie
            $user->assignRole('Dosen');

            Dosen::create([
                'user_id' => $user->id,
                'nip' => $request->nip,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'address' => $request->alamat,
                'kampus' => $request->kampus,
            ]);
        } else if (request()->role == 'Mahasiswa') {
            // Simpan data ke database
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
            ]);
            // assign Role menggunakan spatie
            $user->assignRole('Mahasiswa');

            Mahasiswa::create([
                'user_id' => $user->id,
                'nim' => $request->nim,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'address' => $request->alamat,
                'kampus' => $request->kampus,
                'prodi' => $request->prodi,
                'semester' => $request->semester,
            ]);
        } else {
            // Simpan data ke database
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
            ]);
            // assign Role menggunakan spatie
            $user->assignRole('Admin');
        }


        // menampilkan message success
        session()->flash('added', 'Data Berhasil Ditambahkan.');

        // Arahkan ke halaman
        return redirect()->route('user.index')->with('success', 'Data berhasil ditambahkan.');;
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        // dd($users->name);

        return view('user.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $user = User::with('dosen', 'mahasiswa')->find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ];

        $validated = $request->validate($rules, [
            'email.unique' => 'Email already exists.',
        ]);

        if ($user->dosen != null) {
            // Simpan data ke database
            // update ke database
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            $dosen = Dosen::where('user_id', $user->id)->first();

            $dosen->update([
                'user_id' => $user->id,
                'nip' => $request->nip,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'address' => $request->alamat,
                'kampus' => $request->kampus,
            ]);
        } else if ($user->mahasiswa != null) {
            // Simpan data ke database
            // update ke database
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role
            ]);

            $mahasiswa = Mahasiswa::where('user_id', $user->id)->first();

            $mahasiswa->update([
                'user_id' => $user->id,
                'nim' => $request->nim,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'address' => $request->alamat,
                'kampus' => $request->kampus,
                'prodi' => $request->prodi,
                'semester' => $request->semester,
            ]);
        } else {
            // update ke database
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role
            ]);
        }

        return redirect()->route('user.index')->with('success', 'Data berhasil diubah.');
    }

    public function changePassword(Request $request)
    {
        // Validasi input
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Ambil user yang sedang login
        $user = User::find(Auth::id());

        // Cek apakah password lama benar
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password lama salah']);
        }

        // Update password baru
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('profil_admin')->with('success', 'Profile berhasil diperbarui.');
    }


    public function show($id)
    {
        $user = User::with('dosen', 'mahasiswa', 'roles')->findOrFail($id);
        // dd($user);
        return view('user.show', compact('user'));
    }
    public function destroy($id)
    {
        // Ambil data user berdasarkan id
        $user = User::find($id);
        $dosen = Dosen::where('user_id', $user->id)->first();
        $mahasiswa = Mahasiswa::where('user_id', $user->id)->first();
        // dd($user);

        // Hapus data user
        $user->delete();

        if ($dosen != null) {
            $dosen->delete();
        } else if ($mahasiswa != null) {
            $mahasiswa->delete();
        }

        return redirect()->route('user.index')->with('success', 'Data berhasil dihapus.');
    }
}
