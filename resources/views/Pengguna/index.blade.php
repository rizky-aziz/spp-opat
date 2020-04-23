@extends('layouts.app')

@section('page-name', 'Pengguna')

@section('content')
@include('Pengguna.form')
<div class="container">
    @include('errors.validation')
    <div class="row">
        <div class="col-12" data-aos="zoom-in" data-aos-delay="100">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <div class="d-flex">
                        Pengguna
                        <button type="submit" class="ml-auto btn btn-outline-dashed font-weight-light" data-toggle="modal" data-target="#modelId"><img src="assets/icons/btn_add.svg" alt="" srcset=""> Tambah Pengguna</button>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <thead class="text-muted">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th class="pl-5">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengguna as $pgn)
                            <tr>
                                <td scope="row">{{ isset($i) ? ++ $i : $i = 1 }}</td>
                                <td>{{ $pgn->name }}</td>
                                <td>{{ $pgn->email }}</td>
                                <td>{{ $pgn->status }}</td>
                                <td>
                                    <div class="d-flex text-center">
                                        @if (auth()->user()->status === 'admin')
                                        <div class="col-4" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <a href="" data-toggle="modal" data-target="#modelIdedit{{ $pgn->id }}">
                                                <img src="assets/icons/ic_pencil.svg" alt="" srcset="">
                                            </a>
                                        </div>
                                        @if ($pgn->status === 'admin')

                                        @else
                                        <div class="col-4">
                                            <span data-toggle="tooltip" title="Hapus" data-placement="top">
                                                <img src="assets/icons/ic_trash.svg" alt="" srcset="" data-toggle="modal" data-target="#modelIdhapus{{ $pgn->id }}" data-tooltip="true">
                                            </span>
                                        </div>
                                        @endif
                                        @else
                                        @if ($pgn->status === 'admin')

                                        @else
                                        <div class="col-4" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <a href="" data-toggle="modal" data-target="#modelIdedit{{ $pgn->id }}">
                                                <img src="assets/icons/ic_pencil.svg" alt="" srcset="">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <span data-toggle="tooltip" title="Hapus" data-placement="top">
                                                <img src="assets/icons/ic_trash.svg" alt="" srcset="" data-toggle="modal" data-target="#modelIdhapus{{ $pgn->id }}" data-tooltip="true">
                                            </span>
                                        </div>
                                        @endif
                                        @endif
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

@push('js')
<script>
    $(".show2").on('click', function() {
        var $pwd = $(".pwd");
        if ($pwd.attr('type') === 'password') {
            $pwd.attr('type', 'text');
        } else {
            $pwd.attr('type', 'password');
        }
    });

    $(".show").on('click', function() {
        var $pass = $(".pass");
        if ($pass.attr('type') === 'password') {
            $pass.attr('type', 'text');
        } else {
            $pass.attr('type', 'password');
        }
    });
</script>
@endpush