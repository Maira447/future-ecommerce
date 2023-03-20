# future-ecommerce
Responsive project with Laravel and PHP 8 to implement an E-commerce.

## Execution:

```
    $ git clone git@github.com:fernandamsouza/future-ecommerce.git
    $ cd future-ecommerce/
    $ composer update
    $ touch .env.example ---> change connection with database and email smtp
    $ php artisan key:generate
    $ php artisan storage:link
    $ php artisan migrate --seed
    $ php artisan serve
```

## TODO

[ ] Tests
[ ] Implement integration with payment plataforms
