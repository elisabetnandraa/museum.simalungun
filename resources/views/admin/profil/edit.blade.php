<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalEditProfil{{ $item->id }}">
    <i class="fas fa-edit"></i> Edit
</button>

<!-- Modal Edit Berita -->
<div class="modal fade" id="modalEditProfil{{ $item->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="{{ route('admin.profil.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Profil</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" required>{{ $item->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar</small>
                        @if($item->gambar)
                            <div class="mt-2">
                                <img src="{{ asset($item->gambar) }}" alt="Gambar Berita" width="100">
                            </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </form>
    </div>
</div>
