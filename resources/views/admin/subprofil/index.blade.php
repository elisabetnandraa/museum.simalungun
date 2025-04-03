@extends('layouts.admin.app')

@section('title', 'Kelola Beranda SubProfil')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kelola Beranda SubProfil</h3>
                    <div class="d-flex justify-content-end mb-3">
                        @include('admin.subprofil.create')
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
                                <th>Penjelasan</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subprofils as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ Str::limit($item->penjelasan, 1500) }}</td>
                                <td>
                                    @if($item->gambar)
                                        <img src="{{ asset($item->gambar) }}" width="100">
                                    @else
                                        <small>Gambar tidak tersedia</small>
                                    @endif
                                </td>                                
                                <td>
                                    @include('admin.subprofil.edit')
                                    @include('admin.subprofil.delete')
                                </td>                                
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Penjelasan</th>
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
