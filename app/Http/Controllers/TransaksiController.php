<?php

namespace App\Http\Controllers;

use App\Tagihan;
use App\Transaksi;
use App\User;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index() {
        $data['siswa'] = User::select('users.id', 'users.name', 'kelas.nama_kelas')->join('kelas', 'users.id_kelas', '=', 'kelas.id')->where('status', 'siswa')->get();
        $data['tagihan'] = Tagihan::get();
        $data['transaksi'] = Transaksi::select('transaksi.created_at', 'users.nis', 'users.name', 'kelas.nama_kelas', 'tagihan.nama_tagihan', 'tagihan.harga')->join('tagihan', 'transaksi.id_tagihan', '=', 'tagihan.id')->join('users', 'transaksi.id_siswa', '=', 'users.id')->join('kelas', 'users.id_kelas', '=', 'kelas.id')->get();
        return view('Transaksi.index', $data);        
    }

    public function history() {
        $data['siswa'] = User::select('users.id', 'users.name', 'kelas.nama_kelas')->join('kelas', 'users.id_kelas', '=', 'kelas.id')->where('status', 'siswa')->get();
        $data['tagihan'] = Tagihan::get();
        $data['transaksi'] = Transaksi::select('transaksi.created_at', 'users.nis', 'users.name', 'kelas.nama_kelas', 'tagihan.nama_tagihan', 'tagihan.harga')->join('tagihan', 'transaksi.id_tagihan', '=', 'tagihan.id')->join('users', 'transaksi.id_siswa', '=', 'users.id')->join('kelas', 'users.id_kelas', '=', 'kelas.id')->get();
        return view('Users.index', $data);        
    }

    public function bayar(Request $request){
        $rule = [
            'siswa' => 'required',
            'tagihan' => 'required',
            'catatan' => 'required',
        ];
        $this->validate($request, $rule);

        $user = User::where('id', $request->siswa)->first();
        $tagihan = Tagihan::where('id', $request->tagihan)->first();

        Transaksi::create([
            'id_siswa' => $user->id,
            'id_tagihan' => $tagihan->id,
            'catatan' => $request->catatan,
        ]);
        return redirect()->back()->with('message', 'Nyeh');
    }
}
