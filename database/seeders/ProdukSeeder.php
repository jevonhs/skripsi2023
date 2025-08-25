<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
        	'nama_produk' => 'DOG FOOD SUPER PREMIUM NUTRISOURCE PUPPY LARGE BREED',
            'category_id' => '1',
            'gambar' => 'Makanan 1.jpg',
            'harga' => '415000',
            'stok' => '50',
            'type' => 'anjing',
            'usia' => 'puppy',
            'alergi'=> 'tidak_ada',
            'breed' => 'large',
            'aktivitas' => 'aktif',
            'deskripsi' => 'Crude Protein (Min.) 26.0%
            Crude Fat (Min.) 14.0%
            Crude Fiber (Max.) 4.0%
            Moisture (Max.) 10.0%'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'DOG FOOD SUPER PREMIUM NUTRISOURCE ADULT LARGE BREED',
            'category_id' => '1',
            'gambar' => 'Makanan 2.jpg',
            'harga' => '665000',
            'stok' => '50',
            'type' => 'anjing',
            'usia' => 'adult',
            'alergi'=> 'tidak_ada',
            'breed' => 'large',
            'aktivitas' => 'aktif',
            'deskripsi' => 'Crude Protein (Min.) 23.0%
            Crude Fat (Min.) 14.0%
            Crude Fiber (Max.) 4.0%
            Moisture (Max.) 10.0%
            8kg Rp. 425.000/zak
            15kg Rp. 715.000/zak'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'CAT FOOD KITTEN SAVVY OCEAN FISH 800G',
            'category_id' => '1',
            'gambar' => 'Makanan 8.jpg',
            'harga' => '18000',
            'stok' => '20',
            'type' => 'kucing',
            'usia' => 'puppy',
            'alergi'=> 'tidak_ada',
            'breed' => 'medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            ANALISIS TERJAMIN untuk KITTEN :
            Crude protein: min 22.0%
            Crude fat: min 8.0%
            Crude fiber : max 6.0%
            Moisture: max 10.0%'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'CAT FOOD TASTY MIX WHISKAS POUCH 85G MAKANAN KUCING BASAH SACHET / CAT WET FOOD - Seafood Seaweed',
            'category_id' => '1',
            'gambar' => 'Makanan Kucing 1.jpg',
            'harga' => '6750',
            'stok' => '20',
            'type' => 'kucing',
            'usia' => 'adult,mature',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            ANALISIS TERJAMIN untuk KITTEN :
            Crude protein: min 22.0%
            Crude fat: min 8.0%
            Crude fiber : max 6.0%
            Moisture: max 10.0%'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'HARNESS Y & LEASH',
            'category_id' => '2',
            'gambar' => 'Aksesoris 1.jpg',
            'harga' => '15000',
            'stok' => '30',
            'type' => 'kucing',
            'breed' => 'large',
            'deskripsi' => 'Bahan nylon polos 1cm bisa untuk kucing, musang, kelinci, puppy, small breed
            Panjang/lingkar harness s/d 40cm (bisa disetel)
            Panjang leash 120cm'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'HARNESS H & LEASH',
            'category_id' => '2',
            'gambar' => 'Aksesoris 3.jpg',
            'harga' => '15000',
            'stok' => '20',
            'type' => 'anjing,kucing',
            'breed' => 'small',
            'deskripsi' => 'Bahan nylon polos 1cm bisa untuk kucing, musang, kelinci, puppy, small breed
            Panjang/lingkar harness s/d 40cm (bisa disetel)
            Panjang leash 120cm
            Harga Rp. 15rb/set'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'CAT FOOD TASTY MIX WHISKAS POUCH 85G MAKANAN KUCING BASAH SACHET / CAT WET FOOD - Tuna Kanikama',
            'category_id' => '1',
            'gambar' => 'Makanan Kucing 2.jpg',
            'harga' => '6750',
            'stok' => '20',
            'type' => 'kucing',
            'usia' => 'adult,mature',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            Terbuat dari ikan asli , ayam & sayuran dalam saus.
            Dengan 41 nutrisi penting untuk meningkatkan kesehatan & energi.
            100% nutrisi lengkap dan seimbang.
            Kaya akan OMEGA 6 untuk bulu yang sehat.
        ' ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'DOG FOOD SUPER PREMIUM NUTRISOURCE LAMB',
            'category_id' => '1',
            'gambar' => 'Makanan 3.jpg',
            'harga' => '425000',
            'stok' => '20',
            'type' => 'anjing',
            'usia' => 'adult,',
            'alergi'=> 'tidak_ada',
            'breed' => 'large',
            'aktivitas' => 'aktif',
            'deskripsi' => 'Crude Protein (Min.) 22.0%
            Crude Fat (Min.) 13.0%
            Crude Fiber (Max.) 6.0%
            Moisture (Max.) 10.0%'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'DOG FOOD SUPER PREMIUM NUTRISOURCE PUPPY SMALL & MEDIUM',
            'category_id' => '1',
            'gambar' => 'Makanan 4.jpg',
            'harga' => '450000',
            'stok' => '25',
            'type' => 'anjing',
            'usia' => 'puppy',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium',
            'aktivitas' => 'aktif',
            'deskripsi' => 'Crude Protein (Min.) 32.0%
            Crude Fat (Min.) 21.0%
            Crude Fiber (Max.) 5.0%
            Moisture (Max.) 10.0%
            Kemasan :
            - 8,16 kg Rp. 450.000
            - 14,9 kg Rp. 760.000'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'DOG FOOD SUPER PREMIUM NUTRISOURCE ADULT LARGE BREED',
            'category_id' => '1',
            'gambar' => 'Makanan 5.jpg',
            'harga' => '665000',
            'stok' => '25',
            'type' => 'anjing',
            'usia' => 'adult',
            'alergi'=> 'tidak_ada',
            'breed' => 'large',
            'aktivitas' => 'aktif',
            'deskripsi' => 'Crude Protein (Min.) 23.0%
            Crude Fat (Min.) 14.0%
            Crude Fiber (Max.) 4.0%
            Moisture (Max.) 10.0%
            Kemasan :
            15kg Rp. 665.000/zak'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'DOG FOOD SUPER PREMIUM NUTRISOURCE ADULT PERFORMANCE',
            'category_id' => '1',
            'gambar' => 'Makanan 6.jpg',
            'harga' => '865000',
            'stok' => '25',
            'type' => 'anjing',
            'usia' => 'adult',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium,large,giant',
            'aktivitas' => 'hiperaktif',
            'deskripsi' => 'Crude Protein (Min.) 30.0%
            Crude Fat (Min.) 20.0%
            Crude Fiber (Max.) 4.0%
            Moisture (Max.) 10.0%
            Kemasan :
            18kg Rp. 865.000/zak'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'DOG FOOD NUTRISOURCE LAMB & RICE',
            'category_id' => '1',
            'gambar' => 'Makanan 7.jpg',
            'harga' => '900000',
            'stok' => '25',
            'type' => 'anjing',
            'usia' => 'puppy,adult,mature',
            'alergi'=> 'ayam',
            'breed' => 'small,medium',
            'aktivitas' => 'aktif',
            'deskripsi' => 'NutriSource Lamb Meal & Rice Formula memberikan nutrisi super premium dalam makanan yang diformulasikan secara ilmiah dan mudah dicerna. NutriSource menggunakan bahan berkualitas terbaik termasuk daging domba sebagai sumber utama protein dan beras berkualitas tinggi sebagai bahan utama sereal karbohidrat. NutriSource Lamb Meal & Rice Formula tidak mengandung jagung, gandum atau kedelai. Protein dan karbohidrat spesifik dipilih karena mudah dicerna.

            ANALISIS TERJAMIN :
            Crude Protein (Min.) 22.0%
            Crude Fat (Min.) 13.0%
            Crude Fiber (Max.) 6.0%
            Moisture (Max.) 10.0%'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'CAT FOOD TASTY MIX WHISKAS POUCH 85G MAKANAN KUCING BASAH SACHET / CAT WET FOOD - Chicken Tuna',
            'category_id' => '1',
            'gambar' => 'Makanan Kucing 3.jpg',
            'harga' => '6750',
            'stok' => '20',
            'type' => 'kucing',
            'usia' => 'adult,mature',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            Terbuat dari ikan asli , ayam & sayuran dalam saus.
            Dengan 41 nutrisi penting untuk meningkatkan kesehatan & energi.
            100% nutrisi lengkap dan seimbang.
            Kaya akan OMEGA 6 untuk bulu yang sehat.
        ']);

        DB::table('produks')->insert([
        	'nama_produk' => 'CAT FOOD TASTY MIX WHISKAS POUCH 85G MAKANAN KUCING BASAH SACHET / CAT WET FOOD - OceanFish',
            'category_id' => '1',
            'gambar' => 'Makanan Kucing 4.jpg',
            'harga' => '6750',
            'stok' => '20',
            'type' => 'kucing',
            'usia' => 'adult,mature',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            Spesifik diformulasikan untuk kucing usia 1 tahun keatas
            Mengandung Omega 3 & 6 , serta Zinc untuk kesehatan kulit dan bulu yang indah.
            Mengandung Vit.A dan taurine untuk kesehatan matanya
            Mengandung protein dari ikan yang segar, lemak yang baik, vitamin dan mineral yang seimbang, untuk tetap menjaga kucingmu aktif dan bahagia.
            Mengandung Antioksidan (Vit E dan Selenium )  untuk kesehatan sistem immunnya. 
        ']);

        DB::table('produks')->insert([
        	'nama_produk' => 'CAT FOOD TASTY MIX WHISKAS POUCH 85G MAKANAN KUCING BASAH SACHET / CAT WET FOOD - GrilledSaba',
            'category_id' => '1',
            'gambar' => 'Makanan Kucing 5.jpg',
            'harga' => '6750',
            'stok' => '20',
            'type' => 'kucing',
            'usia' => 'adult,mature',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            Spesifik diformulasikan untuk kucing usia 1 tahun keatas
            Mengandung Omega 3 & 6 , serta Zinc untuk kesehatan kulit dan bulu yang indah.
            Mengandung Vit.A dan taurine untuk kesehatan matanya
            Mengandung protein dari ikan yang segar, lemak yang baik, vitamin dan mineral yang seimbang, untuk tetap menjaga kucingmu aktif dan bahagia.
            Mengandung Antioksidan (Vit E dan Selenium )  untuk kesehatan sistem immunnya
        ']);

        DB::table('produks')->insert([
        	'nama_produk' => 'CAT FOOD TASTY MIX WHISKAS POUCH 85G MAKANAN KUCING BASAH SACHET / CAT WET FOOD - Junior Tuna',
            'category_id' => '1',
            'gambar' => 'Makanan Kucing 6.jpg',
            'harga' => '6750',
            'stok' => '22',
            'type' => 'kucing',
            'usia' => 'puppy',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            Secara spesifik Whiskas junior tuna ini diformulasikan untuk anak kucing usia 2-12 bulan serta juga baik untuk Ibu kucing yang sedang hamil dan menyusui.
            Diperkaya dengan kandungan kalsium, fossor, dan Vitamin D untuk kesehatan tulang dan pertumbuhannya
            Mengandung antioksidan alami untuk menunjang kesehatan sistem imunnya.
            Tekstur yang lembut dan lunak untuk mudah di kunyah.
        ']);

        DB::table('produks')->insert([
        	'nama_produk' => 'CAT FOOD TASTY MIX WHISKAS POUCH 85G MAKANAN KUCING BASAH SACHET / CAT WET FOOD - Junior Mackerel',
            'category_id' => '1',
            'gambar' => 'Makanan Kucing 7.jpg',
            'harga' => '6750',
            'stok' => '22',
            'type' => 'kucing',
            'usia' => 'puppy',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            Secara spesifik Whiskas junior tuna ini diformulasikan untuk anak kucing usia 2-12 bulan serta juga baik untuk Ibu kucing yang sedang hamil dan menyusui.
            Diperkaya dengan kandungan kalsium, fossor, dan Vitamin D untuk kesehatan tulang dan pertumbuhannya
            Mengandung antioksidan alami untuk menunjang kesehatan sistem imunnya.
            Tekstur yang lembut dan lunak untuk mudah di kunyah.
        ']);

        DB::table('produks')->insert([
        	'nama_produk' => 'PET CARGO SERI P',
            'category_id' => '2',
            'gambar' => 'Aksesoris 2.jpg',
            'harga' => '600000',
            'stok' => '20',
            'type' => 'anjing',
            'breed' => 'large',
            'deskripsi' => 'Bahan plastik tebal, mudah bongkar pasangnya, warna tergantung ketersediaan barang
            Ukuran :
            P3 uk 66,0 X 47,0 x 45,8 cm Rp. 600.000
            P4 uk 81,2 X 57,5 x 60,6 cm Rp. 1.000.000
            P5 uk 90,7 X 63,5 X 68,6 cm Rp. 1.800.000
            warna pet cargo tergantung ketersediaan stock'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'COLLAR KRINCING & LEASH',
            'category_id' => '2',
            'gambar' => 'Aksesoris 4.jpg',
            'harga' => '10000',
            'stok' => '20',
            'type' => 'anjing,kucing',
            'breed' => 'small',
            'deskripsi' => 'Bahan nylon polos 1cm (bisa untuk anjing trah mini/small, kucing, kelinci, musang dll)
            Collar krincing Rp. 10rb/pcs (free leash 120cm)
            Collar krincing karakter Rp. 15rb/pcs (free leash 120cm)'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'SLICKER BRUSH',
            'category_id' => '2',
            'gambar' => 'Aksesoris 5.jpg',
            'harga' => '25000',
            'stok' => '20',
            'type' => 'anjing',
            'breed' => 'small,medium',
            'deskripsi' => 'digunakan untuk menuntaskan bulu kusut, dan juga untuk mencabut bulu yang mati dan dengan lembut menstimulasi kulit, membuang kulit mati dan menghasilkan sirkulasi yang sehat

            Slicker Brush kode NG9501-2
            Untuk anjing medium breed
            Ukuran : P x L 11 x 5 cm'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'RING CHAIN COLLAR + LEASH NYLON',
            'category_id' => '2',
            'gambar' => 'Aksesoris Ring Chain.jpg',
            'harga' => '52000',
            'stok' => '20',
            'type' => 'anjing',
            'breed' => 'small,medium,large',
            'deskripsi' => 'RING CHAIN COLLAR + NYLON LEASH
            Bisa untuk anjing small breed - Large Breed
            Tersedia dalam 3 ukuran SMALL, MEDIUM, LARGE
            UKURAN COLLAR SMALL:
            - Lebar : 1.5 cm
            - Panjang/lingkar : 18 - 39 cm (bisa disetel)
            - Panjang Leash : 120 cm

            UKURAN COLLAR MEDIUM:
            - Lebar : 2 cm
            - Panjang/lingkar : 32 - 55 cm (bisa disetel)
            - Panjang Leash : 120 cm

            UKURAN COLLAR LARGE:
            - Lebar : 2.5 cm
            - Panjang/lingkar : 35 - 60 cm (bisa disetel)
            - Panjang Leash : 120 cm'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'KALUNG KERINCING BEL KUCING',
            'category_id' => '2',
            'gambar' => 'Aksesoris Kalung Kerincing Bel.jpg',
            'harga' => '6000',
            'stok' => '20',
            'type' => 'anjing,kucing',
            'breed' => 'small',
            'deskripsi' => 'Collar kerincing bel lebar 1cm - BISA CAMPUR WARNA
            Bisa dipakai untuk anjing small breed / puppy, kucing, kelinci, musang dll
            Lingkar leher : 17 - 31 cm
            Krincing bel : ukuran 16mm bahan Nikel
            tali : bahan nikel anti karat'
        ]);

        DB::table('produks')->insert([
        	'nama_produk' => 'DOGFOOD OPTIMA LAMB',
            'category_id' => '1',
            'gambar' => 'DOGFOOD OPTIMA LAMB Adult.jpg',
            'harga' => '665000',
            'stok' => '10',
            'type' => 'anjing',
            'usia' => 'adult,mature',
            'alergi'=> 'ayam',
            'breed' => 'small,medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            KEMASAN BARU... ISI TETAP SAMA
            Dog food dengan harga ekonomis dan sangat disukai anjing. Aman dikulit , membuat bulu mengkilat dan tidak mudah rontok.
            Kandungan :
            - Crude Protein (min) 25%,
            - Crute Fat (min) 18%.
        ']);

        DB::table('produks')->insert([
        	'nama_produk' => 'DOGFOOD OPTIMA LAMB',
            'category_id' => '1',
            'gambar' => 'DOGFOOD OPTIMA LAMB Puppy.jpg',
            'harga' => '690000',
            'stok' => '10',
            'type' => 'anjing',
            'usia' => 'puppy',
            'alergi'=> 'ayam',
            'breed' => 'small,medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            Dog food dengan harga ekonomis dan sangat disukai anjing. Aman dikulit , membuat bulu mengkilat dan tidak mudah rontok.
            Kandungan :
            - Crude Protein (min) 28%,
            - Crute Fat (min) 18%.
        ']);

        DB::table('produks')->insert([
        	'nama_produk' => 'DOGFOOD OPTIMA BEEF',
            'category_id' => '1',
            'gambar' => 'DOGFOOD OPTIMA BEEF Adult.jpg',
            'harga' => '625000',
            'stok' => '10',
            'type' => 'anjing',
            'usia' => 'adult,mature',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            Dog food dengan harga ekonomis dan sangat disukai anjing. Aman dikulit , membuat bulu mengkilat dan tidak mudah rontok.
            Kandungan :
            - Crude Protein (min) 28%,
            - Crute Fat (min) 18%.
        ']);

        DB::table('produks')->insert([
        	'nama_produk' => 'DOG FOOD HOLISTIC PRO PAC LAMB & BROWN RICE 12KG',
            'category_id' => '1',
            'gambar' => 'DOG FOOD HOLISTIC PRO PAC LAMB & BROWN RICE.jpg',
            'harga' => '1190000',
            'stok' => '5',
            'type' => 'anjing',
            'usia' => 'puppy,adult,mature',
            'alergi'=> 'ayam',
            'breed' => 'small,medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            HOLISTIC DOG FOOD
            VET APPROVED
            4 STARS (www.dogfoodadvisor.com)
            PROTEIN 22% - FAT 12%

            PRO PAC Ultimate - Lamb & Brown Rice Formula adalah dogfood Holistic dengan nutrisi super premium.
            Diformulasikan dengan bahan sederhana dan bergizi dari daging domba (> 20%), padi-padian utuh (16%), & buah & sayuran (> 12%)
            PRO PAC Ultimate - Lamb & Brown Rice Formula memberikan nutrisi lengkap & diet seimbang. Tidak menggunakan pewarna buatan, rasa, atau pengawet. Warna bervariasi secara alami.
            PRO PAC Ultimate - Lamb & Brown Rice Formula memenuhi level nutrisi yang ditetapkan oleh Association of American Feed Control Officials (AAFCO) sebagai makanan Anjing untuk semua tahapan kehidupan

            KOMPOSISI :
            Lamb Meal, Brown Rice, White Rice, Peas, Rice Bran, Whitefish Meal, Canola Oil (Preserved with Mixed Tocopherols), Beet Pulp, Flaxseed, Egg, Apples, Blueberries, Carrots, Spinach, Blueberry Fiber, Cranberry Fiber, DL-Methionine, L-Lysine, Taurine, Yucca, L-Carnitine, Beta-Carotene, Vitamins, Minerals.

            ANALYTICAL CONSTITUENTS:
            Protein 22%, Fat 12%, Ash 9,3%, Fiber 5,5%, Moisture 10%, Sodium 0,4%, Calcium 1,7%, Phosphorus 1,2%. Kilocalories/kg: 3.340

            ADDITIVES (per kg):
            Nutritional Additives: Vitamin A 13.800 IU/kg, Vitamin D3 850 IU/kg, Vitamin C 35 mg/kg, Vitamin E (-tocopherol) 100 IU/kg, Copper (copper sulfate) 16,5 mg/kg, Omega-6 >2,25%, Omega-3 >1 %, Methionine 0,6 mg/kg, Lysine 1,4 mg/kg, Taurine 0,06%, L-Carnitine 10 mg/kg, Beta-Carotene 3 mg/kg.

            PEMBERIAN PAKAN HARIAN BERDASARKAN BERAT (GRAM/HARI) :
            1 - 5 kg : 25 - 70g
            5 - 10 kg : 70 - 115g
            10 - 15 kg : 115 - 150g
            15 - 20 kg : 150 - 180g
            20 - 25 kg : 180 - 210g
            25 - 35 kg : 210 - 265g
            35 - 45 kg : 265 - 310g
            45 - 55 kg : 310 - 355g
            55 - 65 kg : 355 - 400g
            65 - 80 kg : 400 - 460g
        ']);

        DB::table('produks')->insert([
        	'nama_produk' => 'DOG FOOD HOLISTIC PRO PAC CHICKEN & BROWN RICE 12KG',
            'category_id' => '1',
            'gambar' => 'DOG FOOD HOLISTIC PRO PAC CHICKEN & BROWN RICE.jpeg',
            'harga' => '1135000',
            'stok' => '5',
            'type' => 'anjing',
            'usia' => 'puppy,adult,mature',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            HOLISTIC DOG FOOD
            DAGING AYAM PILIHAN, BUKAN POULTRY (KELOMPOK UNGGAS)
            LEMAK AYAM, BUKAN ANIMAL FAT (SEMBARANG LEMAK HEWAN)
            BERAS MERAH, BUKAN CAMPURAN JAGUNG, GANDUM DLL
            VET APPROVED
            4 STARS (www.dogfoodadvisor.com)
            PROTEIN 26% - FAT 15%
            BERIKAN SESUAI TAKARAN DAN NIKMATI HEMATNYA PEMAKAIAN PRO PAC TANPA TAKUT KEKURANGAN NUTRISI
            
            PRO PAC Ultimate - Chicken & Brown Rice Formula adalah dogfood Holistic dengan nutrisi super premium.
            Diformulasikan dengan bahan sederhana dan bergizi dari ayam (> 20%), padi-padian utuh (16%), & buah & sayuran (> 12%)
            PRO PAC Ultimate - Lamb & Brown Rice Formula memberikan nutrisi lengkap & diet seimbang. Tidak menggunakan pewarna buatan, rasa, atau pengawet. Warna bervariasi secara alami.
            PRO PAC Ultimate - Chicken & Brown Rice Formula memenuhi level nutrisi yang ditetapkan oleh Association of American Feed Control Officials (AAFCO) sebagai makanan Anjing untuk semua tahapan kehidupan
        ']);

        DB::table('produks')->insert([
        	'nama_produk' => 'PRO PLAN Dog Adult 7+ Bright Mind Small & Mini Chicken',
            'category_id' => '1',
            'gambar' => 'PRO PLAN Dog Adult Small.jpg',
            'harga' => '200000',
            'stok' => '25',
            'type' => 'anjing',
            'usia' => 'adult,mature',
            'alergi'=> 'tidak_ada',
            'breed' => 'small',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            Manfaat:
            Pro Plan Dog Adult 7+ Bright Mind Small & Mini Chicken merupakan terobosan nutrisi terbaru untuk anjing berukuran kecil dan mini yang memasuki masa tua di umur 7 tahun ke atas. Diformulasikan khusus untuk mencegah tanda-tanda penuaan yang tidak selalu terlihat pada anjing senior. BRIGHT MIND diformulasikan secara khusus dengan minyak botani yang kaya akan MCT (Medium Chain Triglycerides). Minyak MCT dapat digunakan dengan sangat baik sebagai energi tambahan otak anjing, dan terbukti dapat meningkatkan kesadaran dan daya ingat dalam 30 hari pemakaian.

            Komposisi Nutrisi:
            Protein 30%
            Lemak 15%
            Serat (maks) 5,5%
            Garam (maks) 1,8%
            Abu (maks) 8,5%
            Kadar air (maks) 12%
            Kalsium (Min) 0,90%
            Fosfor(p)(Min) 0,80%
            Klorin (min) 0,50%
            Lysin (min) 1,00%
            Glukosamin (min) 400mg/kg
            Vit A (Min) 10,000UI/Kg
            Vit C (Min) 70mg/kg
            Vit E (Min) 460 IU/Kg
            Vit D (min0 1.000 IU/Kg
            Asam Lemak Omega 3 (min) 0,2%
            Asam lemak omega 6 (min) 1,5%
            Energi Metabolis (Me) 3,57 kcal/g
        ']);

        DB::table('produks')->insert([
        	'nama_produk' => 'PRO PLAN Dog Adult 7+ Bright Mind Medium & Large Chicken',
            'category_id' => '1',
            'gambar' => 'PRO PLAN Dog Adult-mature medium large.jpg',
            'harga' => '200000',
            'stok' => '25',
            'type' => 'anjing',
            'usia' => 'adult,mature',
            'alergi'=> 'tidak_ada',
            'breed' => 'medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            Manfaat:
            Pro Plan Dog Adult 7+ Bright Mind Medium & Large Chicken merupakan terobosan nutrisi terbaru untuk anjing berukuran sedang dan besar yang memasuki masa tua di umur 7 tahun ke atas. Diformulasikan khusus untuk mencegah tanda-tanda penuaan yang tidak selalu terlihat pada anjing senior. BRIGHT MIND diformulasikan secara khusus dengan minyak botani yang kaya akan MCT (Medium Chain Triglycerides). Minyak MCT dapat digunakan dengan sangat baik sebagai energi tambahan otak anjing, dan terbukti dapat meningkatkan kesadaran dan daya ingat dalam 30 hari pemakaian.

            Komposisi Nutrisi:
            Protein 29%
            Lemak 14%
            Serat (maks) 5,5%
            Garam (maks) 1,8%
            Abu (maks) 8,5%
            Kadar air (maks) 12%
            Kalsium (Min) 0,90%
            Fosfor(p)(Min) 0,80%
            Klorin (min) 0,50%
            Lysin (min) 1,00%
            Glukosamin (min) 400mg/kg
            Vit A (Min) 10,000UI/Kg
            Vit C (Min) 70mg/kg
            Vit E (Min) 460 IU/Kg
            Vit D (min0 1.000 IU/Kg
            Asam Lemak Omega 3 (min) 0,2%
            Asam lemak omega 6 (min) 1,5%
            Energi Metabolis (Me) 3,67 kcal/g
        ']);

        DB::table('produks')->insert([
        	'nama_produk' => 'PRO PLAN Dog Adult Sensitive Skin & Coat Medium & Large Salmon',
            'category_id' => '1',
            'gambar' => 'PRO PLAN Dog Adult Medium Large.jpg',
            'harga' => '200000',
            'stok' => '25',
            'type' => 'anjing',
            'usia' => 'adult',
            'alergi'=> 'tidak_ada',
            'breed' => 'medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            Manfaat:
            PRO PLAN Dog Adult Sensitive Skin & Coat Medium & Large Salmon merupakan nutrisi untuk anjing dewasa ukuran sedang & besar yang memiliki kulit sensitif. Formulasi OPTI DERMA mengandung paduan gizi khusus untuk kulit, seperti asam amino dan asam lemak esensial serta multivitamin yang terbukti menjaga lesehatan kulit dan keindahan rambut

            Komposisi Nutrisi:
            Protein 27%
            Lemak 15%
            Serat (maks) 5,5%
            Garam (maks) 1,8%
            Abu (maks) 8,5%
            Kadar air (maks) 12,0%
            Zinc (Min) 100mg/g
            Vit B2 (min) 10 mg/kg
            Vit B6 (min) 10mg/kg
            Vit E (min) 400 IU/kg
            Kalsium (min) 0,9%
            Fosforus(Min) 0,8%
            Cl (min) 0,5%
            Lysin (min) 1,0%
            Metionin (max) 0,35%
            Asam Lemak Omega 3 (min) 0,8%
            Asam lemak omega 6 (min) 1,8%
            Energi Metabolis (Me) 3,58 kcal/g
        ']);
        
        DB::table('produks')->insert([
            'nama_produk' => 'DOG FOOD - Acana Adult Small Breed 6 Kg',
            'category_id' => '1',
            'gambar' => 'Acana Adult Small Breed.jpg',
            'harga' => '1195000',
            'stok' => '5',
            'type' => 'anjing',
            'usia' => 'adult',
            'alergi'=> 'tidak_ada',
            'breed' => 'small',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            100% Grain-free dan gluten-free
            Terbuat dari 60%* bahan hewani berkualitas dan kaya protein
            diformulasikan khusus untuk menjaga berat badan anjing
            Meningkatkan imunitas dan kesehatan anjing secara alami
            Membantu melindungi sistem pencernaan anjing

            Ingredients : Fresh chicken meat (12%), chicken meal (12%), turkey meal (12%), red lentils, 	whole green peas, field beans, chicken fat (5%), fresh chicken giblets (liver, heart, 	kidney) (4%), herring meal (4%), cage-free eggs (4%), fresh whole flounder (4%), herring oil 	(2%), sun-cured alfalfa (2%), green lentils (2%), whole yellow peas, pea fibre, fresh 	chicken cartilage (1%), dried brown kelp, fresh whole pumpkin, fresh whole butternut squash, 	fresh whole parsnips, fresh kale, fresh spinach, fresh mustard greens, fresh turnip greens, 	fresh whole carrots, fresh Red Delicious apples, fresh Bartlett pears, freeze-dried chicken 	liver, freeze-dried turkey liver, fresh whole cranberries, fresh whole blueberries, chicory 	root, turmeric, milk thistle, burdock root, lavender, marshmallow root, rose hips      
        ']);

        DB::table('produks')->insert([
            'nama_produk' => 'DOG FOOD - NUTRISOURCE ADULT FORMULA 6.8KG',
            'category_id' => '1',
            'gambar' => 'NUTRISOURCE ADULT FORMULA.jpg',
            'harga' => '490000',
            'stok' => '15',
            'type' => 'anjing',
            'usia' => 'adult',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            NutriSource Adlt Chicken & Rice Formula Dog Food memberikan nutrisi super     premium dalam makanan yang mudah dicerna yang diformulasikan secara ilmiah. Ayam asli adalah bahan nomor satu dalam NutriSource Adlt Chicken & Rice Formula Dog Food. Daging ayam merupakan sumber protein berkualitas tinggi untuk membantu menjaga massa dan kekuatan otot. Ayam memiliki rasa yang kaya dan sehat yang disukai anjing. NutriSource memadukan ayam, nasi, dan bahan-bahan yang dipilih dengan cermat dalam campuran yang tepat untuk menyeimbangkan semua nutrisi penting yang diperlukan untuk kesehatan, kesejahteraan, dan umur panjang yang optimal. Nutrisi yang tersedia dalam ayam dan nasi menghasilkan lebih sedikit limbah.

            GUARANTEED ANALYSIS :
            Crude Protein (Min.) 26.0%
            Crude Fat (Min.) 16.0%
            Crude Fiber (Max.) 4.0%
            Moisture (Max.) 10.0%
        ']);

        DB::table('produks')->insert([
            'nama_produk' => 'DOG FOOD HOLISTIC PROPAC / PRO PAC LARGE BREED PUPPY 12KG',
            'category_id' => '1',
            'gambar' => 'DOG FOOD HOLISTIC PROPAC LARGE BREED PUPPY.jpg',
            'harga' => '1265000',
            'stok' => '10',
            'type' => 'anjing',
            'usia' => 'puppy',
            'alergi'=> 'tidak_ada',
            'breed' => 'large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            > HOLISTIC DOG FOOD
            > DAGING AYAM PILIHAN
            > BERAS MERAH, BUKAN CAMPURAN JAGUNG, GANDUM DLL
            > VET APPROVED

            > PROTEIN 26% - FAT 14%
            > BERIKAN SESUAI TAKARAN DAN NIKMATI HEMATNYA PEMAKAIAN PRO PAC TANPA TAKUT KEKURANGAN NUTRISI

            Diformulasikan secara ilmiah untuk anak anjing ras besar (dengan berat lebih dari 50 lbs. saat dewasa). Tingkat kalsium dan fosfor telah diformulasikan untuk mendukung laju pertumbuhan yang lebih lambat yang dapat membantu meminimalkan masalah sendi dan tulang yang sering ditemukan pada ras besar.
            Tingkat nutrisi yang meningkat memberikan kalori ekstra untuk energi dan pertumbuhan dan lebih banyak protein untuk membentuk otot, organ, dan tulang yang kuat. Mengandung DHA yang membantu perkembangan otak dan mata anak anjing yang sehat.

            Chicken Meal, Brown Rice, White Rice, Peas, Rice Bran, Chicken Fat (Preserved with Mixed Tocopherols), Whitefish Meal, Dried Beet Pulp, Pea Protein, Flaxseed, Dried Egg Product, Apples, Blueberries, Cranberries, Carrots, Spinach, Potassium Chloride, Salt, Choline Chloride, DL-Methionine, L-Lysine, Taurine, Yucca Schidigera Extract, L-Carnitine, Beta-Carotene, Vitamin A Supplement, Vitamin D3 Supplement, Vitamin E Supplement, Zinc Sulfate, L-Ascorbyl-2-Polyphosphate (Source of Vitamin C), Ferrous Sulfate, Niacin, Calcium Pantothenate, Riboflavin Supplement, Copper Sulfate, Pyridoxine Hydrochloride, Thiamine Mononitrate, Manganese Sulfate, Zinc Proteinate, Manganese Proteinate, Copper Proteinate, Calcium Iodate, Cobalt Carbonate, Folic Acid, Sodium Selenite, Biotin, Vitamin B12 Supplement.

            Guaranteed Analysis
            Crude Protein, minimum 26.00%
            Crude Fat, minimum 14.00%
            Crude Fiber, maximum 5.00%
            Moisture, maximum 10.00%
        ']);

        DB::table('produks')->insert([
            'nama_produk' => 'DOG FOOD NUTRISOURCE GRAIN FREE LAMB MEAL & PEAS 6,8KG',
            'category_id' => '1',
            'gambar' => 'NUTRISOURCE GRAIN FREE LAMB MEAL & PEAS.jpg',
            'harga' => '555000',
            'stok' => '10',
            'type' => 'anjing',
            'usia' => 'puppy,adult,mature',
            'alergi'=> 'ayam',
            'breed' => 'small,medium,large,giant',
            'aktivitas' => 'aktif',
            'deskripsi' => '
           NutriSource Lamb Meal & Peas Formula Grain Free dibuat dengan makanan domba bernutrisi unggul yang memiliki kelezatan, daya cerna, dan rasa yang sangat disukai anjing. NutriSource Lamb Meal & Peas Formula Grain Free menghadirkan sistem Good 4 	Life eksklusif NutriSource dan dibuat dengan bahan-bahan berkualitas terbaik yang 	tersedia.

	        Bahan-bahan:
	        Tepung domba, kacang polong, tepung salmon (sumber minyak ikan), tepung kacang 	polong, lemak ayam (diawetkan dengan tocopherol campuran dan asam sitrat), tepung 	kacang polong, tepung alfalfa, kalkun alami dan rasa ayam, pomace tomat kering, minyak bunga matahari, dikeringkan produk telur, biji rami, kalium klorida, ragi 	bir kering, garam, mineral (proteinat seng, proteinat besi, proteinat tembaga, 	proteinat mangan, proteinat kobalt, ragi selenium), kolin klorida, taurin, vitamin 	(vitamin A asetat, suplemen vitamin D3 , suplemen vitamin E, niasin, d-kalsium 	pantotenat, tiamin mononitrat, piridoksin hidroklorida, suplemen riboflavin, asam 	folat, biotin, suplemen vitamin B12), asam laktat, glukosamin hidroklorida, L-	ascorbyl-2-polyphosphate (sumber vitamin C) , kondroitin sulfat, ekstrak yucca 	schidigera, kalsium iodat, ekstrak rosemary, kultur ragi (Saccharomyces 	cerevisiae), produk fermentasi Lactobacillus acidophilus kering, produk fermentasi 	Enterococcus faecium kering, ekstrak fermentasi Aspergillus niger kering, ekstrak 	fermentasi Trichoderma longibrachiatum kering, ekstrak fermentasi Bacillus subtilis kering.
        ']);

        DB::table('produks')->insert([
            'nama_produk' => 'HAPPY DOG - DOG FOOD MINI SENIOR',
            'category_id' => '1',
            'gambar' => 'DogFood Mini Senior.png',
            'harga' => '63200',
            'stok' => '10',
            'type' => 'anjing',
            'usia' => 'mature',
            'alergi'=> 'tidak_ada',
            'breed' => 'small',
            'aktivitas' => 'aktif',
            'deskripsi' => '
	        Kadar protein 23% dan lemak 10%.
	        Mengandung Natural Life Concept.
	        Nutrisi khusus untuk menjaga kesehatan kesehatan organ.
	        Diperkaya vitamin dan antioksidan untuk meningkatkan daya tahan tubuh.
	        Kerang hijau dan L-carnitine mendukung mobilitas dan persendian.
	        Ukuran kibble kecil: 8 mm x 8 mm.

	        Komposisi: Jagung, protein unggas**, tepung beras, lemak unggas, 	tepung salmon, tepung ikan, protein domba*, protein kentang*, 	hemoglobin*, hidrolisat hati, minyak bunga matahari, bubur bit 	(tanpa gula)*, apel pomace* (0.6 %), minyak kanola, sodium 	klorida, telur kering utuh, ragi*, kalium klorida, rumput laut* 	(0.15 %), biji rami (0.15 %), akar chicory (ekstrak) (0.05 %), 	daging kerang hijau* (0.02 %), milk thistle, artichoke (0.01%), 	dandelion, jahe, daun birch, jelatang, kamomil, ketumbar, 	rosemary, sage, akar licorice, timi, ragi* (ekstrak) (total herbal 	kering: 0.14%); *) dikeringkan; **) dikeringkan, sebagian dihidrolisis.

            Nilai gizi: Protein kasar 23%, lemak kasar 10%, serat kasar 3%, abu kasar 4.5%, kalsium 1%, fosfor 0.8%, sodium 0.3%, kalium 0.5%, magnesium 0.08%, Omega-6 2.8%, Omega-3 0.3%.
        ']);

        DB::table('produks')->insert([
            'nama_produk' => 'HAPPY DOG - DOG FOOD SENIOR FIT & VITAL 300gr',
            'category_id' => '1',
            'gambar' => 'DogFood Senior Fit & Vital.png',
            'harga' => '63200',
            'stok' => '10',
            'type' => 'anjing',
            'usia' => 'mature',
            'alergi'=> 'tidak_ada',
            'breed' => 'medium',
            'aktivitas' => 'aktif',
            'deskripsi' => '
	        Kadar protein 21% dan lemak 10%.
	        Mengandung Natural Life Concept®.
	        Nutrisi khusus untuk menjaga kesehatan organ.
	        Diperkaya vitamin dan antioksidan untuk meningkatkan daya tahan tubuh.
	        Kerang hijau dan L-carnitine mendukung mobilitas dan persendian.
	        Ukuran kibble sedang: 17 mm x 6 mm.

            Komposisi: Protein hewani* (9% unggas, 4% domba), beras, tepung beras, jagung, tepung jagung, jelai, tepung ikan (4%, di antaranya 50% tepung salmon), tepung daging, lemak unggas, hidrolisat hati, minyak bunga matahari, bubur bit* (tanpa gula), apel pomace*, kalium klorida, minyak kanola, ragi*, sodium klorida, rumput laut*, biji rami (0.16%), telur kering (0.12%), akar chicory* (ekstrak) (0.05%), dging kerang hijau* (0.02%), ragi* (ekstrak), milk thistle, artichoke, dandelion, jahe (0.013%), daun birch, jelatang, kamomil, ketumbar, rosemary, sage, akar licorice, timi (total herbal kering: 0.16 %); *) dikeringkan.

            Nilai gizi: Protein kasar 21%, lemak kasar 10%, serat kasar 2.5%, abu kasar 5.5%, kalsium 1%, fosfor 0.75%, sodium 0.35%, kalium 0.5%, magnesium 0.08%, Omega-6 3%, Omega-3 0.3%.
        ']);

        DB::table('produks')->insert([
            'nama_produk' => 'HAPPY DOG - DOG FOOD NATURCROQ SENIOR 4kg',
            'category_id' => '1',
            'gambar' => 'DogFood Naturcroq Senior.png',
            'harga' => '300300',
            'stok' => '10',
            'type' => 'anjing',
            'usia' => 'mature',
            'alergi'=> 'tidak_ada',
            'breed' => 'medium,large',
            'aktivitas' => 'aktif',
            'deskripsi' => '
	        Kadar protein 21% dan lemak 8%.
	        Mengandung Natural Life Concept®.
	        Sumber multiprotein berkualitas dari salmon, ikan laut, unggas, domba, dan telur.
	        Nutrisi khusus untuk menjaga kesehatan organ.
	        Glukosamin dan L-carnitine mendukung mobilitas dan persendian.
	        Ukuran kibble kecil: 8 mm x 8 mm.

            Komposisi: Protein unggas*, gandum utuh, tepung terigu, jelai utuh, jagung utuh, tepung jagung, tepung beras, protein beras, tepung ikan, bubur bit* (tanpa gula), lemak unggas, lemak sapi, hidrolisat hati, apel pomace* (0.8%), ragi*, wortel*, sodium klorida, oat hijau*, bunga matahari*, selada*, peterseli* (total herbal hijau: 0.3%); *) dikeringkan.

            Nilai gizi: Protein kasar 21%, lemak kasar 8%, serat kasar 2.5%, abu kasar 5%, kalsium 0.9%, fosfor 0.7%, sodium 0.25%, kalium 0.5%, magnesium 0.1%, Omega-6 1.8%, Omega-3 0.2%.

            NaturCroq Senior terbuat dari bahan berkualitas yang ramah pencernaan dengan kandungan protein, fosfor, dan sodium yang disesuaikan untuk kebutuhan anjing tua. Mengandung vitamin dan antioksidan untuk perlindungan sel tubuh dan meningkatkan imunitas. Mengandung biji-bijian utuh untuk kesehatan pencernaan dan menambah kelezatan makanan.
        ']);

        DB::table('produks')->insert([
            'nama_produk' => 'Royal Canin - Giant Puppy Dry Dog Food 13.6kg',
            'category_id' => '1',
            'gambar' => 'Giant Puppy Dry Dog Food.jpg',
            'harga' => '1842461',
            'stok' => '10',
            'type' => 'anjing',
            'usia' => 'puppy',
            'alergi'=> 'tidak_ada',
            'breed' => 'giant',
            'aktivitas' => 'aktif',
            'deskripsi' => '
	        diformulasikan untuk memenuhi kebutuhan nutrisi unik anak anjing ras raksasa hingga usia 8 bulan. dengan berat target dewasa lebih dari 100 lbs

            Makanan sampingan ayam, nasi bir, gluten gandum, tepung beras bir, jagung, lemak ayam, rasa alami, bubur bit kering, tepung gluten jagung, natrium aluminosilikat, minyak sayur, monokalsium fosfat, serat kacang polong, garam, kalium klorida, sekam biji psyllium bubuk, taurin, minyak ikan, fructooligosaccharides, kalsium karbonat, ragi terhidrolisis, kolin klorida, minyak mikroalga laut, L-lysine, DL-methionine, vitamin [DL-alpha tocopherol acetate (sumber vitamin E), L-ascorbyl -2-polifosfat (sumber vitamin C), biotin, D-kalsium pantotenat, vitamin A asetat, suplemen niasin, asam folat, piridoksin hidroklorida (vitamin B6), suplemen vitamin B12, tiamina mononitrat (vitamin B1), suplemen vitamin D3, suplemen riboflavin], trace mineral [seng proteinat, mangan proteinat, seng oksida, besi sulfat, mangan oksida,tembaga sulfat, natrium selenit, kalsium iodat, tembaga proteinat], ekstrak marigold (Tagetes erecta L.), glukosamin hidroklorida, L-karnitin, ekstrak Yucca schidigera , kondroitin sulfat, karoten, ekstrak rosemary, diawetkan dengan tocopherol campuran dan asam sitrat.
        ']);

        DB::table('produks')->insert([
            'nama_produk' => 'Royal Canin - Giant Adult Dry Dog Food 13.61kg',
            'category_id' => '1',
            'gambar' => 'Giant Adult Dry Dog Food.jpg',
            'harga' => '1526977',
            'stok' => '10',
            'type' => 'anjing',
            'usia' => 'adult',
            'alergi'=> 'tidak_ada',
            'breed' => 'giant',
            'aktivitas' => 'aktif',
            'deskripsi' => '
	        diformulasikan untuk memenuhi kebutuhan nutrisi unik ras raksasa, anjing dewasa di atas 18/24 bulan, dengan berat lebih dari 100 lbs

            Protein Mentah (min)	26,0% Lemak Kasar (min) 18,0% Serat Kasar (maks) 3,9% Kelembaban (maks) 10,0% Taurin* (min) 0,14% Glukosamin* (min) 446 mg/kg Chondroitin sulfate* (min) 4 mg/kg

            Makanan sampingan ayam, nasi bir, gluten gandum, tepung beras bir, jagung, lemak ayam, rasa alami, bubur bit kering, tepung gluten jagung, natrium aluminosilikat, minyak sayur, monokalsium fosfat, serat kacang polong, garam, kalium klorida, sekam biji psyllium bubuk, taurin, minyak ikan, fructooligosaccharides, kalsium karbonat, ragi terhidrolisis, kolin klorida, minyak mikroalga laut, L-lysine, DL-methionine, vitamin [DL-alpha tocopherol acetate (sumber vitamin E), L-ascorbyl -2-polifosfat (sumber vitamin C), biotin, D-kalsium pantotenat, vitamin A asetat, suplemen niasin, asam folat, piridoksin hidroklorida (vitamin B6), suplemen vitamin B12, tiamina mononitrat (vitamin B1), suplemen vitamin D3, suplemen riboflavin], trace mineral [seng proteinat, mangan proteinat, seng oksida, besi sulfat, mangan oksida,tembaga sulfat, natrium selenit, kalsium iodat, tembaga proteinat], ekstrak marigold (Tagetes erecta L.), glukosamin hidroklorida, L-karnitin, ekstrak Yucca schidigera , kondroitin sulfat, karoten, ekstrak rosemary, diawetkan dengan tocopherol campuran dan asam sitrat.
        ']);

        DB::table('produks')->insert([
            'nama_produk' => 'Happy Cat 85 Gr Makanan Kucing Basah Kitten & Junior Farm Duck',
            'category_id' => '1',
            'gambar' => 'Makanan Kucing Basah Kitten & Junior.png',
            'harga' => '19900',
            'stok' => '20',
            'type' => 'kucing',
            'usia' => 'puppy',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            Makanan kucing basah Happy Cat Meat in Sauce Kitten & Junior Farm Duck untuk anak kucing umur 2-12 bulan.
        Makanan basah dengan pilihan daging ayam dan bebek berkualitas tinggi yang dilengkapi saus lezat untuk meningkatkan selera makan kucing. Bahan yang digunakan mudah dicerna sehingga optimal untuk penyerapan nutrisi. Mengandung vitamin, mineral, dan asam amino penting untuk mendukung pertumbuhan anak kucing.

        - Kadar protein 8.2% dan lemak 4.8%.
        - Formula All in One Concept dan Natural Life Concept.
        - Mengandung nutrisi vital untuk pertumbuhan anak kucing yang optimal.
        - Dilengkapi minyak ikan untuk kulit yang sehat, bulu yang bagus dan berkilau.
        - Diperkaya vitamin dan antioksidan untuk mendukung daya tahan tubuh.
        - Kandungan prebiotik mendukung kesehatan saluran pencernaan.
        - Kadar air sesuai untuk menjaga saluran kemih tetap sehat.

        Komposisi: Daging dan jeroan ayam (27%), protein bebek (10%), tepung gandum utuh, serat apel (0.5%), serat inulin chicory (0.4%), sodium klorida, minyak ikan (0.1%), minyak bunga matahari (0.1%).

        Nilai gizi: Protein kasar 8.2%, lemak kasar 4.8%, serat kasar 0.5%, abu kasar (ash) 1.4%, kadar air 81.2%, kalsium 0.33%, fosfor 0.25%, Omega-6 0.05%, Omega-3 0.03%, vitamin E (3a700) 60 mg, biotin (3a880) 180 mcg, vitamin C (3a300) 300 mg, taurin (3a370) 400 mg, mangan (sebagai 3b503) 3 mg, zinc (sebagai 3b605) 20 mg, L-Methionine (3c305) 400 mg.
        ']);


        DB::table('produks')->insert([
            'nama_produk' => 'Happy Cat 85 Gr Makanan Kucing Basah Kitten & Junior Farm Duck',
            'category_id' => '1',
            'gambar' => 'Makanan Kucing Basah Kitten & Junior.png',
            'harga' => '19900',
            'stok' => '20',
            'type' => 'kucing',
            'usia' => 'puppy',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            Makanan kucing basah Happy Cat Meat in Sauce Kitten & Junior Farm Duck untuk anak kucing umur 2-12 bulan.
            Makanan basah dengan pilihan daging ayam dan bebek berkualitas tinggi yang dilengkapi saus lezat untuk meningkatkan selera makan kucing. Bahan yang digunakan mudah dicerna sehingga optimal untuk penyerapan nutrisi. Mengandung vitamin, mineral, dan asam amino penting untuk mendukung pertumbuhan anak kucing.

            - Kadar protein 8.2% dan lemak 4.8%.
            - Formula All in One Concept dan Natural Life Concept.
            - Mengandung nutrisi vital untuk pertumbuhan anak kucing yang optimal.
            - Dilengkapi minyak ikan untuk kulit yang sehat, bulu yang bagus dan berkilau.
            - Diperkaya vitamin dan antioksidan untuk mendukung daya tahan tubuh.
            - Kandungan prebiotik mendukung kesehatan saluran pencernaan.
            - Kadar air sesuai untuk menjaga saluran kemih tetap sehat.

            Komposisi: Daging dan jeroan ayam (27%), protein bebek (10%), tepung gandum utuh, serat apel (0.5%), serat inulin chicory (0.4%), sodium klorida, minyak ikan (0.1%), minyak bunga matahari (0.1%).

            Nilai gizi: Protein kasar 8.2%, lemak kasar 4.8%, serat kasar 0.5%, abu kasar (ash) 1.4%, kadar air 81.2%, kalsium 0.33%, fosfor 0.25%, Omega-6 0.05%, Omega-3 0.03%, vitamin E (3a700) 60 mg, biotin (3a880) 180 mcg, vitamin C (3a300) 300 mg, taurin (3a370) 400 mg, mangan (sebagai 3b503) 3 mg, zinc (sebagai 3b605) 20 mg, L-Methionine (3c305) 400 mg.
        ']);


    DB::table('produks')->insert([
            'nama_produk' => 'PRO PLAN Cat Makanan Basah Kucing Dewasa Sensitive Chicken',
            'category_id' => '1',
            'gambar' => 'Makanan Basah Kucing Dewasa Sensitive Chicken.png',
            'harga' => '22900',
            'stok' => '20',
            'type' => 'kucing',
            'usia' => 'adult',
            'alergi'=> 'ayam',
            'breed' => 'small,medium',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            Mengandung serat inulin untuk mendukung penyerapan nutrisi yang unggul
            Mengandung prebiotik yang terbukti menyeimbangkan mikroflora dalam usus
            Bahan baku kualitas tinggi yang mudah dicerna untuk meningkatkan - kesehatan saluran pencernaan
            Asam lemak omega 3 membantu mengurangi rasa tidak nyaman di kulit yang berhubungan dengan sensitifitas terhadapat makanan

            Komposisi Nutrisi

            Protein 12,8%
            Lemak 3,3%
            Kadar air 80%
            Serat 0,5%
            Energi Termetabolisme (ME) 89kcal/100g
        ']);


DB::table('produks')->insert([
            'nama_produk' => 'FROST SENIOR 2,5 KG / MAKANAN ANJING / DOG FOOD',
            'category_id' => '1',
            'gambar' => 'FROST SENIOR.jpg',
            'harga' => '229500',
            'stok' => '20',
            'type' => 'anjing',
            'usia' => 'mature',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium,large,giant',
            'aktivitas' => 'aktif',
            'deskripsi' => '
                Makanan super premium untuk anjing berusia di atas 7 tahun.

                adalah makanan Super Premium untuk semua ras anjing dari usia 	7 tahun, dengan energi yang cukup untuk menjaga berat badan 	ideal. Bentuk dan teksturnya dirancang khusus untuk anjing 	yang lebih tua, memfasilitasi ketakutan dan mengunyahnya. Ini 	memiliki antioksidan alami yang membantu menunda penuaan sel.
                Komposisi Nutrisi

                unggas, Tepung salmon, Tepung ikan, Greaves, Hidrolisat 	protein ayam, Telur dehidrasi, hati unggas, Dehulled whole 	rice, Tepung terigu, Tepung gandum utuh, Biji rami, Dehidrasi 	bubur bit (2,5%) , lemak ayam, garam, L-Carnitine, L-Taurine, 	Glucosamine sulfate, Chondroitin sulfate, Sodium 	hexametaphosphate, Zeolite, ekstrak Yucca (0,08%), Vitamin 	(Vitamin A, Vitamin C, Vitamin D3, Vitamin E, Vitamin K3, 	Vitamin B1, Vitamin B2, Asam nikotinat, Kalsium pantotenat, 	Vitamin B6, Biotin, Asam folat, Vitamin B12, Klorida 	klorida), Mineral (Tembaga sulfat, Besi sulfat, Kalsium 	iodat, Mangan sulfat, Sodium selenite, Seng oksida, Kalium 	klorida, Tembaga (kompleks organik), Selenium (kompleks 	organik), Seng (kompleks organik)), Antioksidan, Kalsium 	propionat, Kalium sorbat, Mannan oligosakarida, 	Fruktooligosakarida.
        ']);


DB::table('produks')->insert([
            'nama_produk' => 'PRO PLAN Cat Wet Adult 7+ Chicken Makanan Kucing Senior Basah 85g',
            'category_id' => '1',
            'gambar' => 'Makanan Basah Kucing Adult Chicken.png',
            'harga' => '21018',
            'stok' => '20',
            'type' => 'kucing',
            'usia' => 'mature',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium',
            'aktivitas' => 'aktif',
            'deskripsi' => '
            Mengandung serat inulin untuk mendukung penyerapan nutrisi yang unggul
            Asam lemak omega 3 membantu menjaga kesehatan kulit dan rambut
            Zinc dan metionin membantu mengurangi kerontokan rambut
            Serat makanan mengontrol pembentukan gumpalan rambut dan membantu mengeluarkan rambut melalui saluran pencernaan

            Komposisi Nutrisi

            Protein 12,6%
            Lemak 3,3%
            Kadar air 80%
            Serat 0,3%
            Omega 3 dan omega 6 0,6% (min)
            Zinc 30mg (min)
            Metionin 1,5gr (min)
            Energi Termetabolisme (ME) 85kcal/100g
        ']);


DB::table('produks')->insert([
            'nama_produk' => 'PRO PLAN Cat Makanan Basah Kucing Dewasa Derma Plus Salmon',
            'category_id' => '1',
            'gambar' => 'Makanan Basah Kucing Dewasa Derma Plus Salmon.png',
            'harga' => '19100',
            'stok' => '20',
            'type' => 'kucing',
            'usia' => 'mature',
            'alergi'=> 'tidak_ada',
            'breed' => 'small,medium',
            'aktivitas' => 'aktif',
            'deskripsi' => '
             Mengandung serat inulin untuk mendukung penyerapan nutrisi yang unggul
             Asam lemak omega 3 membantu menjaga kesehatan kulit dan rambut
             Zinc dan metionin membantu mengurangi kerontokan rambut
             Serat makanan mengontrol pembentukan gumpalan rambut dan membantu mengeluarkan rambut melalui saluran pencernaan

            Komposisi Nutrisi

            Protein 12,6%
            Lemak 3,3%
            Kadar air 80%
            Serat 0,3%
            Omega 3 dan omega 6 0,6% (min)
            Zinc 30mg (min)
            Metionin 1,5gr (min)
            Energi Termetabolisme (ME) 85kcal/100g
        ']);
    }
}
