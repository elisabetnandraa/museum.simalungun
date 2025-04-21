@extends('layouts.admin.app')

@section('title', 'Kelola Informasi Tiket')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kelola Informasi Tiket</h3>
                </div>

                @if (session('sukses'))
                    <div class="alert alert-success">{{ session('sukses') }}</div>
                @endif

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($informasiTikets as $tiket)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>Rp {{ number_format($tiket->harga, 0, ',', '.') }}</td>
                                <td>{{ Str::limit($tiket->deskripsi, 100) }}</td>
                                <td>
                                    @if($tiket->gambar)
                                        <img src="{{ asset($tiket->gambar) }}" width="100">
                                    @else
                                        <small>Tidak ada gambar</small>
                                    @endif
                                </td>
                                <td>
                                    @include('admin.informasitiket.edit')
                                    @include('admin.informasitiket.delete')
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
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
      $("#example1").DataTable({
          "responsive": true,
          "lengthChange": true,
          "autoWidth": false,
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@endsection
