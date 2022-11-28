<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books') -> insert(
            [
                'book_id' => 'BK001',
                'publisher_id' => 'PB001',
                'title' => 'Angkasa dan 56 Hari',
                'author' => 'Destashya WDP',
                'year' => 2018,
                'synopsis' => 'Nadine, Angkasa mu ini sedang tidak baik baik saja. Maaf butuh waktu lama untuk aku menyampaikan rasa padamu. Namun, satu hal yang harus kamu tau, seorang Angkasa menanam cinta yang begitu besar padamu sejak 15 tahun lalu.',
                'book_image' => 'https://cdn.gramedia.com/uploads/items/9786239712716.jpg'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK002',
                'publisher_id' => 'PB001',
                'title' => 'Menanti Hari Berganti',
                'author' => 'Titi Sanaria',
                'year' => 2015,
                'synopsis' => 'Pelecehan seksual yang dialami Kiera meninggalkan trauma mendalam. Peristiwa itu membuat Kiera yakin, dia tidak akan pernah bisa menjalani hubungan asmara. Kontak fisik dengan lawan jenis adalah hal mustahil. Ketika seorang laki-laki keras kepala konsisten mendekatinya, untuk pertama kali Kiera memikirkan kemungkinan menjalani kehidupan normal seperti yang disarankan psikiaternya. Masalahnya, apakah Kiera tega menyeret seseorang dalam ketidakpastian proses penyembuhannya? Bagaimana jika dia tidak pernah bisa sembuh dari luka masa lalu?',
                'book_image' => 'https://cdn.storial.co/book_front/130369-80a181d9ce021b264f721bb4dcc9a04a4e2e14e4.jpeg'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK003',
                'publisher_id' => 'PB002',
                'title' => 'Love from A to Z',
                'author' => 'S.K. Ali',
                'year' => 2020,
                'synopsis' => 'What is the Story? LOVE FROM A TO Z begins on a flight to Doha, the capital of Qatar. Adam Chen, a Chinese Finnish Canadian university freshman is summoning the courage to tell his father and younger sister that he has multiple sclerosis (MS), the same disease that killed his mother 10 years before.',
                'book_image' => 'https://assets.kompasiana.com/items/album/2022/04/09/whatsapp-image-2022-04-09-at-13-50-25-62512d60bb44863401759d12.jpeg?t=o&v=770'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK004',
                'publisher_id' => 'PB003',
                'title' => 'Lingkar Tanah Lingkar Air',
                'author' => 'Ahmad Tohari',
                'year' => 2017,
                'synopsis' => 'Pada Maret 1946, Amid bersama beberapa temannya, menjadi murid Kiai Ngumar, mereka belajar silat dan ilmu agama. Pada suatu malam Amid dipanggil Kiai Ngumar, dia dan temannya diminta untuk bersiap-siap berperang, karena ada fatwa yang mewajibkan untuk melawan Belanda. Sejak Kiai Ngumar meminta Kiram dan Amid untuk bersiap-siap tidak terjadi perkembangan apa-apa, hingga tiga bulan sesudahnya Kiai Ngumar kembali memanggil mereka berdua, mereka diminta untuk berangkat ke Purwokerto.',
                'book_image' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1434783950l/25760487._SY475_.jpg'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK005',
                'publisher_id' => 'PB002',
                'title' => 'Laut Tengah',
                'author' => 'Berliana Kimberly',
                'year' => 2018,
                'synopsis' => 'Haia ingin melanjutkan S-2, tetapi beasiswanya ditutup pemerintah. Melihat Haia frustrasi beasiswa incarannya dicabut, Prof. Fatih menawarkan solusi agar dirinya menjadi istri kedua suami keponakannya yang bernama Aisa. Aisa juga menjanjikan untuk membiayai sekolah lagi jika memang dibutuhkan. Haia bahagia ketika tiba di Korea Selatan. Suaminya yang bernama Bhumi hanya mau memberi nafkah materi.  Haia menyembunyikan status istri kedua selama di Korea. Dia berhasil menggapai mimpi berkuliah di Korea Foreign University, bertemu teman-teman baru, dan merasakan kehangatan keluarga karena Aisa menganggapnya seperti adik kandung. Meskipun, di tengah-tengah bahagia itu ada sedikit halangan karena Haia harus bertemu dengan Tera yang sangat membencinya. Kehadiran Tera membulatkan tekad Haia untuk mendaftar beasiswa perusahaan keluarga Choi Haneul, teman kuliah laki-laki berkebangsaan Korea. Namun di sisi lain, Haia mengetahui Aisa mengidap kanker lambung kronis dan menginginkan ibu sambung sesuai pilihannya untuk putrinya yang bernama Suriah yang saat itu berusia 5 tahun. Satu musim kemudian, Aisa meninggal dunia. Empat puluh hari setelah wafatnya Aisa, Haia tetap kukuh bercerai karena beasiswa perusahaan sudah di tangan. Namun, keputusannya berubah karena semakin lama, dia juga semakin memiliki perasaan lebih kepada Bhumi. Begitu juga dengan Bhumi yang akhirnya dapat memenuhi permintaan Aisa untuk mencintai Haia dengan tulus.',
                'book_image' => 'https://filebroker-cdn.lazada.co.id/kf/S9c8012738a214268846665d1060ff5c7Z.jpg'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK006',
                'publisher_id' => 'PB004',
                'title' => 'Ayah',
                'author' => 'Andrea Hirata',
                'year' => 2015,
                'synopsis' => 'Novel “Ayah” yang ditulis oleh Andrea Hirata ini menceritakan tentang perjuangan seorang ayah yang sangat besar kepada anaknya dan kisah cinta yang menurut saya luar biasa belum pernah ditemukan sebelumnya. Kisah cinta seorang laki-laki (yang diperankan oleh Sabari) kepada teman satu sekolahnya ketika SMA yang merupakan anak kampung tetangganya (yang diperankan oleh Marlena). Sabari memiliki 3 sahabat yaitu Ukun, Tamat, dan Toharun yang selalu bersama dengan kekonyolannya. Sabari awalnya tidak tertarik dengan yang namanya cinta, tetapi setelah Marlena memberikan sebuah pensil sebagai hadiah karena Marlena mengambil kertas jawabannya, sejak itu Sabari berubah 180o dari biasanya. Sabari memang pandai berpuisi karena diwarisi dari ayahnya dan dia selalu membuatkan puisi cinta untuk Lena, tetapi Lena terus menolak dan bahkan menghinanya karena Sabari sama sekali bukan tipe laki-laki idaman Lena.',
                'book_image' => 'https://upload.wikimedia.org/wikipedia/id/f/f3/Ayah_%28novel%29.jpeg'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK007',
                'publisher_id' => 'PB005',
                'title' => 'Sang Keris',
                'author' => 'Panji Sukma',
                'year' => 2016,
                'synopsis' => 'Peradaban telah banyak berkisah tentang kekuasaan. Kekuasaan melahirkan para manusia pinilih, dan manusia pinilih selalu menggenggam sebuah pusaka. Inilah novel pemenang kedua sayembara menulis paling prestisius. Cerita sebuah keris sekaligus rentetan sejarah sebuah bangsa.',
                'book_image' => 'https://cf.shopee.co.id/file/216be338432a0b53231d15eeeceb76d6'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK008',
                'publisher_id' => 'PB004',
                'title' => 'Kisah Untuk Dinda',
                'author' => 'Erisca Febriani',
                'year' => 2020,
                'synopsis' => 'Geri dan Dinda sudah berpacaran selama 5 tahun. Namun, hal itu ternyata tidak menjamin sebuah hubungan akan bertahan. Geri sudah meraih mimpinya dengan menjadi produser sebuah perusahaan pengembang gim. Sementara Dinda, masih berjuang mencapai cita-citanya sebagai Make Up Artist. Geri ingin membantu, tetapi Dinda  menganggap Geri terlalu ikut campur. Ini adalah kisah tentang seorang laki-laki yang berusaha memperjuangkan cintanya dan seorang gadis yang berusaha meraih mimpinya.',
                'book_image' => 'https://cdn.storial.co/book_front/85703-54e2c8fdb77d64b455001062e77392b9257f8beb.jpeg'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK009',
                'publisher_id' => 'PB005',
                'title' => 'John Dies at the End by David Wong (2007)',
                'author' => 'Jeff Milo',
                'year' => 2007,
                'synopsis' => 'A rollercoaster of weird, sprung from a hallucinogenic (and possibly demonic) drug known as soy sauce and written in bracing, punchy style shooting swift sentences, often sliced to seven words or less, and stung with spicy diction detailing psychedelic imagery and delivered with sustained breathlessness. Something of a punk-rock-ified, video-game-esque tear and tumble into the Weird Tales tradition, Wong (a.k.a. humorist Jason Pargin, of Cracked.com), charismatically clusters together a hip and highly evocative narrative of monstrosities, with plenty of barbs any 17-year-old could snigger at… Think of it as the horror-heavier cousin to Ready Player One.',
                'book_image' => 'https://cdn.pastemagazine.com/www/articles/2018/08/08/john-dies.jpg'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK010',
                'publisher_id' => 'PB005',
                'title' => 'The Haunting of Hill House',
                'author' => 'Shirley Jackson',
                'year' => 1959,
                'synopsis' => 'A quirky researcher gathers together a bunch of strangers in a haunted house. They’re meant to record supernatural stirrings, but they’re soon swept away by the nightmarish sights and sounds in the house. Will anyone make it out alive?',
                'book_image' => 'https://www.rd.com/wp-content/uploads/2020/12/18haunting-of-hill-house-via-amazon.jpg?resize=768,768'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK011',
                'publisher_id' => 'PB004',
                'title' => 'IT',
                'author' => 'Stephen King',
                'year' => 1986,
                'synopsis' => 'It should come as no surprise that Stephen King shows up on this list of the top horror books more than once. He is, after all, the reigning king of terror. This novel taps into a pretty pervasive phobia: clowns. Pennywise, the killer clown, dwells in the sewers of Derry, Maine, and he preys upon the young residents of the town by shapeshifting into their deepest fears. The group of kids (the so-called Losers Club) must band together to defeat him.',
                'book_image' => 'https://www.rd.com/wp-content/uploads/2020/12/19it-via-amazon.jpg?resize=768,768'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK012',
                'publisher_id' => 'PB001',
                'title' => 'Land of Second Chances: The Impossible Rise of Rwanda’s Cycling Team',
                'author' => 'Tim Lewis',
                'year' => 2013,
                'synopsis' => 'If sport can be accused of providing neat story arcs (see intro!), or clear-cut heroes and villains, Lewis’s British Sports Book Award-winning exploration of the attempt – by a group of American former professional cyclists – to set up a cycling team in Rwanda a decade after the genocide there in which 1 million people were slaughtered, is as nuanced and fascinating as they come. Lewis, a contributing editor to Esquire, spent time in Rwanda with the would-be riders, including the talented Adrien Niyonshuti, who lost six brothers in the 1994 genocide, and also the professionals who helicopter in to set up the country’s first team, but who, in the case of coach Jock Boyer, turns out to have a dark past of his own.',
                'book_image' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/tim-lewis-land-of-second-chances-1641916813.jpeg?resize=640:*'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK013',
                'publisher_id' => 'PB002',
                'title' => 'Addicted',
                'author' => 'Tony Adams',
                'year' => 1998,
                'synopsis' => 'Adams was still a regular for Arsenal and England when his jaw-droppingly frank autobiography was published at the start of the 1998–99 season. His drinking problem destroyed him personally yet seemed to leave his football unaffected (wearing bin bags under training kit to sweat out the booze served him well). If any stories were left out, they must have been truly hideous. Here are remembrances of picking through jeans on the bedroom floor to find the least-piss-soaked pair to wear.',
                'book_image' => 'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1587460434-41S4NYE311L._SL500_.jpg?crop=1xw:1xh;center,top&resize=640%3A%2A'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK014',
                'publisher_id' => 'PB001',
                'title' => 'AKASHA : Oshi no Ko : Anak Idola 05',
                'author' => 'Aka Akasaka',
                'year' => 2008,
                'synopsis' => 'Di dunia hiburan ini, kebohongan adalah senjata." Si kembar Aqua dan Ruby sedang bergulat untuk meraih kesuksesan di dunia hiburan!! B-Komachi generasi baru, grup tempat Ruby bergabung, berhasil menyelesaikan pertunjukkan live perdana dan diharapkan berkiprah lebih jauh lagi. Sementara itu, pekerjaan Aqua yang berikutnya adalah bermain di "Drama Panggung 2,5 Dimenais"!! Akane Kurokawa yang jadi "pacar" Aqua lewat reality show percintaan dan Kana Arima yang memendam perasaan cinta terhadap Aqua juga akan tampil di pementasan drama panggung tersebut... Kelihatannya bakal timbul masalah!?',
                'book_image' => 'https://cdn.gramedia.com/uploads/items/OSHI_NI_KO_5.jpeg'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK015',
                'publisher_id' => 'PB005',
                'title' => 'Saat-Saat Jauh',
                'author' => 'Lia Seplia',
                'year' => 2010,
                'synopsis' => 'Aline dan Alex saling percaya bahwa mereka akan selalu bersama. Namun, keyakinan itu memudar seiring lebarnya jarak yang memisahkan mereka. Alex pergi ke Kota Terik demi mengejar kesempatan sebagai dokter yang sesuai standard keluarga besarnya. Aline mempertahankan ambisi untuk mengurus Panti Jompo J&J di Kota Teduh. Saat mendapatkan promosi, Alex mengajak Aline untuk menikah dan pindah ke Kota Terik. Aline menolak. Sejak awal, gadis itu sudah menegaskan tak akan meninggalkan panti. Mimpi-mimpi mereka tidak lagi bertemu di satu tujuan. Setelah empat tahun menjalani hubungan jarak jauh, mereka berpisah. Mereka pun berusaha menjalin kehidupan baru bersama orang lain. Alex merasa Vanesa jawaban dari kemapanan yang ia perjuangkan. Sementara Aline merasa Rama akan mengerti keterikatan batinnya dengan panti. Tiba-tiba Aline dan Alex harus bertemu kembali. Meski berhadap-hadapan, jarak antara mereka terasa tak kunjung menyempit.',
                'book_image' => 'https://cdn.gramedia.com/uploads/items/Saat_Saat_Jauh_cov.jpg'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK016',
                'publisher_id' => 'PB002',
                'title' => 'The Architecture Of Love',
                'author' => 'Ika Natassa',
                'year' => 2003,
                'synopsis' => 'New York, the city that never sleeps. Seperti istilahnya itu, New York juga menjadi kota dimana orang-orang mencoba untuk tidak henti-hentinya berjuang. Raia adalah salah satu dari mereka yang mempertaruhkan masa depannya di New York. Kota Big Apple itu bak labuan hatinya untuk keluar dari kebuntuan inspirasi setelah bercerai.',
                'book_image' => 'https://cdn.gramedia.com/uploads/items/9786020329260_the_architecture_of_love_3.jpg'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK017',
                'publisher_id' => 'PB003',
                'title' => '24 Jam Bersama Gaspar',
                'author' => 'Sabda Armandio',
                'year' => 2005,
                'synopsis' => 'Seorang pemuda bernama Gaspar bersama motornya yang menganggap dirinya detektif, namun memiliki rencana untuk merampok sebuah toko emas dan mengincar sebuah kotak hitam dalam toko tersebut. Untuk menjalankan rencana itu, ia merekrut lima orang temannya. Sayangnya, dari semua temannya tak ada yang tahu apa tujuan Gaspar sebenarnya',
                'book_image' => 'http://djatinangor.com/wp-content/uploads/2017/11/Gaspar-front.jpg'
            ]);
        DB::table('books') -> insert(
            [
                'book_id' => 'BK018',
                'publisher_id' => 'PB004',
                'title' => 'Tiga Sandera Terakhir',
                'author' => 'Brahmanto Anindito',
                'year' => 2020,
                'synopsis' => 'Dimulai dengan kisah penyanderaan brutal terjadi di sebuah desa di Papua. Korbannya lima orang—warga negara Indonesia, Australia, dan Perancis. Semua telunjuk segera mengarah ke OPM, Organisasi Papua Merdeka. Namun, OPM sendiri menyangkal dan menegaskan bahwa pihaknya sudah lama tidak menggunakan cara-cara ekstrem seperti itu.',
                'book_image' => 'https://upload.wikimedia.org/wikipedia/id/5/5d/Sampul_Tiga_Sandera_Terakhir.jpg'
            ]);
    }
}
