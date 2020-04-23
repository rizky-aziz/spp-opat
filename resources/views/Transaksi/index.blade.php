@extends('layouts.app')

@section('page-name', 'Transaksi')

@section('content')
<div class="container">
    @include('errors.validation')
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 order-2 order-lg-1 order-xl-1" data-aos="zoom-in">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    Transaksi
                </div>
                <div class="card-body">
                    <form action="/transaksi/bayar" class="row" method="POST">
                        @csrf
                        <div class="col-6">
                            <div class="form-group">
                                <label for="my-input" class="text-muted">Nama Siswa</label>
                                <select class="form-control" name="siswa" id="">
                                    @foreach ($siswa as $sw)
                                    <option value="{{ $sw->id }}">{{ $sw->name }} - {{ $sw->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="" class="text-muted">Tagihan</label>
                                <select class="form-control" name="tagihan" id="">
                                    @foreach ($tagihan as $tgh)
                                        <option value="{{ $tgh->id }}">{{ $tgh->nama_tagihan }} - {{ $tgh->tahun }}</option>                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="" class="text-muted">Catatan</label>
                                <textarea class="form-control" name="catatan" id="" rows="3"></textarea>
                            </div>
                        </div>
                        <!-- <div class="col-12 mt-4">
                            <div class="d-flex">
                                <div class="col-4 pl-0">
                                    <h6 class="text-muted">Total Tagihan</h6>
                                </div>
                                <div class="col-10">
                                    <h6 class="text-muted text-bold modal-title">IDR. 300.000</h6>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-12 mt-5">
                            <div class="d-flex">
                                <div class="col-4 pl-0">
                                    <h6 class="text-muted">Total Tagihan</h6>
                                </div>
                                <div class="col-10">
                                    <h6 class="text-muted text-bold modal-title">IDR. 300.000</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="form-group text-right">
                                <button type="submit" name="" id="" class="btn btn-primary btn-lg px-5">Bayar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 order-1 order-lg-2 order-xl-2 mb-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="card text-center shadow-sm" style="height: 70vh">
                <div class="card-body">
                    <div class="d-inline justify-content-center">
                        <img src="assets/icons/Doodles-Float.png" class="img-fluid img-responsive doodle-floating mt-5" alt="image">
                        <div class="shadow"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5" id="history">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 order-2 order-xl-1">
            <div class="card shadow-sm">
                <div class="card-header bg-white d-flex justify-align-center">
                    Histori Transaksi
                    <button type="submit" class="ml-auto btn btn-outline-dashed " data-toggle="modal" data-target="#modelId"><img src="assets/icons/ic_pdf.svg" alt="" srcset=""> Export to pdf</button>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover" id="data-table">
                        <thead class="text-muted">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Tagihan</th>
                                <th>Pembayaran</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody class="text-muted">
                            @foreach ($transaksi as $trs)
                                <tr>
                                    <td scope="row">{{ isset($i) ? ++ $i : $i = 1 }}</td>
                                    <td>{{ date("d-m-Y", strtotime($trs->created_at)) }}</td>
                                    <td>{{ $trs->nis }}</td>
                                    <td>{{ $trs->name }}</td>
                                    <td>{{ $trs->nama_kelas }}</td>
                                    <td>{{ $trs->nama_tagihan }}</td>
                                    <td>IDR. {{ $trs->harga }}</td>
                                    <td>Dibayar Lunas</td>
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