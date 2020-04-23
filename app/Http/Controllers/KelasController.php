<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Periode;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index() {
        $data['kelas'] = Kelas::select('kelas.id', 'kelas.nama_kelas', 'periode.nama_periode')->join('periode', 'kelas.id_periode', '=', 'periode.id')->get();
        $data['periode'] = Periode::get();
        return view('Kelas.index', $data);
    }

    public function tambah(Request $request){
        $rule = [
            'nama_kelas' => 'required',
        ];
        $this->validate($request, $rule);


        $periode = Periode::where('nama_periode', $request->periode)->first();
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'id_periode' => $periode->id,
        ]);
        return redirect()->back()->with('message', 'Data berhasil ditambahkan');
    }

    public function ubah(Request $request, $id){
        $kelas = Kelas::find($id);
        $periode = Periode::where('nama_periode', $request->periode)->first();
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->id_periode = $periode->id;
        $kelas->save();

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
