<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public $categories = [
        'Storico', 'Enogastronomico', 'Musicale', 'Artistico', 'Escape', 'Natura', 'Letterario', 'Sport', 'Cinema', 'Moda'
    ];

    public function run(): void
    {
     foreach($this->categories as $category){
        Category::create([
            'name' => $category
        ]);
     }

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
