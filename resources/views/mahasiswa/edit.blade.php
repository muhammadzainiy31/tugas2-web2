@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('update.mahasiswa', $mahasiswa->id) }}" method="post">
                        @csrf
                       <div class="form-group">
                            <div class="form-row">                                   
                                 <div class="col-sm-10"><br>
                                     <label for="">NPM</label>
                                    <input type="text" name="npm" class="form-control" placeholder="Masukkan NPM Anda" value="{{ is_null
                                       ($mahasiswa) ? '' : $mahasiswa->npm }}">  
                                 </div></br> 

                                 <div class="col-sm-10"><br>
                                     <label for="">NAMA MAHASISWA</label>
                                    <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Masukkan NAma Anda" value="{{ is_null
                                       ($mahasiswa) ? '' : $mahasiswa->nama_mahasiswa }}">  
                                 </div>
                                 
                                 <div class="col-sm-10"><br>
                                     <label for="">TEMPAT LAHIR</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir Anda" value="{{ is_null
                                       ($mahasiswa) ? '' : $mahasiswa->tempat_lahir }}">  
                                 </div> </br>

                                 <div class="col-sm-10"><br>
                                     <label for="">TANGGAL LAHIR</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir Anda" value="{{ is_null
                                       ($mahasiswa) ? '' : $mahasiswa->tanggal_lahir }}">  
                                 </div></br>

                                 </div><br>
                                   <div class="form-group row">
                                   <label class="col-sm-2 col-form-label">JENIS KELAMIN 
                                   @error('jenis_kelamin')
                                   <div class="text-danger">{{ $message }}</div>
                                   @enderror
                                   </label>
                                   <div class="col-sm-8">
                                   <select name="jenis_kelamin" class="form-control">
                                   <option value="">-Pilih-</option>
                                   <option @if(old('jenis_kelamin')=='L') selected @endif value="L">Laki-Laki</option>
                                   <option @if(old('jenis_kelamin')=='P') selected @endif value="P">Perempuan</option>
                                  </select>
                                  </div></br>

                                 <div class="col-sm-10"><br>
                                     <label for="">TELEPON</label>
                                    <input type="text" name="telepon" class="form-control" placeholder="Masukkan Nomor Telepon Anda" value="{{ is_null
                                       ($mahasiswa) ? '' : $mahasiswa->telepon }}">  
                                 </div></br>

                                 <div class="col-sm-10"><br>
                                     <label for="">ALAMAT</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Anda" value="{{ is_null
                                       ($mahasiswa) ? '' : $mahasiswa->alamat }}">  
                                 </div></br>
                            </div>
                       </div>
                       <div class="form-group">
                           <div class="form-row">
                               <div class="col">
                                   <button type="submit"class="btn btn-md btn-primary">SIMPAN</button>
                                   <a href="{{ route('mahasiswa') }}"class="btn btn-md btn-danger">BATAL</a>
                               </div>

                           </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
