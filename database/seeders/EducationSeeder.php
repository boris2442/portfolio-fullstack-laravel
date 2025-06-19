<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('educations')->insert(
            [
                [
                    'institution' => 'Backend Developer',
                    'period' => '2016 - 2018',
                    'degree' => 'Apple Inc - Germany',
                    'departement' => 'Software Enginner',
                ],
                [
                    'institution' => 'Backend Developer',
                    'period' => '2016 - 2018',
                    'degree' => 'Apple Inc - Germany',
                    'departement' => 'Software Enginner',
                ],
                [
                    'institution' => 'Backend Developer',
                    'period' => '2016 - 2018',
                    'degree' => 'Apple Inc - Germany',
                    'departement' => 'Software Enginner',
                ],
                [
                    'institution' => 'Backend Developer',
                    'period' => '2016 - 2018',
                    'degree' => 'Apple Inc - Germany',
                    'departement' => 'Software Enginner',
                ],
                [
                    'institution' => 'Backend Developer',
                    'period' => '2016 - 2018',
                    'degree' => 'Apple Inc - Germany',
                    'departement' => 'Software Enginner',
                ],
                [
                    'institution' => 'Backend Developer',
                    'period' => '2016 - 2018',
                    'degree' => 'Apple Inc - Germany',
                    'departement' => 'Software Enginner',
                ],
                [
                    'institution' => 'Backend Developer',
                    'period' => '2016 - 2018',
                    'degree' => 'Apple Inc - Germany',
                    'departement' => 'Software Enginner',
                ],
                [
                    'institution' => 'Backend Developer',
                    'period' => '2016 - 2018',
                    'degree' => 'Apple Inc - Germany',
                    'departement' => 'Software Enginner',
                ],
                [
                    'institution' => 'Backend Developer',
                    'period' => '2016 - 2018',
                    'degree' => 'Apple Inc - Germany',
                    'departement' => 'Software Enginner',
                ],
                [
                    'institution' => 'Backend Developer',
                    'period' => '2016 - 2018',
                    'degree' => 'Apple Inc - Germany',
                    'departement' => 'Software Enginner',
                ],
            ]
        );
    }
}
