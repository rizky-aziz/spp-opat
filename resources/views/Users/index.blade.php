@extends('layouts.app')

@section('page-name', 'Transaksi')

@section('content')
<div class="container mt-5" id="history">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 order-2 order-xl-1" data-aos="zoom-in" data-aos-delay="50">
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
                                <th>Nama Sirowa</th>
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