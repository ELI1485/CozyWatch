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
            'image' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRG8IrOvD_6TVqNgSpfr5PBzozyleoUVmBBANuw4zBSJwZHzF-j'
        ]);

        \App\Models\Film::create([
            'title' => 'Rush Hour',
            'director' => 'Brett Ratner',
            'year' => 1998,
            'genre' => 'Action | Comedy',
            'description' => 'A Hong Kong detective is sent to Los Angeles to investigate the kidnapping of a Chinese diplomat\'s daughter.',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoqWyMA-oJ1QcTyS_7Uj461RDVzXpWOIswGRsrg4jQTKY-BWTh'
        ]);

        \App\Models\Film::create([
            'title' => 'How to Lose a Guy in 10 Days',
            'director' => 'Donald Petrie',
            'year' => 2003,
            'genre' => 'Romance | Comedy',
            'description' => 'Benjamin Barry is an advertising executive and ladies man who, to win a big campaign, bets that he can make a woman fall in love with him in 10 days.',
            'image' => 'https://lh5.googleusercontent.com/proxy/7uvMEIVBLGdFh9kW-xJfHxk67pedSd0EzZVTB9xQidc2S5FDfbGM7fzSxsI8eLdQZk0ipb0r4mvdJhHIhC39uRVrMl9_y_ZC64-iyR_P_nPQQU8kES0jEUfFQNdaxQ'
        ]);
        
        \App\Models\Film::create([
            'title' => 'The Hangover',
            'director' => 'Todd Phillips',
            'year' => 2009,
            'genre' => 'Comedy | Adventure',
            'description' => 'A few days before his wedding, Doug Billings and his best men go to Las Vegas for a bachelor party. However, the next day, the friends realise that they have no recollection of the previous night.',
            'image' => 'https://m.media-amazon.com/images/M/MV5BNDI2MzBhNzgtOWYyOS00NDM2LWE0OGYtOGQ0M2FjMTI2NTllXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg'
        ]);
    }
}
