<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://laravel.com/img/logomark.min.svg" width="100" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://laravel.com" target="_blank">Laravel Framework</a> is a web application framework with expressive, elegant syntax.
</p>

---

## 📘 Student Portal – Laravel CRUD Application

This is a basic **Student Management System** built using **Laravel** that demonstrates CRUD operations with validation, custom styling, and success/error handling.

---

## 🚀 Features

- Add new students with name, email, and age
- Display a list of all students in a styled table
- Prevent duplicate email entries using validation
- Show animated error messages and success alerts
- Clean and modern UI using custom CSS

---

## 🛠️ Tech Stack

- **Backend:** Laravel (PHP)
- **Frontend:** Blade (HTML/CSS)
- **Database:** MySQL
- **Server:** XAMPP or Laravel Artisan Serve

---

## 🧩 How to Clone and Run This Project

```bash
# Step 1: Clone the repository
git clone https://github.com/YourUsername/studentPortal.git

cd studentPortal

# Step 2: Install Composer dependencies
composer install

# Step 3: Create .env file
cp .env.example .env

# Step 4: Generate application key
php artisan key:generate

# Step 5: Configure database in .env
# DB_DATABASE=your_database
# DB_USERNAME=root
# DB_PASSWORD=

# Step 6: Run database migrations
php artisan migrate

# Step 7: Start the Laravel server
php artisan serve

# Now open in browser: http://localhost:8000
