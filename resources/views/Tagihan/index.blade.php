@extends('layouts.app')

@section('page-name', 'Tagihan')

@section('content')
@include('Tagihan.form')
<div class="container">
    @include('errors.validation')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-8 col-xl-8 order-2 order-lg-1 order-xl-1" data-aos="zoom-in" data-aos-delay="100">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    Tagihan
                </div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <thead class="text-muted">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jumlah</th>
                                <th>Tahun</th>
                                <th class="pl-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tagihan as $tgh)
                            <tr>
                                <td scope="row">{{ isset($i) ? ++ $i : $i = 1 }}</td>
                                <td>{{ $tgh->nama_tagihan }}</td>
                                <td>{{ $tgh->harga }}</td>
                                <td>{{ $tgh->tahun }}</td>
                                <td>
                                    <div class="d-flex text-center">
                                        <div class="col-4" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <a href="" data-toggle="modal" data-target="#modelIdubah{{ $tgh->id }}">
                                                <img src="assets/icons/ic_pencil.svg" alt="" srcset="">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <span data-toggle="tooltip" title="Hapus" data-placement="top">
                                                <img src="assets/icons/ic_trash.svg" alt="" srcset="" data-toggle="modal" data-target="#modelIdhapus{{ $tgh->id }}">
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4 col-xl-4 order-1 order-lg-2 order-xl-2 mb-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="card shadow-sm">
                <div class="card-header bg-white bold">
                    Tambah Tagihan
                </div>
                <div class="card-body">
                    <div class="container">
                        <form action="/tagihan/tambah" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-1-12 col-12 col-form-label text-muted">Nama Tagihan</label>
                                <div class="col-sm-1-12 col-12">
                                    <input type="text" class="form-control" name="nama_tagihan" id="inputName" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-1-12 col-12 col-form-label text-muted">Harga Tagihan</label>
                                <div class="col-sm-1-12 col-xl-12">
                                    <input type="number" class="form-control" name="harga" id="inputName" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-1-12 col-12 col-form-label text-muted">Tahun</label>
                                <div class="col-sm-1-12 col-xl-12">
                                    <input type="text" class="form-control yearpicker" name="tahun" id="inputName" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary btn-block p-2">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection