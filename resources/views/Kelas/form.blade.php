@foreach ($kelas as $kls)
<!-- Modal Edit-->
<div class="modal fade" id="modelIdedit{{ $kls->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content w-75">
            <div class="modal-header border-0">
                <h5 class="modal-title">Ubah Data Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="kelas/{{ $kls->id }}/ubah" method="POST">
                @csrf
                @method('PATCH')
                <div class="modal-body mt-3">
                    <div class="form-group row">
                        <label for="" class="col-sm-1-12 col-12 col-form-label text-muted">Nama Kelas</label>
                        <div class="col-sm-1-12 col-12">
                            <input type="text" name="nama_kelas" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ old('nama_kelas', $kls->nama_kelas) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-1-12 col-12 col-form-label text-muted">Periode</label>
                        <div class="col-sm-1-12 col-12">
                            <select class="form-control" name="periode" id="">
                                @foreach ($periode as $prd)
                                <option @if($kls->nama_periode === $prd->nama_periode) selected @endif value="{{ $prd->nama_periode }}">{{ $prd->nama_periode }}</option>
                                @endforeach
                            </select>
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
<div class="modal fade" id="modelIdhapus{{ $kls->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content w-75">
            <div class="modal-header border-0">
                <h5 class="modal-title">Hapus Data Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="kelas/{{ $kls->id }}/hapus" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body mt-3">
                    <div>Anda yakin ingin mengapus data ?</div>
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