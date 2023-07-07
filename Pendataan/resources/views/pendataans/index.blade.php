@extends('templates.default')

@php
 $title = "Data Lahan"
@endphp

@push('page-action')
<a href="{{ route ('pendataans.create')}}" class="btn btn-primary">Tambah Data</a>
@endpush

@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th >Nama </th>
                      <th>Penanggung Jawab</th>
                      <th>Alamat</th>
                      <th>Number Phone</th>
                      <th>Produk</th>
                      <th>Lokasi Lahan</th>
                      <th>Luas Sewa</th>
                      <th>Nilai Sewa</th>
                      <th>Legalitas</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pendataans as $pendataan)
                    <tr>
                        <td>{{ $pendataan->name }}</td>
                        <td>{{ $pendataan->penanggung_jawab }}</td>
                        <td>{{ $pendataan->address }}</td>
                        <td>{{ $pendataan->phone_number }}</td>
                        <td>{{ $pendataan->product }}</td>
                        <td>{{ $pendataan->lokasi_lahan }}</td>
                        <td>{{ $pendataan->luas_lahan }}</td>
                        <td>{{ $pendataan->nilai_sewa }}</td>
                        <td>
                          <img src="{{ asset ('storage/' .$pendataan->photo) }}" alt="" width="50px"></td>
                        <td>
                          <a href="{{route ('pendataans.edit', $pendataan->id)}}" >Edit</a>
                          <form action="{{route ('pendataans.destroy', $pendataan->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
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
        </div>
@endsection
