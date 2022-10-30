<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ReviewModel;

class review extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReviewModel::insert([
        [   'jenis'=>'edukasi',
            'nama'=>'Negeri 5 Menara',
            'foto'=>'5menara.jpg',
            'harga'=>'Rp 115.000',
            'review'=>'Sama seperti karya yang lain, novel ini juga memiliki beberapa kelebihan. 
                        Kelebihan novel ini adalah substansi cerita berhasil mengispirasi anak muda zaman sekarang untuk 
                        lebih bersemangat meraih cita cita dan rasa patuh terhadap orangtua. Novel ini juga mengubah pola 
                        pikir dan meruntuhkan stigma kita tentang kehidupan pondok pesantren yang hanya belajar ilmu ilmu agama islam saja. 
                        Karena dalam novel ini selain belajar ilmu agama, ternyata juga belajar ilmu pengetahuan umum seperti bahasa inggris, 
                        bahasa arab, kesenian, dan lain sebagainya.',
            'stok'=>'12'
        ],

        [   'jenis'=>'Fantasi',
            'nama'=>'Bumi',
            'foto'=>'Bumu.jpg',
            'harga'=>'Rp 84.000',
            'review'=>'Buku ini bercerita tentang petualangan Raib seorang remaja berusia 15 tahun dengan 
                        kedua temannya Seli dan Ali. Raib adalah remaja yang memiliki keunikan dan kekuatan dalam menghilangkan 
                        benda dan menjadikan tubuh nya tidak terlihat ketika ia menutup wajahnya dengan kedua tangan. Keunikan 
                        dan kekuatan ini dirahasiakan Raib sampai pada akhirnya Ali mengetahui bahwa Raib bisa menghilang. Setelah 
                        rahasianya tersingkap, Raib mulai mengalami hal- hal yang tidak terduga. Hal- hal yang menyangkut rahasianya, 
                        kedua kucing yang ia terima sebagai kado ulang tahunnya yang ke 9, sampai pertemuannya dengan sosok tinggi 
                        berbaju hitam, Tamus.',
            'stok'=>'11'
        ],

        [   'jenis'=>'Romansa',
            'nama'=>'Di Tanah Lada',
            'foto'=>'DitanahLada.jpg',
            'harga'=>'Rp 88.000',
            'review'=>'Novel yang berjudul Di Tanah Lada karya Ziggy Z mengisahkan tentang seorang anak kecil yang berusia 6 tahun yang 
                        memiliki hobi membaca kamus, tetapi mendapatkan perilaku kekerasan dari ayahnya. Kamus yang saat ini menjadi sering dibaca itu 
                        merupakan hadiah dari Kakek Kia saat tokoh “aku” berusia 3 tahun. Kamus itu merupakan kamus Bahasa Indonesia dan sejak diberikan 
                        kamus oleh Kakek Kia, tokoh “aku” sudah mulai rajin membaca dan mencari tahu arti dari setiap kata dan mencari tahu tentang 
                        berbagai macam istilah yang belum dipahami oleh anak seusianya. Penulis memberikan nama tokoh “aku”, yaitu Salva atau biasa 
                        dikenal dengan nama panggilan Ava. Ava begitu sapaannya, merupakan seorang anak yang memiliki keluarga yang sering bertengkar, 
                        bahkan Ava sering mendapatkan perlakuan kasar dari ayahnya di dalam rumah. Kekerasan yang diberikan oleh ayahnya, biasanya berupa 
                        pukulan-pukulan yang diberikan bukan hanya kepada anaknya saja, tetapi juga kepada istrinya. Ava yang baru berusia 6 tahun itu akan 
                        mendapatkan kekerasan dari ayahnya, jika tak melakukan hal yang disuruh oleh ayahnya.',
            'stok'=>'7'
        ],

        [   'jenis'=>'Romansa',
            'nama'=>'Gadis Minimarket',
            'foto'=>'mini.jpg',
            'harga'=>'Rp 94.000',
            'review'=>'Novel dengan judul Gadis Minimarket adalah novel terjemahan dari bahasa Jepang yang ditulis oleh Sayaka Murata dan dialihbahasakan oleh Ninuk Sulistyawati. 
            Novel ini mengisahkan seorang gadis bernama Keiko Furukura dan akrab dipanggil Keiko. Semasa sekolah hingga kuliah, ia sangat pendiam dan suka menyendiri, sehingga ia 
            hampir tidak memiliki teman semasa menempuh pendidikan. Waktu menempuh pendidikan di Sekolah Dasar, ia pernah memukul kepala temannya menggunakan sekop hingga berdarah 
            dengan alasan untuk melerai temannya yang sedang bertengkar. Setelah kejadian itu, ibu Keiko disuruh datang ke sekolah dan meminta maaf atas apa yang telah dilakukan oleh anaknya. 
            Di sisi lain, Keiko masih bingung, karena ia merasa tidak diberikan sebuah alasan mengapa tindakannya dianggap salah padahal ia merasa telah melakukan hal yang benar karena sudah 
            melerai anak-anak yang bertengkar. Keiko selalu berusaha untuk mengubah dirinya agar menjadi pribadi yang mudah untuk berkomunikasi dengan teman-temannya. Namun, sampai ia SMA dan 
            kuliah sifat yang dimilikinya tak pernah berubah, ia selalu lebih suka menghabiskan waktunya sendiri. Semasa kuliah, Keiko mulai berniat untuk mengisi waktu luangnya dengan bekerja 
            paruh waktu walaupun uang jajan yang diberikan oleh orang tuanya sudah cukup.',
            'stok'=>'4'
        ],

        [   'jenis'=>'Fiksi',
            'nama'=>'Harry Potter',
            'foto'=>'poter.jpg',
            'harga'=>'Rp 320.000',
            'review'=>'menceritakan mengenai Harry Potter yang merupakan seorang anak laki-laki berusia 11 tahun yang berhasil selamat dari sihir 
                    mematikan seorang penyihir yang sangat ditakuti di kerajaan bernama Britania Raya, atau yang tepatnya berada di wilayah Lord Voldemort. 
                    Meskipun Harry berhasil selamat dari serangan sihir itu, akan tetapi kedua orang tuanya tidak berhasil selamat, dan meninggal dunia. Lalu, 
                    masa kecil dia diasuh oleh keluarga yang berasal dari bibinya, atau merupakan seorang kakak dari ibunya. Semasa kecilnya Harry tak terlalu 
                    bersenang-senang, sebab baginya sebagai seorang anak yang menumpang, dirinya perlu untuk membantu mengurus keluarga bibinya. Bahkan untuk 
                    kamar tidur dirinya sendiri, ia sangatlah beruntung memperoleh kamar sempit yang berada dibawah tangga. Mendapatkan sebuah kasih sayang tulus, 
                    ketika itu baginya adalah suatu hal yang mahal. Akan tetapi kondisi menjadi berubah saat datanglah sebuah surat dari Hogwart di ulang tahunnya 
                    yang menginjak usia 11 tahun. Harry memperoleh undangan untuk bersekolah di salah satu sekolah sihir Hogwart bersama dengan anak-anak bertalenta.',
            'stok'=>'3'
        ],

        [   'jenis'=>'action',
            'nama'=>'Bedebah di Ujung Tanduk',
            'foto'=>'bedebak.jpg',
            'harga'=>'Rp 120.000',
            'review'=>'i Negeri Para Bedebah, pencuri, perampok, bagai musang berbulu domba. Di depan, wajah mereka tersenyum penuh pencitraan. Di belakang penuh tipu-tipu. 
                    Di Negeri di Ujung Tanduk, pencuri, perampok, berkeliaran menjadi penegak hukum. Di depan, di belakang, mereka tidak malu-malu lagi. Tapi setidaknya, Kawan, 
                    dalam situasi apapun, petarung sejati akan terus memilih kehormatan hidupnya. Bahkan ketika nasib di ujung tanduk. Dia akan terus bertarung habis-habisan, bersama 
                    sahabat sejati. Karena esok, matahari akan terbit sekali lagi. Bersama harapan.',
            'stok'=>'11'
        ],

        ]);
    }
}
