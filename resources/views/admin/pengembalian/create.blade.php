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
                <h3 class="card-title">Tambah Pengembalian</h3>
                <a href="{{ route('pengembalian.index') }}" class="btn btn-success btn-sm">Kembali</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('pengembalian.store') }}" method="post">
                  @csrf
                  <div class="form-group row">
                    <label for="peminjaman_id" class="col-md-4">Nama Peminjam</label>
                    <select name="peminjaman_id" id="peminjaman_id" class="form-control col-md-8" required>
                      <option value="" hidden>Pilih Peminjam</option>
                      @foreach($peminjaman as $minjam)
                        <option value="{{ $minjam->id }}">{{ $minjam->nama_peminjam }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="tanggal_kembali" class="col-md-4">Tanggal Kembali</label>
                    <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="jumlah_hari" class="col-md-4">Jumlah Hari</label>
                    <input type="number" name="jumlah_hari" id="jumlah_hari" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="buku_id" class="col-md-4">Buku</label>
                    <select name="buku_id" id="buku_id" class="form-control col-md-8" required>
                    <option value="" hidden>Pilih Buku</option>
                      @foreach($buku as $buk)
                        <option value="{{ $buk->id }}">{{ $buk->title }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="petugas_id" class="col-md-4">Petugas</label>
                    <select name="petugas_id" id="petugas_id" class="form-control col-md-8" required>
                    <option value="" hidden>Pilih Petugas</option>
                      @foreach($petugas as $tugas)
                        <option value="{{ $tugas->id }}">{{ $tugas->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="d-flex justify-content-center">
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
