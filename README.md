# UAS-PEMROGAMAN-WEB-2
# UAS
 HEAD
# UAS-Web-2
I Aplikasi  PHP Sederhana Untuk Pendataan Zakat</br>
Ini Merupakan Tugas UAS untuk Pemrograman WEB 2</br>

# Kelompok 9 Kelas 06TPLM010
Singgih Dwiprayogo </br>
Sukmara</br>
Tegar Muflihin</br>
Tolani</br>
Wahyu Febrian</br>

# Penjelasan</br>

# folder assets
Aset adalah file non-pos di folder sumber, seperti file gambar, CSS atau JavaScript. Sebagai contoh, Jika kita hanya akan memiliki beberapa gambar di proyek Hexo, maka cara termudah adalah menyimpannya di direktori sumber gambar. Kemudian, Anda dapat mengaksesnya menggunakan sesuatu seperti css </br>
Terdapat library fpdf untuk mencetak laporan dalam bentuk pdf</br>

# Pada file koneksi.php
Tedapat Fungsi PHP mysqli_connect untuk menghubungkan ke databasenya</br>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
# Pada file login.php
terdapat fungsi php isset($_GET['pesan']) untuk mengecek notifikasi apakah user dalam keadaan login / tidak</br>
tedapat form untuk login dengan method post untuk mengirimkan data, pada form juga terdapat action'file_tujuan.php untuk menentukan file tujuan setelah submit</br>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
# pada file cek_login.php
terdapat fungsi session_start untuk inisialisasi / mengaktifkan session</br>
terdapat funsgi php include 'koneksi.php' untuk menghubungkan dengan file koneksi.php</br>
terdapat fungsi $_POST['...'] untuk mendapatkan nilai dari form sebelumnya</br>
tedapat fungsi mysqli_query untuk mendapatkan semua data admin</br>
terdapat fungsi mysqli_num_rows($data) untuk mengecek apakah data username dan password ada pada database , jika ada fungsi ini mereturn nilai 1</br>
jika username dan password sesuai dengan db akan dilanjutkan dengan fungsi mysqli_query lagi untuk mendapatkan id username tersebut dan kemudian buat session untuk menyimpan id_admin dan juga session status login. kemudian terdapat fungsi header(...); untuk mengalihkan halaman ke halaman utama</br>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
# pada file index.php
terdapat fungsi session_start untuk inisialisasi / mengaktifkan session</br>
terdapat funsgi php include 'koneksi.php' untuk menghubungkan dengan file koneksi.php</br>
terdapat fungsi isset($_GET[...]) untuk mengecek notifikasi apakah user dalam keadaan login / tidak</br>
terdapat sidebar untuk navigasi</br>
terdapat keterangan aplikasi</br>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
# pada file list_data.php
terdapat fungsi session_start untuk inisialisasi / mengaktifkan session</br>
terdapat funsgi php include 'koneksi.php' untuk menghubungkan dengan file koneksi.php</br>
terdapat fungsi isset($_GET[...]) untuk mengecek notifikasi apakah user dalam keadaan login / tidak</br>
terdapat juga fungsi session_start untuk mengecek notifikasi apakah berhasil menghapus / mengedit data</br>
terdapat sidebar untuk navigasi</br>
terdapat fungsi mysqli_query dengan isis query inner join untuk mendapatkan nilai pada database tabel_zakat dan tabel_admin</br>
mysqli_num_rows untuk mendapatkan data tersebut , fungsi ini di loop untuk mendapatkan semua data</br>
terdapat button hapus dan edit yang jika diklik akan dialihkan ke manu edit / meenghapus data</br>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
# pada file add_data.php
terdapat fungsi session_start untuk inisialisasi / mengaktifkan session</br>
terdapat funsgi php include 'koneksi.php' untuk menghubungkan dengan file koneksi.php</br>
terdapat fungsi isset($_GET[...]) untuk mengecek notifikasi apakah user dalam keadaan login / tidak</br>
terdapat juga fungsi session_start untuk mengecek notifikasi apakah berhasil menambahkan data</br>
terdapat sidebar untuk navigasi</br>
terdapat form dengan method post , dan  action ke ce_tambah_data.php</br>
terdapat fungsi mysqli_query untuk mendapatkan semua data pada database tabel zakat, untuk fitur dropdown</br>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
# pada file cek_tambah_data.php
terdapat fungsi session_start untuk inisialisasi / mengaktifkan session</br>
terdapat funsgi php include 'koneksi.php' untuk menghubungkan dengan file koneksi.php</br>
terdapat fungsi isset($_GET[...]) untuk mengecek notifikasi apakah user dalam keadaan login / tidak</br>
terdapat method $_POST[..] untuk mendapatkan data dari form</br>
terdapat $_SESSIO[id_admin] untuk mendapakan data id_admin</br>
terdapat mysqli_query dengan metode sql SELECT untuk mendapatkan id_zakat dari jenis_zakat</br>
terdapat mysqli_query dengan metode sql INSERT untuk menambahan data tesebut ke database</br>
jika berhasil halaman akan dialihkan ke halaman add_data.php dengan mengirim pesan 'berhasil_menambahkan_data'</br>
jika gagal halaman akan dialihkan ke halaman add_data.php dengan mengirim pesan 'gagal_menambahkan_data'</br>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
# pada file edit_data.php
terdapat fungsi session_start untuk inisialisasi / mengaktifkan session</br>
terdapat funsgi php include 'koneksi.php' untuk menghubungkan dengan file koneksi.php</br>
terdapat fungsi $_GET[id] untuk mendapatkan id_pembayaran</br>
terdapat form dengan method get dan action ke cek_edit data untuk proses edit data ke database</br>
terdapat fungsi php mysqli_query dengan syntaks select untuk mendapatkan data dari database pembayaran kemudian data </br>tersebut di letakan pada value form untuk empermudah proses edit data</br>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
# pada file cek_ubah_data.php
terdapat fungsi session_start untuk inisialisasi / mengaktifkan session</br>
terdapat fungsi php include 'koneksi.php' untuk menghubungkan dengan file koneksi.php</br>
terdapat fungsi mysqli_query dengan syntaks select untuk mendapatkan data zakat dari acuan id zakat</br>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
# pada file print_data.php
pada file ini menggunakan library pdf untuk proses mencetak data</br>
data diambil dari database dengan perintah mysqli_query select dan inner join untuk menghubungkan dua tabel</br>
terdapat fungsi mysqli_query dengan syntaks update untuk mengubah data dengan titik acuan id_pembayaran</br>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
## pada file logut.php
session_start() mengaktifkan session</br>
session_destroy() untuk menghapus semua session</br>
header("location:login.php?pesan=logout") mengalihkan halaman sambil mengirim pesan logout</br>
----------------------------------------------------------------------------------------------------------------------------------------------------------------------
# web2
File Latihan Web2
>>>>>>> f1d40a9346b1fda0a825b68981f0ba5b661454d2
