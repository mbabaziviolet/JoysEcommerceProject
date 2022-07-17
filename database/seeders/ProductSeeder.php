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
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
            'price'=>'400',
            'description'=>"A smart phone with 8GB ram and much more features",
            'category'=>"mobile",
            'gallery'=>"https://itstechprice.com/wp-content/uploads/2020/10/oppo-phones.jpg"
            ],
            [
                'name'=>'Panasonic TV',
            'price'=>'600',
            'description'=>"A smart TV with much more features and clear video",
            'category'=>"TV",
            'gallery'=>"https://pisces.bbystatic.com/image2/BestBuy_US/images/products/3925/3925005_rd.jpg"
            ],
            [
                'name'=>'Macbook Pro',
            'price'=>'900',
            'description'=>"A laptop with 64GB ram and ssd harddisk",
            'category'=>"Macbook Pro",
            'gallery'=>"https://9to5mac.com/wp-content/uploads/sites/6/2021/10/MacBook-Pro-2021.jpg?quality=82&strip=all&w=1000"
            ],
            [
                'name'=>'HP Laptop',
            'price'=>'800',
            'description'=>"A laptop with 16GB ram and its i7,and faster",
            'category'=>"Hp laptop",
            'gallery'=>"https://m.media-amazon.com/images/I/711Nx6ZoRML._AC_SL1500_.jpg"
            ],
            [
                'name'=>'Dell Laptop',
            'price'=>'700',
            'description'=>"A laptop with 16GB ram and its i5,and faster",
            'category'=>"Dell laptop",
            'gallery'=>"https://m.media-amazon.com/images/I/51if47n2aPL._AC_SX355_.jpg"
            ],
            [
                'name'=>'Lexus',
            'price'=>'21.5m',
            'description'=>"It is a luxury vehicle which is Smooth And Easy Driving",
            'category'=>"Toyota",
            'gallery'=>"https://images.unsplash.com/photo-1615106806531-183c31fccfdc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bGV4dXN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
            ],
            [
                'name'=>'Subaru Forester',
            'price'=>'26m',
            'description'=>"It has a reverse automatic emergency braking, and an 8-inch touch screen ",
            'category'=>"A Japane Brand",
            'gallery'=>"https://images.unsplash.com/photo-1631980022757-e59c6cd2ab9d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NzR8fHN1YmFydSUyMGZvcmVzdGVyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
            ],
            [
                'name'=>'Harrier',
            'price'=>'30.5m',
            'description'=>"It has  an advanced 6 Speed Automatic Transmission",
            'category'=>"Toyota",
            'gallery'=>"https://images.unsplash.com/photo-1628573044443-a41b85b6f630?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aGFycmllcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
            ],
            [
                'name'=>'Rord Ranger',
            'price'=>'100m',
            'description'=>"It has a brawny engine, hearty payload and towing ability,",
            'category'=>"Ford Motor Company",
            'gallery'=>"https://images.unsplash.com/photo-1590043586837-35512e866a4e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Zm9yZCUyMHJhbmdlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
            ]
            
        ]); 
    }
}
