@extends('layouts.app')

@section('page-name', 'Beranda')

@section('content')
<div class="container mx-auto">
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-6 col-xl-7 mb-2 aos-item" data-aos="zoom-in">
            <div class="card welcome">
                <div class="row">
                    <div class="col-6"><img src="assets/icons/Welcome-title.svg" alt="welcome" srcset="" class="img-fluid img-responsive"></div>
                    <div class="col-6 text-center"><img src="assets/icons/Illustrations-float.svg" alt="welcome" srcset="" class="img-fluid img-responsive mt-4 doodle-floating"></div>
                </div>
            </div>
            <!-- <img class="img-fluid img-responsive" src="assets/icons/bg_jumbotron.svg" alt="" data-aos="zoom-in"> -->
        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-xl-5 mb-2">
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-6 col-xl-6 mb-2" data-aos="zoom-in">
                    <div class="card count border-0 shadow-sm">
                        <div class="card-header bg-white border-0 mb-n3">
                            <div class="d-inline">
                                <img src="assets/icons/ic_total_uang.png" alt="" srcset="" width="30px" class="mr-1">
                                <span>Total Uang</span>
                            </div>
                        </div>
                        <div class="card-body mb-n3 text-center">
                            <h5 class="card-title">IDR. 3.000.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-6 col-xl-6 mb-2" data-aos="zoom-in" data-aso-delay="200">
                    <div class="card count border-0 shadow-sm">
                        <div class="card-header bg-white border-0 mb-n3">
                            <div class="d-inline">
                                <img src="assets/icons/ic_total_student.png" alt="" srcset="" class="mr-1" width="30px">
                                <span>Total Siswa</span>
                            </div>
                        </div>
                        <div class="card-body mb-n3 text-center">
                            <h5 class="card-title">{{ $siswa }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-6 col-xl-6 mb-2" data-aos="zoom-in" data-aso-delay="300">
                    <div class="card count border-0 shadow-sm">
                        <div class="card-header bg-white border-0 mb-n3">
                            <div class="d-inline">
                                <img src="assets/icons/ic_total_class.png" alt="" srcset="" class="mr-1" width="30px">
                                <span>Total Kelas</span>
                            </div>
                        </div>
                        <div class="card-body mb-n3 text-center">
                            <h5 class="card-title">{{ $kelas }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-lg-6 col-xl-6 mb-2" data-aos="zoom-in" data-aso-delay="400">
                    <div class="card count border-0 shadow-sm">
                        <div class="card-header bg-white border-0 mb-n3">
                            <div class="d-inline">
                                <img src="assets/icons/ic_total_bill.png" alt="" srcset="" class="mr-1" width="30px">
                                <span>Total Tagihan</span>
                            </div>
                        </div>
                        <div class="card-body mb-n3 text-center">
                            <h5 class="card-title">{{ $tagihan }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mx-auto">
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-12 col-xl-7 mb-2" data-aos="zoom-in" data-aso-delay="200">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <div class="d-flex">
                        <div>Histori Transaksi</div>                        
                        <div class="ml-auto text-muted text-lihat"><a href="/transaksi/#history">Lihat semua <img src="assets/icons/ic_arrow_right.svg" class="img-fluid" alt="ic" srcset=""></a></div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Pembayaran</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="text-muted">
                            @foreach ($transaksi as $trs)
                                <tr>
                                    <td>{{ date("d-m-Y", strtotime($trs->created_at)) }}</td>
                                    <td>{{ $trs->name }}</td>
                                    <td>IDR. {{ $trs->harga }}</td>
                                    <td>IDR. {{ $trs->harga }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-12 col-xl-5 mb-5" data-aos="zoom-in" data-aso-delay="500">
            <div class="card new-transaction shadow-sm">
                <div class="card-body">
                    <a href="{{url('/transaksi')}}">
                        <button type="button" class="btn btn-outline-dashed bg-transparent" data-toggle="tooltip" data-placement="top" title="Tambah Transaksi"><img src="assets/icons/btn_add.svg" alt="" srcset=""> Tambah Transaksi</button>
                    </a>
                    <div class="text-right mt-4 mb-1">
                        <img src="assets/icons/new-transaction.svg" alt="" srcset="" class="mt-5 mb-1">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection