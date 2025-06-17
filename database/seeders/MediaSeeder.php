<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medias')->insert(
            [
                [
                    "link" => "https://evendeco.com",
                    "icon" => "uil uil-facebook-f"
                ],
                [
                    "link" => "https://github.com/boris2442",
                    "icon" => "uil uil-github"
                ],
                [
                    "link" => "https://www.youtube.com/@ton-chaine",
                    "icon" => "uil uil-youtube"
                ],
                [
                    "link" => "https://www.instagram.com/ton-profil",
                    "icon" => "uil uil-instagram"
                ]
            ]

        );
    }
}
