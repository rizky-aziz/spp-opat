@foreach ($siswa as $sw)
    <!-- Modal Edit -->
    <div class="modal fade" id="modelIdubah{{ $sw->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title">Ubah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/siswa/{{ $sw->id }}/ubah" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body mt-3">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 text-muted">NIS</label>
                            <input type="text" name="nis" id="" class="form-control col-sm-8" placeholder="" aria-describedby="helpId" value="{{ old('nis', $sw->nis) }}">
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 text-muted">Nama Siswa</label>
                            <input type="text" name="name" id="" class="form-control col-sm-8" placeholder="" aria-describedby="helpId" value="{{ old('name', $sw->name) }}">
                        </div>
                        <div class="form-group row mt-1">
                            <label for="" class="col-sm-3 text-muted">Kelas</label>
                            <select id="my-select" class="form-control col-sm-8" name="kelas">
                                @foreach ($kelas as $kls)
                                    <option @if( $sw->nama_kelas === $kls->nama_kelas ) selected @endif value="{{ $kls->nama_kelas }}">{{ $kls->nama_kelas }} - {{ $kls->nama_periode }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row mt-1">
                            <label for="" class="col-sm-3 text-muted">Alamat</label>
                            <input type="text" name="alamat" id="" class="form-control col-sm-8" placeholder="" aria-describedby="helpId" value="{{ old('alamat', $sw->alamat) }}">
                        </div>
                        <div class="form-group row mt-1">
                            <label for="" class="col-sm-3 text-muted">No. Telepon</label>
                            <input type="number" name="telepon" id="" class="form-control col-sm-8" placeholder="" aria-describedby="helpId" value="{{ old('telepon', $sw->telepon) }}">
                        </div>
                        <div class="form-group row mt-1">
                            <label for="" class="col-sm-3 text-muted">Email</label>
                            <input type="email" name="email" id="" class="form-control col-sm-8" placeholder="" aria-describedby="helpId" value="{{ old('email', $sw->email) }}">
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 text-muted">Password</label>
                            <input type="password" name="password" id="" class="form-control col-sm-8" placeholder="" aria-describedby="helpId" value="{{ old('password_helper', $sw->password_helper) }}">
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
    <div class="modal fade" id="modelIdhapus{{ $sw->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title">Hapus Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/siswa/{{ $sw->id }}/hapus" method="POST">
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