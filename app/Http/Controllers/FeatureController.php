<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function splash_screen()
    {
        return view("splash_screen");
    }

    public function welcome()
    {
        return view("welcome");
    }

    public function beranda()
    {
        return view("features.beranda");
    }

    public function edukasi_laktasi()
    {
        $topics = [
            [
                'icon' => 'ti-droplet',
                'title' => 'ASI Eksklusif',
                'desc' => 'Mengapa ASI eksklusif selama 6 bulan pertama sangat penting bagi tumbuh kembang bayi.',
                'icon_class' => 'bg-emerald-100 text-emerald-700',
                'bg_class' => 'bg-emerald-50',
                'video' => false,
                'content' => [
                    'ASI eksklusif adalah pemberian ASI saja tanpa tambahan makanan atau minuman lain (termasuk air putih) selama 6 bulan pertama kehidupan bayi.',
                    'WHO dan Kemenkes RI merekomendasikan ASI eksklusif karena mengandung seluruh nutrisi yang dibutuhkan bayi secara optimal.',
                    'Bayi yang mendapatkan ASI eksklusif memiliki risiko lebih rendah mengalami infeksi, alergi, obesitas, dan berbagai penyakit kronis.',
                ]
            ],

            [
                'icon' => 'ti-heart',
                'title' => 'Manfaat ASI',
                'desc' => 'Berbagai manfaat ASI bagi bayi, ibu, dan keluarga.',
                'icon_class' => 'bg-pink-100 text-pink-700',
                'bg_class' => 'bg-pink-50',
                'video' => false,
                'content' => [
                    'ASI meningkatkan daya tahan tubuh bayi dan membantu perkembangan otak secara optimal.',
                    'Bagi ibu, menyusui membantu pemulihan pasca persalinan dan menurunkan risiko kanker payudara serta ovarium.',
                    'Bagi keluarga, ASI lebih ekonomis, praktis, dan selalu tersedia kapan saja.',
                ]
            ],

            [
                'icon' => 'ti-baby-carriage',
                'title' => 'Inisiasi Menyusu Dini (IMD)',
                'desc' => 'Pentingnya IMD dalam satu jam pertama setelah persalinan.',
                'icon_class' => 'bg-amber-100 text-amber-700',
                'bg_class' => 'bg-amber-50',
                'video' => true,
                'content' => [
                    'IMD adalah proses bayi menyusu sendiri segera setelah lahir melalui kontak kulit dengan ibu.',
                    'IMD membantu bayi memperoleh kolostrum yang kaya antibodi.',
                    'Bayi yang menjalani IMD memiliki peluang lebih besar untuk berhasil mendapatkan ASI eksklusif.',
                ]
            ],

            [
                'icon' => 'ti-hand-stop',
                'title' => 'Teknik Menyusui',
                'desc' => 'Posisi dan perlekatan yang benar agar menyusui nyaman dan efektif.',
                'icon_class' => 'bg-blue-100 text-blue-700',
                'bg_class' => 'bg-blue-50',
                'video' => true,
                'content' => [
                    'Kepala dan tubuh bayi harus berada dalam satu garis lurus.',
                    'Perut bayi menghadap ke tubuh ibu.',
                    'Mulut bayi terbuka lebar dan mencakup sebagian besar areola.',
                    'Beberapa posisi yang dapat digunakan antara lain cradle hold, cross cradle, football hold, dan side lying.',
                ]
            ],

            [
                'icon' => 'ti-settings',
                'title' => 'Manajemen Laktasi',
                'desc' => 'Cara menjaga produksi ASI tetap optimal.',
                'icon_class' => 'bg-violet-100 text-violet-700',
                'bg_class' => 'bg-violet-50',
                'video' => true,
                'content' => [
                    'Produksi ASI mengikuti prinsip supply and demand.',
                    'Semakin sering bayi menyusu atau ASI diperah, semakin banyak ASI yang diproduksi.',
                    'Pada awal kehidupan bayi dianjurkan menyusui 8–12 kali dalam 24 jam.',
                    'Ibu bekerja dapat memerah ASI setiap 3–4 jam untuk mempertahankan produksi.',
                ]
            ],

            [
                'icon' => 'ti-alert-triangle',
                'title' => 'Masalah Menyusui dan Solusinya',
                'desc' => 'Mengatasi berbagai tantangan selama menyusui.',
                'icon_class' => 'bg-rose-100 text-rose-700',
                'bg_class' => 'bg-rose-50',
                'video' => false,
                'content' => [
                    'Puting lecet sering disebabkan oleh perlekatan yang kurang tepat.',
                    'ASI terasa sedikit dapat diatasi dengan meningkatkan frekuensi menyusui dan memperbaiki teknik menyusui.',
                    'Payudara bengkak dapat dikurangi dengan kompres hangat dan menyusui lebih sering.',
                    'Jika mengalami mastitis disertai demam, segera konsultasikan dengan tenaga kesehatan.',
                ]
            ],

            [
                'icon' => 'ti-temperature',
                'title' => 'Penyimpanan ASI',
                'desc' => 'Panduan menyimpan ASI perah dengan aman.',
                'icon_class' => 'bg-cyan-100 text-cyan-700',
                'bg_class' => 'bg-cyan-50',
                'video' => false,
                'content' => [
                    'ASI dapat bertahan 4–6 jam pada suhu ruang.',
                    'ASI dapat bertahan 3–5 hari di dalam kulkas.',
                    'ASI dapat bertahan hingga 6 bulan dalam freezer.',
                    'Berikan label tanggal penyimpanan dan gunakan prinsip first in first out.',
                ]
            ],
        ];

        return view('features.edukasi_laktasi', compact('topics'));
    }

    public function motivasi()
    {
        return view("features.motivasi");
    }

    public function niat_target_menyusui()
    {
        return view("features.niat_target_menyusui");
    }

}
