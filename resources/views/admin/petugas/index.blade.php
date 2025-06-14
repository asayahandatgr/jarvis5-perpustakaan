@extends('admin.layouts.app')
@push('style')
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
@endpush
@section('content')
    <div class="content-wrapper">
      <div class="container">
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card mt-3">
                  <div class="card-header text-center">
                    <h3 class="card-title">Daftar Petugas</h3>
                  </div>
                  <div class="card-header">

                    <a href="{{route('petugas.create')}}" class="btn btn-primary">Create</a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Jam Masuk</th>
                        <th>Jam Pulang</th>
                        <th>No Telfon</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($petugas as $tugas)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $tugas->nama }}</td>
                              <td>{{ $tugas->gender }}</td>
                              <td>{{ $tugas->jam_mulai }}</td>
                              <td>{{ $tugas->jam_selesai }}</td>
                              <td>{{ $tugas->telepon }}</td>
                              <td>{{ $tugas->alamat }}</td>
                              <td class="d-flex">
                                <a href="{{route('petugas.edit', $tugas->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <form method="POST" action="{{route('petugas.delete', $tugas->id)}}">
                                  @csrf
                                  @method('delete')
                                  <button onclick="if (!confirm ('Data akan di hapus?')) {return false}" type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                              </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
      </div>
    </div>
@push('script')
    <script src="{{asset ('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset ('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset ('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset ('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset ('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset ('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset ('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset ('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset ('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset ('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset ('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset ('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset ('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset ('assets/dist/js/demo.js')}}"></script>
<!-- Page specific script -->

@endpush
@endsection