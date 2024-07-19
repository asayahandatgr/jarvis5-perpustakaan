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
                <h3 class="card-title">Tambah Buku</h3>
                <a href="{{route('buku.index')}}" class="btn btn-success btn-sm">Kembali</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{route('buku.store')}}" method="post">
                  @csrf
                  <div class="form-group row">
                    <label for="title" class="col-md-4">Title</label>
                    <input type="text" name="title" id="title" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="isbn" class="col-md-4">ISBN</label>
                    <input type="number" name="isbn" id="isbn" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="deskripsi" class="col-md-4">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="penulis" class="col-md-4">Penulis</label>
                    <input type="text" name="penulis" id="penulis" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="penerbit" class="col-md-4">Penerbit</label>
                    <input type="text" name="penerbit" id="penerbit" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="genre_id" class="col-md-4">Genre</label>
                    <select name="genre_id" id="genre_id" class="form_control col-md-8">
                      <option value="" hidden>Pilih Genre</option>
                      @foreach ($genre as $gen)
                      <option value="{{ $gen->id}}">{{ $gen->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="harga" class="col-md-4">Harga Buku</label>
                    <input type="text" name="harga" id="harga" class="form-control col-md-8" required>
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