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
          <div class="col-12 mt-3">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Edit Petugas</h3>
                <a href="{{route('petugas.index')}}" class="btn btn-success btn-sm">Kembali</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('petugas.store')}}" method="post">
                  @csrf
                  <div class="form-group row">
                    <label for="nama" class="col-md-4">Nama</label>
                    <input type="hidden" name="id" value="{{($petugas->id)}}">
                    <input type="text" value="{{($petugas->nama)}}" name="nama" id="nama" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="gender" class="col-md-4">Gender</label>
                    <select name="gender" class="form-control col-md-8" required>
                      <option value="Laki-laki" {{ $petugas->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                      <option value="Perempuan" {{ $petugas->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="jam_mulai" class="col-md-4">Jam Masuk</label>
                    <input type="time" value="{{ $petugas->jam_mulai }}" name="jam_mulai" id="jam_mulai" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="jam_selesai" class="col-md-4">Jam Pulang</label>
                    <input type="time" value="{{ $petugas->jam_selesai }}" name="jam_selesai" id="jam_selesai" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="telepon" class="col-md-4">Telepon</label>
                    <input type="number" name="telepon" class="form-control col-md-8" value="{{ $petugas->telepon }}" required>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-md-4">Alamat</label>
                    <input type="text" name="alamat" class="form-control col-md-8" value="{{ $petugas->alamat }}" required>
                  </div>
                  <div class="d-flex justify-content">
                    <input type="submit" value="Tambah" class="btn btn-primary">
                  </div>
                </form>

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