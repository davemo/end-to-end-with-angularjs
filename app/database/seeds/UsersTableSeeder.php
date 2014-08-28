<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $users = array(
            array(
                'email'         => 'admin@example.org',
                'password'      => Hash::make('admin'),
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'remember_token'=> ''        
            )
        );

        DB::table('users')->insert( $users );
    }

}

?>
