Họ và tên: Vũ Minh Thành
MSV: 23810310236
# 🚀 Laravel Basic: Controller - View - Master Layout

Dự án thực hành cơ bản về luồng MVC, Blade Engine và kế thừa giao diện trong Laravel.

## 🛠 Cài đặt nhanh
1. **Cài đặt thư viện:** `composer install`
2. **Tạo file môi trường:** `cp .env.example .env` && `php artisan key:generate`
3. **Chạy Server:** `php artisan serve`

---

## 🔗 Danh sách các bài tập (URLs)

| Bài tập | Nội dung | URL Truy cập |
| :--- | :--- | :--- |
| **Bài 1** | Truyền dữ liệu cơ bản | [127.0.0.1:8000/](http://127.0.0.1:8000/) |
| **Bài 2** | Vòng lặp & Sản phẩm | [127.0.0.1:8000/products](http://127.0.0.1:8000/products) |
| **Bài 3** | Trang chủ (Master Layout) | [127.0.0.1:8000/home](http://127.0.0.1:8000/home) |
| **Bài 3** | Liên hệ (Master Layout) | [127.0.0.1:8000/contact](http://127.0.0.1:8000/contact) |
| **Bài 4** | Bảng cửu chương (Số 5) | [127.0.0.1:8000/bang-cuu-chuong/5](http://127.0.0.1:8000/bang-cuu-chuong/5) |

---

## 📂 Cấu trúc logic (MVC)

* **Controllers:** `HomeController.php`, `ProductController.php` (Xử lý logic).
* **Views:** * `layouts/master.blade.php` (Giao diện chung).
    * `welcome`, `products`, `home`, `contact`, `multiplication` (Giao diện riêng).
* **Routes:** `routes/web.php` (Định tuyến đường dẫn).

---
