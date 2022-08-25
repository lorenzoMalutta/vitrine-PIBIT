<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User();
        $u->name = "usuario";
        $u->email = 'user1@email.com';
        $u->password = bcrypt('456%¨&QWEasd');
        $u->cpf = 12345678909;
        $u->save();
    }
}
