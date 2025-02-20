
<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalEditJadwal{{ $item->id }}">
    <i class="fas fa-edit"></i> Edit
</button>

<div class="modal fade" id="modalEditJadwal{{ $item->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="{{ route('admin.jadwal.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Jadwal</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Hari</label>
                        <select name="hari" class="form-control" required>
                            <option value="">-- Pilih Hari --</option>
                            <option value="Senin" {{ $item->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                            <option value="Selasa" {{ $item->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                            <option value="Rabu" {{ $item->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                            <option value="Kamis" {{ $item->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                            <option value="Jumat" {{ $item->hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                            <option value="Sabtu" {{ $item->hari == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                            <option value="Minggu" {{ $item->hari == 'Minggu' ? 'selected' : '' }}>Minggu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jam</label>
                        <input type="text" name="jam" class="form-control" value="{{ $item->jam }}" required>
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
