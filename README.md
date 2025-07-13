# 🔐 Laravel 12 Authentication & Profile CRUD

This is a **Laravel 12** project that demonstrates:

- User authentication (Login & Register) without packages
- Dashboard after login
- Full user profile CRUD (name, phone, bio, avatar)
- Rate limiting middleware for login (brute-force protection)

---

## 🚀 Features

- ✅ Built auth using Laravel sessions
- ✅ Avatar/image upload using `Storage`
- ✅ Middleware-based rate limiter (`LoginThrottle`)
- ✅ Blade views styled with Bootstrap 5
- ✅ Clean code with Laravel 12 modular setup

---



## ⚙️ Installation

Follow the steps below to run this project on your machine:

### 1. Clone the Repo

```bash
git clone https://github.com/your-username/custom-auth-laravel12.git
cd custom-auth-laravel12


composer install


cp .env.example .env


php artisan key:generate


php artisan storage:link


php artisan serve

