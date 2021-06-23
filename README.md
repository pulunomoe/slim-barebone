# pulunomoe/slim-barebone

Barebone template for PHP 8+ Slim framework MVC web application, with minimal features. Use this as a starter for your awesome app!

## Built-in features

- MVC code structures with [Slim framework](https://www.slimframework.com/) and [Twig templating language](https://twig.symfony.com/)
- Base controller with extra helper methods: 
    - `render()` for rendering Twig template
    - `getFlash()` and `setFlash()` for flash session messages
    - `generateCsrfToken()` and `verifyCsrfToken()` for ...you guess it!
- PDO for accessing database

## Requirements

- PHP 8+
- PDO extension

## Usage

1. Clone this repository
2. Change the namespace to whatever you want
3. Run `composer install && composer dump-autoload`
4. That's it!

## Changelog

- v0.1 : Initial version
