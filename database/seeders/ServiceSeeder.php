<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('services')->insert(
            [
                [ 'title'=>'Backend Developer',
                'icon'=>'uil uil-youtube',
                'description'=>'Sapiente odit ut ipsam neque dolorum et. Officiis error dicta pariatur quidem. Saepe dignissimos et at error dolores asperiores. Earum id sed ratione ducimus enim voluptate praesentium.',],
                [
                'title'=>'Frontend Developer',
                'icon'=>'uil uil-youtube',
                'description'=>'Sapiente odit ut ipsam neque dolorum et. Officiis error dicta pariatur quidem. Saepe dignissimos et at error dolores asperiores. Earum id sed ratione ducimus enim voluptate praesentium.',
                ]
               
            ]
         );
    }
}
