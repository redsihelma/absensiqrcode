###################
Absensi Karyawan QR Code
###################

Absensi Karyawan QR Code dibuat dengan Framework CI- 3 

##########################################
perbedaan aplikasi ini dengan sebelumnya:
##########################################

1. aplikasi ini pada saat mendaftarkan karyawan 
   di tambahkan email karyawan untuk di kirim 
   qrcode karyawan tersebut

2. aplikasi ini menambahkan fitur kirim email 
   kepada karyawan untuk mengirim qr codenya
   kirim email ini terletak di ambil qecode setelah 
   itu input nama kryawan dan muncul kirim email

3. menambahkan download qrcode untuk di kirim ke 
   email karyawan yang sudah di daftar sebelumnya
   letaknya sama dengan fitur kirim email

4. menambahkan scan qrcode tanpa login

##############################
cara menjalankan aplikasi ini:
##############################

1.  di aplikasi ini menggunakan CodeIgniter versi 3.1.10 bisa mengintall 
    atau menggunakan PHP versi 5.3.7 atau yang lebih baru, dalam aplikasi ini
    menggunakan PHP versi 7.3.33 
   
2. di aplikasi ini menggunakan MYSQL untuk databasenya, untuk masuk ke database MYSQL 
   kita membutuhkan XAMPP, di aplikasi ini menggunakan XAMPP versi 3.3.0 unduh XAMPP 
   versi 3.3.0 dan pasang di path C:\ setelah di pasang tempatkan aplikasinya di 
   C:\xampp\htdocs

3. buka aplikasi XAMPP dan klik tombol start apache dan MYSQL jika apache dan MYSQL sudah berwarna hijau
   klik tombol admin di baris MYSQL untuk masuk ke localhost phpMyAdmin. jika sudah di phpMyAdmin buat 
   database baru dengan nama db_absensi selanjutnya import db_absensi.sql yang ada di folder database

4. untuk run/menjalankan aplikasinya cukup ketik http://localhost/absensiqrcode di crome/browser default 
   masing masing device. beda lagi jika aplikasi sudah di hosting/di onlinekan



