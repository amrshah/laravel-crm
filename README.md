Laravel vCard CRM (Mini)

A simple Laravel-based CRM for managing and sharing digital vCards.
Designed for use at events like Gitex and DigiMarkOn for roles such as Chairman and Director of Marketing.

--------------------------------------------------
Features
--------------------------------------------------
- Manage contacts (create, edit, delete)
- Download vCards for each contact
- Generate QR codes linking to vCards
- Pre-seeded with example Chairman and Director Marketing contacts

--------------------------------------------------
Requirements
--------------------------------------------------
- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL / MariaDB
- Git

--------------------------------------------------
Installation
--------------------------------------------------
1) Clone the Repository
   git clone https://github.com/amrshah/laravel-crm.git
   cd laravel-crm

2) Install PHP Dependencies
   composer install

3) Install Frontend Dependencies
   npm install && npm run dev

4) Environment Setup
   Copy .env.example to .env and update database credentials:
     cp .env.example .env
     php artisan key:generate

   Edit .env:
     DB_DATABASE=your_database_name
     DB_USERNAME=your_database_user
     DB_PASSWORD=your_database_password

5) Run Migrations & Seeders
   php artisan migrate --seed
   (This creates tables and inserts sample Chairman and Director Marketing contacts)

6) Serve the Application
   php artisan serve
   Visit: http://localhost:8000

--------------------------------------------------
Usage
--------------------------------------------------
- Login/Register using Laravel Breeze authentication.
- Add new contacts via the dashboard.
- Download vCards directly from the contact list.
- Scan QR codes to quickly share contact details.

--------------------------------------------------
Notes
--------------------------------------------------
- .gitignore excludes vendor/ and node_modules/ to keep repository clean.
- Images uploaded for contacts will be stored in storage/app/public.
  Run:
     php artisan storage:link
  to make them accessible.

--------------------------------------------------
License
--------------------------------------------------
MIT License.
