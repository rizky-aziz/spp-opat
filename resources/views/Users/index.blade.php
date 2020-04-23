@extends('layouts.app')

@section('page-name', 'Transaksi')

@section('content')
<div class="container" id="history">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 order-2 order-xl-1" data-aos="zoom-in" data-aos-delay="50">
            <div class="card shadow-sm">
                <div class="card-header bg-white d-flex justify-align-center">
                    Histori Transaksi
                    <button type="submit" class="ml-auto btn btn-outline-dashed " data-toggle="modal" data-target="#modelId"><img src="assets/icons/ic_pdf.svg" alt="" srcset=""> Export to pdf</button>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-muted">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>NIS</th>
                                <th>Nama Sirowa</th>
                                <th>Kelas</th>
                                <th>Tagihan</th>
                                <th>Pembayaran</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody class="text-muted">
                            <tr>
                                <td scope="row">1</td>
                                <td>24-04-2020</td>
                                <td>1718117137</td>
                                <td>Samantha Wiliam</td>
                                <td>XII RPL 1</td>
                                <td>SPP Semester I</td>
                                <td>IDR. 300.000</td>
                                <td>Dibayar Lunas</td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td>24-04-2020</td>
                                <td>1718117137</td>
                                <td>Samantha Wiliam</td>
                                <td>XII RPL 1</td>
                                <td>SPP Semester I</td>
                                <td>IDR. 300.000</td>
                                <td>Dibayar Lunas</td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td>24-04-2020</td>
                                <td>1718117137</td>
                                <td>Samantha Wiliam</td>
                                <td>XII RPL 1</td>
                                <td>SPP Semester I</td>
                                <td>IDR. 300.000</td>
                                <td>Dibayar Lunas</td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td>24-04-2020</td>
                                <td>1718117137</td>
                                <td>Samantha Wiliam</td>
                                <td>XII RPL 1</td>
                                <td>SPP Semester I</td>
                                <td>IDR. 300.000</td>
                                <td>Dibayar Lunas</td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td>24-04-2020</td>
                                <td>1718117137</td>
                                <td>Samantha Wiliam</td>
                                <td>XII RPL 1</td>
                                <td>SPP Semester I</td>
                                <td>IDR. 300.000</td>
                                <td>Dibayar Lunas</td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td>24-04-2020</td>
                                <td>1718117137</td>
                                <td>Samantha Wiliam</td>
                                <td>XII RPL 1</td>
                                <td>SPP Semester I</td>
                                <td>IDR. 300.000</td>
                                <td>Dibayar Lunas</td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td>24-04-2020</td>
                                <td>1718117137</td>
                                <td>Samantha Wiliam</td>
                                <td>XII RPL 1</td>
                                <td>SPP Semester I</td>
                                <td>IDR. 300.000</td>
                                <td>Dibayar Lunas</td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td>24-04-2020</td>
                                <td>1718117137</td>
                                <td>Samantha Wiliam</td>
                                <td>XII RPL 1</td>
                                <td>SPP Semester I</td>
                                <td>IDR. 300.000</td>
                                <td>Dibayar Lunas</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection