<?php

// database/seeders/ProductsTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Jam Tangan Elegan',
            'description' => 'Sebuah jam tangan yang stylish dan elegan.',
            'price' => 149.99,
            'image_url' => 'https://example.com/images/jam_tangan.jpg',
        ]);

        Product::create([
            'name' => 'Headphone Premium',
            'description' => 'Headphone berkualitas tinggi untuk pengalaman audio yang mendalam.',
            'price' => 199.99,
            'image_url' => 'https://example.com/images/headphone_premium.jpg',
        ]);

        Product::create([
            'name' => 'Smartphone X',
            'description' => 'Smartphone canggih dengan teknologi terkini.',
            'price' => 599.99,
            'image_url' => 'https://example.com/images/smartphone_x.jpg',
        ]);

        Product::create([
            'name' => 'Laptop Pro',
            'description' => 'Laptop powerful untuk multitasking dan produktivitas tanpa hambatan.',
            'price' => 1299.99,
            'image_url' => 'https://example.com/images/laptop_pro.jpg',
        ]);

        Product::create([
            'name' => 'Kacamata Trendy',
            'description' => 'Kacamata stylish untuk penampilan yang trendy.',
            'price' => 79.99,
            'image_url' => 'https://example.com/images/kacamata_trendy.jpg',
        ]);

        Product::create([
            'name' => 'Fitness Tracker',
            'description' => 'Pantau aktivitas kebugaran Anda dengan fitness tracker canggih ini.',
            'price' => 49.99,
            'image_url' => 'https://example.com/images/fitness_tracker.jpg',
        ]);

        Product::create([
            'name' => 'Ransel Desainer',
            'description' => 'Sebuah ransel trendy dan luas untuk kebutuhan sehari-hari Anda.',
            'price' => 89.99,
            'image_url' => 'https://example.com/images/ransel_desainer.jpg',
        ]);

        Product::create([
            'name' => 'Mouse Nirkabel',
            'description' => 'Mouse nirkabel ergonomis untuk kenyamanan dan efisiensi yang lebih baik.',
            'price' => 29.99,
            'image_url' => 'https://example.com/images/mouse_nirkabel.jpg',
        ]);

        Product::create([
            'name' => 'Lampu Meja LED',
            'description' => 'Lampu meja LED yang dapat disesuaikan untuk pencahayaan optimal saat bekerja.',
            'price' => 39.99,
            'image_url' => 'https://example.com/images/lampu_meja_led.jpg',
        ]);

        Product::create([
            'name' => 'Speaker Bluetooth Portabel',
            'description' => 'Speaker Bluetooth kompak dan powerful untuk hiburan saat bepergian.',
            'price' => 69.99,
            'image_url' => 'https://example.com/images/speaker_bluetooth_portabel.jpg',
        ]);
    }
}
