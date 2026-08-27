<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Cimento CP5 50kg',
                'description' => 'Cimento Portland de alta resistência, saco 50kg.',
                'brand' => 'Votorantim',
                'price' => 39.90,
                'stock' => 500,
            ],
            [
                'name' => 'Tijolo Cerâmico 9 furos',
                'description' => 'Tijolo cerâmico furado 9x19x19cm, pacote com 50 unidades.',
                'brand' => 'Cerâmica Sul',
                'price' => 89.90,
                'stock' => 200,
            ],
            [
                'name' => 'Tinta Látex Branca 18L',
                'description' => 'Tinta látex PVA premium para paredes internas e externas.',
                'brand' => 'Suvinil',
                'price' => 189.90,
                'stock' => 80,
            ],
            [
                'name' => 'Areia Média Lavada 1m³',
                'description' => 'Areia média lavada para construção civil, ensacada.',
                'brand' => 'Areião',
                'price' => 149.00,
                'stock' => 150,
            ],
            [
                'name' => 'Vergalhão CA-50 10mm 12m',
                'description' => 'Barra de aço vergalhão CA-50, diâmetro 10mm, comprimento 12 metros.',
                'brand' => 'Gerdau',
                'price' => 62.50,
                'stock' => 300,
            ],
            [
                'name' => 'Telha Ondulada Fibrocimento 2,44m',
                'description' => 'Telha ondulada de fibrocimento 6mm, 1,10 x 2,44m.',
                'brand' => 'Brasilit',
                'price' => 54.90,
                'stock' => 120,
            ],
            [
                'name' => 'Tubo PVC Esgoto 100mm 6m',
                'description' => 'Tubo PVC rígido para esgoto sanitário, diâmetro 100mm, 6 metros.',
                'brand' => 'Tigre',
                'price' => 78.00,
                'stock' => 90,
            ],
            [
                'name' => 'Rejunte Cinza 5kg',
                'description' => 'Rejunte cimentício para pisos e paredes, cor cinza, 5kg.',
                'brand' => 'Quartzolit',
                'price' => 28.90,
                'stock' => 250,
            ],
            [
                'name' => 'Argamassa AC-II 20kg',
                'description' => 'Argamassa colante industrializada para revestimentos cerâmicos, 20kg.',
                'brand' => 'Weber',
                'price' => 32.50,
                'stock' => 400,
            ],
            [
                'name' => 'Fio Elétrico 2,5mm 100m',
                'description' => 'Fio elétrico flexível 2,5mm², rolo com 100 metros, cor amarelo.',
                'brand' => 'Prysmian',
                'price' => 219.90,
                'stock' => 60,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
