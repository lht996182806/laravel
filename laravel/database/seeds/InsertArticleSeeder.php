<?php

use Illuminate\Database\Seeder;

class InsertArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<100;$i++){
            $data[]=[
                'title'=>str_random(10),
                'content'=>str_random(50),
                'descr'=>str_random(20),
                'user_id'=>1,
                'cate_id'=>rand(1,5),
                'create_t'=>time()
            ];
        }
        DB::table('articles')->insert($data);
    }
}
