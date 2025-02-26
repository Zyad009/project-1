<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(["email" => "test@test.com"] , [
            "name" =>"Zyad Ashraf",
            "phone" =>"01114656758",
            "address" =>"Alex",
            "email" => "zyad3300992@gmail.com",
        ]);
    }
}
