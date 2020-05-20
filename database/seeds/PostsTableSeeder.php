<?php

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name' => 'Berita'
        ]);

        $category2 = Category::create([
            'name' => 'Tips dan Trick'
        ]);

        $category3 = Category::create([
            'name' => 'Review'
        ]);

        $tag1 = Tag::create([
            'name' => 'brompton'
        ]);

        $tag2 = Tag::create([
            'name' => 'aplikasi'
        ]);

        $tag3 = Tag::create([
            'name' => 'polygon'
        ]);

        $author1 = App\User::create([
            'name' => 'Alvi Adnan',
            'email' => 'alvi@gmail.com',
            'password' => Hash::make('password')

        ]);

        $author2 = App\User::create([
            'name' => 'Muhammad Rezzha ',
            'email' => 'rezzha@gmail.com',
            'password' => Hash::make('password')

        ]);

        $post1 = $author2->posts()->create ([
            'title' => 'Sepeda gunung yang dipakai juara dunia',
            'description' => 'Sepeda World Champion adalah acuan terbaik untuk mendapatkan informasi sepeda terbaik, tercepat, dan terkuat',
            'content' => 'Sepeda World Champion adalah acuan terbaik untuk mendapatkan informasi sepeda terbaik, tercepat, dan terkuat. Mereka sudah mempunyai team mekanik khusus yang merancang dan memodifikasi sebuah sepeda untuk menjadi yang tercepat. Tidak semua pembalap pro memakai teknologi yang terbaru, walaupun biasanya pesepeda pro ini sering mendapat keistimewaaan untuk memakai barang yang belum diproduksi.',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg'
        ]);

        $post2 = $author1->posts()->create ([
            'title' => 'Line up dan produk sepeda terbaru tahun 2020',
            'description' => 'Apa saja produk sepeda terbaru di tahun 2020? Jenis sepeda apa yang akan menjadi tren di tahun 2020?',
            'content' => 'Walaupun produk sepeda lokal tidak seheboh produk sepeda luar dalam menyambut pergantian tahun, tetapi saya akan coba untuk merangkum produk-produk andalan dari beberapa pabrikan sepeda lokal untuk tahun 2020 nanti. Kalau untuk merk luar, sejak beberapa bulan sebelum produk banyak yang sudah memberikan produk lengkap untuk 2020 dengan sangat detail, yang bisa kita lihat pada katalog produk mereka, seperti Giant, Lapierre, Cannondale, Merida, dll',
            'category_id' => $category2->id,
            'image' => 'posts/2.jpg'
        ]);

        $post3 = $author1->posts()->create ([
            'title' => 'Sepeda Lipat Listrik Brompton',
            'description' => 'Sepeda lipat dan sepeda listrik adalah varian sepeda yang memudahkan hidup, masing-masing memiliki kelebihannya sendiri. Tetapi bagaimana kalau kelebihan dari sepeda lipat dan sepeda litrik itu ada pada satu sepeda, sepeda apa lagi bisa lebih dari itu?',
            'content' => 'Sepeda lipat enak dipakai karena simple, ringan, mudah dibawa-bawa, mudah disimpan, dan praktis. Sepeda listrik memudahkan untuk bersepeda tanpa perlu mengeluarkan banyak tenaga. Bersepeda memang olahraga, tetapi ada juga saatnya kita hanya perlu menikmati sensasinya, dan kondisi tidak memungkinkan untuk mengeluarkan banyak tenaga. Tidak perlu lama untuk menunggu sepeda lipat dengan motor listrik, atau sepeda listrik yang bisa dilipat.',
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg'
        ]);

        $post4 = $author2->posts()->create ([
            'title' => 'Daftar Harga Sepeda Anak Murah 2020',
            'description' => 'Memilih sepeda anak yang cocok tidak hanya sekedar karena faktor harga dan merk sepeda. Ada banyak pilihan sepeda anak, seperti sepeda roda tiga, roda empat, sepeda anak perempuan, dan lainnya, mana yang paling cocok?',
            'content' => 'Agar anak mau dan bersemangat untuk bersepeda, anak harus merasa nyaman dan senang ketika bersepeda. Kita harus memilih ukuran yang sesuai, dan jenis yang cocok sesuai dengan ukuran tubuh dan umur anak. Ukuran sepeda yang terlalu besar atau terlalu kecil akan membuat anak tidak nyaman, bisa membuat anak malas untuk belajar bersepeda atau bermain sepeda barunya.',
            'category_id' => $category3->id,
            'image' => 'posts/4.jpg'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag3->id]);
        $post3->tags()->attach([$tag1->id, $tag3->id]);
        $post4->tags()->attach([$tag1->id, $tag3->id]);
    }
}
