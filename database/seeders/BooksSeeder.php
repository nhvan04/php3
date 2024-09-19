<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('books')->insert([
                'title' => 'Book Title ' . $i,
                'thumbnail' => 'thumbnail-' . $i . '.jpg',
                'author' => 'Author ' . $i,
                'publisher' => 'Publisher ' . $i,
                'Publication' => now()->subYears(rand(1, 50))->format('Y-m-d'), // Ngày ngẫu nhiên trong 50 năm qua
                'Price' => rand(500, 1000000), 
                'Quantity' => rand(1, 100), 
                'Category_id' => rand(1, 5), 
            ]);
        }
    }
}
