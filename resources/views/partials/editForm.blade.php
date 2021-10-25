@extends('layouts/main')

@section('konten')
    <div>
        <div>
                <div class="float-left">
                    <h4>Edit Data</h4>
                </div>
                <div class="float-right">
                    <a href="{{url('dataMahasiswa')}}" class="btn btn-secondary btn-sm">Kembali</a>
                </div>
        </div>
        <div>
            <form action="{{url('dataMahasiswa/'.$editData->id)}}" method="post">
                @method('patch')
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" required value="{{$editData->nama_mahasiswa}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nim" required value="{{$editData->nim_mahasiswa}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kelas" required value="{{$editData->kelas_mahasiswa}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="prodi" required value="{{$editData->prodi_mahasiswa}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fakultas" required value="{{$editData->fakultas_mahasiswa}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
    
@endsection