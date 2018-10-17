# laravel-arabic-numbers

[![Latest Version on Packagist][ico-version]][link-releases]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Scrutinizer][ico-scrutinizer]][link-scrutinizer]
[![Maintainability][ico-codeclimate-maintainability]][link-codeclimate-maintainability]
[![Codacy Badge][ico-codacy]][link-codacy]
[![StyleCI][ico-styleci]][link-styleci]
[![Coverage Status][ico-coveralls]][link-coveralls]
[![Total Downloads][ico-downloads]][link-packagist]

This package allows you to fix Arabic numbers input .

## Table of contents
* [Installation](#installation)
* [Usage](#usage)
    * [Laravel](#laravel)
    * [Lumen](#lumen)
* [Extending](#extending)
* [Change log](#change-log)
* [Testing](#testing)
* [Contributing](#contributing)
* [Security](#security)
* [Credits](#credits)
* [License](#license)

## Installation

This package can be used in Laravel 5.4 and up.

You can install the package via composer:

``` bash
composer require mostafamaklad/laravel-arabic-numbers
```

## Usage

### Laravel
In `app/Http/Kernel.php`, register the middleware:

```php
protected $middleware = [
    //...
    \Maklad\ArabicNumbers\Http\Middleware\ArabicNumbers::class,
]
```

### Lumen

In `bootstrap/app.php`, register the middleware:

```php
$app->middleware([
    \Maklad\ArabicNumbers\Http\Middleware\ArabicNumbers::class,
]);
```

## Extending

If you need to EXTEND the existing `ArabicNumbers` middleware note that:

- Your `ArabicNumbers` middleware needs to extend the `Maklad\ArabicNumbers\Http\Middleware\ArabicNumbers` middleware
- Add the fields you want to except form the middle ware to 
```php
    /**
     * The attributes that should not be trimmed.
     *
     * @var array
     */
    protected $except = [
        //
    ];
```
  
## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CONDUCT](.github/CONDUCT.md) for details.

## Security

If you discover any security-related issues, please email dev.mostafa.maklad@gmail.com instead of using the issue tracker.

## Credits

- [Mostafa Maklad][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/mostafamaklad
[link-contributors]: ../../contributors
[link-releases]: ../../releases

[link-packagist]: https://packagist.org/packages/mostafamaklad/laravel-arabic-numbers
[ico-version]: https://img.shields.io/packagist/v/mostafamaklad/laravel-arabic-numbers.svg?style=flat-square
[ico-license]: https://img.shields.io/packagist/l/mostafamaklad/laravel-arabic-numbers.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/mostafamaklad/laravel-arabic-numbers.svg?style=flat-square

[link-travis]: https://travis-ci.org/mostafamaklad/laravel-arabic-numbers
[ico-travis]: https://img.shields.io/travis/mostafamaklad/laravel-arabic-numbers/master.svg?style=flat-square

[link-scrutinizer]: https://scrutinizer-ci.com/g/mostafamaklad/laravel-arabic-numbers
[ico-scrutinizer]: https://img.shields.io/scrutinizer/g/mostafamaklad/laravel-arabic-numbers.svg?style=flat-square

[link-codeclimate-maintainability]: https://codeclimate.com/github/mostafamaklad/laravel-arabic-numbers/maintainability
[ico-codeclimate-maintainability]: https://api.codeclimate.com/v1/badges/ce771a5084604b5c8feb/maintainability

[link-codacy]: https://www.codacy.com/app/mostafamaklad/laravel-arabic-numbers?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=mostafamaklad/laravel-arabic-numbers&amp;utm_campaign=Badge_Grade
[ico-codacy]: https://api.codacy.com/project/badge/Grade/d59514d4e06645c0bf89000f2491cfea

[link-styleci]: https://styleci.io/repos/152484267
[ico-styleci]: https://styleci.io/repos/152484267/shield?style=flat-square

[link-coveralls]: https://coveralls.io/github/mostafamaklad/laravel-arabic-numbers
[ico-coveralls]: https://img.shields.io/coveralls/mostafamaklad/laravel-arabic-numbers.svg?style=flat-square
