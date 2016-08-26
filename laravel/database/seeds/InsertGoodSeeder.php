<?php

use Illuminate\Database\Seeder;

class InsertGoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<50;$i++){
            $data[]=[
                'title'=>str_random(30),
                'cate_id'=>rand(1,5),
                'price'=>rand(1,999),
                'num'=>rand(1,99),
                'pic'=>str_random(30),
                'content'=>str_random(50),
                'status'=>1
            ];
        }
        DB::table('goods')->insert($data);
    }
}
