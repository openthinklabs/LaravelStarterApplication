<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //KETIGA DATA INI AKAN DIJADIKAN DUMMY USER DENGAN MASING-MASING ROLE YANG DIMILIKINYA
        User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@openthinklabs.com',
            'password' => bcrypt('secret'),
            'role' => 'superadmin',
            'phone' => '123',
            'address' => 'Mother Earth'
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@openthinklabs.com',
            'password' => bcrypt('secret'),
            'role' => 'admin',
            'phone' => '123',
            'address' => 'Mother Earth'
        ]);

        User::create([
            'name' => 'Kaprodi',
            'email' => 'kaprodi@openthinklabs.com',
            'password' => bcrypt('secret'),
            'role' => 'kaprodi',
            'phone' => '123',
            'address' => 'Mother Earth'
        ]);

        User::create([
            'name' => 'Dosen',
            'email' => 'dosen@openthinklabs.com',
            'password' => bcrypt('secret'),
            'role' => 'dosen',
            'phone' => '123',
            'address' => 'Mother Earth'
        ]);        

        User::create([
            'name' => 'Mahasiswa',
            'email' => 'mahasiswa@openthinklabs.com',
            'password' => bcrypt('secret'),
            'role' => 'mahasiswa',
            'phone' => '123',
            'address' => 'Mother Earth'
        ]);                

        User::create([
            'name' => 'User',
            'email' => 'user@openthinklabs.com',
            'password' => bcrypt('secret'),
            'role' => 'user',
            'phone' => '123',
            'address' => 'Mother Earth'
        ]);                        
    }
}