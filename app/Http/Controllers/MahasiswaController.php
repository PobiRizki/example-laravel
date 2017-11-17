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

      //tambah data eloquent
      $mahasiswa = new user;
      $mahasiswa->nama = $request->nama;
      $mahasiswa->nim = $request->nim;
      $mahasiswa->jurusan = $request->jurusan;
      $mahasiswa->save();

      //tambah data eloquent
      // user::create([
      //   'nama' =>  $request->nama,
      //   'nim' => $request->nim,
      //   'jurusan' =>$request->jurusan
      // ]);

      $mahasiswa = user::all();
      //dd($mahasiswa);
      //$mahasiswa = user::all();
      // return $request->nama;
      return redirect('ListMahasiswa');

    }

    public function hapus ($id){

      //return $id;

      $mahasiswa = user::find($id);
      $mahasiswa->delete();
        return redirect('ListMahasiswa');
      //dd($mahasiswa);

    }
    public function edit($edit){
        $mahasiswa = user::where('id','1')->first();
    }
}
