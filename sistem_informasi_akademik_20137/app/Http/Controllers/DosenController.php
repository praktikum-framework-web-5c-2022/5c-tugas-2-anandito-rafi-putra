<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function insert(){
        
        //RAW SQL
        $sql = DB::insert("INSERT INTO dosens (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('1020401', 'Anindito M.Kom','Pria','Jl.Canon No.4','Bekasi','1988-05-17','anindito.jpg',now(),now())");
        dump($sql);

        //QUERY BUILDER
        $sql1 = DB::table('dosens')->insert(
            [
                'nidn' => '1020402',
                'nama' => 'Atta Alam M.Pd',
                'jenis_kelamin' => 'Pria',
                'alamat' => 'Jl.Siliwangi No.4',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '1986-06-24',
                'photo' => 'atta.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql1); 

        //ELOQUENT
        $sql2 = Dosen::create(
            [
                'nidn' => '1020403',
                'nama' => 'Mayang Lestari M.Pd',
                'jenis_kelamin' => 'Pria',
                'alamat' => 'Jl.Dieng Raya No.22',
                'tempat_lahir' => 'Jakarta Timur',
                'tanggal_lahir' => '1985-06-11',
                'photo' => 'mayang.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($sql2);  //eloquent harus dump biar keliatan
    }

    public function select(){

        //RAW SQL
        $sql = DB::select("SELECT * FROM dosens");
        dd($sql); // dd semua motode bisa

        //QUERY BUILDER
        $sql1 = DB::table('dosens')->get();
        dd($sql1); 

        //ELOQUENT
        $sql2 = Dosen::all();
        dd($sql2);
    }

    public function update(){

        // RAW SQL
        $sql = DB::update("UPDATE dosens SET alamat='JL.Dieng Raya No.17',updated_at=now() WHERE id=?",[1]);
        dd($sql);

        //QUERY BUILDER
        $sql1 = DB::table('dosens')
        ->where('id','3')
        ->update(
            [
                'alamat' => 'JL.Alam Sutra No.11',
                'updated_at' => now(),
            ]
            );
        dd($sql1);

        #ELOQUENT
        $sql2 = Dosen::where('id','2')->first()->update([
            'alamat' => 'JL.Bapak No.12',
            'updated_at' => now(),
        ]);
        dd($sql2);


    }

    public function delete(){
 
        //RAW SQL
        $sql = DB::delete("DELETE FROM dosens WHERE nidn=?",['1020401']);
        dd($sql);

        //QUERY BUILDER
        $sql1 = DB::table('dosens')
        ->where('nidn','1020401')
        ->delete();
        dd($sql1);

        //ELOQUENT
        $sql2 = Dosen::where('nidn','1020401')->delete();
        dd($sql2);
    }
}
