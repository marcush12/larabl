<?php

use Illuminate\Database\Seeder;

use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cate_one = new Category();
        $cate_one->slug = 'larablow';
        $cate_one->name = 'Larablow';
        $cate_one->save();

        $cate_two = new Category();
        $cate_two->slug = 'phpmonster';
        $cate_two->name = 'PHPmonster';
        $cate_two->save();
    }
}
