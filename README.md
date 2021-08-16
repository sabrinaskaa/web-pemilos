# Laralos 

Laravel for pemilos
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



# Preview Laralos

<p align="center"><img src="public/preview/login.png" width="400"></p>

<p align="center"><img src="public/preview/voting.png" width="400"></p>

<p align="center"><img src="public/preview/visidanmisi.png" width="400"></p>

<p align="center"><img src="public/preview/hasilsuara.png" width="400"></p>



# How To Install and Run laravel sail?

!important!

## Installation

1) Dipastikan connect dengan internet

2) Os base on linux atau Windows WSL dan install git

3) Download sc ini menggunakan command
   ```bash
   git clone https://github.com/adzkyyy/web-pemilos.git 
   ``` 

4) Install dependencies
   ```bash
   cd web-pemilos && composer install
   ```

5) Membuat alias path untuk binary sail
   ```bash
   echo "alias sail='vendor/bin/sail'" > ~/.bash_aliases && source ~/.bash_aliases
   ```

6) copy file .env.example menjadi .env untuk settingan konfigurasi


## Running

1) Dipastikan untuk connect ke internet untuk menginstall image dari registry  

2) Masuk ke directory web-laravel dan ketik command
   ```bash
   sail up -d 
   ```
