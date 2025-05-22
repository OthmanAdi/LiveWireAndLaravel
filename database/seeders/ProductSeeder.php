<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
   public function run(): void{
       $products = [
           [
               'name' => 'Laptop',
               'description' => 'Leistungsstarker Laptop für Entwickler',
               'price' => 1299.99,
               'category' => 'Elektronik'
           ],
           [
               'name' => 'Smartphone',
               'description' => 'High-End Smartphone mit guter Kamera',
               'price' => 899.99,
               'category' => 'Elektronik'
           ],
           [
               'name' => 'Kopfhörer',
               'description' => 'Kabellose Kopfhörer mit Noise-Cancelling',
               'price' => 249.99,
               'category' => 'Audio'
           ],
           [
               'name' => 'Kaffeeautomat',
               'description' => 'Programmierbare Kaffeemaschine',
               'price' => 89.99,
               'category' => 'Küche'
           ],
           [
               'name' => 'Buch: Laravel für Profis',
               'description' => 'Umfassendes Handbuch für Laravel-Entwicklung',
               'price' => 39.99,
               'category' => 'Bücher'
           ],
           [
               'name' => 'Maus',
               'description' => 'Ergonomische Maus für langes Arbeiten',
               'price' => 49.99,
               'category' => 'Computer'
           ],
           [
               'name' => 'Monitor',
               'description' => '27 Zoll 4K Monitor für Programmierer',
               'price' => 349.99,
               'category' => 'Computer'
           ],
           [
               'name' => 'USB-Stick',
               'description' => '128GB USB-Stick mit schneller Übertragung',
               'price' => 24.99,
               'category' => 'Speicher'
           ],
           [
               'name' => 'Tastatur',
               'description' => 'Mechanische Gaming-Tastatur',
               'price' => 129.99,
               'category' => 'Computer'
           ],
           [
               'name' => 'Webcam',
               'description' => 'HD Webcam für Videochats',
               'price' => 59.99,
               'category' => 'Computer'
           ],
       ];

       foreach($products as $product){
           Product::create($product);
       }
   }
}
