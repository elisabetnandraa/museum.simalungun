@extends('layouts.admin.app')

@section('title', 'Kelola Pesan Tiket')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kelola Pesan Tiket</h3>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="card-body" style="overflow-x: auto;">
                    <table id="pesanTiketTable" class="table table-bordered table-striped" style="width: 100%; min-width: 1000px;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Tiket</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Telepon</th>
                                <th>Jumlah</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Total Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pesanTikets as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nomor_tiket }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->no_telepon }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->tanggal_pemesanan }}</td>
                                <td>Rp {{ number_format($item->total_harga, 2, ',', '.') }}</td>
                                <td>
                                    <span class="badge {{ $item->status == 'belum' ? 'badge-warning' : 'badge-danger' }}">
                                        {{ ucfirst($item->status) }}
                                    </span>
                                </td>
                                <td>
                                    @if($item->status === 'belum')
                                        <button class="btn btn-sm btn-warning" disabled>Belum</button>
                                        <form action="{{ route('admin.pesantiket.update', $item->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-sm btn-danger">Selesaikan</button>
                                        </form>
                                    @else
                                        <form action="{{ route('admin.pesantiket.update', $item->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-sm btn-warning">Belum</button>
                                        </form>
                                        <button class="btn btn-sm btn-danger" disabled>Selesai</button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
  $(function() {
      $("#pesanTiketTable").DataTable({
          "responsive": false,
          "scrollX": true, 
          "lengthChange": true,
          "autoWidth": false,
          "buttons": [
              { extend: 'excel', exportOptions: { columns: ':not(:last-child)' } },
              { extend: 'pdf', exportOptions: { columns: ':not(:last-child)' } },
              { extend: 'print', exportOptions: { columns: ':not(:last-child)' } }
          ]
      }).buttons().container().appendTo('#pesanTiketTable_wrapper .col-md-6:eq(0)');
  });
</script>
@endsection
