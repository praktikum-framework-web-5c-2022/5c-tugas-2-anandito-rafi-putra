<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insert(){

        // RAW  SQL
        $sql = DB::insert("INSERT INTO mahasiswas (npm,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('2010631171', 'Ronaldo Zidan','Pria','Jl.Portugis No.7','Sumedang','2003-01-12','ronaldo_mhs.png',now(),now())");
        dump($sql);

        // QUERY BUILDER
        $sql1 = DB::table('mahasiswas')->insert(
            [
                'npm' => '2010631172',
                'nama' => 'Jeanne Putri',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl.Desan No.5',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '2001-02-14',
                'photo' => 'jeanne_mhs.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dd($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::create(
            [
                'npm' => '2010631173',
                'nama' => 'Berlianamukti',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl.Jati Bening No.1',
                'tempat_lahir' => 'Purwakarta',
                'tanggal_lahir' => '2002-01-15',
                'photo' => 'berliana_mhs.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dd($sql2);
        return "Data berhasil diproses";
    }

    public function select(){

        // RAW SQL
        $sql = DB::select("SELECT * FROM mahasiswas");
        dd($sql);

        // QUERY BUILDER
        $sql1 = DB::table('mahasiswas')->get();
        dd($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::all();
        dd($sql2);
    }

    public function update(){

        //RAW SQL
        $sql = DB::update("UPDATE mahasiswas SET alamat='JL.Kusuka No.12',updated_at=now() WHERE id=?",[1]);
        dd($sql); //kalau dd yang kebaca satu aja

        //QUERY BUILDER
        $sql1 = DB::table('mahasiswas')
        ->where('id','1')
        ->update(
            [
                'alamat' => 'JL.Killjoy No.11',
                'updated_at' => now()
            ]
            );
        dd($sql1);

        #ELOQUENT
        $sql2 = Mahasiswa::where('id','1')->first()->update([
            'alamat' => 'JL.Yoru No.17',
            'updated_at' => now()
        ]);
        dd($sql2); 

    }

    public function delete(){

        //RAW SQL
        $sql = DB::delete("DELETE FROM mahasiswas WHERE npm=?",['2010631172']);
        dd($sql);

        //QUERY BUILDER
        $sql1 = DB::table('mahasiswas')
        ->where('npm','2010631172')
        ->delete();
        dd($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::where('mahasiswas','2010631172')->delete();
        dd($sql2);
    }
    
}
