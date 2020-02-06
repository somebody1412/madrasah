<?php

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            [
              'name'=>'Staff',
              'email'=>'staff1@mail.com',
              'password'=>Hash::make('test1234'),
              'role_id'=> Role::STAFF,
              'nric'=>'22222222'
            ]
          ]);
    }
}
