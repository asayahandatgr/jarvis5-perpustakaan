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
                <h3 class="card-title">Edit Data</h3>
                <a href="{{route('peminjaman.index')}}" class="btn btn-success btn-sm">Kembali</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('peminjaman.store') }}" method="post">
                  @csrf
                  <div class="form-group row">
                    <label for="nama_peminjam" class="col-md-4">Nama Peminjam</label>
                    <input type="hidden" name="id" value="{{ $peminjaman->id }}">
                    <input type="text" value="{{ $peminjaman->nama_peminjam }}" name="nama_peminjam" id="nama_peminjam" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="mulai" class="col-md-4">Mulai</label>
                    <input type="date" value="{{ $peminjaman->mulai }}" name="mulai" id="mulai" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="selesai" class="col-md-4">Selesai</label>
                    <input type="date" value="{{ $peminjaman->selesai }}" name="selesai" id="selesai" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="ktm" class="col-md-4">Ktm</label>
                    <input type="text" value="{{ $peminjaman->ktm }}" name="ktm" id="ktm" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="genre_id" class="col-md-4">Genre</label>
                    <select name="genre_id" id="genre_id" class="form-control col-md-8">
                      @foreach ($genre as $gen)
                      <option value="{{ $gen->id }}" {{ $peminjaman->genre_id == $gen->id ? 'selected' : '' }}>{{ $gen->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="buku_id" class="col-md-4">Buku</label>
                    <select name="buku_id" id="buku_id" class="form-control col-md-8">
                      <option value="" hidden>Pilih Genre</option>
                      @foreach ($buku as $buk)
                      <option value="{{ $buk->id }}" {{ $peminjaman->buku_id == $buk->id ? 'selected' : '' }}>{{ $buk->title }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="petugas_id" class="col-md-4">Petugas</label>
                    <select name="petugas_id" id="petugas_id" class="form-control col-md-8">
                      <option value="" hidden>Pilih Genre</option>
                      @foreach ($petugas as $tugas)
                      <option value="{{ $tugas->id }}" {{ $peminjaman->petugas_id == $tugas->id ? 'selected' : '' }}>{{ $tugas->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="status_peminjam" class="col-md-4">Gender</label>
                    <select name="status_peminjam" class="form-control col-md-8" required>
                      <option value="Berhasil" {{ $peminjaman->status_peminjam == 'Berhasil' ? 'selected' : '' }}>Berhasil</option>
                      <option value="Pending" {{ $peminjaman->status_peminjam == 'Pending' ? 'selected' : '' }}>Pending</option>
                      <option value="Gagal" {{ $peminjaman->status_peminjam == 'Gagal' ? 'selected' : '' }}>Gagal</option>
                    </select>
                  </div>
                  <div class="d-flex justify-content">
                    <input type="submit" value="Edit" class="btn btn-primary">
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