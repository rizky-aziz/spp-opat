@extends('layouts.app')

@section('page-name', 'Siswa')

@section('content')
@include('Siswa.form')
@include('Siswa.edit')
<div class="container">
    @include('errors.validation')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12" data-aos="zoom-in" data-aos-delay="100">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <div class="d-flex">
                        <h5>Siswa</h5>
                        <button type="submit" class="ml-auto btn btn-outline-dashed" data-toggle="modal" data-target="#modelId"><img src="assets/icons/btn_add.svg" alt="" srcset=""> Tambah Siswa</button>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover" id="data-table">
                        <thead class="">
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Alamat</th>
                                <th>No. Telepon</th>
                                <th class="pl-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-muted">
                            @foreach ($siswa as $sw)
                            <tr>
                                <td scope="row">{{ isset($i) ? ++ $i : $i = 1 }}</td>
                                <td>{{ $sw->nis }}</td>
                                <td>{{ $sw->name }}</td>
                                <td>{{ $sw->nama_kelas }}</td>
                                <td>{{ $sw->alamat }}</td>
                                <td>{{ $sw->telepon }}</td>
                                <td>
                                    <div class="d-flex text-center">
                                        <div class="col-3" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <a href="" data-toggle="modal" data-target="#modelIdubah{{ $sw->id }}">
                                                <img src="assets/icons/ic_pencil.svg" alt="" srcset="">
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <img src="assets/icons/ic_trash.svg" alt="" srcset="" data-toggle="modal" data-placement="top" title="Hapus" data-target="#modelIdhapus{{ $sw->id }}">
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
    </div>
</div>
@endsection