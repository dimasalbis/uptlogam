<div>
    <div class="row">
        <div class="col-12">
            @if (session('sukses'))
                <div class="alert alert-primary">
                    {{session('sukses')}}
                </div>
            @endif
            @if ($create)
            <div class="card">
                <!-- create -->




                <div class="card-body">

                    <div class="form-group">
                        <label>Gambar Mesin</label>
                        <input wire:model="gambar_mesin" type="file" class="form-control"  placeholder="">
                        @error('gambar mesin') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                    <label>Nama Mesin</label>
                    <input wire:model="nama_mesin" type="text" class="form-control"  placeholder="Masukan Nama Mesin">
                    @error('nama_mesin') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>No. Seri</label>
                        <input wire:model="no_seri" type="text" class="form-control"  placeholder="Masukan No. Seri">
                        @error('no_seri') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Legalitas</label>
                        <input wire:model="foto" type="file" class="form-control"  placeholder="Upload Legalitas">
                        @error('legalitas') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Nama Penyewa</label>
                        <input wire:model="nama_penyewa" type="text" class="form-control"  placeholder="Masukan Nama Penyewa">
                        @error('nama_penyewa') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input wire:model="alamat" type="text" class="form-control"  placeholder="Masukan Alamat">
                        @error('alamat') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>No. Hp</label>
                        <input wire:model="no_hp" type="text" class="form-control"  placeholder="Masukan No. Hp">
                        @error('no_hp') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Tanggal Sewa</label>
                                <input wire:model="tanggal_sewa" type="date" class="form-control"  id="tanggal_sewa" value="date">
                                    @error('tanggal_sewa') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Tanggal Kembali</label>
                                <input wire:model="tanggal_kembali" type="date" class="form-control"  id="tanggal_kembali" value="date">
                                    @error('tanggal_kembali') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <label>Nilai Sewa</label>
                        <input wire:model="nilai_sewa" type="text" class="form-control"  placeholder="Masukan Nilai sewa">
                        @error('nilai_sewa') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <span wire:click="store" class="btn btn-sm btn-primary mb-2">Tambah</span>

            </div>

        </div>
         <!--endcreate-->
            @endif

            @if ($edit)
            <div class="card">
                <!-- create -->
                <div class="card-body">


                    <div class="form-group">
                        <label>Gambar Mesin</label>
                        <input wire:model="gambar_mesin" type="file" class="form-control"  placeholder="">
                        @error('gambar mesin') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                    <label>Nama Mesin</label>
                    <input wire:model="nama_mesin" type="text" class="form-control"  placeholder="Masukan Nama Mesin">
                    @error('nama_mesin') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>No. Seri</label>
                        <input wire:model="no_seri" type="text" class="form-control"  placeholder="Masukan No. Seri">
                        @error('no_seri') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Legalitas</label>
                        <input wire:model="foto" type="file" class="form-control"  placeholder="Upload Legalitas">
                        @error('legalitas') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Nama Penyewa</label>
                        <input wire:model="nama_penyewa" type="text" class="form-control"  placeholder="Masukan Nama Penyewa">
                        @error('nama_penyewa') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input wire:model="alamat" type="text" class="form-control"  placeholder="Masukan Alamat">
                        @error('alamat') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>No. Hp</label>
                        <input wire:model="no_hp" type="text" class="form-control"  placeholder="Masukan No. Hp">
                        @error('no_hp') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="tanggal_sewa">Tanggal Sewa</label>
                                <input wire:model="tanggal_sewa" type="date" class="form-control" id="tanggal_sewa">
                                @error('tanggal_sewa') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="tanggal_kembali">Tanggal Kembali</label>
                                <input wire:model="tanggal_kembali" type="date" class="form-control" id="tanggal_kembali">
                                @error('tanggal_kembali') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nilai Sewa</label>
                        <input wire:model="nilai_sewa" type="text" class="form-control"  placeholder="Masukan Nilai sewa">
                        @error('nilai_sewa') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <span wire:click="update({{$mesin_id}})" class="btn btn-sm btn-primary mb-2">Update</span>

            </div>

        </div>
            @endif

            @if ($delete)
            <div class="modal fade show" id="modal-default" style="padding-right: 17px; display: block;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Default Modal</h4>
                            <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </span>
                        </div>
                    <div class="modal-body">
                    <p>Anda Yakin?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Batal</span>
                    <span wire:click="destroy({{$mesin_id}})" type="button" class="btn btn-danger">Hapus</span>
                </div>
                </div>

                </div>

                </div>
            @endif


        <div class="card">

        <div class="card-header">

        <span wire:click="create" class="btn btn-sm btn-primary mb-2">Tambah</span>


        <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
        <input wire:model="search" type="text" name="table_search" class="form-control float-right" placeholder="Search">
        <div class="input-group-append">
        <button type="submit" class="btn btn-default">
        <i  class="fas fa-search"></i>
        </button>
        </div>
        </div>
        </div>
        </div>





        <div class="card-body table-responsive p-0">
         <table class="table table-hover text-nowrap">
        <thead>
        <tr>

            <th width="10%">Gambar Mesin</th>
            <th width="10%">Nama Mesin</th>
            <th>No. Seri</th>
            <th width="10%">Nama Penyewa</th>
            <th width="10%">Alamat</th>
            <th width="10%">No.Hp</th>
            <th width="10%">Tanggal Sewa</th>
            <th width="10%">Tanggal Kembali</th>
            <th>Nilai Sewa</th>
            <th>Bukti Legalitas</th>
            <th width="15%">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($mesin as $item)
        <tr>
            <td><img src="{{asset('storage')}}/{{ $item->gambar_mesin}}" width="50px" alt=""></td>
            <td>{{$item->nama_mesin}}</td>
            <td>{{$item->no_seri}}</td>
            <td>{{$item->nama_penyewa}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->no_hp}}</td>
            <td>{{$item->tanggal_sewa}}</td>
            <td>{{$item->tanggal_kembali}}</td>
            <td>{{$item->nilai_sewa}}</td>
            <td><img src="{{ asset('storage')}}/{{$item->foto}}" alt="" width="50pxpx"></td>
            <td>
                <span wire:click="edit({{$item->id}})" class="btn btn-sm btn-primary mr-2">Edit</span>
                <span wire:click="delete({{$item->id}})" class="btn btn-sm btn-success">Delete</span>
            </td>
            </tr>
        @endforeach

        </tbody>

        <tfoot>
            {{$mesin->links()}}
        </tfoot>
        </table>
        </div>



        </div>

        </div>
        </div>

</div>
