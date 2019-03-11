# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bitsnbolts/laravel-collection-macros.svg?style=flat-square)](https://packagist.org/packages/bitsnbolts/laravel-collection-macros)
[![Build Status](https://img.shields.io/travis/bitsnbolts/laravel-collection-macros/master.svg?style=flat-square)](https://travis-ci.org/bitsnbolts/laravel-collection-macros)
[![Quality Score](https://img.shields.io/scrutinizer/g/bitsnbolts/laravel-collection-macros.svg?style=flat-square)](https://scrutinizer-ci.com/g/bitsnbolts/laravel-collection-macros)
[![Total Downloads](https://img.shields.io/packagist/dt/bitsnbolts/laravel-collection-macros.svg?style=flat-square)](https://packagist.org/packages/bitsnbolts/laravel-collection-macros)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require bitsnbolts/laravel-collection-macros
```

## Usage
### `replaceInKeys`

Do a find and replace on all the keys of the collection.

```php
$data = new Collection(['foo_bar' => 1]);
$data->replaceInKeys('_', ' '); // Collection(['foobar' => 1])
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email thijs@bitsnbolts.nl instead of using the issue tracker.

## Credits

- [Thijs van den Anker](https://github.com/bitsnbolts)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
