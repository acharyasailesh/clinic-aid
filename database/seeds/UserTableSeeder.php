<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  $role_user=Role::where('name','user')->first();
        $role_admin=Role::where('name','admin')->first();
        //$role_doctor=Role::where('name','doctor')->first();

//        $user=new User();
//        $user->name='Sailesh';
//        $user->email='sailesh@outlook.com';
//        $user->password=bcrypt('terminator4');
//        $user->save();
//        $user->roles()->attach($role_user);



        $admin=new User();
        $admin->name='Sabina';
        $admin->email='sabina@outlook.com';
        $admin->password=bcrypt('terminator4');
        $admin->save();
        $admin->roles()->attach($role_admin);


//        $doctor=new User();
//        $doctor->name='Madan';
//        $doctor->email='madan@outlook.com';
//        $doctor->password=bcrypt('terminator4');
//        $doctor->save();
//        $doctor->roles()->attach($role_doctor);
//







//        $user=new User();
//        $user->name='Sailesh';
//        $user->email='sailesh@outlook.com';
//        $user->password=bcrypt('terminator4');
//        $user->save();
//        $user->roles()->attach($role_user);




        //
    }
}
