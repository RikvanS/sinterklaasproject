<?php

use Illuminate\Database\Seeder;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Wishlist::insert([
            ['product' => 'pepernote',
             'description' => 'minikoekjes'
            ],
            ['product' => 'peen',
             'description' => 'voor het paard'
            ],
            ['product' => 'zakje zout',
             'description' => 'voor stoute kinderen'
            ]
        ]);
    }
}
