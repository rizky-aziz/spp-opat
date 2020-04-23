<?php

namespace App\Http\Controllers;

use App\Tagihan;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function index() {
        $data['tagihan'] = Tagihan::get();
        return view('Tagihan.index', $data);
    }

    public function tambah(Request $request){
        $rule = [
            'nama_tagihan' => 'required',
            'harga' => 'required',
            'tahun' => 'required',
        ];
        $this->validate($request, $rule);

        Tagihan::create([
            'nama_tagihan' => $request->nama_tagihan,
            'harga' => $request->harga,
            'tahun' => $request->tahun,
        ]);

        return redirect()->back()->with('message', 'Tambah data berhasil');
    }

    public function ubah(Request $request, $id){
        $rule = [
            'nama_tagihan' => 'required',
            'harga' => 'required',
            'tahun' => 'required',
        ];
        $this->validate($request, $rule);

        $tagihan = Tagihan::find($id);
        $tagihan->nama_tagihan = $request->nama_tagihan;
        $tagihan->harga = $request->harga;
        $tagihan->tahun = $request->tahun;
        $tagihan->save();

        return redirect()->back()->with('message', 'Data berhasil diubah');
    }

    public function hapus($id){
        $status = Tagihan::where('id', $id)->delete();
        if($status){
            return redirect()->back()->with('message', 'Data telah dihapus');
        }
        else{
            return redirect()->back();
        }
    }
}
