<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## <h1 align="center">MULTI AUTHENTICATION<h1>

## Process
- composer require laravel/ui 
- php artisan ui bootstrap --auth 
- npm install
- npm run dev
- Add this "$table->boolean('user_type')->default(0);" in user migration file.
- php artisan make:middleware IsAdmin
## Output
