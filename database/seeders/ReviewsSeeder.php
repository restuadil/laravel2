<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'movie_id' => '1',
            'user' => 'Dinda Amalia',
            'rating' => 8.5,
            'review' => 'Beberapa hal tampaknya akan mudah terlewat atau terabaikan apabila penonton tak fokus ataumengalihkan perhatiannya di bagian alur lambat tersebut.',
            'tanggal' => '25/07/2020',    
        ]);

        Review::create([
            'movie_id' => '2',
            'user' => 'Galuh Ratna',
            'rating' => 8.8,
            'review' => 'Film lengkap ada tangis,bahagia,dan comedy nya juga.Suka banget pokoknya.',
            'tanggal' => '12/03/22',
        ]);

        Review::create([
            'movie_id' => '1',
            'user' => 'Restu Adil',
            'rating' => 7.2,
            'review' => 'Film nya seru dan juga menegangkan. Ada Lee Dong Wook.',
            'tanggal' => '13/10/2020',
        ]);

        Review::create([
            'movie_id' => '1',
            'user' => 'Salatin syah',
            'rating' => 8.7,
            'review' => 'Film nya seru dan juga menegangkan. Ada Lee Dong Wook.',
            'tanggal' => '15/10/2021',
            
        ]);

        Review::create([
            'movie_id' => '1',
            'user' => 'Rizka Azizy',
            'rating' => 7.2,
            'review' => 'Film sangat seru karena di adaptasi dari thread dari twitter yang sangat viral pada masanya',
            'tanggal' => '11/11/2021',   
        ]);
    }
}
