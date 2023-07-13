<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesSeeder extends Seeder
{
    public function run(): void
    {
        Movie::create([
            'judul' => 'Your Name',
            'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quae delectus numquam natus voluptatibus minus aperiam nesciunt ipsa esse vitae',
            'poster' => 'https://image.tmdb.org/t/p/w200/q719jXXEzOoYaps6babgKnONONX.jpg',
            'genre_id' => '1',
            'country_id' => '1',
            'tahun' => 2016,
            'rating' => 8.4,
        ]);

        Movie::create([
            'judul' => 'Spirited Away',
            'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quae delectus numquam natus voluptatibus minus aperiam nesciunt ipsa esse vitae',
            'poster' => 'https://image.tmdb.org/t/p/w200/39wmItIWsg5sZMyRUHLkWBcuVCM.jpg',
            'genre_id' => '1',
            'country_id' => '1',
            'tahun' => 2001,
            'rating' => 8.6,
        ]);

        Movie::create([
            'judul' => 'Attack on Titan',
            'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quae delectus numquam natus voluptatibus minus aperiam nesciunt ipsa esse vitae',
            'poster' => 'https://image.tmdb.org/t/p/w200/sHim6U0ANsbzxcmNRYuIubBVQaz.jpg',
            'genre_id' => '1',
            'country_id' => '1',
            'tahun' => 2013,
            'rating' => 8.8,
        ]);

        Movie::create([
            'judul' => 'One Piece',
            'synopsis' => 'An orphaned child raised by bo',
            'poster' => 'https://image.tmdb.org/t/p/w200/fcXdJlbSdUEeMSJFsXKsznGwwok.jpg',
            'genre_id' => '1',
            'country_id' => '1',
            'tahun' => 1999,
            'rating' => 8.7,
        ]);

        Movie::create([
            'judul' => 'Naruto',
            'synopsis' => 'An orphaned child raised by bo',
            'poster' => 'https://image.tmdb.org/t/p/w200/zAYRe2bJxpWTVrwwmBc00VFkAf4.jpg',
            'genre_id' => '1',
            'country_id' => '1',
            'tahun' => 2002,
            'rating' => 8.3,
        ]);

        Movie::create([
            'judul' => 'Death Note',
            'synopsis' => 'An orphaned child raised by bo',
            'poster' => 'https://image.tmdb.org/t/p/w200/iigTJJskR1PcjjXqxdyJwVB3BoU.jpg',
            'genre_id' => '1',
            'country_id' => '1',
            'tahun' => 2006,
            'rating' => 8.5,
        ]);

        Movie::create([
            'judul' => 'Fullmetal Alchemist: Brotherhood',
            'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quae delectus numquam natus voluptatibus minus aperiam nesciunt ipsa esse vitae',
            'poster' => 'https://image.tmdb.org/t/p/w200/5ZFUEOULaVml7pQuXxhpR2SmVUw.jpg',
            'genre_id' => '1',
            'country_id' => '1',
            'tahun' => 2009,
            'rating' => 9.1,
        ]);

        Movie::create([
            'judul' => 'Hunter x Hunter',
            'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quae delectus numquam natus voluptatibus minus aperiam nesciunt ipsa esse vitae',
            'poster' => 'https://image.tmdb.org/t/p/w200/ucpgmUR1h5Te1BYegKItoPjOeF7.jpg',
            'genre_id' => '1',
            'country_id' => '1',
            'tahun' => 2011,
            'rating' => 8.9,
        ]);

        Movie::create([
            'judul' => 'Demon Slayer: Kimetsu no Yaiba',
            'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quae delectus numquam natus voluptatibus minus aperiam nesciunt ipsa esse vitae',
            'poster' => 'https://image.tmdb.org/t/p/w200/xUfRZu2mi8jH6SzQEJGP6tjBuYj.jpg',
            'genre_id' => '1',
            'country_id' => '1',
            'tahun' => 2019,
            'rating' => 8.7,
        ]);

        Movie::create([
            'judul' => 'My Hero Academia',
            'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quae delectus numquam natus voluptatibus minus aperiam nesciunt ipsa esse vitae',
            'poster' => 'https://image.tmdb.org/t/p/w200/ivOLM47yJt90P19RH1NvJrAJz9F.jpg',
            'genre_id' => '1',
            'country_id' => '1',
            'tahun' => 2016,
            'rating' => 8.1,
        ]);
        Movie::create([
            'judul' => 'The Blame',
            'synopsis' => 'Ketika manusia dianggap sebagai "penduduk ilegal" dan diburu oleh robot pembunuh. Killy, pria aneh muncul menjadi harapan hidup bagi umat manusia.',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BNTgxNDI1NzgyNl5BMl5BanBnXkFtZTgwMTgzNTIzMjI@._V1_.jpg',
            'genre_id' => '1',
            'country_id' => '1',
            'tahun' => 2017,
            'rating' => 6.6,
        ]);

        Movie::create([
            'judul' => 'Her Blue Sky',
            'synopsis' => 'Her Blue Sky bercerita tentang kakak beradik Aoi dan Akane yang hanya tinggal berdua semenjak tragedi tragis yang menimpa kedua orang tuanya tiga belas tahun yang lalu.',
            'poster' => 'https://images.app.goo.gl/AfCkidpJ1kM9LaMn9',
            'genre_id' => '2',
            'country_id' => '2',
            'tahun' => 2020,
            'rating' => 7.5,
        ]);

        Movie::create([
            'judul' => 'Grave of the Fireflies',
            'synopsis' => '‘Grave of the Fireflies’ adalah anime produksi Ghibli Studio pada tahun 1988. Grave of the Fireflies berarti kuburan kunang-kunang, film ini merupakan animasi yang sangat sedih. Anime ini mengisahkan tentang kakak beradik yang merupakan korban perang dunia II dimana Amerika menyerang Jepang yang harus bertahan hidup di tengah sulitnya keadaan.',
            'poster' => 'https://images.app.goo.gl/yMQEtTDDUeE8tmxZ8',
            'genre_id' => '3',
            'country_id' => '3',
            'tahun' => 1988,
            'rating' => 8.5,
        ]);

        Movie::create([
            'judul' => 'The Garden of Words',
            'synopsis' => 'Film animasi Kotonoha no Niwa berkisah tentang kehidupan seorang pelajar bernama Takao Akizuki. Saat musim hujan, ia sering membolos pada jam pelajaran pertama (hanya membolos ketika hujan di pagi hari). Ia selalu pergi ke sebuah gazebo yang berada di sebuah taman. Sambil menunggu hujan reda, ia suka menghabiskan waktu dengan mendesain sepatu. Saat itulah, ia bertemu dengan seorang wanita misterius bernama Yukari Yukino. Seorang wanita kantoran yang tampaknya juga suka membolos. Mereka berkenalan dan menjadi dekat.',
            'poster' => 'https://images.app.goo.gl/TvdBihaYmvGm9m648',
            'genre_id' => '3',
            'country_id' => '3',
            'tahun' => 2013,
            'rating' => 7.8,
        ]);
        Movie::create([
            'judul' => 'Pokémon the Movie: Secrets of the Jungle',
            'synopsis' => 'Koko adalah anak laki-laki yang dibesarkan di hutan oleh Pokémon. Ia menjadi sosok yang menjembatani manusia dan Pokémon.',
            'poster' => 'https://images.app.goo.gl/tYYrUpHU6risaThWA',
            'genre_id' => '3',
            'country_id' => '3',
            'tahun' => 2020,
            'rating' => 6.4,
        ]);
    }
}
