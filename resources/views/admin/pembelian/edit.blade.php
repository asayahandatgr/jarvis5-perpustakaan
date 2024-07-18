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
                <h3 class="card-title">Edit Pembelian</h3>
                <a href="{{route('pembelian.index')}}" class="btn btn-success btn-sm">Kembali</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('pembelian.store') }}" method="post">
                  @csrf
                  <div class="form-group row">
                    <label for="tanggal" class="col-md-4">Mulai</label>
                    <input type="hidden" name="id" value="{{ $pembelian->id }}">
                    <input type="date" value="{{ $pembelian->tanggal }}" name="tanggal" id="tanggal" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="nama_pembeli" class="col-md-4">Nama Pembeli</label>
                    <input type="text" value="{{ $pembelian->nama_pembeli }}" name="nama_pembeli" id="nama_pembeli" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="telefon" class="col-md-4">No Telfon</label>
                    <input type="number" value="{{ $pembelian->telefon }}" name="telefon" id="telefon" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="buku_id" class="col-md-4">Buku</label>
                    <select name="buku_id" id="buku_id" class="form-control col-md-8">
                      <option value="" hidden>Pilih Buku</option>
                      @foreach ($buku as $buk)
                      <option value="{{ $buk->id }}" {{ $pembelian->buku_id == $buk->id ? 'selected' : '' }}>{{ $buk->title }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="harga" class="col-md-4">Harga</label>
                    <input type="number" value="{{ $pembelian->harga }}" name="harga" id="harga" class="form-control col-md-8" required>
                  </div>
                  <div class="form-group row">
                    <label for="petugas_id" class="col-md-4">Petugas</label>
                    <select name="petugas_id" id="petugas_id" class="form-control col-md-8">
                      <option value="" hidden>Pilih Petugas</option>
                      @foreach ($petugas as $tugas)
                      <option value="{{ $tugas->id }}" {{ $pembelian->petugas_id == $tugas->id ? 'selected' : '' }}>{{ $tugas->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="status_pembelian" class="col-md-4">Status Pembelian</label>
                    <select name="status_pembelian" class="form-control col-md-8" required>
                      <option value="Berhasil" {{ $pembelian->status_pembelian == 'Berhasil' ? 'selected' : '' }}>Berhasil</option>
                      <option value="Gagal" {{ $pembelian->status_pembelian == 'Gagal' ? 'selected' : '' }}>Gagal</option>
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