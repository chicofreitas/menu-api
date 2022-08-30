<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();

        $dellys = \App\Models\Company::factory()->state([
            'slug' => 'dellys-burguer',
        ])->create();

        $apetite = \App\Models\Company::factory()->state([
            'slug' => 'apetite-saudavel',
        ])->create();

        //$categories = \App\Models\Category::factory(5)->create();
        $categories = \App\Models\Category::factory()
                                            ->has(\App\Models\Product::factory()->state(['company_id' => 1])->count(5) )
                                            ->create();
        
        $products  = \App\Models\Product::factory()->state([
                'company_id' => 2, 
                'category_id' => 1
                ]
            )
            ->has(\App\Models\Section::factory()->count(3))
            ->create();

        $addons = \App\Models\Addon::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
