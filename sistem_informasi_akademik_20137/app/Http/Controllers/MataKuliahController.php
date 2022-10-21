<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class MataKuliahController extends Controller
{
    public function insert(){

        // RAW SQL
        $sql = DB::insert("INSERT INTO mata_kuliahs(kode_mk,nama_mk,created_at,updated_at) VALUES ('AAA04', 'Framework',now(),now())");
        dump($sql);

        // QUERY BUILDER
        $sql1 = DB::table('mata_kuliahs')->insert(
            [
                'kode_mk' => 'AAA02',
                'nama_mk' => 'Algoritma Murni',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql1);

        //ELOQUENT
        $sql2 = Matakuliah::create(
            [
                'kode_mk' => 'AAA03',
                'nama_mk' => 'Matematika Dasar',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($sql2);       // eloquent 
        return "Data berhasil diproses";
    }

    public function select(){

        // RAW SQL
        $sql = DB::select("SELECT * FROM mata_kuliahs");
        dd($sql);

        // QUERY BUILDER
        $sql1 = DB::table('mata_kuliahs')->get();
        dd($sql1);

        //ELOQUENT
        $sql2 = Matakuliah::all();
        dd($sql2);
    }

    public function update(){

        //RAW SQL
        $sql = DB::update("UPDATE mata_kuliahs SET nama_mk='Bahasa Jepang',updated_at=now() WHERE id=?",[1]);
        dump($sql);

        //QUERY BUILDER
        $sql1 = DB::table('mata_kuliahs')
        ->where('id','2')
        ->update(
            [
                'nama_mk' => 'Bahasa Rusia',
                'updated_at' => now()
            ]
            );
        dump($sql1);

        #ELOQUENT
        $sql2 = Matakuliah::where('id','1')->first()->update([
            'nama_mk' => 'Bahasa Minang ',
            'updated_at' => now()
        ]);
        dd($sql2);

    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM mata_kuliahs WHERE id=?",[1]);
        dd($sql);

        //SB
        $sql1 = DB::table('mata_kuliahs')
        ->where('id','1')
        ->delete();
        dd($sql1);

        //ELOQUENT
        $sql2 = Matakuliah::where('id','1')->delete();
        dd($sql2);
    }
}
