<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::all()->each(function($user) {
            $user->assignRole('admin'); // O 'editor' según lo que necesites probar
        });
        
    }
}
