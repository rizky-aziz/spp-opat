@foreach ($periode as $prd)
<!-- Modal Edit -->
<div class="modal fade" id="modelIdedit{{ $prd->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content w-80">
            <div class="modal-header border-0">
                <h5 class="modal-title">Ubah Data Periode</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="periode/{{ $prd->id }}/ubah" method="POST">
                @csrf
                @method('PATCH')
                <div class="modal-body mt-3">
                    <div class="form-group row">
                        <label for="" class="col-sm-1-12 col-12 col-form-label text-muted">Nama Periode</label>
                        <div class="col-sm-1-12 col-12">
                            <input type="text" name="nama_periode" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ old('nama_periode', $prd->nama_periode) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-1-12 col-12 col-form-label text-muted">Tanggal Mulai</label>
                        <div class="col-sm-1-12 col-12">
                            <input type="date" name="tanggal_mulai" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ old('tanggal_mulai', $prd->tanggal_mulai) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-1-12 col-12 col-form-label text-muted">Tanggal Selesai</label>
                        <div class="col-sm-1-12 col-12">
                            <input type="date" name="tanggal_selesai" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ old('tanggal_mulai', $prd->tanggal_selesai) }}">
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
<!--Modal Delete -->
<div class="modal fade" id="modelIdhapus{{ $prd->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content w-75">
            <div class="modal-header border-0">
                <h5 class="modal-title">Hapus data Periode</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="periode/{{ $prd->id }}/hapus" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <p class="h5 text-center">Anda yakin ingin menghapus data ?</p>
                    <p class="h6 text-muted text-center">
                        Apakah Anda benar-benar ingin menghapus data ini? proses tidak dapat diurungkan.
                    </p>
                </div>
                <div class="modal-footer border-0 mt-2">
                    <button type="button" class="btn text-muted" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach