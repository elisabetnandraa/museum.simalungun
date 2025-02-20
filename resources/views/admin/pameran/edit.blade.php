<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalEditPameran{{ $item->id }}">
    <i class="fas fa-edit"></i> Edit
</button>

<!-- Modal Edit Berita -->
<div class="modal fade" id="modalEditPameran{{ $item->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="{{ route('admin.pameran.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Koleksi</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{ $item->judul }}" required>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar</small>
                        @if($item->gambar)
                            <div class="mt-2">
                                <img src="{{ asset($item->gambar) }}" alt="Gambar Pameran" width="100">
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
