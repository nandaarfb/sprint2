> Online Test PT DOT Indonesia
 
 ## Nanda Arief Bachtiar

**Sprint 2**
Meningkatnya kebutuhan Web service, tim engineer memutuskan untuk membuat swapable implementation​ untuk endpoint pencarian provinsi dan kota.
1. Membuat sumber data pencarian province & cities bisa melalui database​ atau direct API​ raja ongkir (swapable implementation). Proses swap implementasi dapat dilakukan melalui konfigurasi tanpa merubah source code yang sudah dibuat.
2. Menyediakan API login agar endpoint pencarian hanya bisa diakses oleh authorized user saja.
3. Membuat unit test / API test agar web service tetap reliable & maintainable

**Run Project**
1. Clone Project `git clone https://github.com/nandaarfb/sprint2.git`
2. Run Command `composer install`
3. copy `.env.example` and rename it to `.env`
4. edit env value of`DB_DATABASE=dot_test`
5. input env `RAJAONGKIR_ENDPOINT=https://api.rajaongkir.com/starter`
6. input env `RAJAONGKIR_APIKEY=0df6d5bf733214af6c6644eb8717c92c`
7. input env `DATASOURCE=API` or `DATASOURCE=DATABASE`, it a config to swap data source from database or direct API rajaongkir (*swapable implementation*)
8. Run Command `php artisan migrate`
9. Run Command `composer dump-autoload`
10. Run Command `php artisan db:seed`
11. Run Command `php artisan serve` to Run A Project

**Register User Authentication**
1. Open Postman
2. Click New Collection
3. Click New Request
4. **EDIT**Input url `https://localhost:8000/REGISTER` And method `POST`
5. And Run It

**Login User Authentication**
1. Open Postman
3. Click New Request
4. **EDIT**Input url `https://localhost:8000/LOGIN` And method `POST`
5. And Run It

**Tes API**
1. Open Postman
3. Click New Request
4. **Register User Authentication**
4. **Login User Authentication** to Access API below
4. Input url `https://localhost:8000/search/provincies?id=1` And method `GET`
5. And Run It
6. Input url `https://localhost:8000/search/cities?id=1` And method `GET`
7. And Run It

** Run Unit Test**
1. Bla
2. Bla

## Thank You

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

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
