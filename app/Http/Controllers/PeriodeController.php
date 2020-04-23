<?php

namespace App\Http\Controllers;

use App\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index() {
        $data['periode'] = Periode::get();
        return view('Periode.index', $data);
    }

    public function tambah(Request $request){
        $rule = [
            'nama_periode' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
        ];
        $this->validate($request, $rule);

        Periode::create([
            'nama_periode' => $request->nama_periode,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
        ]);
        return redirect()->back()->with('message', 'Data berhasil ditambahkan');
    }

    public function ubah(Request $request, $id){
        $periode = Periode::find($id);
        $periode->nama_periode = $request->nama_periode;
        $periode->tanggal_mulai = $request->tanggal_mulai;
        $periode->tanggal_selesai = $request->tanggal_selesai;
        $periode->save();

        return redirect()->back()->with('message', 'Data berhasil diubah');
    }

    public function hapus($id){
        $status = Periode::where('id', $id)->delete();
        if($status){
            return redirect()->back()->with('message', 'Menghapus data telah sukses');
        }
        else{
            return redirect()->back();
        }
    }
}
