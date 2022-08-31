<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Factories\Sequence;

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

        $restaurant = \App\Models\Company::factory(1)->state([
            'name' => 'Nice Lunch',
            'slug' => 'nice-lunch',
        ])->create();
        
        $category_drinks = \App\Models\Category::factory()->state(['name' => 'Refrigerantes'])->create();
        $category_simple_dishes = \App\Models\Category::factory()->state(['name' => 'Pratos Feitos'])->create();
        $category_dishes = \App\Models\Category::factory()->state(['name' => 'Self Service'])->create();

        $coke = \App\Models\Product::factory(1)->state(
            [
                'name' => 'Coca Cola Lata',
                'company_id' => 1,
                'category_id' => 1,
                ])->create();
        $coke_md = \App\Models\Product::factory(1)->state(
            [
                'name' => 'Coca Cola 600ml',
                'company_id' => 1,
                'category_id' => 1,
                ])->create();
        $coke_lg = \App\Models\Product::factory(1)->state(
            [
                'name' => 'Coca Cola Litro',
                'company_id' => 1,
                'category_id' => 1,
                ])->create();
        
        $chicken_dishes = \App\Models\Product::factory(1)->state(
            [
                'name' => 'Prato Peito de Frango',
                'company_id' => 1,
                'category_id' => 2,
                ])->create();
        $steak_dishes = \App\Models\Product::factory(1)->state(
            [
                'name' => 'Prato Carne de Sol',
                'company_id' => 1,
                'category_id' => 2,
                ])->create();
        
        $custom_dishes = \App\Models\Product::factory(1)->state(
            [
                'name' => 'Self Service',
                'company_id' => 1,
                'category_id' => 3,
                ])->create();
        
        $special_custom_dishes = \App\Models\Product::factory(1)->state(
            [
                'name' => 'Self Service Plus',
                'company_id' => 1,
                'category_id' => 3,
                ])->create();
        
        //Uncountables
        $beans = \App\Models\Addon::factory()->state(['name' => 'Feijão'])->count(1);
        $rice = \App\Models\Addon::factory()->state(['name' => 'Arroz'])->count(1);
        $rice_and_beans = \App\Models\Addon::factory(1)->state(['name' => 'Baião de dois'])->create();
        $pasta = \App\Models\Addon::factory(1)->state(['name' => 'Macarrão'])->create();
        $salad = \App\Models\Addon::factory(1)->state(['name' => 'Salada'])->create();

        $section_chicken_dishes = \App\Models\Section::factory(1)
                                                        ->state(['product_id' => 4, 'name' => 'Complementos'])
                                                        ->has(
                                                            \App\Models\Addon::factory()->state( new Sequence(
                                                                ['name' => 'Feijão'],
                                                                ['name' => 'Arroz'],
                                                                ['name' => 'Baião de dois'],
                                                                ['name' => 'Macarrão']
                                                                )
                                                                )->count(4)
                                                        )
                                                        ->create();
                                                        
        $section_chicken_dishes = \App\Models\Section::factory(1)
                                                        ->state(['product_id' => 5, 'name' => 'Adicionais'])
                                                        ->hasAttached(
                                                            \App\Models\Addon::factory()->state( new Sequence(
                                                                        ['name' => 'Bacon'],
                                                                        ['name' => 'Queijo'],
                                                                        ['name' => 'Presunto'],
                                                                        ['name' => 'Presunto de Peru']
                                                                    )
                                                            )->count(4),
                                                            ['is_countable' => true, 'price' => fake()->randomFloat(2, 2, 50)]
                                                        )
                                                        ->create();

        $section_chicken_dishes = \App\Models\Section::factory(1)
                                                        ->state(['product_id' => 6, 'name' => 'Carnes', 'max_items' => 2])
                                                        ->has(
                                                            \App\Models\Addon::factory()->state( new Sequence(
                                                                        ['name' => 'Carne de Sol'],
                                                                        ['name' => 'Carne Suína'],
                                                                        ['name' => 'Peixe'],
                                                                        ['name' => 'Linguiça']
                                                                    )
                                                            )->count(4)
                                                        )
                                                        ->create();
        
        $section_chicken_dishes = \App\Models\Section::factory(1)
                                                        ->state(['product_id' => 7, 'name' => 'Carnes', 'max_items' => 2])
                                                        ->hasAttached(
                                                            \App\Models\Addon::factory()->state( new Sequence(
                                                                        ['name' => 'Carne de Sol'],
                                                                        ['name' => 'Carne Suína'],
                                                                        ['name' => 'Peixe'],
                                                                        ['name' => 'Linguiça']
                                                                    )
                                                            )->count(4),
                                                            ['is_countable' => true, 'price' => fake()->randomFloat(2, 2, 50)]
                                                        )
                                                        ->create();

        /* $section_steak_dishes = \App\Models\Section::factory(1)->state(['product_id' => 5, 'name' => 'Adicionais'])->create();

        $section_complements_custom_dishes = \App\Models\Section::factory(1)->state(['product_id' => 6, 'name' => 'Complementos'])->create();
        $section_souces_custom_dishes = \App\Models\Section::factory(1)->state(['product_id' => 6, 'name' => 'Adicionais'])->create();

        $section_components_special_custom_dishes = \App\Models\Section::factory(1)->state(['product_id' => 7, 'name' => 'Complementos'])->create();
        $section_souces_special_custom_dishes = \App\Models\Section::factory(1)->state(['product_id' => 7, 'name' => 'Adicionais'])->create();
        $section_steaks_special_custom_dishes = \App\Models\Section::factory(1)->state(['product_id' => 7, 'name' => 'Molhos'])->create();
        
        // Uncountables and max_items
        $sun_steak = \App\Models\Addon::factory(1)->state(['name' => 'Carne de Sol'])->create();
        $pig_steak = \App\Models\Addon::factory(1)->state(['name' => 'Carne Suína'])->create();
        $simple_sauce = \App\Models\Addon::factory(1)->state(['name' => 'Molho Simples'])->create();
        $hot_sauce = \App\Models\Addon::factory(1)->state(['name' => 'Molho Picante'])->create();
        
        // Countables
        $bacon = \App\Models\Addon::factory(1)->state(['name' => 'Bacon'])->create();
        $cheese = \App\Models\Addon::factory(1)->state(['name' => 'Queijo'])->create();
        $ham = \App\Models\Addon::factory(1)->state(['name' => 'Presunto'])->create();
        $peru_ham = \App\Models\Addon::factory(1)->state(['name' => 'Presunto de Peru'])->create(); */
    }
}
