<?php

use Illuminate\Database\Seeder;

class NutrientsDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('nutrients')->insert([
                'slug' => $faker->slug,
                'title' => $faker->title,
                'content' => $faker->text,
                'image' => 'food.jpg',
                'category_id' => 1,
            ]);
        }
    }
}
