# CONTACT - BUILD 1

A low-level contact package for Laravel by Phyxle Infotech (Pvt) Ltd.

## INSTALL

> This package will only works properly on the `Laravel Starter Kit` by Phyxle Infotech (Pvt) Ltd. Therefore, you need to install it at first. Click [this link](https://gitlab.com/phyxle/laravel-starter-kit/-/archive/master/laravel-starter-kit-master.zip) to download the `Laravel Starter Kit` or clone it directly from the company repository.

**NOTE: Before installing this package, you need to configure your mail server properly.**

First, you need to download this package. Click [this link](https://gitlab.com/phyxle/contact/-/archive/master/contact-master.zip) to download the package.

Then, you need to create a directory called `packages` in the root path of your app.

```
mkdir packages
```

After that, create another directory called `Contact` inside the `packages` directory.

```
mkdir packages/Contact
```

Then, unzip the downloaded package and put files of the package inside the `packages/Contact` directory.

After that, you need to install required Composer packages.

```
cd packages/Contact
composer install
```

Next, you need to autoload classes of this package. Append namespace of this package in `autoload > psr-4` section of the `composer.json` file.

```json
"autoload": {
    "psr-4": {
        "Phyxle\\Contact\\": "packages/Contact/src/"
    }
}
```

After that, you need to dump a new `autoload.php` file.

```
composer dump-autoload -o
```

Then, you need to register the service provider of this package. Insert `ContactServiceProvider` class into `providers` array of the `config/app.php` file.

```php
'providers' => [
    /*
     * Package Service Providers...
     */
    Phyxle\Contact\Providers\ContactServiceProvider::class,
],
```

Then, you need to publish assets of this package.

```
php artisan vendor:publish --tag=contact
```

Finally, you need to create a variable named `MAIL_INFO_ADDRESS` in `.env` file.

```
MAIL_INFO_ADDRESS=info@test.com
```

## INCLUDES

### ROUTES

Routes are located in `Contact/routes` directory.

These routes are included in this package.

```
/contact ---------- GET
/contact/mail ----- POST
```

All routes are enabled in default. If you want to disable any route, you need to comment it.

### CONTROLLERS

Controllers are located in `Contact/src/Controllers` directory.

If you want to customize the logic, you need to edit those controllers.

### MAILABLES

Mailables are located in `Contact/src/Mail` directory.

If you want to customize the logic, you need to edit those mailables.

### VIEWS

Views are located in `Contact/views` directory.

If you want to customize the design of views, you need to edit those view files.

### ASSETS

Assets are located in `Contact/public` directory.

If you want to include custom assets to views, you need to put them in `Contact/public` directory and re-publish those assets with `--force` flag.

```
php artisan vendor:publish --tag=contact --force
```
