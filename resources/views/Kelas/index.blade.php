@extends('layouts.app')

@section('page-name', 'Kelas')

@section('content')
@include('Kelas.form')
<div class="container">
    @include('errors.validation')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-8 col-xl-8 order-2 order-lg-1 order-xl-1" data-aos="zoom-in" data-aos-delay="100">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    Kelas
                </div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Periode</th>
                                <th class="pl-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $kls)
                            <tr>
                                <td scope="row">{{ isset($i) ? ++ $i : $i = 1 }}</td>
                                <td>{{ $kls->nama_kelas }}</td>
                                <td>{{ $kls->nama_periode }}</td>
                                <td class="pl-3">
                                    <div class="d-flex text-center">
                                        <div class="col-3" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <a href="" data-toggle="modal" data-target="#modelIdedit{{ $kls->id }}">
                                                <img src="assets/icons/ic_pencil.svg" alt="" srcset="">
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <span data-toggle="tooltip" title="Hapus" data-placement="top">
                                                <img src="assets/icons/ic_trash.svg" alt="" srcset="" data-toggle="modal" data-target="#modelIdhapus{{ $kls->id }}">
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
                    Tambah Kelas
                </div>
                <div class="card-body">
                    <div class="container">
                        <form action="/kelas/tambah" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-1-12 col-12 col-form-label text-muted">Nama Kelas</label>
                                <div class="col-sm-1-12 col-12">
                                    <input type="text" class="form-control" name="nama_kelas" id="inputName" placeholder="" required autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-1-12 col-12 col-form-label text-muted">Periode</label>
                                <div class="form-group col-sm-1-12 col-12">
                                    <select class="form-control" name="periode" id="">
                                        @foreach ($periode as $prd)
                                        <option value="{{ $prd->nama_periode }}">{{ $prd->nama_periode }}</option>
                                        @endforeach
                                    </select>
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