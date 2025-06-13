<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('abouts')->insert([
            [
            "name"=>"Boris Aubin", 
            "email"=>"aubinborissimotsebo@gmail.com",
            "phone"=>"+237( 679135177)",
            "adress"=>"Bafoussam Cameroon",
            "description"=>"Le développement web est une compétence essentielle aujourd’hui, surtout avec des outils modernes.",
            "summary"=>"compétence essentielle" ,
            "tagline"=>"dashboard" ,
            "home_image"=>"no-image.png" ,
            "banner_image"=>"no-image.png" ,
            "cv"=>"johndoe-Cv.pdf",
            ]
        ]);
    }
}
