<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Action',
            'deskripsi' => 'Genre about action-packed movies',
        ]);

        Genre::create([
            'nama' => 'Comedy',
            'deskripsi' => 'Genre of funny and humorous movies',
        ]);

        Genre::create([
            'nama' => 'Drama',
            'deskripsi' => 'Genre of movies with emotional and serious themes',
        ]);
    }
 }

