<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Yap;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create()->each(function ($user) {
            $user->yaps()->saveMany(Yap::factory(30)->make());
        });
    }
}
