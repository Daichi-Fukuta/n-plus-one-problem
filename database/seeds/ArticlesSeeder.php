<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [];

        for ($i=0; $i < 100; $i++) { 
            $params[] = [ 
                'author_id' => 1,
                'title' => "title{$i}",
                'created_at' => '2021-07-29 00:00',
                'updated_at' => '2021-07-29 00:00',
            ];
        } 

        Article::insert($params);
    }
}
