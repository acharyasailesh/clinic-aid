<?php

use App\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $news= new News();
        $news->title="Testing The seeder";
        $news->description="This is description";
        $news->save();

    }
}
