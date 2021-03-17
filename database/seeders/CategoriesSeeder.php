<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Categories();
        $category->name="Tecnologia";
        $category->description="Los mejores dispositivos tecnologicos que encotraras";
        $category->save();
        
        $category = new Categories();
        $category->dad_id ="1";
        $category->name="Computadores";
        $category->description="Los mejores equipos para el estudio y el trabajo ";
        $category->save();

        $category = new Categories();
        $category->dad_id ="1";
        $category->name="Celulares";
        $category->description="Los mejores celulares del mercado";
        $category->save();

        $category = new Categories();
        $category->dad_id ="2";
        $category->name="Laptos";
        $category->description="Estas laptos son todo terreno, las puedes llevar a donde quieras";
        $category->save();

        $category = new Categories();
        $category->dad_id ="2";
        $category->name="Desktops";
        $category->description="La mejor solucion de equipos para el hogar";
        $category->save();
    }
}
