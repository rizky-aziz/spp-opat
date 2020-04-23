@foreach ($tagihan as $tgh)
<!-- Modal Edit-->
<div class="modal fade" id="modelIdubah{{ $tgh->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content w-75">
            <div class="modal-header border-0">
                <h5 class="modal-title">Ubah Data Tagihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/tagihan/{{ $tgh->id }}/ubah" method="POST">
                @csrf
                @method('PATCH')
                <div class="modal-body mt-3">
                    <div class="form-group row">
                        <label for="" class="col-sm-1-12 col-12 col-form-label text-muted">Nama Tagihan</label>
                        <div class="col-sm-1-12 col-12">
                            <input type="text" name="nama_tagihan" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ old('nama_tagihan', $tgh->nama_tagihan) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-1-12 col-12 col-form-label text-muted">Harga Tagihan</label>
                        <div class="col-sm-1-12 col-12">
                            <input type="number" name="harga" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ old('harga', $tgh->harga) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-1-12 col-12 col-form-label text-muted">Tahun</label>
                        <div class="col-sm-1-12 col-12">
                            <input type="text" name="tahun" id="" class="form-control yearpicker" placeholder="" aria-describedby="helpId" value="{{ old('tahun', $tgh->tahun) }}">
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
<!-- Modal Delete-->
<div class="modal fade" id="modelIdhapus{{ $tgh->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content w-75">
            <div class="modal-header border-0">
                <h5 class="modal-title">Hapus Data Tagihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/tagihan/{{ $tgh->id }}/hapus" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body mt-3">
                    <div>Anda yakin ingin menghapus data ?</div>
                </div>
                <div class="modal-footer border-0 mt-2 mr-4">
                    <button type="button" class="btn text-muted" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach