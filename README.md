# Pugna Laravel Starter

![license](https://img.shields.io/badge/license-MIT-blue.svg)

This repository is intended for example project of [Pugna Admin Template](https://github.com/aljazari-studio/pugna) with [Laravel](https://laravel.com) and its [auth scaffolding](https://laravel.com/docs/5.7/authentication).

## Instruction

  - Make sure you have [Laravel project requirement](https://laravel.com/docs/5.7/installation) installed in your local machine
  - Clone this repository 
  - Point/change directory to your copy of this project
  - Run this on your command prompt/terminal
```sh
composer install
```
  - Create new database 
  - Copy and rename .env.example file to .env and fill your database credential into it
  - Generate key
```sh
php artisan key:generate
```
  - Run database migration
```sh
php artisan migrate
```
  - Then serve your application
```sh
php artisan serve
```
  - Open `localhost:8000/login` in your browser

## License

Pugna Laravel Starter is licensed under [MIT](https://choosealicense.com/licenses/mit/) . You can use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software. But you always need to state that Al Jazari Studio is the original author of this template.

Project is developed and maintained by [Al Jazari Studio](https://github.com/aljazari-studio) and [Fathur Hidayat](https://github.com/fathurhidayat3)
