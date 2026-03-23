### วิธีติดตั้งสำหรับผู้ตรวจงาน:
1. `git clone https://github.com/sathongoon-dev/register.git`
2. `composer install`
3. สร้างไฟล์ `.env` (ก๊อปปี้จาก `.env.example`) และตั้งค่า DB_DATABASE, DB_USERNAME, DB_PASSWORD ของคุณ
4. `php artisan key:generate`
5. `php artisan migrate` (เพื่อสร้างตารางใน MySQL)
6. `php artisan serve`