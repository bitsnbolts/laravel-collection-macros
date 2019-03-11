# Laravel Collection Macros

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bitsnbolts/laravel-collection-macros.svg?style=flat-square)](https://packagist.org/packages/bitsnbolts/laravel-collection-macros)
[![Build Status](https://img.shields.io/travis/com/bitsnbolts/laravel-collection-macros/master.svg?style=flat-square)](https://travis-ci.org/bitsnbolts/laravel-collection-macros)
[![Quality Score](https://img.shields.io/scrutinizer/g/bitsnbolts/laravel-collection-macros.svg?style=flat-square)](https://scrutinizer-ci.com/g/bitsnbolts/laravel-collection-macros)
[![Total Downloads](https://img.shields.io/packagist/dt/bitsnbolts/laravel-collection-macros.svg?style=flat-square)](https://packagist.org/packages/bitsnbolts/laravel-collection-macros)

This repository contains some useful collection macros.

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
$data->replaceInKeys('_', ' '); // Collection(['foo bar' => 1])
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Thijs van den Anker](https://github.com/thijsvdanker)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
