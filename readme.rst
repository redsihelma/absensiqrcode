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


---------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------


####################
Employee Attendance QR Code
####################

QR Code Employee Attendance created with the CI-3 Framework

############################################
The difference between this application and the previous one:
############################################

1. This application when registering employees
   Add employee email to send
   the employee's qrcode

2. This application adds a send email feature
   to employees to send their qr code
   send this email located in fetch qecode afterwards
   Enter the employee's name and send email appears

3. add download qrcode to send to
   employee emails that have been previously registered
   The location is the same as the send email feature

4. add qr code scan without login

################################
How to run this application:
################################

1. In this application, you can install CodeIgniter version 3.1.10
    or use PHP version 5.3.7 or later, in this application
    using PHP version 7.3.33
   
2. This application uses MYSQL for the database, to enter the MYSQL database
   we need XAMPP, in this application using XAMPP version 3.3.0 download XAMPP
   version 3.3.0 and install it in the C:\ path after installing the application at
   C:\xampp\htdocs

3. Open the XAMPP application and click the start Apache and MYSQL button if Apache and MYSQL are green
   click the admin button in the MYSQL row to enter localhost phpMyAdmin. if you have it in phpMyAdmin create it
   new database with the name db_absensi then import db_absensi.sql which is in the database folder

4. To run/execute the application, just type http://localhost/absensiqrcode in crome/default browser
   each device. It's different if the application is hosted/online
