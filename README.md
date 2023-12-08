## laravel8 bth.su test

1.  create a new Laravel project
```
composer create-project laravel/laravel:^8.0 bth.su-test
```
2.  install the frontend scaffolding using the `laravel/ui` with `bootstrap 4`
```
composer require laravel/ui:3.3.2
php artisan ui bootstrap --auth
npm install && npm run dev
```
