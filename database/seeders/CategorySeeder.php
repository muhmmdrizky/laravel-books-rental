<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = ['Science Fiction', 'Mystery', 'Fantasy', 'Romance', 'Horror', 'Historical Fiction', 'Thriller', 'Dystopian', 'Crime', 'Young Adult', 'Bildungsroman', 'Coming-of-age', 'Graphic Novel', 'Memoir', 'Biography'];


        foreach ($data as $value) {
            Category::insert([
                'name' => $value
            ]);
        }
    }
}
