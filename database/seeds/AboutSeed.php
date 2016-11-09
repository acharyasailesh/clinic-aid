<?php

use App\About;
use Illuminate\Database\Seeder;

class AboutSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $about= About::create([
           'description'=>'Welcome to clinic aid',
            'phoneNo'=>'984614230',
            'email'=>'care@clinicaid.com'
        ]);

    }
}
