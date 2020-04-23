<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index() {
        $data['pengguna'] = User::where('status', '!=', 'siswa')->get();
        return view('Pengguna.index', $data);
    }

    public function tambah(Request $request){
        $rule = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'status' => 'required',
        ];
        $this->validate($request, $rule);

        if ($request->password != $request->konfirmasi) {
            return redirect()->back()->with('message', 'Konfirmasi Password tidak cocok');
        } else {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'password_helper' => $request->password,
                'status' => $request->status,
            ]);
            return redirect()->back()->with('message', 'Data berhasil ditambahkan');
        }
    }

    public function ubah(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->password_helper = $request->password;
        $user->save();

        return redirect()->back()->with('message', 'Ubah data pengguna sukses');
    }

    public function hapus($id){
        $status = User::where('id', $id)->delete();
        if($status){
            return redirect()->back()->with('message', 'Menghapus pengguna telah sukses');
        }
        else{
            return redirect()->back();
        }
    }
}
