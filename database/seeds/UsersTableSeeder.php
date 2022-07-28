<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YaK24KlCl9Uee7XB9b2/6uDzdFe4MBItRhBTpuFvdJ5eHmupKF8Va',
                'remember_token' => NULL,
                'created_at' => '2022-06-26 13:29:31',
                'updated_at' => '2022-06-26 13:29:31'
        ])->assignRole('Admin');
        
    }
}