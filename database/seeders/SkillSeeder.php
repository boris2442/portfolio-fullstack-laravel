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
                    "name" => "PHP",
                    "proficiency" => "90",
                    "service_id" => "2"
                ],
                [
                    "name" => "PHP",
                    "proficiency" => "90",
                    "service_id" => "3"
                ],
                [
                    "name" => "PHP",
                    "proficiency" => "90",
                    "service_id" => "4"
                ],
                [
                    "name" => "PHP",
                    "proficiency" => "90",
                    "service_id" => "5"
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
