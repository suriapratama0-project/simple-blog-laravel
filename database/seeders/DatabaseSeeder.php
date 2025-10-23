<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Category::Create([
        //     'category_names' => 'Web Development',
        //     'slug' => 'web-development'
        // ]);
        // Post::Create([
        //     'tittle' => 'judul artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Pak dosen minta request pembelajaran untul bagian frond end mobile donk kaya vue js, atau flutter atau kotlin, agar aplikasi yang telah kita buat di laravel atau CI sebagai API gateway bisa kita buat aplikasi Android dan bisa kita build APK filenya, agar bisa kita install di android atau IOS,  atau punya teknik ga pak dosen agar satu source laravel atau web aplikasi bisa kita build menjadi file APK dan bisa berjalan baik di android atau di IOS. Terima kasih dan sukses serta sehat selalu'
        // ]);
        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
