@extends('layouts.admin.app')

@section('title', 'Kelola Beranda Berita')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kelola Beranda Berita</h3>
                    <div class="d-flex justify-content-end mb-3">
                        @include('admin.berita.create')
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
                                <th>Link</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($beritas as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ Str::limit($item->deskripsi, 100) }}</td>
                                <td>
                                    @if($item->gambar)
                                        <img src="{{ asset($item->gambar) }}" width="100">
                                    @else
                                        <small>Gambar tidak tersedia</small>
                                    @endif
                                </td>                                
                                <td><a href="{{ $item->link }}" target="_blank">{{ $item->link }}</a></td>
                                <td>
                                    @include('admin.berita.edit')
                                    @include('admin.berita.delete')
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
                                <th>Link</th>
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
