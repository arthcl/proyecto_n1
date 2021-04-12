<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' 		=> 'cliente',
        	'email' 	=> 'cliente@emg.cl',
         	'password' 	=> Hash::make('cliente')
        ]);

        User::creater([
        	'name' 		=> 'supervisor',
        	'email' 	=> 'supervisor@emg.cl',
        	'password' 	=> Hash::make('supervisor')
        ]);

        User::create([
        	'name' 		=> 'operador',
        	'email'		=> 'operador@emg.cl',
        	'password'	=> Hash::make('operador')
        ]);


    }
}
