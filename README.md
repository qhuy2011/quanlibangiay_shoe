# 👟 Website Quản Lý Bán Giày

## 📌 Giới thiệu
Đây là website quản lý bán giày được xây dựng bằng Laravel framework.  
Hệ thống hỗ trợ quản lý sản phẩm, kho hàng, khách hàng, đơn hàng và phân quyền người dùng.

Project được phát triển bằng:
- Laravel
- PHP
- MySQL
- Bootstrap
- JavaScript
- Vite
- Visual Studio Code

---

# 🚀 Chức năng chính

## 👤 Người dùng
- Đăng ký tài khoản
- Đăng nhập / đăng xuất
- Xem danh sách sản phẩm
- Tìm kiếm sản phẩm
- Xem chi tiết sản phẩm
- Thêm sản phẩm vào giỏ hàng
- Đặt hàng
- Xem lịch sử đơn hàng

---

## 🔑 Quản trị viên (Admin)
- Quản lý sản phẩm
- Thêm / sửa / xoá sản phẩm
- Quản lý danh mục
- Quản lý kho hàng
- Quản lý khách hàng
- Quản lý đơn hàng
- Cập nhật trạng thái đơn hàng
- Quản lý tài khoản và phân quyền

---

# 🛠️ Công nghệ sử dụng

| Công nghệ | Mô tả |
|----------|------|
| Laravel | Framework PHP |
| MySQL | Hệ quản trị cơ sở dữ liệu |
| Bootstrap | Thiết kế giao diện |
| Vite | Build frontend |
| PHP | Xử lý backend |
| JavaScript | Xử lý tương tác |

---

# ⚙️ Cài đặt project

## 1. Clone project

```bash
git clone https://github.com/your-github/shoe-store.git
```

---

## 2. Cài thư viện

```bash
composer install
npm install
```

---

## 3. Tạo file môi trường

```bash
cp .env.example .env
```

---

## 4. Generate key

```bash
php artisan key:generate
```

---

## 5. Cấu hình database

Mở file `.env` và chỉnh:

```env
DB_DATABASE=ten_database
DB_USERNAME=root
DB_PASSWORD=
```

---

## 6. Chạy migrate

```bash
php artisan migrate
```

---

## 7. Chạy project

```bash
php artisan serve
npm run dev
```

---

# 📂 Cấu trúc thư mục

```bash
app/            # Xử lý logic
routes/         # Khai báo route
resources/      # View giao diện
public/         # File public
database/       # Migration & seed
storage/        # File lưu trữ
```

---

# 📸 Giao diện hệ thống
- Trang chủ
- Trang quản lý sản phẩm
- Trang quản lý đơn hàng
- Trang đăng nhập / đăng ký
- Trang giỏ hàng

---

# 👨‍💻 Tác giả

- Họ và tên: Nguyen Quoc Huy
- GitHub: https://github.com/qhuy2011/quanlibangiay_shoe

---

# 📄 License

Project phục vụ mục đích học tập và nghiên cứu.
