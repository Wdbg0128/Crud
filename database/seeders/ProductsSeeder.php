<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $product = new Products();
        $product->category_id ="3";
        $product->name="Xiaomi note 9S";
        $product->description="De las mejores referencias Xiaomi";
        $product->units="100";
        $product->save();

        $product = new Products();
        $product->category_id ="3";
        $product->name="Xiaomi note8";
        $product->description="De las mejores referencias Xiaomi";
        $product->units="15";
        $product->save();
        
        $product = new Products();
        $product->category_id ="4";
        $product->name="Acer aspire A 315-53-5811";
        $product->description="Una muy buena lapto";
        $product->units="32";
        $product->save();
        
        $product = new Products();
        $product->category_id ="4";
        $product->name="Portatil Asus";
        $product->description="Nada que decir";
        $product->units="25";
        $product->save();
        
        $product = new Products();
        $product->category_id ="5";
        $product->name="Qbex De desarrollo";
        $product->description="Un poco lento pero cumple tus necesidades inmediatas";
        $product->units="25";
        $product->save();
        
        $product = new Products();
        $product->category_id ="5";
        $product->name="Hp core i3";
        $product->description="Para la lucha diaria";
        $product->units="25";
        $product->save();

    }
}
