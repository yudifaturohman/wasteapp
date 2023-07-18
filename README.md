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
![2](https://github.com/yudifaturohman/wasteapp/assets/50742212/b8875bb6-8b79-4e75-8b82-2cd51ca1bff6)

2. Trash Location
![3](https://github.com/yudifaturohman/wasteapp/assets/50742212/8628f644-99fc-4867-829e-7956319aa9cc)

3. Report Full
![4](https://github.com/yudifaturohman/wasteapp/assets/50742212/7042613e-b3e2-4a5a-9e75-cf41962fded9)

4. Home Page
![1](https://github.com/yudifaturohman/wasteapp/assets/50742212/ce7a1f25-9ff5-454b-a56a-2a4ec4fc02e5)

5. Report Full Trash
![5](https://github.com/yudifaturohman/wasteapp/assets/50742212/ace5ecbe-faf3-4a5e-9391-51e64b5b05cc)

