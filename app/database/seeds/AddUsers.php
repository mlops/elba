<?php

class AddUsers extends Seeder {
 
    public function run() {
        DB::table('users')->delete(); // deleting old records.
 
        User::create(
            array(
                'name'     => 'Andre Lops',
                'username' => 'mlops',
                'email'    => 'mlops78@hotmail.com',
                'password' => Hash::make('mpq241'), //insert your password in here
            )
        );
    }
}

