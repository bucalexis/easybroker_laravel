

## Running on local

To run this project easily you can use Laravel [Sail](https://laravel.com/docs/11.x/sail#main-content). For this you must have docker running on your machine.

Execute the commands
```
./vendor/bin/sail up
./vendor/bin/sail php artisan migrate
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

##Tests
There are two very basic tests in the project that can be executed with the command

```
./vendor/bin/sailsail php artisan test
```

## Demo

[You can watch here a live demo of the project](https://laravel-production-acb6.up.railway.app/). 


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
