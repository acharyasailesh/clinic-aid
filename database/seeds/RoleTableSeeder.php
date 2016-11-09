<?php


use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        $admin=new Role();
        $admin->name="admin";
        $admin->description="Admin of Clinic Aid";
        $admin->save();



        $user=new Role();
        $user->name="user";
        $user->description="Normal User of Clinic Aid";
        $user->save();


        $doctor=new Role();
        $doctor->name="doctor";
        $doctor->description="Doctor of Clinic Aid";
        $doctor->save();




    }
}
