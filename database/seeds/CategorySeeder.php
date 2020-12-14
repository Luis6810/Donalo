<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create([
            'name' => 'Alimentos enlatados'
        ]);

        App\Category::create([
            'name' => 'Ropa y calzado'
        ]);

        App\Category::create([
            'name' => 'Cobijas'
        ]);

        App\Category::create([
            'name' => 'Muebles'
        ]);

        App\Category::create([
            'name' => 'Electrodomésticos'
        ]);

        App\Category::create([
            'name' => 'Higiene'
        ]);

        App\Category::create([
            'name' => 'Juguetes'
        ]);

        App\Category::create([
            'name' => 'Medicamentos'
        ]);

        App\Category::create([
            'name' => 'Otros'
        ]);
    }
}
