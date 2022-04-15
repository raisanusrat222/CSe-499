<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'apple',
                "price"=>"300",
                "description"=>"Fruits and veges",
                "category"=>"fruits",
                "gallery"=>"https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Nnx8fGVufDB8fHx8&w=1000&q=80"
            ],
            [
                'name'=>'Potato Cracker',
                "price"=>"10",
                "description"=>"chips",
                "category"=>"Snackes",
                "gallery"=>"https://cdn.store-assets.com/s/806211/i/34797487.jpg?width=1024"
            ],
            [
                'name'=>'pran tomato sauce',
                "price"=>"120",
                "description"=>"sauce",
                "category"=>"Snackes",
                "gallery"=>"https://chefcart.com.bd/wp-content/uploads/2019/11/pran-hot-tomato-sauce-550gm.jpeg"
            ],
            [
                'name'=>'Oranges',
                "price"=>"200",
                "description"=>"Fruits and veges",
                "category"=>"fruits",
                "gallery"=>"https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F9%2F2022%2F02%2F02%2FFlorida-Oranges-The-Worst-Crop-In-Decades-FT-BLOG0222.jpg&q=60"
            ],
            [
                'name'=>'Onion',
                "price"=>"80",
                "description"=>"Veges",
                "category"=>"Veges",
                "gallery"=>"https://www.thoughtco.com/thmb/q_mXCoQzbVeZln1zhipGlJ-5rRo=/2296x1291/smart/filters:no_upscale()/full-frame-shot-of-onions-in-market-stall-562386223-59b97e59845b340010f8d76e.jpg"
            ],
           
            [
                'name'=>'Banana',
                "price"=>"100",
                "description"=>"Fruits and veges",
                "category"=>"fruits",
                "gallery"=>"https://www.nipponexpress.com/press/report/img/06-Nov-20-ogp.jpeg"
            ],
        ]);
    }
    
}
