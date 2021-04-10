<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        Product::insert([
            [
                'name' => 'Produkt 1',
                'ean' => '1234567890123',
                'description' => '
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis commodo nibh id sodales. Ut sodales imperdiet feugiat. Sed ultricies auctor purus. Fusce vulputate maximus nulla vitae efficitur. Integer venenatis lectus sit amet fringilla sodales. Donec vel diam tempor, lobortis elit id, tristique ex. Quisque laoreet tellus metus, at viverra lorem cursus ut. Nam augue eros, tristique et blandit vitae, interdum sit amet mauris. Ut id bibendum purus. Nullam dapibus sapien nisl, eu vestibulum metus congue vel. Suspendisse ullamcorper enim sed tincidunt volutpat. Maecenas in erat a ligula commodo rutrum ac quis libero. Duis vitae pellentesque turpis. Quisque vitae lorem ac sem pulvinar porttitor sed sodales enim.
                Vivamus ac ex non enim consequat tincidunt ac quis odio. Vivamus ut est egestas, sodales elit eget, lobortis neque. Praesent molestie consectetur magna in rhoncus. Duis vel nulla non nibh maximus accumsan. Nulla egestas tortor sed ex mattis, et accumsan nulla viverra. Suspendisse consequat libero quis mi cursus, vel lobortis eros dapibus. Morbi pulvinar fermentum nisl vitae pellentesque. Nullam a mauris laoreet, convallis urna vestibulum, vestibulum augue. Aliquam erat volutpat. Morbi et metus non purus auctor feugiat ut non diam. Aenean eget luctus libero. ',
                'price' => '15.00',
                'amount' => '50',
                'is_active' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Produkt 2',
                'ean' => '1234567890123',
                'description' => '
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis commodo nibh id sodales. Ut sodales imperdiet feugiat. Sed ultricies auctor purus. Fusce vulputate maximus nulla vitae efficitur. Integer venenatis lectus sit amet fringilla sodales. Donec vel diam tempor, lobortis elit id, tristique ex. Quisque laoreet tellus metus, at viverra lorem cursus ut. Nam augue eros, tristique et blandit vitae, interdum sit amet mauris. Ut id bibendum purus. Nullam dapibus sapien nisl, eu vestibulum metus congue vel. Suspendisse ullamcorper enim sed tincidunt volutpat. Maecenas in erat a ligula commodo rutrum ac quis libero. Duis vitae pellentesque turpis. Quisque vitae lorem ac sem pulvinar porttitor sed sodales enim.
                Vivamus ac ex non enim consequat tincidunt ac quis odio. Vivamus ut est egestas, sodales elit eget, lobortis neque. Praesent molestie consectetur magna in rhoncus. Duis vel nulla non nibh maximus accumsan. Nulla egestas tortor sed ex mattis, et accumsan nulla viverra. Suspendisse consequat libero quis mi cursus, vel lobortis eros dapibus. Morbi pulvinar fermentum nisl vitae pellentesque. Nullam a mauris laoreet, convallis urna vestibulum, vestibulum augue. Aliquam erat volutpat. Morbi et metus non purus auctor feugiat ut non diam. Aenean eget luctus libero. ',
                'price' => '15.00',
                'amount' => '50',
                'is_active' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Produkt 3',
                'ean' => '1234567890123',
                'description' => '
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis commodo nibh id sodales. Ut sodales imperdiet feugiat. Sed ultricies auctor purus. Fusce vulputate maximus nulla vitae efficitur. Integer venenatis lectus sit amet fringilla sodales. Donec vel diam tempor, lobortis elit id, tristique ex. Quisque laoreet tellus metus, at viverra lorem cursus ut. Nam augue eros, tristique et blandit vitae, interdum sit amet mauris. Ut id bibendum purus. Nullam dapibus sapien nisl, eu vestibulum metus congue vel. Suspendisse ullamcorper enim sed tincidunt volutpat. Maecenas in erat a ligula commodo rutrum ac quis libero. Duis vitae pellentesque turpis. Quisque vitae lorem ac sem pulvinar porttitor sed sodales enim.
                Vivamus ac ex non enim consequat tincidunt ac quis odio. Vivamus ut est egestas, sodales elit eget, lobortis neque. Praesent molestie consectetur magna in rhoncus. Duis vel nulla non nibh maximus accumsan. Nulla egestas tortor sed ex mattis, et accumsan nulla viverra. Suspendisse consequat libero quis mi cursus, vel lobortis eros dapibus. Morbi pulvinar fermentum nisl vitae pellentesque. Nullam a mauris laoreet, convallis urna vestibulum, vestibulum augue. Aliquam erat volutpat. Morbi et metus non purus auctor feugiat ut non diam. Aenean eget luctus libero. ',
                'price' => '15.00',
                'amount' => '50',
                'is_active' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Produkt 4',
                'ean' => '1234567890123',
                'description' => '
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis commodo nibh id sodales. Ut sodales imperdiet feugiat. Sed ultricies auctor purus. Fusce vulputate maximus nulla vitae efficitur. Integer venenatis lectus sit amet fringilla sodales. Donec vel diam tempor, lobortis elit id, tristique ex. Quisque laoreet tellus metus, at viverra lorem cursus ut. Nam augue eros, tristique et blandit vitae, interdum sit amet mauris. Ut id bibendum purus. Nullam dapibus sapien nisl, eu vestibulum metus congue vel. Suspendisse ullamcorper enim sed tincidunt volutpat. Maecenas in erat a ligula commodo rutrum ac quis libero. Duis vitae pellentesque turpis. Quisque vitae lorem ac sem pulvinar porttitor sed sodales enim.
                Vivamus ac ex non enim consequat tincidunt ac quis odio. Vivamus ut est egestas, sodales elit eget, lobortis neque. Praesent molestie consectetur magna in rhoncus. Duis vel nulla non nibh maximus accumsan. Nulla egestas tortor sed ex mattis, et accumsan nulla viverra. Suspendisse consequat libero quis mi cursus, vel lobortis eros dapibus. Morbi pulvinar fermentum nisl vitae pellentesque. Nullam a mauris laoreet, convallis urna vestibulum, vestibulum augue. Aliquam erat volutpat. Morbi et metus non purus auctor feugiat ut non diam. Aenean eget luctus libero. ',
                'price' => '15.00',
                'amount' => '50',
                'is_active' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
