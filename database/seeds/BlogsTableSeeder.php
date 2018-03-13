<?php

use Illuminate\Database\Seeder;
use App\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        $blog_one = new Blog();
        $blog_one->title = 'Cum linguae';
        $blog_one->slug = 'Cum linguae';
        $blog_one->meta_title = 'Cum linguae esporum';
        $blog_one->meta_desc = 'Cum linguae esporum';
        $blog_one->body = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        $blog_one->save();

        $blog_two = new Blog();
        $blog_two->title = 'In lingus culus';
        $blog_two->slug = 'In lingus culus';
        $blog_two->meta_title = 'In lingus culus';
        $blog_two->meta_desc = 'In lingus culus';
        $blog_two->body = 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ';
        $blog_two->save();
    }
}
