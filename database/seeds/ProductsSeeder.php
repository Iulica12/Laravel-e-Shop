<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy S22',
            'description' => 'Este un kit profesional care incape intr-o singura mana. Camera tripla principala si camera selfie ofera hardware si software inovatoare, astfel incat sa poti fotografia cu usurinta o Galerie plina de continut demn de share-uit.',
            'photo' =>
            'https://s13emagst.akamaized.net/products/43178/43177458/images/res_707ec7b89553b7311534089b62e447e9.jpg',
            'price' => 3049.99
        ]);
        DB::table('products')->insert([
            'name' => 'Apple iPhone 14 PRO MAX',
            'description' => 'O modalitate magica de a interactiona cu iPhone. O functionalitate vitala de siguranta, conceputa pentru a salva vieti. O camera principala inovatoare de 48MP.',
            'photo' =>
            'https://s13emagst.akamaized.net/products/48592/48591242/images/res_ee69b28e2cc930d3bbdd088baaa92556.jpg',
            'price' => 7069.99
        ]);
        DB::table('products')->insert([
            'name' => 'Casti Apple AirPods Pro',
            'description' => 'Anulare activa a zgomotului cu mod Transparenta, rezistenta la apa si transpiratie si potrivire personalizabila.',
            'photo' =>
            'https://s13emagst.akamaized.net/products/26669/26668250/images/res_25452c9cc71d1d7c1146cda73239cb2d.jpg',
            'price' => 1273.05
        ]);
        DB::table('products')->insert([
            'name' => 'Apple Watch 8',
            'description' => 'Apple Watch 8, GPS, Carcasa Midnight Aluminium 45mm, Midnight Sport Band ',
            'photo' =>
            'https://s13emagst.akamaized.net/products/48591/48590558/images/res_7324b4967516ce96d182bd91b4a76ea2.jpg',
            'price' => 2459.90
        ]);
        DB::table('products')->insert([
            'name' => 'Televizor Samsung',
            'description' => 'Samsung 50AU7172, 125 cm, Smart, 4K Ultra HD, LED, Clasa G.',
            'photo' => 'https://s13emagst.akamaized.net/products/35828/35827230/images/res_1afbb5074dba25b7e2dfc9ca46ab60c1.jpg',
            'price' => 1779.99
        ]);
        DB::table('products')->insert([
            'name' => 'Apple MacBook Air 13',
            'description' => 'MacBook Air 13-inch, True Tone, procesor Apple M1 , 8 nuclee CPU si 7 nuclee GPU, 8GB, 256GB, Space Grey, INT KB.',
            'photo' => 'https://s13emagst.akamaized.net/products/33874/33873196/images/res_2ce18bde5ec79adc307a8d4fc03e40a3.jpg',
            'price' => 4799.99
        ]);
        DB::table('products')->insert([
            'name' => 'Apple IPad 9',
            'description' => 'iPad 9 (2021), 10.2 ", 64GB, Wi-Fi, Space Grey.',
            'photo' => 'https://s13emagst.akamaized.net/products/40530/40529521/images/res_1e0c2ea72c8d4c7052ec85137524cae2.jpg',
            'price' => 1899.99
        ]);
        DB::table('products')->insert([
            'name' => 'Laptop ultraportabil ASUS Zenbook 14X',
            'description' => 'procesor AMD Ryzen™ 7 5800H pana la 4.40 GHz, 14", 2.8K OLED, 16GB, 1TB M.2 NVMe™ PCIe® 3.0 SSD, AMD Radeon™ Graphics, Windows 11 Home',
            'photo' => 'https://s13emagst.akamaized.net/products/47905/47904706/images/res_20b19be61b7a26d9e9a3bfdd34814321.jpg',
            'price' => 5199.99
        ]);
        DB::table('products')->insert([
            'name' => 'Apple iPhone 11',
            'description' => 'Telefon mobil Apple iPhone 11, 64GB, Black',
            'photo' => 'https://s13emagst.akamaized.net/products/25344/25343941/images/res_99d57ec9e3d9bb8d3242f384288ce0a3.jpg',
            'price' => 2349.99
        ]);
        DB::table('products')->insert([
            'name' => 'Aparat foto Mirrorless Sony Alpha A7II',
            'description' => '24.3 MP, Full-Frame, Wi-Fi, NFC, E-Mount, ISO 50–25600, Negru + Obiectiv SEL2870 28-70mm, Negru',
            'photo' => 'https://s13emagst.akamaized.net/products/1536/1535197/images/res_e42bca8d7e9c106afe07652db5ae775a.jpg',
            'price' => 4799.99
        ]);
        DB::table('products')->insert([
            'name' => 'Monitor Gaming LED',
            'description' => 'VA curbat DELL 27", FHD, 144Hz, 1ms, 4ms,350 cd/m2, VESA, DP, HDMI, S2721HGF',
            'photo' => 'https://s13emagst.akamaized.net/products/32274/32273347/images/res_0daaac9c75cfb02fed49048f8dcc2826.jpg',
            'price' => 999.99
        ]);
        DB::table('products')->insert([
            'name' => 'Tableta Samsung Galaxy Tab A7',
            'description' => 'Lite, Octa-Core, 8.7", 3GB RAM, 32GB, 4G, Gray',
            'photo' => 'https://s13emagst.akamaized.net/products/37936/37935757/images/res_c5ed12682dd48f6661c2fa3d3adde7da.jpg',
            'price' => 779.99
        ]);
    }
}
