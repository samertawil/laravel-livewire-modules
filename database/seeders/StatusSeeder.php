<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $StatusData = [
            ['p_id' => null,'p_id_sub'=>null,'status_name'=>'ثوابت البرنامج'],
            ['p_id' => 1,'p_id_sub'=>1,'status_name'=>'ثوابت عامة'],
        ];
        Status::insert($StatusData);
    }
}
