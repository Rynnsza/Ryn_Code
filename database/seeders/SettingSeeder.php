<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        if (! Setting::query()->exists()) {
            Setting::create([
                'name' => 'RynCode',
                'logo' => null,
                'wa' => '+62-8129-2711-935',
                'email' => 'ahmadambari044@gmail.com',
            ]);
        }
    }
}
