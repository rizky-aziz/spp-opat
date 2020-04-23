<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    public function index() {
        $data['siswa'] = User::select('users.id', 'users.nis', 'users.name', 'kelas.nama_kelas', 'users.alamat', 'users.telepon', 'users.email', 'users.password_helper')->join('kelas', 'users.id_kelas', '=', 'kelas.id')->where('status', 'siswa')->get();
        $data['kelas'] = Kelas::join('periode', 'kelas.id_periode', '=', 'periode.id')->get();
        return view('Siswa.index', $data);
    }

    public function tambah(Request $request){
        $rule = [
            'nis' => 'required',
            'name' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];
        $this->validate($request, $rule);

        $kelas = Kelas::where('nama_kelas', $request->kelas)->first();
        User::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'id_kelas' => $kelas->id,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'password_helper' => $request->password,
            'status' => 'siswa',
        ]);
        return redirect()->back()->with('message', 'Data berhasil ditambahkan');
    }

    public function ubah(Request $request, $id){
        $user = User::find($id);
        $kelas = Kelas::where('nama_kelas', $request->kelas)->first();
        $user->nis = $request->nis;
        $user->name = $request->name;
        $user->id_kelas = $kelas->id;
        $user->alamat = $request->alamat;
        $user->telepon = $request->telepon;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->password_helper = $request->password;
        $user->save();

        return redirect()->back()->with('message', 'Data berhasi; diubah');
    }

    public function hapus($id){
        $status = User::where('id', $id)->delete();
        if($status){
            return redirect()->back()->with('message', 'Menghapus data telah sukses');
        }
        else{
            return redirect()->back();
        }
    }
}
