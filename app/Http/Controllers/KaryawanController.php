<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;

class KaryawanController extends Controller
{
    public function show(){
        $karyawan = karyawan::all();
        return view('welcome', compact('karyawan'));
    }
    public function create(){
        $karyawan=karyawan::all();
        return view('create', compact('karyawan'));
    }
    public function store(Request $request){
        $request->validate([
            'nama'=>'required|between:5,20',
            'umur'=>'required|numeric|gt:20',
            'alamat'=>'required|between:10,40',
            'no_telp'=>'required|starts_with:08|digits_between:9,12|regex:/^08\d{7,10}$/',
            'image'=>'required|mimes:png,jpg'
        ]);

        $fileName= $request->name.'-'. $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $fileName);
        karyawan::create([
            'nama'=>$request->nama,
            'umur'=>$request->umur,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp,
            'image'=>$fileName
        ]);
        return redirect(route('show'));
    }
    public function edit($id){
        $karyawan=karyawan::findOrFail($id);
        return view('edit', compact('karyawan'));
    }
    public function update(Request $request, $id){
        $karyawan=karyawan::findOrFail($id);
        $karyawan->update([
            'nama'=>$request->nama,
            'umur'=>$request->umur,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp
        ]);
        return redirect(route('show'));
    }
    public function edit2($id){
        $karyawan=karyawan::findOrFail($id);
        return view('edit2', compact('karyawan'));
    }
    public function update2(Request $request, $id){
        $karyawan=karyawan::findOrFail($id);
        $fileName=$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $fileName);
        $karyawan->update([
            'image'=>$fileName
        ]);
        return redirect(route('show'));
    }
    public function delete($id){
        karyawan::destroy($id);
        return redirect(route('show'));
    }
}
