<?php

use App\Admin;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin=new Admin();
        $admin->name="Sailesh Acharya";
        $admin->address="O km";
        $admin->phoneNo="9846142530";
        $admin->email="sailuacharya42@outlook.com";
        $admin->save();
        
    }
    
}
