<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use App\Models\Books;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create([
            'name' => 'Mizan Pustaka',
            'address' => 'Jalan Cinambo No. 135, Cisaranten Wetan, Bandung 40294, Indonesia.',
            'phone' => '081287653456',
            'email' => 'mizan.pustaka@mizan.com',
            'image' => 'img/logomizan.png'
        ]);

        Publisher::create([
            'name' => 'Gramedia Pustaka Utama',
            'address' => 'Jl. Palmerah Barat 29-37 10270, RT.1/RW.2, Gelora, Tanah Abang, Central Jakarta City, Jakarta 10270',
            'phone' => '(021)53650110',
            'email' => 'gramedia@gpu.com',
            'image' => 'img/logogramedia.jpg'
        ]);

        Publisher::create([
            'name' => 'Bentang Pustaka',
            'address' => 'Jl. Palagan Tentara Pelajar, No.101, Jongkang RT 004 RW 035, Sariharjo, Ngaglik, Sleman, DI Yogyakarta',
            'phone' => '(021)57882098',
            'email' => 'redaksi@bentangpustaka.com',
            'image' => 'img/logobentang.jpg'
        ]);

        Publisher::create([
            'name' => 'Kompas',
            'address' => 'Jl. H. Baping No. 100, Ciracas Jakarta Timur 13740',
            'phone' => '(021)76119872',
            'email' => 'naskah@kompas.co.id',
            'image' => 'img/logokompas.png'
        ]);

        Books::create([
            'publisher_id' => 1,
            'title' => 'Sheila',
            'author' => 'Torey Hayden',
            'year' => '2022',
            'synopsis' => 'Sudah ada delapan murid berusia tak lebih dari 10 tahun di kelas itu. Seorang anak pernah dua kali mencoba bunuh diri, seorang anak buta, seorang lagi agresif, dua orang anak menderita autisme, seorang skizofrenia, seorang pernah mengalami penganiayaan fisik dan seksual, sedangkan yang terakhir menderita berbagai fobia.Jika Anda harus mengajar kelas itu, bersediakah Anda—seperti Torey Hayden—menerima seorang murid lagi, seorang gadis berusia 6 tahun yang baru saja membakar anak lelaki berusia 3 tahun sampai nyaris mati? Gadis itu ber-IQ di atas 180, tapi menderita problem emosional parah. Dia tak pernah menangis, bahkan di kala sedih, marah, maupun kesakitan. Dia juga agresif dan selalu membangkang. Mungkin karena sang ibu meninggalkannya di jalanan saat berusia 4 tahun. Mungkin karena ayahnya pemabuk dan tak mampu memberinya pengasukan yang layak. Mungkin karena dia memang tak tahu bagaimana membuat orang lain mencintainya.

            Dalam buku ini, sang guru menuturkan pengalaman nyatanya berusaha menyentuh hati si gadis kecil dan memunculkan segala potensi yang dia miliki. Berhasilkan sang guru? Berhasilkan Sheila mengatasi segala kendala yang menghalanginya dari bertumbuh layaknya gadis kecil lain?',
            'image' => 'img/mizan1.jpg'
        ]);

        Books::create([
            'publisher_id' => 1,
            'title' => 'The Geography Of Dream',
            'author' => 'Ashley & Eje Kim',
            'year' => '2018',
            'synopsis' => 'Mengapa J.K. Rowling melahirkan Harry Potter? Mengapa BTS jadi boyband K-Pop terbaik yang merajai dunia? Bagaimana Jack Ma bisa membangun kerajaan bisnis Alibaba? Benarkah karya Agatha Christie sang ratu novel detektif jadi buku paling laris di dunia setelah kitab suci? Bagaimana pengalaman masa kecilnya bisa mengantar Barack Obama menjadi Presiden Amerika? Mengapa Haruki Murakami dipandang sebagai orang penting dalam literatur modern?

            Dengan semangat mencoba hal-hal baru, jiwa petualang, dan daya imajinasi “kupu-kupu”, kita diajak napak tilas ke tempat-tempat J.K. Rowling melahirkan Harry Potter, Anita Roddick menciptakan The Body Shop, Beatrix Potter menjadi pemegang hak cipta pertama di dunia berkat Peter Rabbit, juga menguak misteri Sherlock Holmes.

            Banyak hal berkenaan dengan imajinasi geografis akan kita temukan pula. Bagaimana berkat intuisi geografis Elizabeth I yang luar biasa, Inggris melebarkan sayapnya ke seluruh dunia. Semakin banyak tempat yang dikunjungi, semakin kaya imajinasi geografis yang dimiliki penulis. Hasilnya, semakin beragam pula negara asal pembaca yang berempati dengan karyanya sebagaimana Haruki Murakami, Paulo Coelho, dan Antoine de Saint-Exupéry.',
            'image' => 'img/mizan2.png'
        ]);

        Books::create([
            'publisher_id' => 1,
            'title' => 'MAN SEEKS GOD',
            'author' => 'Eric Weiner',
            'year' => '2022',
            'synopsis' => '“Sudahkah kau menemukan Tuhanmu?”

            Terpaku oleh pertanyaan seorang suster ketika dirinya terbaring lemah di rumah sakit membuat hari-hari Weiner penuh dengan kegelisahan. Ditambah lagi, Sonya, anak perempuannya yang berusia lima tahun, sudah mulai bertanya-tanya tentang Tuhan. Semua itu memaksa Weiner untuk segera melakukan pencarian Tuhan.

            Weiner memutuskan untuk mengeksplorasi delapan aliran kepercayaan yang telah diseleksinya dengan ketat. Dia melakukan tarian berputar bersama para Sufi di Turki, lalu bermeditasi di Tibet bersama Dalai Lama. Bertolak ke Cina, Weiner melatih chi-nya bersama para Tao. Tak mau ketinggalan, dia melingkar bersama penyihir Wicca dan, pada akhirnya, kembali merenungi jati dirinya sebagai seorang Yahudi di Yerusalem.

            Buku ini mengajak pembaca berpikir: Dari mana manusia berasal? Apa yang akan terjadi ketika kita sudah mati? Ketika pertanyaan-pertanyaan spiritual banyak muncul pada zaman modern ini, Man Seeks God menyajikan perspektif tentang manusia mencari Tuhan dengan gaya yang asyik, menghibur, dan menginspirasi.',
            'image' => 'img/mizan3.jpg'
        ]);

        Books::create([
            'publisher_id' => 1,
            'title' => 'INILAH MAZHABKU',
            'author' => 'Haidar Bagir',
            'year' => '2018',
            'synopsis' => '“Saya selalu percaya pada kebaikan fitri manusia. Kalaupun terjadi pertikaian, lebih sering itu akibat orang terbawa arus yang lebih besar, lebih sering arus politik. Pada kenyataannya, dalam sejarah, politik banyak dikendalikan oleh orang-orang yang manipulatif dan hanya memikirkan kepentingan diri dan kelompoknya. Dan bahwa selalu ada banyak hal subtil (lembut) yang terlibat di dalamnya—yang orang gagal melihatnya—padahal bisa menjadi sumber permakluman jika dipertimbangkan baik-baik.

            Setiap kelompok, setiap mazhab, pun punya kelebihan-kelebihannya sendiri, sebagaimana setiap kelompok, setiap mazhab, punya ruang yang bisa diisi mazhab lain untuk penyempurnaannya. Karena, pada akhirnya, mazhab bukanlah wahyu itu sendiri, tidak pula identik dengan Nabi (atau Imam-imam) yang ma‘shûm, melainkan penafsiran manusia atas sumber-sumber ilahi agama ini—yang tentu saja bisa salah. Orang lain boleh punya tafsir lain, dan masing-masing bisa sama-sama benar dan saling melengkapi, atau setidak-tidaknya bisa saling menyeimbangkan.”

            “… saya berharap buku ini bisa memberikan sumbangan, sekecil apa pun, dalam wacana keragaman mazhab dalam Islam. Dan, lebih dari itu, buku ini bisa ikut menyumbang dalam cita-cita besar umat Islam untuk mencapai persatuan di antara berbagai mazhab, kelompok, dan aliran yang ada.”',
            'image' => 'img/mizan4.jpg'
        ]);

        Books::create([
            'publisher_id' => 2,
            'title' => 'Ronggeng Dukuh Paruk',
            'author' => 'Ahmad Tohari',
            'year' => '2017',
            'synopsis' => 'Ronggeng Dukuh Paruk bercerita tentang Srintil, gadis cantik yang terpilih menjadi seorang ronggeng. Seorang ronggeng terpilih saat itu harus menjalankan budaya dan tradisi yang tidak masuk akal.

            Suatu hari malapetaka politik 1965 silam membuat dukuh tersebut hancur. Srintil mengira ini adalah sebuah malapetaka yang baik untuknya karena ia tidak perlu menjadi ronggeng lagi.

            Namun sayang, bukan kebebasan yang ia dapat melainkan pengalaman pahit sebagai tahanan politik.',
            'image' => 'img/gramed1.jpg'
        ]);

        Books::create([
            'publisher_id' => 2,
            'title' => 'Resign',
            'author' => 'Almira Bastari',
            'year' => '2019',
            'synopsis' => 'Lewat novelnya ini Almira Bastari bercerita tentang kondisi sehari-hari sebuah kantor konsultan di Jakarta. Kantor konsultan tersebut berisikan empat anggota The Cungpret, alias kacung kampret.

            The Cungpret terdiri dari Alranita pegawai termuda, paling lama bertahan di sebuah tim meski dipimpin Bos Galak. Carlo pegawai yang baru menikah dan ingin mencari pekerjaan dengan gaji lebih tinggi.

            Karenina pegawai senior yang selalu dianggap tidak becus tapi terus-menerus dijejali proyek baru, Andre pegawai senior kesayangan si bos yang berniat resign demi dapat menikmati kehidupan keluarga yang lebih normal dan seimbang.

            Terakhir ada Trigan, sang bos jenius, misterius, dan galak, tapi sukses dan dipercaya untuk memimpin timnya sendiri di usianya yang masih cukup muda.

            Saat ini Alranita dan teman-temannya bertaruh dan berlomba-lomba untuk resign secepatnya dari kantor mereka.

            Pertanyaannya, siapakah yang akan memenangkan taruhan dan terbebas dari hukuman yang sudah ditentukan?',
            'image' => 'img/gramed2.jpg'
        ]);

        Books::create([
            'publisher_id' => 2,
            'title' => 'Antologi Rasa',
            'author' => 'Ika Natassa',
            'year' => '2017',
            'synopsis' => 'Antologi Rasa merupakan cerita friendship sekaligus lovers. Bercerita tentang tiga sahabat, yaitu Keara, Ruly, dan Harris. Ketiganya memiliki pemikiran dan perasaan masing-masing yang menggantung dan penuh dengan tanda tanya besar.

            Satu pertanyaan yang menggambarkan kondisi persahabatan mereka. What if in the person that you love, you find a best friend instead of a lover?',
            'image' => 'img/gramed3.jpg'
        ]);

        Books::create([
            'publisher_id' => 2,
            'title' => 'Nayla',
            'author' => 'Djenar Maesa Ayu',
            'year' => '2020',
            'synopsis' => 'Dalam novel ini Djenar Maesa Ayu akan menceritakan kehidupan Nayla, gadis 13 tahun yang harus hidup seorang diri di tengah kejamnya dunia.

            Hidup sendirian memang tak mudah. Nayla tidak punya uang, dan terpaksa tidur di terminal, bertemu dua pria asing yang membuatnya patah hati, hingga bekerja sebagai penata lampu diskotik.

            Di tempat kerja barunya, Nayla mulai mengenal kehidupan yang serba bebas, mulai dari cara berpakaian, berdandan, bergaul, hingga reaksi lingkungan sekitar terhadapnya.

            Di tengah arus hidup yang tiap harinya kian keras, akankah Nayla bertahan hidup sendirian?',
            'image' => 'img/gramed4.jpg'
        ]);

        Books::create([
            'publisher_id' => 3,
            'title' => 'Aroma Karsa',
            'author' => 'Dee Lestari',
            'year' => '2018',
            'synopsis' => 'Aroma Karsa akan mengajak pembaca merunut obsesi seorang Raras yang memburu Puspa Karsa. Puspa Karsa dipercaya berwujud bunga sakti yang mampu mengendalikan kehendak dan cuma bisa diidentifikasi melalui aroma.

            Pencarian Raras membawanya bertemu dengan Jati Wesi, seorang pria dengan indra pembau yang begitu luar biasa. Jalan cerita menjadi semakin intens saat Jati Wesi menyadari bahwa anak tunggal Raras, Tanaya Suma, memiliki kemampuan yang serupa dengannya.',
            'image' => 'img/bentang1.jpg'
        ]);

        Books::create([
            'publisher_id' => 3,
            'title' => 'Talijiwo',
            'author' => 'Sujiwo Tejo',
            'year' => '2018',
            'synopsis' => 'Kini, Talijiwo yang mulanya merupa hashtag yang selalu menjadi ekor tiap kutipannya, berubah bentuk menjadi sebuah buku yang menceritakan tentang kisah Pak Sastro dan Bu Jendro.

            “Berbahagialah para penempuh jalan baru yang belum pernah mereka lakoni sebelumnya, Kekasih. Karena di setiap jengkal di jalan itu, mereka tak terikat pada kenangan...”

            Talijiwo yang telah terbit pada Januari 2018 lalu ini, mengemas percakapan-percakapan dan anekdot yang seringkali muncul di masyarakat yang seringkali mengkritisi pemerintah.

            Ditambah dengan selipan kutipan khas Sujiwo Tejo yang pernah muncul di akun Twitternya dengan menggunakan #talijiwo di antara percakapan mereka berdua.',
            'image' => 'img/bentang2.jpg'
        ]);

        Books::create([
            'publisher_id' => 3,
            'title' => 'Milan',
            'author' => 'Ainur Rahmah',
            'year' => '2018',
            'synopsis' => 'Dalam novelnya, ia menceritakan perihal Milan yang memiliki hati sedingin es. Tapi Damara tidak percaya, ia yakin suatu saat, Milan akan meluluhkan hatinya meskipun perjuangannya seringkali gagal dan ditolak mentah-mentah.

            Tapi ternyata Damara masih memiliki segudang cara, novel ini begitu page turner karena akan membuatmu geregetan!',
            'image' => 'img/bentang3.jpg'
        ]);

        Books::create([
            'publisher_id' => 3,
            'title' => 'Hijrah itu Cinta',
            'author' => 'Abay Adhitya',
            'year' => '2018',
            'synopsis' => 'Novel yang ditulis oleh Abay Adhitya ini bercerita perihal Senja yang telah jatuh hati kepada Satria.

            Tapi sayang, ternyata laki-laki yang ia yakini bisa menjaga dirinya justru membawanya pada kejadian yang mungkin akan disesalinya kemudian hari.

            Senja pun seolah tertampar dengan masa lalunya, masa kelam ayah dan ibunya, yang ia rasa mirip dengan keadaannya saat ini. Namun tentulah hidup tak akan selamanya kelam untuk hamba yang selalu ingin kembali di jalan-Nya.

            Mampukah ia bertobat dan menjalani proses hijrah yang sulit? Buku ini akan mengajarimu bagaimana memperbaiki diri untuk memperoleh cinta-Nya yang sejati.',
            'image' => 'img/bentang4.jpg'
        ]);

        Books::create([
            'publisher_id' => 4,
            'title' => 'Filosofi Teras',
            'author' => 'Henry Manampiring',
            'year' => '2017',
            'synopsis' => 'Lebih dari 2.000 tahun lalu, sebuah mazhab filsafat menemukan akar masalah dan juga solusi dari banyak emosi negatif. Stoisisme, atau Filosofi Teras, adalah filsafat Yunani-Romawi kuno yang bisa membantu kita mengatasi emosi negatif dan menghasilkan mental yang tangguh dalam menghadapi naik-turunnya kehidupan. Jauh dari kesan filsafat sebagai topik berat dan mengawang-awang, Filosofi Teras justru bersifat praktis dan relevan dengan kehidupan Generasi Milenial dan Gen-Z masa kini.',
            'image' => 'img/kompas1.png'
        ]);

        Books::create([
            'publisher_id' => 4,
            'title' => 'Majnun sejak Berjumpa Layla',
            'author' => 'Candra Malik',
            'year' => '2017',
            'synopsis' => 'Lail, Wallaili Wannahar, jatuh cinta pada pandangan pertama kepada Layla, Nel Layla Amor. Namun, ia diliputi tanda tanya besar tentang belahan jiwanya yang lama menghilang itu. Belum lagi, sepeninggal mursyid-nya, Abah Suradira, Lail didaulat untuk menjadi sang penerus. Ia juga berjumpa dengan guru-guru spiritual dan pengalaman-pengalaman batin berikutnya. Kehadiran Kahyunira dan Kheylia, yang tidak muncul dalam novel Candra Malik sebelumnya, Layla, Seribu Malam Tanpamu, akankah membuka tabir rahasia di antara Lail dan Layla?',
            'image' => 'img/kompas2.png'
        ]);

        Books::create([
            'publisher_id' => 4,
            'title' => 'Durga Umayi',
            'author' => 'Y.B Mangunwijaya',
            'year' => '2019',
            'synopsis' => 'Iin Sulinda Pertiwi anak penjual gethuk cothot, anak seorang kopral KNIL, pekerjaannya pencuci baju zaman revolusi. Iin ternyata seorang gadis cantik yang berani memenggal kepala perwira Gurka. Tetapi, tragis, Iin tertangkap tentara NEFIS, diinterogasi, dituduh subversif, dan diperkosa.

            Namun, Iin bangkit, bermodal paras cantik lantas berperan sebagai call girl tingkat tinggi, menjadi spionase diplomatik, memiliki network dengan para petinggi dan para pengusaha. Hidup Iin seketika bergelimang kemewahan. Orang-orang memanggilnya Madame Nussy bahkan dengan sederet nama samaran lainnya.

            Tetapi, Iin tetap tidak dapat melupakan Rohadi, pelukis muda asal Bali yang dikaguminya. Iin juga kasmaran dengan pemuda gundul bersenapan kayu semasa zaman revolusi yang selalu membayangi benaknya. Di samping itu, Iin mempunyai abang kembar dampit, Kang Brojol namanya, lama tidak berjumpa. Bagaimana hasil perjumpaan Iin dengan kedua pemuda dan saudara kembar dampitnya tersebut?',
            'image' => 'img/kompas3.png'
        ]);

        Books::create([
            'publisher_id' => 4,
            'title' => 'Cinta tak pernah sia-sia',
            'author' => 'Agus Noor',
            'year' => '2020',
            'synopsis' => 'SEBAGAI AHLI WARIS PELBAGAI KHAZANAH SASTRA DUNIA, Agus Noor sangat berani mengeksplorasi gaya. Mulai dengan siasat estetis di zaman Orde baru, sampai menolak untuk didefinisikan ketika menulis cerpen dengan berbagai gaya: surealis, absurd, populer, bahkan metropop. Sebuah perjalanan dan proses kreatif sebagai penulis cerpen di Kompas Minggu selama 27 tahun.',
            'image' => 'img/kompas4.png'
        ]);

        Category::create([
            'name' => 'Fantasy'
        ]);

        Category::create([
            'name' => 'Science Fiction'
        ]);

        Category::create([
            'name' => 'Self Development'
        ]);

        Category::create([
            'name' => 'Romance'
        ]);


        BookCategory::create([
            'book_id' => 1,
            'category_id' => 1
        ]);

        BookCategory::create([
            'book_id' => 2,
            'category_id' => 1
        ]);

        BookCategory::create([
            'book_id' => 3,
            'category_id' => 1
        ]);

        BookCategory::create([
            'book_id' => 4,
            'category_id' => 1
        ]);

        BookCategory::create([
            'book_id' => 5,
            'category_id' => 2
        ]);

        BookCategory::create([
            'book_id' => 6,
            'category_id' => 2
        ]);

        BookCategory::create([
            'book_id' => 7,
            'category_id' => 2
        ]);

        BookCategory::create([
            'book_id' => 8,
            'category_id' => 2
        ]);

        BookCategory::create([
            'book_id' => 9,
            'category_id' => 3
        ]);

        BookCategory::create([
            'book_id' => 10,
            'category_id' => 3
        ]);

        BookCategory::create([
            'book_id' => 11,
            'category_id' => 3
        ]);

        BookCategory::create([
            'book_id' => 12,
            'category_id' => 3
        ]);

        BookCategory::create([
            'book_id' => 13,
            'category_id' => 4
        ]);

        BookCategory::create([
            'book_id' => 14,
            'category_id' => 4
        ]);

        BookCategory::create([
            'book_id' => 15,
            'category_id' => 4
        ]);

        BookCategory::create([
            'book_id' => 16,
            'category_id' => 4
        ]);
    }
}
