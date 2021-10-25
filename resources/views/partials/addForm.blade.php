@extends('layouts/main')

@section('konten')
    <div>
        <div>
                <div class="float-left">
                    <h4>Tambah Data</h4>
                </div>
                <div class="float-right">
                    <a href="{{url('dataMahasiswa')}}" class="btn btn-secondary btn-sm">Kembali</a>
                </div>
        </div>
        <div class="card-body">
            <form action="{{url('dataMahasiswa')}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nim" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kelas" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="prodi" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fakultas" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
@endsection