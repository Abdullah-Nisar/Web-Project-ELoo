<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = new Product;
        $product1->name = 'Oppo mobile';
        $product1->price= 300;
        $product1->description = "A smartphone with 8gb ram and much more feature";
        $product1->category="mobile";
        $product1->gallery="https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png";
        $product1->save();
        
        $product2 = new Product;
        $product2->name = 'Panasonic TV';
        $product2->price= 400;
        $product2->description = "A smart tv with much more feature";
        $product2->category="tv";
        $product2->gallery="https://img.favpng.com/14/18/24/panasonic-led-backlit-lcd-high-definition-television-1080p-smart-tv-png-favpng-GV2CMawmdYdLFD6C1Emhqr7MC.jpg";
        $product2->save();

        $product3 = new Product;
        $product3->name = 'Sony TV';
        $product3->price= 500;
        $product3->description = "A TV with much more feature";
        $product3->category="tv";
        $product3->gallery="https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png";
        $product3->save();

        $product4 = new Product;
        $product4->name = 'LG Fridge';
        $product4->price= 400;
        $product4->description = "A fridge with much more feature";
        $product4->category="mobile";
        $product4->gallery="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU";
        $product4->save();

        $product4 = new Product;
        $product4->name = 'Apple iPhone 13 Pro Max';
        $product4->price= 1500;
        $product4->description = "A phone beyond computers";
        $product4->category="mobile";
        $product4->gallery="http://assets.stickpng.com/images/61d2f85b92b57c0004c64745.png";
        $product4->save();
        
    }
}
