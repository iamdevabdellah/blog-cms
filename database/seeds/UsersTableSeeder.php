<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'test@test.com')->first();

        if(!$user) {
            User::create([
                'name' => 'testadmin',
                'role' => 'admin',
                'email' => 'test@test.com',
                'password' => Hash::make('12345678')
            ]);
        }
    }
}
