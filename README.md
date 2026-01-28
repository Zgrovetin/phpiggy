Title

    phpiggy — Simple PHP Expense Tracker

Short description

    A lightweight PHP application for tracking personal/business expenses. Includes UI, categories, expense list, and basic reporting. Demo hosted (Cloudways) — use the demo link to view UI quickly. 

Core features

    Add / edit / delete expenses.
    Categorize expenses.
    Expense list and simple reports.
    Basic authentication (if included) or simple session-based access.
    SQL file included for easy DB setup.

Tech stack

    PHP (vanilla) • MySQL • HTML/CSS • Minimal JS

Quick setup (local or server)

    Clone
    git clone https://github.com/Zgrovetin/phpiggy.git
    cd phpiggy

    Database
        Create a MySQL database.
        Import database.sql (provided): mysql -u user -p database_name < database.sql

    Configure environment
        Copy .env.example to .env (or edit config file used by the app) and set DB credentials.

    Serve the app
        Place files in your web root (XAMPP, MAMP, or production server) or use PHP built-in server for quick local testing: php -S 127.0.0.1:8000 -t public

    Demo
        Live demo (Cloudways): https://phpstack-1258474-4521318.cloudwaysapps.com/
        username, password:
                    test@test.test

    License
        MIT. 
