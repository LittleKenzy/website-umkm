<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Support\Str;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        // Services
        $services = [
            [
                'title' => 'Website Profil UMKM',
                'description' => 'Website profesional untuk membangun kredibilitas bisnis Anda. Desain modern, cepat, dan mobile-friendly.',
                'price_display' => 'Mulai Rp 1.500.000',
                'icon' => 'heroicon-o-globe-alt',
            ],
            [
                'title' => 'Sistem Kasir & Order',
                'description' => 'Aplikasi kasir (POS) simpel untuk mencatat penjualan, stok, dan laporan harian secara otomatis.',
                'price_display' => 'Mulai Rp 200.000/bulan',
                'icon' => 'heroicon-o-calculator',
            ],
            [
                'title' => 'Digital Marketing',
                'description' => 'Bantu bisnis Anda ditemukan di Google dan Sosial Media. Jasa kelola IG, TikTok, dan Google Ads.',
                'price_display' => 'Mulai Rp 1.000.000/bulan',
                'icon' => 'heroicon-o-megaphone',
            ],
        ];

        foreach ($services as $service) {
            Service::firstOrCreate(['title' => $service['title']], [
                'slug' => Str::slug($service['title']),
                'description' => $service['description'],
                'price_display' => $service['price_display'],
                'icon' => $service['icon'],
            ]);
        }

        // Portfolio
        $portfolios = [
            [
                'title' => 'Kopi Senja Utama',
                'client' => 'Kopi Senja',
                'description' => 'Website profil dan sistem reservasi meja sederhana untuk coffee shop di Jakarta Selatan.',
                'image_path' => null, // Placeholder handled in view if null
                'completion_date' => now()->subMonths(2),
            ],
            [
                'title' => 'Batik Tulis Warisan',
                'client' => 'Batik Warisan',
                'description' => 'Toko online sederhana terintegrasi WhatsApp untuk pengrajin batik lokal.',
                'image_path' => null,
                'completion_date' => now()->subMonth(1),
            ],
            [
                'title' => 'Bengkel Motor Maju',
                'client' => 'Bengkel Maju',
                'description' => 'Sistem pencatatan servis dan reminder ganti oli otomatis via WhatsApp.',
                'image_path' => null,
                'completion_date' => now()->subWeeks(2),
            ],
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::firstOrCreate(['title' => $portfolio['title']], [
                'slug' => Str::slug($portfolio['title']),
                'client' => $portfolio['client'],
                'description' => $portfolio['description'],
                'image_path' => $portfolio['image_path'],
                'completion_date' => $portfolio['completion_date'],
            ]);
        }

        // Articles
        $articles = [
            [
                'title' => '5 Tips Digital Marketing untuk UMKM 2025',
                'excerpt' => 'Strategi pemasaran digital yang wajib diketahui pemilik bisnis kecil ditahun mendatang.',
                'content' => 'Di era digital yang serba cepat, UMKM harus beradaptasi. Berikut adalah 5 strategi utama: 1. Manfaatkan Video Pendek (TikTok/Reels). 2. Optimalkan Google Maps (GMB). 3. Bangun Database Pelanggan. 4. Kolaborasi dengan Micro-Influencer. 5. Gunakan Website sebagai Pusat Informasi kredibel.',
                'thumbnail' => null,
            ],
            [
                'title' => 'Mengapa Website Penting untuk Branding?',
                'excerpt' => 'Website bukan sekadar tren, tapi aset digital jangka panjang bisnis Anda.',
                'content' => 'Website bekerja 24 jam sehari untuk Anda. Ia menjelaskan produk, menjawab pertanyaan umum, dan membangun kepercayaan bahkan saat Anda tidur. Berbeda dengan media sosial yang algoritmanya berubah-ubah, website adalah "rumah" digital yang Anda miliki sepenuhnya.',
                'thumbnail' => null,
            ],
            [
                'title' => 'Cara Mengatur Keuangan Usaha agar Tidak Boncos',
                'excerpt' => 'Pisahkan uang pribadi dan usaha adalah kunci utama.',
                'content' => 'Kebanyakan UMKM gagal bukan karena produk jelek, tapi karena cashflow berantakan. Mulailah dengan mencatat setiap pengeluaran sekecil apapun, dan gaji diri Anda sendiri daripada mengambil uang kas sembarangan.',
                'thumbnail' => null,
            ],
        ];

        foreach ($articles as $article) {
            \App\Models\Article::firstOrCreate(['title' => $article['title']], [
                'slug' => Str::slug($article['title']),
                'excerpt' => $article['excerpt'],
                'content' => $article['content'],
                'thumbnail' => $article['thumbnail'],
                'published_at' => now(),
                'is_featured' => true,
            ]);
        }
    }
}
