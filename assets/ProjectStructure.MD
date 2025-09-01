# Project structure:
codeigniter-author-book-management/
├── app/
│   ├── Config/
│   │   └── Routes.php
│   ├── Controllers/
│   │   ├── AuthorController.php
│   │   └── BookController.php
│   ├── Models/
│   │   ├── AuthorModel.php
│   │   └── BookModel.php
│   ├── Database/
│   │   └── Migrations/
│   │       ├── 2025-08-31-000001_CreateAuthors.php
│   │       └── 2025-08-31-000002_CreateBooks.php
├── public/
│   └── index.php
├── .env
└── composer.json


# Run Migrations Manually:
php spark migrate

# Start the Local Server:
php spark serve



