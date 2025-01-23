<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'title' => 'All-Instap',
                'description' => 'All-Instap is a web-based CMS platform that allows users to create their own websites. I started working on this tool during my internship at Modus Digital. It\'s designed to make website creation simple and accessible for everyone.',
                'url' => 'https://all-instap.nl',
                'github' => null,
                'tags' => 'CodeIgniter,PHP,MySQL,Javascript',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'FTB',
                'description' => 'A web-based tool called FTB Malmberg, designed to store all the answers from Malmberg Taalblokken, in a shared database. This tool was designed to help students easily access and review the answers for various exercises, making studying more efficient.',
                'url' => 'https://ftb.koenv.dev',
                'github' => null,
                'tags' => 'NextJS,MongoDB,Python',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sadcat Movies',
                'description' => 'Sadcat Movies is a platform for discovering movies and TV shows, built on Laravel. Users can browse, search, and create watchlists, ensuring a personalized entertainment experience. It offers an easy way to explore trending content and track your favorites.',
                'url' => null,
                'github' => 'https://github.com/BoyK07/Sadcat-Movies',
                'tags' => 'Laravel,PHP,MySQL,Javascript',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
