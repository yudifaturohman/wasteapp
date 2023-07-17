1. Clone repository
``` shell
git clone https://github.com/yudifaturohman/wasteapp.git
```
2. Jalankan perintah berikut untuk install package
``` shell
composer update
```
3. Sesuaikan .env dengan nama database, username dan password teman-teman
``` shell
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database
DB_USERNAME=username
DB_PASSWORD=password
```
4. Migrate table ke database yang sudah di buat
``` shell
php artisan migrate
```
5. Jalankan aplikasi
``` shell
php artisan serve
```
__Waste App__ merupakan aplikasi sederhana yang hanya menampilkan list lokasi utempat sampah di sekitar lokasi anda.
Contoh aplikasi ini sangat cocok bagi teman-teman yang sedang mempelajari Framework Laravel. <br/> Berikut Fitur yang tersedia : <br/>
1. Dashboard

2. Trash Location

3. Report Full

4. Home Page

5. Report Full Trash

