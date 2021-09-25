# Funny Error Pages
A simple Laravel Package that adds some funny error pages.

## Table of Content
- [Screenshots](#screenshots)
- [How to install](#how-to-install)
- [Credits](#credits)
- [License](#license)

---
## Screenshots

Heart | Lost | Space
------------ | ------------- | -------------
... | ... | ...


Space Invader | Vampire
------------ | -------------
... | ...

## How to install
You can install these custom error pages simply by using composer:
```bash
composer require
```

Now we just need to publish the error page itself _(so Laravel knows it's a custom one)_ and the public assets.
```bash
php artisan vendor:publish --provider="xPand4B\FunnyErrorPages\FunnyErrorPagesServiceProvider" --tag=funny-error-pages --tag=public
```

---
You also have the possibility to **_change config values, translations and the error pages_** itself.
Just use the following commands with the tag that you need **_(config, views, translation)_**.
```bash
php artisan vendor:publish --provider="xPand4B\FunnyErrorPages\FunnyErrorPagesServiceProvider" --tag={config|translation|views}
```

## Credits
* [Lost in space](https://dribbble.com/shots/4330167-404-Page-Lost-In-Space) Screen provided by [Saleh Riaz Qureshi](https://www.salehriaz.com/)

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.
