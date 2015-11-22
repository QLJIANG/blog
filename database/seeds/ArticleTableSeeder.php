<?php
/**
 * Created by PhpStorm.
 * User: QLJIANG
 * Date: 11/14/15
 * Time: 23:37
 */
use Illuminate\Database\Seeder;
use App\Article;

class ArticleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('articles')->delete();
        for ($i=0; $i < 10; $i++) {
            Article::create([
                'title' => 'Title ' . $i,
                'tag' => 'test',
                'content' => 'Content ' . $i,
                'user_id' => 1,
            ]);
        }
    }
}