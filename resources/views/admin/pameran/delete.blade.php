<!-- Button trigger modal -->
<a role="button" class="btn btn-sm btn-danger delete-button" data-bs-toggle="modal"
   data-bs-target="#modalHapusPameran{{ $item->id }}">
    <i class="fas fa-trash"></i> Hapus
</a>

<!-- Modal Hapus Berita -->
<div class="modal fade" id="modalHapusPameran{{ $item->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><strong>Hapus Pameran</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus pameran <strong>{{ $item->judul }}</strong>?
            </div>
            <div class="modal-footer">
                <form action="{{ route('admin.pameran.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Hapus">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                </form>
            </div>
        </div>
    </div>
</div>
