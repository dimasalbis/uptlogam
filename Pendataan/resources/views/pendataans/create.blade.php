@extends('templates.default')

@php
 $title = "Tambah Data Lahan"
@endphp
@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{ route('pendataans.store')}}" class="" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" class="form-control
       @error('name')
        is-invalid
       @enderror"  placeholder="Input Nama" value="{{ old('name')}}">
       @error('name')
        <span class="invalid-feedback">{{ $message }}</span>
       @enderror
      </div>
      <div class="mb-3">
      <label class="form-label">Penanggung Jawab</label>
      <input type="text" name="penanggung_jawab" class="form-control 
      @error('penanggung_jawab')
        is-invalid
      @enderror"   placeholder="Input Nama" value="{{ old('penanggung_jawab')}}">
      @error('penanggung_jawab')
        <span class="invalid-feedback">{{ $message }}</span>
       @enderror
      </div>
      <div class="mb-3">
      <label class="form-label">Alamat</label>
      <input type="text" name="address" class="form-control
      @error('address')
        is-invalid
       @enderror"  placeholder="Input Nama" value="{{ old('address')}}">
      @error('address')
        <span class="invalid-feedback">{{ $message }}</span>
       @enderror
      </div>
      <div class="mb-3">
      <label class="form-label">No Telephone</label>
      <input type="text" name="phone_number" class="form-control
      @error('phone_number')
        is-invalid
       @enderror"  placeholder="Input Nama" value="{{ old('phone_number')}}">
      @error('phone_number')
        <span class="invalid-feedback">{{ $message }}</span>
       @enderror
      </div>
      <div class="mb-3">
      <label class="form-label">Produk</label>
      <input type="text" name="product" class="form-control
      @error('product')
        is-invalid
       @enderror"  placeholder="Input Nama" value="{{ old('product')}}">
      @error('product')
        <span class="invalid-feedback">{{ $message }}</span>
       @enderror
      </div>
      <div class="mb-3">
      <label class="form-label">Lokasi Lahan</label>
      <input type="text" name="lokasi_lahan" class="form-control
      @error('lokasi_lahan')
        is-invalid
       @enderror"  placeholder="Input Nama" value="{{ old('lokasi_lahan')}}">
      @error('lokasi_lahan')
        <span class="invalid-feedback">{{ $message }}</span>
       @enderror
      </div>
      <div class="mb-3">
      <label class="form-label">Luas Lahan</label>
      <input type="text" name="luas_lahan" class="form-control
      @error('luas_lahan')
        is-invalid
       @enderror"  placeholder="Input Nama" value="{{ old('luas_lahan')}}">
      @error('luas_lahan')
        <span class="invalid-feedback">{{ $message }}</span>
       @enderror
      </div>
      <div class="mb-3">
      <label class="form-label">Nilai Sewa</label>
      <input type="text" name="nilai_sewa" class="form-control
      @error('nilai_sewa')
        is-invalid
       @enderror"  placeholder="Input Nama" value="{{ old('nilai_sewa')}}">
      @error('nilai_sewa')
        <span class="invalid-feedback">{{ $message }}</span>
       @enderror
      </div>
      <div class="mb-3">
      <label class="form-label">Legalitas</label>
      <input type="file" name="photo" class="form-control
       @error('photo')
        is-invalid
       @enderror"  placeholder="Input Nama" value="{{ old('photo')}}">
       @error('photo')
        <span class="invalid-feedback">{{ $message }}</span>
       @enderror
      </div>

      <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-primary">
      </div>
    </form>
  </div>
</div>
@endsection