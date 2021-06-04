<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User Example',
            'email' => 'example@example.com',
            'password' => bcrypt('Asdf123'),
            'profile' => 'Admin',
            'status' => true,
            'registrationNumber' => '123456-7',
            'phone' => '00 00000-0000',
            'notes' =>
                'You must delete this user
                after you to insert a new admin.'
        ]);
    }
}