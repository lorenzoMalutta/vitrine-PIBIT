<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new Permission();
        $u->name = 'usuario';
        $u->guard_name = 'web';
        $u->save();
        
        $o = new Permission();
        $o->name = 'admin-geral';
        $o->guard_name = 'web';
        $o->save();
        
        $h = new Permission();
        $h->name = 'admin-patente';
        $h->guard_name = 'web';
        $h->save();
    }
}
