<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Film::create([
            'title' => 'Annabelle',
            'director' => 'John R. Leonetti',
            'year' => 2014,
            'genre' => 'Horror',
            'description' => 'John and Mia Form are attacked by members of a satanic cult that uses their old doll as a conduit to make their life miserable.',
            'image' => 'https://encrypted-tbn3.gstatic.com/images?q-tbn:ANd9GcRG8IrOvD_GTVqNgSpfr5PBzozy1coUVmBBAnUw4zBSJwZllzF-j'
        ]);

        \App\Models\Film::create([
            'title' => 'How to Lose a Guy in 10 Days',
            'director' => 'Donald Petrie',
            'year' => 2003,
            'genre' => 'Romance / Comedy',
            'description' => 'Benjamin Barry is an advertising executive and ladies man who, to win a big campaign, bets that he can make a woman fall in love with him in 10 days.',
            'image' => 'https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/p31388_p_v10_ac.jpg'
        ]);

        \App\Models\Film::create([
            'title' => 'Inception',
            'director' => 'Christopher Nolan',
            'year' => 2010,
            'genre' => 'Science Fiction',
            'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology.',
            'image' => 'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_.jpg'
        ]);
        
        \App\Models\Film::create([
            'title' => 'The Dark Knight',
            'director' => 'Christopher Nolan',
            'year' => 2008,
            'genre' => 'Action',
            'description' => 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham.',
            'image' => 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_.jpg'
        ]);
    }
}
