# future-ecommerce
Responsive project with Laravel and PHP 8 to implement an E-commerce.
Context: Online shopping for Metaverse. You can buy lands and avatars.

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

## Project:

- Ecommerce system where users can shop online and system administrators can control the flow of the platform through dashboards and CRUDs of products and categories.
- The system's landing page shows several products registered in different categories (all created by the ADM user)
- A user who is a customer can register on the platform and buy the available items. In order to complete the purchase, the user must confirm the link received in their email.
- When a user adds an item for purchase, that item is viewed in their cart. A user can add multiple items to a cart.
- In their account settings, user can track order and payment status.
- All orders placed on the platform can be managed by ADMs on their internal dashboard.
- The admin user has a dashboard, transaction history, list of system users, product CRUD, category CRUD and order history.


## TODO

[] Tests
[] Implement integration with payment plataforms
