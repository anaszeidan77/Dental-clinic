# نظام إدارة العيادة السنية

<p align="center">
  <br>
  <img src="https://github.com/user-attachments/assets/57fac77e-6ee9-4611-ab63-efcfb83c6d29" alt="Laravel Logo">
</p>

<img src="https://github.com/user-attachments/assets/064d4310-cb8e-48c2-be21-7fca6c039304" alt="Laravel Logo">

## 📝 وصف المشروع
نظام متكامل لإدارة مواعيد العيادات السنية مع مميزات متقدمة تشمل:
- 🔐 نظام صلاحيات متعدد الأدوار (مدير - طبيب - مريض)
- 📅 نظام حجز مواعيد ذكي مع اختيار الأطباء
- 📊 لوحة تحكم إدارية مع إحصائيات فورية
- 📱 واجهة مستخدم تفاعلية مع إشعارات فورية
- 📑 إدارة السجلات الطبية والوصفات

---

## ⚙️ متطلبات التشغيل
- PHP 8.1 أو أحدث
- Composer 2.5+
- MySQL 5.7+ أو MariaDB 10.3+
- Node.js 16+ و npm 9+

---

## 🚀 خطوات التنصيب

### 1. استنساخ المشروع
```bash
git clone https://github.com/yourusername/dental-clinic.git
cd dental-clinic
```

### 2. تثبيت الحزم المطلوبة
```bash
composer install
npm install
npm run dev
```

### 3. إعداد ملف البيئة .env
```bash
cp .env.example .env
php artisan key:generate
```

### 4. إعداد قاعدة البيانات
- أنشئ قاعدة بيانات جديدة في MySQL (مثلاً: `dental_clinic_db`).
- حدّث إعدادات الاتصال بقاعدة البيانات في ملف `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dental_clinic_db
DB_USERNAME=root
DB_PASSWORD=yourpassword
```

### 5. تشغيل الترحيلات وإنشاء الجداول
```bash
php artisan migrate
```

### 6. تشغيل Seeders لإضافة بيانات افتراضية
```bash
php artisan db:seed
```

أو لتشغيل Seeder محدد:
```bash
php artisan db:seed --class=RoleSeeder
```

أو لإعادة تهيئة قاعدة البيانات بالكامل وتشغيل Seeders:
```bash
php artisan migrate:fresh --seed
