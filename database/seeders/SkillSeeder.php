<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('skills')->insert(
            [
                [
                    "name" => "Java",
                    "proficiency" => "10",
                    "service_id" => "16"
                ],
                [
                    "name" => "Pwordpress",
                    "proficiency" => "20",
                    "service_id" => "3"
                ],
                [
                    "name" => "PHP",
                    "proficiency" => "90",
                    "service_id" => "8"
                ],
                [
                    "name" => "PHP",
                    "proficiency" => "9",
                    "service_id" => "14"
                ],
                [
                    "name" => "PHP",
                    "proficiency" => "90",
                    "service_id" => "6"
                ],

            ]
        );
    }
}
