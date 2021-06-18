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

ampilan page contact

![19](https://user-images.githubusercontent.com/56387936/122597970-5b474000-d096-11eb-8033-e219bfc7583f.JPG)
