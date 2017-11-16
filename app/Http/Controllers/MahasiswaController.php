<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\user;

class MahasiswaController extends Controller
{



    public function list(){

        //$users = DB::table('user')->get();
        //dd($users);

        $mahasiswa = user::all();
        //dd($mhs);
        return view('servis/ListMahasiswa',['mahasiswa'=>$mahasiswa]);
    }


    public function create(){

      //$mahasiswa = mahasiswa::all();
      //dd($mahasiswa);

      return view('servis/TambahMahasiswa');
    }


    public function store(Request $request){

      //  return view('servis/TambahMahasiswa');
      //return 'masuk';

      // $mhs = new user;
      // $mhs->nama = $request->nama;
      // $mhs->nim = $request->nim;
      // $mhs->jurusan = $request->jurusan;
      // $mhs->save();

      //tambah data eloquent
      user::create([
        'nama' =>  $request->nama,
        'nim' => $request->nim,
        'jurusan' =>$request->jurusan
      ]);

      //$mahasiswa = mahasiswa::all();
      //dd($mahasiswa);

    // return $request->nama;
      return view('servis/ListMahasiswa');

    }
}
