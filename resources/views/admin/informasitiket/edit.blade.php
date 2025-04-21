<!-- Modal Edit -->
<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalEditTiket{{ $tiket->id }}">
    Edit
</button>

<div class="modal fade" id="modalEditTiket{{ $tiket->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="{{ route('admin.informasitiket.update', $tiket->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Informasi Tiket</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control" value="{{ $tiket->harga }}" min="0" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" required>{{ $tiket->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label><br>
                        @if($tiket->gambar)
                            <img src="{{ asset($tiket->gambar) }}" width="100" class="mb-2">
                        @endif
                        <input type="file" name="gambar" class="form-control-file">
                        <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                </div>
            </div>
        </form>
    </div>
</div>
