<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            "name" => "Geladeira Refrigerador Electrolux",
            "description" => "Geladeira/Refrigerador Electrolux Frost Free - Inverse Inox 579L Multidoor DM84X",
            "price" => 6499,
            "highlights" => 0,
            "voltage" => "220v",
            "brand_id" => 1,
            "image" => "storage/img_products/electrolux_1.png"
        ]);

        Product::create([
            "name" => "Ar Condicionado Split Hi Wall Electrolux",
            "description" => "Ar Condicionado Split Hi Wall Electrolux Ecoturbo 9000 BTU/h Frio VI09F/VE09F - 220 Volts",
            "price" => 1406.19,
            "highlights" => 0,
            "voltage" => "220v",
            "brand_id" => 1,
            "image" => "storage/img_products/electrolux_2.png"
        ]);

        Product::create([
            "name" => "Fritadeira Air Fryer 4L Electrolux",
            "description" => "Fritadeira Air Fryer 4L Electrolux Vermelha Efficient EAF31 220V",
            "price" => 539.91,
            "highlights" => 1,
            "voltage" => "220v",
            "brand_id" => 1,
            "image" => "storage/img_products/electrolux_3.png"
        ]);






        Product::create([
            "name" => "Fogão 5 Bocas Brastemp",
            "description" => "Fogão 5 Bocas Brastemp Branco Forno Duplo - Acendimento Automático BFD5 GCBNNA",
            "price" => 3499,
            "highlights" => 0,
            "voltage" => "220v",
            "brand_id" => 2,
            "image" => "storage/img_products/brastemp_1.png"
        ]);

        Product::create([
            "name" => "Frigobar BRASTEMP Retrô",
            "description" => "Frigobar BRASTEMP Retrô Amarelo Lembranças do passado, mais modernas do que nunca",
            "price" => 1443.99,
            "highlights" => 1,
            "voltage" => "220v",
            "brand_id" => 2,
            "image" => "storage/img_products/brastemp_2.png"
        ]);

        Product::create([
            "name" => "Coifa Depuradora Ilha Brastemp",
            "description" => "Coifa Depuradora Ilha 75cm Vitreous - GAV75ABBNA 220V - Brastemp",
            "price" => 11639.03,
            "highlights" => 0,
            "voltage" => "220v",
            "brand_id" => 2,
            "image" => "storage/img_products/brastemp_3.png"
        ]);






        Product::create([
            "name" => "Forno Elétrico Bancada Fischer",
            "description" => "Forno Elétrico Bancada Fischer FIT Com Dourador 44L",
            "price" => 688.03,
            "highlights" => 0,
            "voltage" => "220v",
            "brand_id" => 3,
            "image" => "storage/img_products/fischer_1.png"
        ]);

        Product::create([
            "name" => "Secadora De Roupas Fischer",
            "description" => "Secadora De Roupas Super Ciclo 8Kg Silver 127V Fischer",
            "price" => 477.38,
            "highlights" => 0,
            "voltage" => "220v",
            "brand_id" => 3,
            "image" => "storage/img_products/fischer_2.png"
        ]);

        Product::create([
            "name" => "Churrasqueira Elétrica Fischer 1300W - Swift Grill - Fisher-Price",
            "description" => "Churrasqueira Elétrica Fischer 1300W - Swift Grill - Fisher-Price",
            "price" => 179,
            "highlights" => 0,
            "voltage" => "220v",
            "brand_id" => 3,
            "image" => "storage/img_products/fischer_3.png"
        ]);





        Product::create([
            "name" => "Smart Tv Samsung 32",
            "description" => "Smart Tv Led 32 HQ HQSTV32NP HD Conversor Digital 2 Hdmi 2 Usb Wi-Fi",
            "price" => 999.99,
            "highlights" => 1,
            "voltage" => "220v",
            "brand_id" => 4,
            "image" => "storage/img_products/samsung_1.png"
        ]);

        Product::create([
            "name" => "Notebook Samsung Book Intel",
            "description" => "Notebook Samsung Book Intel Core i5 8GB 256GB SSD - 15,6” Full HD Windows 11",
            "price" => 3486.57,
            "highlights" => 0,
            "voltage" => "Bivolt",
            "brand_id" => 4,
            "image" => "storage/img_products/samsung_2.png"
        ]);

        Product::create([
            "name" => "Lavadora de Roupas Samsung",
            "description" => "Lavadora de Roupas Samsung Digital Inverter 11kg - Cesto Inox",
            "price" => 4232.99,
            "highlights" => 0,
            "voltage" => "220v",
            "brand_id" => 4,
            "image" => "storage/img_products/samsung_3.png"
        ]);






        Product::create([
            "name" => "Home Theater Barra de Som LG",
            "description" => "Home Theater Barra de Som LG SK1 40w RMS Cabo Óptico Bluetooth oferta",
            "price" => 998.90,
            "highlights" => 0,
            "voltage" => "220v",
            "brand_id" => 5,
            "image" => "storage/img_products/lg_1.png"
        ]);

        Product::create([
            "name" => "Projetor Lg Ph450Ug Ultra Short",
            "description" => "Projetor Lg Ph450Ug Ultra Short Throw 450 Lumens - Ph450Ug",
            "price" => 6864,
            "highlights" => 0,
            "voltage" => "220v",
            "brand_id" => 5,
            "image" => "storage/img_products/lg_2.png"
        ]);

        Product::create([
            "name" => "Aspirador Lg Cordzero Charge Plus",
            "description" => "Aspirador Lg Cordzero Charge Plus Recarregável Sem Fio",
            "price" => 10250.50,
            "highlights" => 0,
            "voltage" => "220v",
            "brand_id" => 5,
            "image" => "storage/img_products/lg_3.png"
        ]);
    }
}
