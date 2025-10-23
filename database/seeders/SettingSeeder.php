<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run()
    {
        DB::table('settings')->upsert([
            ['key' => 'office_lat', 'value' => '-6.896332820090621'],
            ['key' => 'office_lon', 'value' => '107.6162904654312'],
            ['key' => 'office_name', 'value' => 'Head Office 1'],
            ['key' => 'office_radius', 'value' => '100'],
        ], ['key'], ['value']);
    }
}


, 