<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DataMahasiswaController extends Controller
{
    public function read(){
        $data = DB::table('mahasiswa')->get();
        return view('data', [
            'title' => 'Data Mahasiswa',
            'data' => $data
        ]);
    }
    public function add(){
        return view('partials/addForm', [
            'title' => 'Data Mahasiswa',
        ]
    );
    }
    public function addProcess(Request $request){
        DB::table('mahasiswa')->insert([
            'nama_mahasiswa' => $request->nama,
            'nim_mahasiswa' => $request->nim,
            'kelas_mahasiswa' => $request->kelas,
            'prodi_mahasiswa' => $request->prodi,
            'fakultas_mahasiswa' => $request->fakultas
        ]);
        return redirect('dataMahasiswa')->with('status', 'Data Berhasil Ditambah!');
    }
    public function edit($id){
        $editData = DB::table('mahasiswa')->where('id', $id)->first();
        // dd($editData);
        return view('partials/editForm', [
            'title' => 'Data Mahasiswa',
            'editData' => $editData
        ]);
    }
    public function editProcess(Request $request, $id){
        DB::table('mahasiswa')->where('id', $id)
            ->update([
                'nama_mahasiswa' => $request->nama,
                'nim_mahasiswa' => $request->nim,
                'kelas_mahasiswa' => $request->kelas,
                'prodi_mahasiswa' => $request->prodi,
                'fakultas_mahasiswa' => $request->fakultas
            ]);
            return redirect('dataMahasiswa')->with('status', 'Data Berhasil di Edit!');
    }
    public function delete($id){
        DB::table('mahasiswa')->where('id', $id)->delete();
        return redirect('dataMahasiswa')->with('status', 'Data Berhasil di Hapus!');
    }
}
