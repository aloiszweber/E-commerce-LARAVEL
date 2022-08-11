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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Eshop::insert(
            [
            [
                'path' => '/assets/product-1.jpg',
                'name' => 'Puma red T-shirt',
                'price' => '15',
                'reference' => '00001',
                'disponibility' => '1',
            ],

            [
                'path' => '/assets/product-2.jpg',
                'name' => 'HRX black baskets',
                'price' => '40',
                'reference' => '00002',
                'disponibility' => '1',
            ],

            [
                'path' => '/assets/product-3.jpg',
                'name' => 'Adidas grey baskets',
                'price' => '60',
                'reference' => '00003',
                'disponibility' => '0',
            ],

            [
                'path' => '/assets/product-4.jpg',
                'name' => 'Puma blue T-shirt',
                'price' => '25',
                'reference' => '00004',
                'disponibility' => '1',
            ],

            [
                'path' => '/assets/product-5.jpg',
                'name' => 'HRX grey baskets',
                'price' => '50',
                'reference' => '00005',
                'disponibility' => '1',
            ],

            [
                'path' => '/assets/product-6.jpg',
                'name' => 'Puma black T-shirt',
                'price' => '20',
                'reference' => '00006',
                'disponibility' => '1',
            ],

            [
                'path' => '/assets/product-7.jpg',
                'name' => 'HRX 3 darks colors sockets',
                'price' => '15',
                'reference' => '00007',
                'disponibility' => '0',
            ],
            [
                'path' => '/assets/product-8.jpg',
                'name' => 'Armani black watch',
                'price' => '135',
                'reference' => '00008',
                'disponibility' => '1',
            ],
            [
                'path' => '/assets/product-9.jpg',
                'name' => 'Diesel black and yellow watch',
                'price' => '110',
                'reference' => '00009',
                'disponibility' => '1',
            ],
            [
                'path' => '/assets/product-10.jpg',
                'name' => 'HRX black and red baskets',
                'price' => '35',
                'reference' => '000010',
                'disponibility' => '1',
            ],
            [
                'path' => '/assets/product-11.jpg',
                'name' => 'HRX light grey baskets',
                'price' => '30',
                'reference' => '000011',
                'disponibility' => '0',
            ],
            [
                'path' => '/assets/product-12.jpg',
                'name' => 'HRX black jogging',
                'price' => '35',
                'reference' => '000012',
                'disponibility' => '1',
            ]
            ]
        );


    }
}
