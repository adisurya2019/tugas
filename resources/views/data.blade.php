@extends('layouts/main')

@section('konten')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <div>
        <div>
                <div class="float-left">
                    <h4>Data Mahasiswa</h4>
                </div>
                <div class="float-right">
                    <a href="{{url('dataMahasiswa/add')}}" class="btn btn-success btn-sm">Tambah Data</a>
                </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">NIM</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Prodi</th>
                        <th class="text-center">Fakultas</th>
                        <th class="text-center">Tools</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama_mahasiswa}}</td>
                            <td>{{$item->nim_mahasiswa}}</td>
                            <td>{{$item->kelas_mahasiswa}}</td>
                            <td>{{$item->prodi_mahasiswa}}</td>
                            <td>{{$item->fakultas_mahasiswa}}</td>
                            <td class="text-center">
                                        <a href="{{url('dataMahasiswa/edit/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{'dataMahasiswa/'.$item->id}}" class="d-inline" method="POST" onsubmit="return confirm('Data akan dihapus, apakah anda yakin?')">
                                            @method('delete')
                                            @csrf
                                            <button href="" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection