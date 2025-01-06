<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home;

class HomeSeeder extends Seeder
{
    public function run()
    {
        Home::create([
            'name' => env('APP_NAME'),
            'judul' => 'Temukan Sepatu Terbaik untuk Setiap Langkah Anda',
            'deskripsi' => 'Di TokoSepatu, kami menyediakan koleksi sepatu terbaru yang mengutamakan gaya, kenyamanan, dan kualitas untuk menunjang aktivitas Anda.',
            'link_youtube' => '<iframe class="mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96 shadow-xl" src="https://www.youtube.com/embed/UiGIcM48uGo?si=X-Sf_PkbWrh-eF8P" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
            'pelanggan' => '500',
            'terjual' => '1',
            'ulasan' => '10',
            'merk' => '50',
            'koleksi' => '100',
            'layanan' => '27/4',
            'foto_iklan' => 'https://thumb.viva.co.id/media/frontend/thumbs3/2017/12/20/5a3a1ac0b0861-sepatu-league_665_374.jpg',
            'iklan' => 'Hemat Rp500.000 Hari Ini untuk Pembelian Sepatu Baru!',
            'deskripsi_iklan' => 'Pesan sekarang sepatu favorit Anda dan nikmati diskon eksklusif untuk koleksi terbaru. Segera pre-order untuk mengamankan penawaran spesial ini.',
            'about_us' => 'Semua produk yang dijual Foot Loose adalah produk-produk Original dengan official licence dari seluruh brand principle, authorized distributor dan seluruh mitra kami. Harga yang ditawarkan Foot Loose sangat ekonomis karena kami sangat memahami bahwa kepuasan pelanggan kami adalah yang utama. Foot Loose telah berpengalaman dalam menerima jutaan pesanan dari seluruh Asia Tenggara selama 3 tahun terakhir dan memiliki mitra ekspedisi yang handal untuk mengantarkan produk pesananmu dengan sangat cepat.'
        ]);
    }
}
