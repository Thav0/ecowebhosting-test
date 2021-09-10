<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Seeder;

class InvoiceSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invoice::truncate();

        $invoices = array(
            array(
                'user_id' => 1,
                'product_id' => 1,
                'product_description' => 'Nvidia Gtx 1080',
                'price' => 600.99,
                'created_at' => now()
            ),
            array(
                'user_id' => 1,
                'product_id' => 2,
                'product_description' => 'Nvidia Gtx 1070',
                'price' => 500.99,
                'created_at' => now()
            ),
            array(
                'user_id' => 2,
                'product_id' => 3,
                'product_description' => 'ASUS GeForce RTX 2060',
                'price' => 749.99,
                'created_at' => now()
            ),
            array(
                'user_id' => 2,
                'product_id' => 4,
                'product_description' => 'GIGABYTE Radeon RX 6700 XT GAMING OC',
                'price' => 1040.99,
                'created_at' => now()
            ),
            array(
                'user_id' => 3,
                'product_id' => 5,
                'product_description' => 'GIGABYTE GeForce GTX 1650 SUPER WINDFORCE',
                'price' => 517,
                'created_at' => now()
            ),
            array(
                'user_id' => 3,
                'product_id' => 6,
                'product_description' => 'ASUS ROG STRIX Radeon RX 6700 XT OC',
                'price' => 1199.99,
                'created_at' => now()
            ),
        );

        Invoice::insert($invoices);
    }
}
