<?php

namespace Database\Seeders;

use App\Models\Computer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Computer::factory()->count(1)->create();
        //Computer::where('id',1)->delete();
        Computer::factory()->createMany(Computer::factory()->variosProductos());
    }
}
