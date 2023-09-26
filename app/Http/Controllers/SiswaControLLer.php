<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use Illuminate\Http\Request;

class SiswaControLLer extends Controller
{
    public function utama(){
        $s = new SiswaModel();

        return view('index',['datasiswa'=>$s->all()]);
    }
    public function tambah(){
        return view ('form');
    }
    public function simpan(Request $request){
    $siswa = new SiswaModel();
    $validasi = $request->validate([
        'nisn'=>'required|unique:tb_siswa1',
        'nama'=>'required',
        'alamat'=>'required',
        'no_telp'=>'required',
        'kode_kelas'=>'required',

    ]);
    $siswa->create($request->all());
    return redirect('siswa')->with('pesan','data berhasil di anu kan');
    }
    public function edit($nisn){
        $siswa = new SiswaModel();
        return  view ('edit',['datasiswa'=>$siswa->find($nisn)]);
    }
    public function update(Request $request,$nisn){
        $validasi = $request->validate([
            'nisn'=>'required|unique:tb_siswa1',
            'nama'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
            'kode_kelas'=>'required',
    
        ]);
        $siswa = new SiswaModel();
        $siswa = $siswa->find($nisn);
        $siswa->update($request->all());
        return redirect('siswa');
    }
    public function hapus($nisn){
        $siswa = new SiswaModel();
        $siswa = $siswa->find($nisn);
        $siswa->delete();
        return redirect('siswa');
    }
}
