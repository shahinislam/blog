<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=new \App\Admin();
        $admin->email="test@test.com";
        $admin->password=bcrypt("test_pw");
        $admin->save();
		
		$admin=new \App\Admin();
        $admin->email="shahin@gmail.com";
        $admin->password=bcrypt("password");
        $admin->save();
    }
}
