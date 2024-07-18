@extends('admin.layouts.app')

@push('style')
<!-- Your styles here -->
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
<!-- Your scripts here -->
@endpush

@endsection
