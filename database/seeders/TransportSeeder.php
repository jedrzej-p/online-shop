<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transport;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transport::insert([
            [
                'name' => 'Kurier',
                'price' => '14.99',
                'delivery_time' => '1-3 dni',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Poczta',
                'price' => '9.99',
                'delivery_time' => '5 dni',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
