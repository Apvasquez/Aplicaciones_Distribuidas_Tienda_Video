<?php

namespace Database\Seeders;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@medical.com',
            'password' => bcrypt('admin'),
            'id' => '1',
        ])->assignRole('Administrador');
        $user = User::create([
            'name' => 'Test',
            'email' => 'test@dakota.com',
            'password' => bcrypt('admin'),
            'id' => '2',
        ])->assignRole('Cliente');
            }

}
