# Lab11web

Nama : Dewan Batara Subarjah 

Nim : 311910593 

Kelas : TI.19.C1

# Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan Codeigniter 4. Berikut beberapa ekstensi yang perlu diaktifkan:

- php-json ekstension untuk bekerja dengan JSON;
- php-mysqlnd native driver untuk MySQL;
- php-xml ekstension untuk bekerja dengan XML;
- php-intl ekstensi untuk membuat aplikasi multibahasa;
- libcurl (opsional), jika ingin pakai Curl.

Untuk mengaktifkan ekstentsi tersebut melalui XAMPP Control Panel, pada bagian Apache klik Config -> PHP.ini

![1](https://user-images.githubusercontent.com/56387936/122595590-e6bed200-d092-11eb-8dc2-c55ea969e956.JPG)

![2](https://user-images.githubusercontent.com/56387936/122595699-0950eb00-d093-11eb-9384-c477491b93cc.JPG)

Kemudian buat folder baru dengan nama lab11_php_ci pada doc root webserver (htdocs)

![3](https://user-images.githubusercontent.com/56387936/122595810-2b4a6d80-d093-11eb-832a-0b514ea986f9.JPG)
# Instalasi CodeIgniter 4

- Codeigniter dapat didownload dari website https://codeigniter.com/download
- Extrak file zip Codeigniter ke direktori htdocs/lab11_php_ci.
- Ubah nama direktory framework-4.x.xx menjadi ci4.
- Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/

![4](https://user-images.githubusercontent.com/56387936/122596189-b3c90e00-d093-11eb-8d88-a9d2b0a0a1d9.JPG)

# Menjalankan CLI (Command Line Interface)

Arahkan lokasi direktori sesuai dengan direktori kerja project yang sudah dibuat (xampp/htdocs/lab11_php_ci/ci4/)

![5](https://user-images.githubusercontent.com/56387936/122596371-ef63d800-d093-11eb-828f-f8bb6dacb4a9.JPG)

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah php spark

![6](https://user-images.githubusercontent.com/56387936/122596424-0a364c80-d094-11eb-91f6-e23c92f59afe.JPG)

Codeigniter juga menyediakan mode debugging/development yang dapat menampilkan error/kesalahan dalam kode program. Cara mengaktifkannya dengan mengubah nama file env menjadi .envB kemudian buka filenya dan ubah nilai CI_ENVIRONMENT menjadi development.

![7](https://user-images.githubusercontent.com/56387936/122596459-1ae6c280-d094-11eb-9878-8b704d37af86.JPG)

Maka pesan kesalahan akan ditampilkan.

  ![8](https://user-images.githubusercontent.com/56387936/122596591-4bc6f780-d094-11eb-8bf0-1aa29dbae25f.JPG)
  
  Langkah1 - Membuat Route Baru
  
![9](https://user-images.githubusercontent.com/56387936/122596761-8af54880-d094-11eb-8c35-1543d3f9ff5a.JPG)

Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut. php spark routes Ketik perintah berikut untuk menjalankan server CI 4 pada port 8080. php spark serve

![10](https://user-images.githubusercontent.com/56387936/122596927-cf80e400-d094-11eb-97a5-f908dce32549.JPG)

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about Ketika diakses akan muncul tampilan error 404 file not found, itu artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

# Langkah2 - Membuat Controller

- Membuat file page.php di dalam direktori Controller (/app/Controllers)

- Method ini dapat diakses dengan menggunakan alamat: http://localhost:8080/page/tos

![11](https://user-images.githubusercontent.com/56387936/122597062-0a831780-d095-11eb-8a2b-ab23773694a0.JPG)

- Berikut adalah hasilnya:

![12](https://user-images.githubusercontent.com/56387936/122597114-1ff84180-d095-11eb-84c9-aa3ebc9e61ba.JPG)

# Langkah3 - Membuat View

Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian masukan coding

![13](https://user-images.githubusercontent.com/56387936/122597196-40280080-d095-11eb-80d6-4aa1929f68a4.JPG)

Berikut adalah hasilnya:

![14](https://user-images.githubusercontent.com/56387936/122597339-6baaeb00-d095-11eb-825f-b05019aa312c.JPG)

# Langkah4 - Membuat Layout Web dengan CSS

Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada Codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public. Buat file css pada direktori public dengan nama style.css

![15](https://user-images.githubusercontent.com/56387936/122597455-94cb7b80-d095-11eb-8775-8434e13334ad.JPG)

- Kemudian ubah file app/view/about.php seperti berikut.

<?= $this->include('template/header'); ?>
   <h1><?= $title; ?></h1>
   <hr>
   <p><?= $content; ?></p>
<?= $this->include('template/footer'); ?>

-Kemudian refresh browser atau akses alamat http://localhost:8080/about

![17](https://user-images.githubusercontent.com/56387936/122597810-20450c80-d096-11eb-9596-48d073571bc5.JPG)

# Pertanyaan dan Tugas

Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

# Hasil tugas

Tampilan page about

Tampilan page artikel 

![18](https://user-images.githubusercontent.com/56387936/122597938-4d91ba80-d096-11eb-8991-9b2e8052f5f8.JPG)

Tampilan page contact

![19](https://user-images.githubusercontent.com/56387936/122597970-5b474000-d096-11eb-8033-e219bfc7583f.JPG)

# Praktikum 12: Framework Lanjutan (CRUD)
# Langkah-langkah Praktikum
Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP.

# Membuat Database dan Membuat Tabel

![1](https://user-images.githubusercontent.com/56387936/123455483-f64a9780-d60b-11eb-8e8a-feec845eca78.JPG)

# Konfigurasi koneksi database
Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Konfigurasi dapat dilakukan dengan du acara, yaitu pada file app/config/database.php atau menggunakan file .env. Pada praktikum ini kita gunakan konfigurasi pada file .env.

![2](https://user-images.githubusercontent.com/56387936/123455630-2134eb80-d60c-11eb-8efd-e3794f249d70.JPG)

# Membuat Model
Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori app/Models dengan nama ArtikelModel.php

![3](https://user-images.githubusercontent.com/56387936/123455722-3dd12380-d60c-11eb-9c59-8de730542dbc.JPG)

# Membuat Controller
Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.

![4](https://user-images.githubusercontent.com/56387936/123455789-54777a80-d60c-11eb-9f0e-a43e9e645584.JPG)

# Membuat View
Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file baru dengan nama index.php

![5](https://user-images.githubusercontent.com/56387936/123455904-7113b280-d60c-11eb-95a2-dab8abc09d26.JPG)

Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel 

![6](https://user-images.githubusercontent.com/56387936/123455988-87217300-d60c-11eb-979b-252e6ee0667a.JPG)

# Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.

![7](https://user-images.githubusercontent.com/56387936/123456168-bdf78900-d60c-11eb-80f3-cd48d31f3b6c.JPG)

# Refresh kembali browser, sehingga akan ditampilkan hasilnya.

![8](https://user-images.githubusercontent.com/56387936/123456265-d9629400-d60c-11eb-8483-b131b9916291.JPG)

# Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller Artikel dengan nama view().

![aa](https://user-images.githubusercontent.com/56387936/123457123-cd2b0680-d60d-11eb-9bbe-8fb1b58d123b.JPG)

# Membuat View Detail
Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.

![ab](https://user-images.githubusercontent.com/56387936/123457435-1c713700-d60e-11eb-8e19-71c7afa0f712.JPG)

# Membuat Routing untuk artikel detail
Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.

![ac](https://user-images.githubusercontent.com/56387936/123457573-4165aa00-d60e-11eb-954e-e2010f6ac82e.JPG)

# Kemudian Refresh kembali

![12](https://user-images.githubusercontent.com/56387936/123457807-8093fb00-d60e-11eb-835c-8057fadf260e.JPG)

# Membuat Menu Admin
Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller Artikel dengan nama admin_index().

![13](https://user-images.githubusercontent.com/56387936/123458146-e8e2dc80-d60e-11eb-870b-a5820d03e105.JPG)

# Selanjutnya buat view untuk tampilan admin dengan nama admin_index.php

![14](https://user-images.githubusercontent.com/56387936/123458306-1a5ba800-d60f-11eb-9183-a9a04939dde8.JPG)

![15](https://user-images.githubusercontent.com/56387936/123458369-2c3d4b00-d60f-11eb-95d6-4e237d86ef18.JPG)

# Tambahkan routing untuk menu admin seperti berikut:

![16](https://user-images.githubusercontent.com/56387936/123458850-b5ed1880-d60f-11eb-9e17-74e4fd15c5ec.JPG)

# Setelah itu buat template header dan footer baru untuk Halaman Admin.
Buat file baru dengan nama admin_header.php pada direktori app/view/template

![17](https://user-images.githubusercontent.com/56387936/123459790-f13c1700-d610-11eb-980b-023f72bce7b2.JPG)

Kemudian buat file baru lagi dengan nama admin.css pada direktori ci4/public untuk memperindah tampilan Halaman Admin

![18](https://user-images.githubusercontent.com/56387936/123459883-0e70e580-d611-11eb-81fd-bd80b87b1d3d.JPG)
![19](https://user-images.githubusercontent.com/56387936/123459899-13ce3000-d611-11eb-9a4b-73bed5a8deef.JPG)

setelah itu Akses menu admin dengan url http://localhost:8080/admin/artikel

![20](https://user-images.githubusercontent.com/56387936/123459946-247ea600-d611-11eb-9d94-beac396a0688.JPG)

# Menambah Data Artikel
Tambahkan fungsi/method baru pada Controller Artikel dengan nama add().

![21](https://user-images.githubusercontent.com/56387936/123460086-4e37cd00-d611-11eb-8f60-de3d8f861b84.JPG)

Kemudian buat view untuk form tambah dengan nama form_add.php

![22](https://user-images.githubusercontent.com/56387936/123460170-6e678c00-d611-11eb-9e41-ba1e886f7410.JPG)

Setelah itu klik tambah artikel maka tampilan nya seperti berikut.

![23](https://user-images.githubusercontent.com/56387936/123460234-863f1000-d611-11eb-9853-0059d7395e90.JPG)

# Mengubah Data
Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().

![24](https://user-images.githubusercontent.com/56387936/123460293-9bb43a00-d611-11eb-9249-d51ced39c5cc.JPG)

Kemudian buat view untuk form tambah dengan nama form_edit.ph

![25](https://user-images.githubusercontent.com/56387936/123460353-b4245480-d611-11eb-91f0-ac8ce7634ba5.JPG)

maka tampilan nya seperti ini.

![26](https://user-images.githubusercontent.com/56387936/123460409-c900e800-d611-11eb-9d9d-6a8d943c1658.JPG)

# Menghapus Data
Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().

![27](https://user-images.githubusercontent.com/56387936/123460486-e5048980-d611-11eb-8db2-3b2f09c20783.JPG)
