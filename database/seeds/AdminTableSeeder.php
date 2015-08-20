<?php
/**
 * Created by PhpStorm.
 * User: cosorio
 * Date: 02-08-15
 * Time: 04:36 PM
 */


use Illuminate\Database\Seeder;


class AdminTableSeeder extends Seeder{



    public function run(){
        \DB::table('users')->insert(
            array(
                'first_name'  => 'Cristian',
                'last_name'  => 'Osorio',
                'email' => 'osoriocri@gmail.com',
                'password'  => \Hash::make('secret'),
                'type'      => 'admin'
            )
        );

        \DB::table('user_profiles')->insert(
            array(
                'user_id'  => 1,
                'fecha_nacimiento'  => '1984/06/03',
                'twitter'  => 'http://www.tei,cl',
                'website' => 'queseyo.com'
            )
        );




    }
}