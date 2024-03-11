<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class organzierRole extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'zak@gmail.com')->first();
        if($user->hasRole('admin')) {
            $user->removeRole('admin');
        }
        $user->assignRole('organizer');
    }
}
