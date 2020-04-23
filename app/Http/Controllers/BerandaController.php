<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Tagihan;
use App\Transaksi;
use App\User;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index() {
        $data['siswa'] = User::where('status', 'siswa')->count();
        $data['kelas'] = Kelas::count();
        $data['tagihan'] = Tagihan::count();
        $data['transaksi'] = Transaksi::select('transaksi.created_at', 'users.nis', 'users.name', 'kelas.nama_kelas', 'tagihan.nama_tagihan', 'tagihan.harga')->join('tagihan', 'transaksi.id_tagihan', '=', 'tagihan.id')->join('users', 'transaksi.id_siswa', '=', 'users.id')->join('kelas', 'users.id_kelas', '=', 'kelas.id')->limit(5)->get();
        return view('Beranda.index', $data);
    }
}
