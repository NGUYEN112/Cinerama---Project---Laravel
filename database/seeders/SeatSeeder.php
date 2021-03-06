<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $row_name = ['A','B','C','D','E','F','G','H'];
        for($a = 0; $a< count($row_name);$a++) {
            for($i=0;$i<12;$i++) {
                DB::table('seats')->insert([
                    'row' => $row_name[$a],
                    'number' => $i+1,
                    'room_id' => 1
                ]);
        }
       
       }

    for($b = 0; $b< count($row_name);$b++) {
        for($j=0;$j<10;$j++) {
            DB::table('seats')->insert([
                'row' => $row_name[$b],
                'number' => $j+1,
                'room_id' => 2
            ]);
    } 
   }
    }
}
