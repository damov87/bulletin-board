### Readme to setup project

- clone repository to folder in which you are
```bash
git clone https://github.com/damov87/bulletin-board.git .
```

- create `.env` file in root path of project, with your local configs, example in `.env.example`

- `create` new database if not exist:
```bash
mysql -u root -p
CREATE DATABASE bulletin
```

- update all dependencies of the project
```bash
composer update
```

- migrate and seed data to database:
```bash
php artisan migrate --seed
```

- start laravel development server (on url http://127.0.0.1:8000):
```bash
php artisan serve
```