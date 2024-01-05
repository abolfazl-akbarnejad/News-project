<?php

namespace Database\Seeders\Banner;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioritySedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $priorities_name = [
            'بالا سمت چپ',
            'وسط صفحه اصلی',
            'پاین صفحه اصلی سمت چپ',
        ];

        $priorities_number = [
            '1',
            '2',
            '3'
        ];

        $priorities_type = [
            'Common', //مشترک
            'main',
            'main',
        ];

        $priorities_width = [
            '730',
            '730',
            '350',
        ];

        $priorities_height = [
            '92',
            '92',
            '280'
        ];

        for ($i = 0; $i < $priorities_name; $i++) {
            DB::table('priories_banner')->insert([
                'name' => $priorities_name[$i],
                'number' => $priorities_number[$i],
                'type' => $priorities_type[$i],
                'width' => $priorities_width[$i],
                'height' => $priorities_height[$i],
                'created_at' => now(),
            ]);
        }
    }
}
