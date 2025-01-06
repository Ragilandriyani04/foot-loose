<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Catalogue;

class CatalogueSeeder extends Seeder
{
    public function run()
    {
        Catalogue::create([
            'name' => 'Sepatu 1',
            'photo' => 'https://contents.mediadecathlon.com/p2606751/k$5211ddac45b25d0224e88eb6ddac9ff3/sepatu-jogging-pria-run-active-biru-tua-kalenji-8559090.jpg?f=1920x0&format=auto',
        ]);

        Catalogue::create([
            'name' => 'Sepatu 2',
            'photo' => 'https://down-id.img.susercontent.com/file/sg-11134201-23020-ohstey78idnvd2',
        ]);

        Catalogue::create([
            'name' => 'Sepatu 3',
            'photo' => 'https://contents.mediadecathlon.com/p2606999/k$036348461c3a97745b4b7c525d5c0f7c/sepatu-lari-pria-hitam-jingga-kalenji-8670187.jpg?f=1920x0&format=auto',
        ]);

        Catalogue::create([
            'name' => 'Sepatu 4',
            'photo' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/1/16/1abf9771-e4c9-47c8-b77a-95a05fc4bb34.jpg',
        ]);

        Catalogue::create([
            'name' => 'Sepatu 5',
            'photo' => 'https://i.pinimg.com/550x/7b/9e/fe/7b9efe7e5246a4ca73066a93ccb03b1f.jpg',
        ]);

        Catalogue::create([
            'name' => 'Sepatu 6',
            'photo' => 'https://mills.co.id/cdn/shop/files/sg-11134201-7rbmy-lpexof7fsaqf12.jpg?v=1728456956&width=1445',
        ]);

        Catalogue::create([
            'name' => 'Sepatu 7',
            'photo' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//105/MTA-73926159/lurad_sepatu_wanita_sepatu_cewek_women_shoes_sepatu_kanvas_wanita_women_canvas_shoes_lurad_wl19902_sepatu_import_wanita_sepatu_fashion_korea_full01_tenw6dug.jpg',
        ]);

        Catalogue::create([
            'name' => 'Sepatu 8',
            'photo' => 'https://hypesneakerid.com/wp-content/uploads/2024/07/TOP-6-BEST-ON-SHOES-1024x576.jpg',
        ]);

        Catalogue::create([
            'name' => 'Sepatu 9',
            'photo' => 'https://s3.us-west-1.amazonaws.com/esdelatino.com/wp-content/uploads/2024/08/28235435/1724900073_Revision-de-On-Cloud-Shoes-mas-informacion-sobre-zapatillas-para.jpg',
        ]);

        Catalogue::create([
            'name' => 'Sepatu 10',
            'photo' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2023/9/11/6e84abd8-1cff-46b5-9969-87e3a7ec3cc8.jpg',
        ]);

        Catalogue::create([
            'name' => 'Sepatu 11',
            'photo' => 'https://static.wixstatic.com/media/4c0874_a79b3ebad587442c8a741e57cf352e40~mv2.webp/v1/fill/w_568,h_378,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/4c0874_a79b3ebad587442c8a741e57cf352e40~mv2.webp',
        ]);

        Catalogue::create([
            'name' => 'Sepatu 12',
            'photo' => 'https://down-id.img.susercontent.com/file/sg-11134201-7rbmq-llyhn6dudlu8c8',
        ]);

        
    }
}
