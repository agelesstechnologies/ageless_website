# Ageless - Laravel 11 Project (Locally Editable Format)

This package contains the complete, standalone Laravel 11 web application formatted for seamless local editing and execution.

---

## Quick Start (Run Locally)

### Requirements
- **PHP >= 8.2** (with `php-sqlite3`, `php-mbstring`, `php-openssl`, `php-pdo`, `php-gd` or `php-fileinfo` extensions enabled)
- **Composer** (Optional if using included `vendor` folder)

---

### Step-by-Step Setup

1. **Extract the ZIP file** to your preferred directory (e.g., `C:\xampp\htdocs\ageless` or `~/projects/ageless`).
2. **Open Terminal / Command Prompt** inside the extracted project folder:
   ```bash
   cd ageless_laravel_local
   ```
3. **Environment Setup**:
   The `.env` file is already included and configured. If creating a new one:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. **Database Configuration**:
   - **Option A (Default - SQLite)**: Ready out of the box! The SQLite database is already in `database/database.sqlite` with existing blog and inquiry data.
   - **Option B (MySQL / XAMPP / MariaDB)**:
     1. Create a database in MySQL / phpMyAdmin named `ageless_db`.
     2. Import `database/ageless_db.sql` into `ageless_db`.
     3. In `.env`, set:
        ```ini
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=ageless_db
        DB_USERNAME=root
        DB_PASSWORD=
        ```
5. **Run Migrations (if needed)**:
   ```bash
   php artisan migrate
   ```
6. **Storage Symlink (Optional - already populated in public/storage)**:
   ```bash
   php artisan storage:link
   ```
7. **Start Development Server**:
   ```bash
   php artisan serve
   ```
   Now visit: **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

---

## Admin Panel Access

- **Admin URL**: [http://127.0.0.1:8000/admin/login](http://127.0.0.1:8000/admin/login)
- **Email**: `admin@ageless.com`
- **Password**: `P@ssw0rd`
*(Configurable anytime in your `.env` file under `ADMIN_EMAIL` and `ADMIN_PASSWORD`)*

---

## Modules Included

- **Blogs Management**: Create, edit, publish, delete blog articles with featured images.
- **Products Management**: Catalog of products with image uploads, status, and sort orders.
- **Projects Management**: Portfolio showcase items with images and categories.
- **FAQ Management**: Frequently Asked Questions accordion manager.
- **Contact Enquiries**: Contact form submissions viewer.
- **Frontend Pages**: Complete responsive website pages (Home, About, Services, Interactive Room, Flying Cinema, Dome Cinema, Rope Rider, AI, Team, Testimonials, FAQ, Blog, Contact).

---

## Project Structure Overview

```
├── app/                  # Controllers, Models, Middleware
├── bootstrap/            # Laravel bootstrap files
├── config/               # Application configuration
├── database/             # Migrations, seeders, SQLite & SQL dump
│   ├── ageless_db.sql    # MySQL database dump for phpMyAdmin
│   ├── database.sqlite   # Preloaded SQLite database
│   └── migrations/       # Database migrations
├── public/               # Webroot (index.php, assets, storage uploads, images)
│   ├── assets/           # CSS, JS, Fonts, and UI Images
│   └── storage/          # Media upload folders (blogs, products, projects)
├── resources/            # Blade views and frontend templates
├── routes/               # Route definitions (web.php, console.php)
├── storage/              # Logs, cache, framework session storage & upload storage
├── .env                  # Preconfigured local environment
├── artisan               # Laravel CLI runner
└── composer.json         # PHP package dependencies
```
