@foreach ($pengguna as $pgn)
<!-- Modal Edit-->
<div class="modal fade" id="modelIdedit{{ $pgn->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content w-85">
            <div class="modal-header border-0">
                <h5 class="modal-title">Ubah Data Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/pengguna/{{ $pgn->id }}/ubah" method="POST">
                @csrf
                @method('PATCH')
                <div class="modal-body mt-3">
                    <div class="form-group row">
                        <label for="" class="col-sm-1-12 col-12 col-form-label text-muted">Nama Pengguna</label>
                        <div class="col-sm-1-12 col-12">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $pgn->name) }}" required autocomplete="name" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-1-12 col-12 col-form-label text-muted">Email</label>
                        <div class="col-sm-1-12 col-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $pgn->email) }}" required autocomplete="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-1-12 col-12 col-form-label text-muted">Password</label>
                        <div class="col-sm-1-12 col-12">
                            <div class="input-group">
                                <input id="password" type="password" class="form-control pass" name="password" required autocomplete="new-password" value="{{ old('email', $pgn->password_helper) }}">
                                <button class="btn btn-default show" type="button">show</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-1-12 col-12 col-form-label text-muted">Konfirmasi Password</label>
                        <div class="col-sm-1-12 col-12">
                            <div class="input-group">
                                <input id="password-confirm" type="password" class="form-control border-right-0 pwd" name="konfirmasi" required autocomplete="new-password" value="{{ old('email', $pgn->password_helper) }}">
                                <button class="btn btn-default border border-left-0 show2" type="button">show</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 mt-2 mr-4">
                    <button type="button" class="btn text-muted" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Delete -->
<div class="modal fade" id="modelIdhapus{{ $pgn->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content w-85">
            <div class="modal-header border-0">
                <h5 class="modal-title">Hapus Data Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/pengguna/{{ $pgn->id }}/hapus" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body mt-3">
                    <div>Anda yakin ingin menghapus data ?</div>
                </div>
                <div class="modal-footer border-0 mt-2 mr-4">
                    <button type="button" class="btn text-muted" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach