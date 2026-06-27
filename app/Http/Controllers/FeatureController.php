<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PreTestScore;
use App\Models\PostTestScore;

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
        $user = Auth::user();
        return view('features.beranda', compact('user'));
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

    public function konseling_online()
    {
        // list yang ini bisa hardcoded tp bisa juga kalau mau distore di db
        $konselor = [
            [
                'nama' => 'dr. Anita, Sp.A',
                'role' => 'Dokter Anak',
                'wa' => '6281234567890',
                'warna' => 'bg-pink-50 text-pink-600'
            ],
            [
                'nama' => 'Bidan Rina',
                'role' => 'Bidan Konselor Laktasi',
                'wa' => '6281234567891',
                'warna' => 'bg-emerald-50 text-emerald-600'
            ],
            [
                'nama' => 'Maya Putri',
                'role' => 'Konselor Laktasi',
                'wa' => '6281234567892',
                'warna' => 'bg-sky-50 text-sky-600'
            ]
        ];

        // ini nanti bisa ambil dari database aja
        $riwayat = [
            [
                'subjek' => 'Bayi sulit melekat saat menyusu',
                'tanggal' => '20 Agustus 2026',
                'status' => 'Sudah Dibalas',
                'balasan' => 'Pastikan mulut bayi membuka lebar dan sebagian besar areola masuk ke dalam mulut bayi.'
            ],
            [
                'subjek' => 'ASI terasa berkurang',
                'tanggal' => '23 Agustus 2026',
                'status' => 'Menunggu Balasan',
                'balasan' => null
            ]
        ];

        return view('features.konseling_online', compact('konselor', 'riwayat'));
    }

    public function keterampilan_menyusui()
    {
        $topics = [
            [
                'title' => 'Video Teknik Pelekatan',
                'desc' => 'Pelajari cara bayi melekat dengan benar saat menyusu.',
                'icon' => 'ti-player-play',
                'icon_class' => 'bg-red-100 text-red-600',
                'bg_class' => 'bg-red-50',
                'video' => true,
                'content' => [
                    'Posisikan bayi menghadap tubuh ibu (tummy to tummy).',
                    'Pastikan mulut bayi terbuka lebar sebelum melekat.',
                    'Sebagian besar areola masuk ke mulut bayi.',
                    'Dagu bayi menyentuh payudara dan bibir terbuka ke luar.',
                    'Perhatikan tanda pelekatan yang efektif dan nyaman.'
                ]
            ],

            [
                'title' => 'Posisi Menyusui',
                'desc' => 'Berbagai posisi menyusui yang nyaman untuk ibu dan bayi.',
                'icon' => 'ti-baby-carriage',
                'icon_class' => 'bg-pink-100 text-pink-600',
                'bg_class' => 'bg-pink-50',
                'video' => true,
                'content' => [
                    'Posisi cradle hold (gendongan klasik).',
                    'Posisi cross-cradle hold.',
                    'Posisi football hold.',
                    'Posisi menyusui sambil berbaring.',
                    'Pilih posisi yang paling nyaman dan aman.'
                ]
            ],

            [
                'title' => 'Teknik Memerah ASI',
                'desc' => 'Panduan memerah ASI secara manual maupun menggunakan pompa.',
                'icon' => 'ti-droplet',
                'icon_class' => 'bg-sky-100 text-sky-600',
                'bg_class' => 'bg-sky-50',
                'video' => true,
                'content' => [
                    'Cuci tangan sebelum memerah ASI.',
                    'Lakukan pijatan ringan pada payudara.',
                    'Gunakan teknik perah yang benar.',
                    'Pastikan wadah penyimpanan steril.',
                    'Beri label tanggal dan jam penyimpanan.'
                ]
            ],

            [
                'title' => 'Penyimpanan ASI',
                'desc' => 'Cara menyimpan ASI perah agar kualitas tetap terjaga.',
                'icon' => 'ti-fridge',
                'icon_class' => 'bg-indigo-100 text-indigo-600',
                'bg_class' => 'bg-indigo-50',
                'video' => false,
                'content' => [
                    'ASI suhu ruang dapat bertahan beberapa jam.',
                    'Simpan dalam kulkas atau freezer sesuai kebutuhan.',
                    'Gunakan wadah khusus penyimpanan ASI.',
                    'Jangan mengisi wadah terlalu penuh.',
                    'Gunakan ASI yang lebih lama terlebih dahulu.'
                ]
            ],

            [
                'title' => 'Penanganan Masalah Laktasi',
                'desc' => 'Solusi awal untuk berbagai tantangan selama menyusui.',
                'icon' => 'ti-heart-handshake',
                'icon_class' => 'bg-amber-100 text-amber-600',
                'bg_class' => 'bg-amber-50',
                'video' => true,
                'content' => [
                    'Mengatasi puting lecet dan nyeri.',
                    'Mengatasi payudara bengkak.',
                    'Mengatasi saluran ASI tersumbat.',
                    'Mengatasi produksi ASI yang dirasa kurang.',
                    'Kapan perlu berkonsultasi dengan tenaga kesehatan.'
                ]
            ],

            [
                'title' => 'Simulasi Praktik Menyusui',
                'desc' => 'Latihan langkah demi langkah keterampilan menyusui.',
                'icon' => 'ti-device-tv',
                'icon_class' => 'bg-emerald-100 text-emerald-600',
                'bg_class' => 'bg-emerald-50',
                'video' => true,
                'content' => [
                    'Simulasi pelekatan bayi.',
                    'Simulasi posisi menyusui.',
                    'Simulasi memerah dan menyimpan ASI.',
                    'Simulasi penanganan masalah umum.',
                    'Evaluasi mandiri keterampilan menyusui.'
                ]
            ]

        ];

        return view('features.keterampilan_menyusui', compact('topics'));
    }

    public function monitoring_reminder()
    {
        return view('features.monitoring_reminder');
    }

    public function outcome_asi_eksklusif()
    {
        return view("features.outcome_asi_eksklusif");
    }

    public function dukungan_sosial()
    {
        return view("features.dukungan_sosial");
    }

    public function hubungi_kami()
    {
        return view("features.hubungi_kami");
    }

    private function getQuestions()
    {
        return [
            [
            'category' => 'Pengetahuan ASI Eksklusif',
            'question' => 'Apa yang dimaksud dengan ASI eksklusif?',
            'options' => [
            'ASI saja tanpa makanan atau minuman lain selama 6 bulan',
            'ASI dan susu formula',
            'ASI dan MPASI sejak lahir',
            'ASI dengan air putih'
            ],
            'answer' => 0
            ],

            [
            'category' => 'Pengetahuan ASI Eksklusif',
            'question' => 'Berapa lama rekomendasi pemberian ASI eksklusif?',
            'options' => [
            '3 bulan',
            '4 bulan',
            '6 bulan',
            '12 bulan'
            ],
            'answer' => 2
            ],

            [
            'category' => 'Pengetahuan ASI Eksklusif',
            'question' => 'Kolostrum adalah...',
            'options' => [
            'ASI pertama yang kaya antibodi',
            'ASI basi',
            'Susu formula',
            'ASI setelah 1 tahun'
            ],
            'answer' => 0
            ],

            [
            'category' => 'Pengetahuan ASI Eksklusif',
            'question' => 'Manfaat ASI bagi bayi adalah...',
            'options' => [
            'Meningkatkan daya tahan tubuh',
            'Menyebabkan alergi',
            'Menghambat pertumbuhan',
            'Tidak memiliki manfaat'
            ],
            'answer' => 0
            ],

            [
            'category' => 'Pengetahuan ASI Eksklusif',
            'question' => 'IMD dilakukan dalam waktu...',
            'options' => [
            '24 jam setelah lahir',
            '1 minggu setelah lahir',
            '1 jam pertama setelah lahir',
            '3 hari setelah lahir'
            ],
            'answer' => 2
            ],

            [
            'category' => 'Pengetahuan ASI Eksklusif',
            'question' => 'ASI mengandung...',
            'options' => [
            'Zat gizi lengkap',
            'Tidak ada protein',
            'Hanya lemak',
            'Hanya vitamin'
            ],
            'answer' => 0
            ],

            [
            'category' => 'Pengetahuan ASI Eksklusif',
            'question' => 'Pemberian air putih pada bayi usia 3 bulan...',
            'options' => [
            'Dianjurkan',
            'Tidak dianjurkan',
            'Wajib',
            'Harus setiap hari'
            ],
            'answer' => 1
            ],

            [
            'category' => 'Pengetahuan ASI Eksklusif',
            'question' => 'ASI dapat membantu melindungi bayi dari...',
            'options' => [
            'Infeksi',
            'Pertumbuhan',
            'Tidur',
            'Berat badan'
            ],
            'answer' => 0
            ],

            [
            'category' => 'Pengetahuan ASI Eksklusif',
            'question' => 'ASI sebaiknya diberikan...',
            'options' => [
            'Sesuai jadwal ketat',
            'Saat bayi menginginkan',
            '1 kali sehari',
            '2 kali sehari'
            ],
            'answer' => 1
            ],

            [
            'category' => 'Pengetahuan ASI Eksklusif',
            'question' => 'ASI tetap dapat diberikan ketika ibu bekerja dengan cara...',
            'options' => [
            'Menghentikan menyusui',
            'Memerah dan menyimpan ASI',
            'Memberi air putih',
            'Tidak memberikan ASI'
            ],
            'answer' => 1
            ],

            // Sikap

            [
            'category'=>'Sikap',
            'question'=>'Saya percaya ASI eksklusif penting bagi bayi.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            [
            'category'=>'Sikap',
            'question'=>'Menyusui merupakan tanggung jawab yang penting bagi ibu.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            [
            'category'=>'Sikap',
            'question'=>'Saya merasa menyusui memberikan manfaat bagi bayi.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            [
            'category'=>'Sikap',
            'question'=>'Saya merasa bangga dapat memberikan ASI.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            [
            'category'=>'Sikap',
            'question'=>'Saya bersedia berusaha mempertahankan ASI eksklusif.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            // Motivasi

            [
            'category'=>'Motivasi',
            'question'=>'Saya termotivasi memberikan ASI eksklusif selama 6 bulan.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            [
            'category'=>'Motivasi',
            'question'=>'Saya ingin memberikan yang terbaik bagi bayi saya.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            [
            'category'=>'Motivasi',
            'question'=>'Saya bersedia mencari informasi tentang menyusui.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            [
            'category'=>'Motivasi',
            'question'=>'Saya ingin tetap menyusui meskipun menghadapi kesulitan.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            [
            'category'=>'Motivasi',
            'question'=>'Saya merasa menyusui adalah prioritas bagi saya.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            // Self Efficacy

            [
            'category'=>'Self-Efficacy',
            'question'=>'Saya yakin dapat menyusui bayi dengan benar.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            [
            'category'=>'Self-Efficacy',
            'question'=>'Saya yakin dapat mengatasi masalah menyusui.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            [
            'category'=>'Self-Efficacy',
            'question'=>'Saya yakin dapat mempertahankan ASI eksklusif.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            [
            'category'=>'Self-Efficacy',
            'question'=>'Saya percaya diri menyusui di berbagai situasi.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            // Niat

            [
            'category'=>'Niat',
            'question'=>'Saya berniat memberikan ASI eksklusif selama 6 bulan.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            [
            'category'=>'Niat',
            'question'=>'Saya berencana menyusui segera setelah bayi lahir.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            [
            'category'=>'Niat',
            'question'=>'Saya akan berusaha mempertahankan menyusui sampai usia 2 tahun.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            // Dukungan Sosial

            [
            'category'=>'Dukungan Sosial',
            'question'=>'Keluarga saya mendukung pemberian ASI eksklusif.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            [
            'category'=>'Dukungan Sosial',
            'question'=>'Pasangan saya mendukung proses menyusui.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ],

            [
            'category'=>'Dukungan Sosial',
            'question'=>'Saya memiliki akses terhadap bantuan tenaga kesehatan.',
            'options'=>['Sangat Tidak Setuju','Tidak Setuju','Ragu-ragu','Setuju','Sangat Setuju']
            ]
        ];
    }

    public function pre_test()
    {
        $questions = $this->getQuestions();

        return view('features.pre_test', compact('questions'));
    }

    public function post_test()
    {
        $questions = $this->getQuestions();

        return view('features.post_test', compact('questions'));
    }

    private function calculateScore($questions, $request)
    {
        $knowledgeCorrect = 0;

        $scores = [
            'Sikap' => [],
            'Motivasi' => [],
            'Self-Efficacy' => [],
            'Niat' => [],
            'Dukungan Sosial' => [],
        ];

        foreach ($questions as $index => $question) {

            $answer = $request->input("question_$index");

            if (
                $question['category'] == 'Pengetahuan ASI Eksklusif'
                && isset($question['answer'])
            ) {

                if ($answer == $question['answer']) {
                    $knowledgeCorrect++;
                }

            } else {

                $scores[$question['category']][] =
                    ((int)$answer) + 1;
            }
        }

        $knowledgeScore =
            ($knowledgeCorrect / 10) * 100;

        $knowledgeLabel =
            $knowledgeScore >= 80 ? 'Baik'
            : ($knowledgeScore >= 60 ? 'Cukup'
            : 'Perlu Pendampingan');

        $results = [];

        foreach ($scores as $category => $values) {

            $total = array_sum($values);
            $max = count($values) * 5;

            $percentage = ($total / $max) * 100;

            $results[$category] = [
                'score' => round($percentage, 2),
                'label' => $percentage >= 80
                    ? 'Baik'
                    : ($percentage >= 60
                        ? 'Cukup'
                        : 'Perlu Pendampingan')
            ];
        }

        return [
            'knowledgeScore' => $knowledgeScore,
            'knowledgeLabel' => $knowledgeLabel,
            'results' => $results
        ];
    }

    public function submit_pretest(Request $request)
    {
        $questions = $this->getQuestions();

        $result = $this->calculateScore(
            $questions,
            $request
        );

        PreTestScore::updateOrCreate(
            [
                'user_id' => auth()->id()
            ],
            [
                'knowledge_score' => $result['knowledgeScore'],
                'sikap_score' => $result['results']['Sikap']['score'],
                'motivasi_score' => $result['results']['Motivasi']['score'],
                'self_efficacy_score' => $result['results']['Self-Efficacy']['score'],
                'niat_score' => $result['results']['Niat']['score'],
                'dukungan_sosial_score' => $result['results']['Dukungan Sosial']['score'],
                'taken_at' => now()
            ]
        );

        return view('features.pre_test', [
            'questions' => $questions,
            'showResult' => true,
            'knowledgeScore' => $result['knowledgeScore'],
            'knowledgeLabel' => $result['knowledgeLabel'],
            'results' => $result['results']
        ]);
    }

    public function submit_posttest(Request $request)
    {
        $questions = $this->getQuestions();

        $result = $this->calculateScore(
            $questions,
            $request
        );

        PostTestScore::updateOrCreate(
            [
                'user_id' => auth()->id()
            ],
            [
                'knowledge_score' => $result['knowledgeScore'],
                'motivasi_score' => $result['results']['Motivasi']['score'],
                'self_efficacy_score' => $result['results']['Self-Efficacy']['score'],
                'niat_score' => $result['results']['Niat']['score'],
                'keterampilan_score' => $result['results']['Keterampilan']['score'],
                'perilaku_score' => $result['results']['Perilaku']['score'],
                'taken_at' => now()
            ]
        );

        return view('features.post_test', [
            'questions' => $questions,
            'showResult' => true,
            'knowledgeScore' => $result['knowledgeScore'],
            'knowledgeLabel' => $result['knowledgeLabel'],
            'results' => $result['results']
        ]);
    }
}
