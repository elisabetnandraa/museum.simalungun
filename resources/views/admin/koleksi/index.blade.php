@extends('layouts.admin.app')

@section('title', 'Kelola Koleksi')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kelola Koleksi</h3>
                    <div class="d-flex justify-content-end mb-3">
                        @include('admin.koleksi.create')
                    </div>
                </div>
                @if (session('sukses'))
                    <div class="alert alert-success">{{ session('sukses') }}</div>
                @endif
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($koleksis as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ Str::limit($item->deskripsi, 500) }}</td>
                                <td>
                                    @if($item->gambar)
                                        <img src="{{ asset($item->gambar) }}" width="100">
                                    @else
                                        <small>Gambar tidak tersedia</small>
                                    @endif
                                </td>                                
                                <td>
                                    @include('admin.koleksi.edit')
                                    @include('admin.koleksi.delete')
                                </td>                                
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
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
          "buttons": [
              { extend: 'excel', exportOptions: { columns: ':not(:last-child)' } },
              { extend: 'pdf', exportOptions: { columns: ':not(:last-child)' } },
              { extend: 'print', exportOptions: { columns: ':not(:last-child)' } }
          ]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
      });
  });
</script>
@endsection
