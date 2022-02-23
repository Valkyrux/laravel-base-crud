<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $a_comic = new Comic();
            $array_fill = [
                'title' => $faker->word(),
                'image' => $faker->imageUrl(640, 480, 'comic', true),
                'edition' => $faker->numberBetween(1, 5),
                'authors' => implode(', ', $faker->words($faker->numberBetween(1, 4))),
                'artists' => implode(', ', $faker->words($faker->numberBetween(1, 4))),
                'description' => $faker->paragraph($faker->numberBetween(3, 7)),
                'price' => $faker->randomFloat(2, 5, 30),
            ];
            $a_comic->fill($array_fill);
            $a_comic->save();
        }
    }
}
