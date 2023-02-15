<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassRoom;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate();
        Schema::enableForeignKeyConstraints();

        $data =[
            ['name'=> 'Informatika'],
            ['name'=> 'Teknologi Informasi'],
            ['name'=> 'Sistem Informasi'],
            ['name'=> 'Teknik Komputer'],
            ['name'=> 'Multimedia'],          
        ];

        foreach ($data as $value){
        ClassRoom::insert([
            'name' => $value['name'],
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
            ]);
        }
    }
}
