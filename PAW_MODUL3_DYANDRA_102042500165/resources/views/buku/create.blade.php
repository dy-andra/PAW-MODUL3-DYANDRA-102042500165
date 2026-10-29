@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h3 class="fw-bold mb-1">Tambah Buku Baru</h3>
                <p class="text-muted small mb-0">Isi formulir berikut untuk menambahkan buku ke sistem perpustakaan.</p>
            </div>
            <a href="{{ route('buku.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-left me-1"></i> Kembali
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-4">
                <form action="{{ route('buku.store') }}" method="POST">
                    @csrf

                    {{-- TODO:- Buat form input untuk: judul, penulis, penerbit, tahun_terbit, dan stok --}}
                    {{--      - Tampilkan pesan error validasi di bawah setiap input jika ada error (@error) --}}
                    {{--      - Buat tombol submit untuk menyimpan data buku --}}
                    <div>
                        <label>Judul Buku</label>
                        <input type="text" name="judul" value="{{ old('judul') }}" required>
                        @error('judul')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label>Penulis</label>
                        <input type="text" name="penulis" value="{{ old('penulis') }}" required>
                        @error('penulis')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label>Penerbit</label>
                        <input type="text" name="penerbit" value="{{ old('penerbit') }}" required>
                        @error('penerbit')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label>Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit') }}" required>
                        @error('tahun_terbit')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label>Stok</label>
                        <input type="number" name="stok" value="{{ old('stok', 0) }}" min="0" required>
                        @error('stok')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit">Simpan Buku</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
