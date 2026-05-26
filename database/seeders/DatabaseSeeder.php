<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        $seminar = Category::create([
            'name' => 'Seminar',
            'slug' => 'seminar',
        ]);

        $workshop = Category::create([
            'name' => 'Workshop',
            'slug' => 'workshop',
        ]);

        $entertainment = Category::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment',
        ]);

        Event::create([
            'category_id' => $seminar->id,
            'title' => 'AI & Future Tech Summit 2026',
            'description' => 'Seminar yang membahas perkembangan kecerdasan buatan dan teknologi masa depan.',
            'date' => '2026-05-31 13:00:00',
            'location' => 'Cinema Unit 6 AMIKOM',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'assets/hackathon.png',
        ]);

        Event::create([
            'category_id' => $seminar->id,
            'title' => 'Digital Business Seminar',
            'description' => 'Seminar tentang strategi bisnis digital untuk mahasiswa dan pelaku UMKM.',
            'date' => '2026-05-29 09:00:00',
            'location' => 'Ruang Seminar AMIKOM',
            'price' => 35000,
            'stock' => 120,
            'poster_path' => 'assets/hackathon.png',
        ]);

        Event::create([
            'category_id' => $workshop->id,
            'title' => 'UI/UX Masterclass',
            'description' => 'Workshop praktik membuat desain antarmuka aplikasi menggunakan prinsip UI/UX modern.',
            'date' => '2026-05-27 10:00:00',
            'location' => 'Lab Multimedia AMIKOM',
            'price' => 75000,
            'stock' => 60,
            'poster_path' => 'assets/workshop.png',
        ]);

        Event::create([
            'category_id' => $workshop->id,
            'title' => 'Laravel Web Development Bootcamp',
            'description' => 'Pelatihan dasar pembuatan website menggunakan Laravel dan database MySQL.',
            'date' => '2026-05-28 08:30:00',
            'location' => 'Lab Komputer 2 AMIKOM',
            'price' => 85000,
            'stock' => 50,
            'poster_path' => 'assets/workshop.png',
        ]);

        Event::create([
            'category_id' => $entertainment->id,
            'title' => 'Jazz Night 2026',
            'description' => 'Acara musik malam dengan penampilan band kampus dan komunitas musik lokal.',
            'date' => '2026-05-30 19:00:00',
            'location' => 'Lapangan Utama AMIKOM',
            'price' => 50000,
            'stock' => 200,
            'poster_path' => 'assets/concert.png',
        ]);

        Event::create([
            'category_id' => $entertainment->id,
            'title' => 'E-Sport U-Champ',
            'description' => 'Kompetisi e-sport antar mahasiswa dengan sistem turnamen dan hadiah menarik.',
            'date' => '2026-05-29 14:00:00',
            'location' => 'Aula Basement AMIKOM',
            'price' => 25000,
            'stock' => 150,
            'poster_path' => 'assets/concert.png',
        ]);
    }
}