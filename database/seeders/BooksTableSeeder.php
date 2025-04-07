<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('books')->truncate();

        Book::create([
            'title' => 'O Senhor dos Anéis',
            'description' => 'from J.R.R. Tolkien',
            'rate' => 5,
            'price' => 39.90
        ]);

        Book::create([
            'title' => 'Harry Potter e a Pedra Filosofal',
            'description' => 'from J.R.R. Tolkien',
            'rate' => 5,
            'price' => 39.90
        ]);
    }
}
