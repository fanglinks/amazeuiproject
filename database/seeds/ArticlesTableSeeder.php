<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $article = new App\Article();
        //$article->id = 1;
        $article->title = str_random(10);
        $article->author = str_random(5).'tai';
        $article->content = str_random(100);
        $article->save();
    
    }
}
