<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name'=>'Mg Mg',
            'DOB'=>'5/10/1999',
            'phno'=>'0978956',
            'hobby'=>'writing',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('students')->insert([
            'name'=>'Aung Aung',
            'DOB'=>'5/10/2000',
            'phno'=>'0978956',
            'hobby'=>'reading',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('students')->insert([
            'name'=>'Zaw Zaw',
            'DOB'=>'5/10/2001',
            'phno'=>'0978956',
            'hobby'=>'gaming',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
