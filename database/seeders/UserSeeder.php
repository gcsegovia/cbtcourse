<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    private $users = [
        [
            'id' => '1',
            'name' => 'Glen Victor C. Segovia',
            'username' => 'gvcsegovia',
            'email' => 'darkblossom55@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = $this->users;
        foreach ($users as $key => $data) {
            User::create($data);
        };
    }
}
