<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user_one = new User();
        $user_one->role_id = 1;
        $user_one->name = 'Linda Deep';
        $user_one->about = 'My name is Linda Deep';
        $user_one->website = 'deep.com';
        $user_one->facebook = 'facebook.com/linda.deep';
        $user_one->twitter = 'twitter.com/linda.deep';
        $user_one->github = 'github.com/kaloraat';
        $user_one->username = 'Linda';
        $user_one->email = 'linda@deep.com';
        $user_one->password = bcrypt('123456');
        $user_one->save();
    }
}
