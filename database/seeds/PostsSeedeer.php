<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 15) -> create();
    }
}
