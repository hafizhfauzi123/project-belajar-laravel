<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Mahasiswa::truncate();
        // Schema::enableForeignKeyConstraints();

        // // $data = [
        // //     ['name'=> 'Wanda', 'gender'=>'P','nim'=>'18112321','class_id'=>1],
        // //     ['name'=> 'Nabil', 'gender'=>'L','nim'=>'18112331','class_id'=>2],
        // //     ['name'=> 'Dinda', 'gender'=>'P','nim'=>'18112341','class_id'=>3],
        // //     ['name'=> 'Vian', 'gender'=>'L','nim'=>'18112351','class_id'=>4],
        // // ];
        // // foreach ($data as $value){
        // //     Mahasiswa::insert([
        // //         'name' => $value['name'],
        // //         'gender' => $value['gender'],
        // //         'nim' => $value['nim'],
        // //         'class_id' => $value['class_id'],
        // //         'created_at'=> Carbon::now(),
        // //         'updated_at'=> Carbon::now()
        // //         ]);
        // //     }
        Mahasiswa::factory()->count(20)->create();
    }
}
