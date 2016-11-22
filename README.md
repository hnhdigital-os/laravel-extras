# Laravel Extras

This package has been developed by H&H|Digital, an Australian botique developer. Visit us at [hnh.digital](http://hnh.digital).

[![Latest Stable Version](https://poser.pugx.org/bluora/laravel-extras/v/stable.svg)](https://packagist.org/packages/bluora/laravel-extras) [![Total Downloads](https://poser.pugx.org/bluora/laravel-extras/downloads.svg)](https://packagist.org/packages/bluora/laravel-extras) [![Latest Unstable Version](https://poser.pugx.org/bluora/laravel-extras/v/unstable.svg)](https://packagist.org/packages/bluora/laravel-extras) [![License](https://poser.pugx.org/bluora/laravel-extras/license.svg)](https://packagist.org/packages/bluora/laravel-extras)

[![Build Status](https://travis-ci.org/bluora/laravel-extras.svg?branch=master)](https://travis-ci.org/bluora/laravel-extras) [![StyleCI](https://styleci.io/repos/74417746/shield?branch=master)](https://styleci.io/repos/74417746) [![Test Coverage](https://codeclimate.com/github/bluora/laravel-extras/badges/coverage.svg)](https://codeclimate.com/github/bluora/laravel-extras/coverage) [![Issue Count](https://codeclimate.com/github/bluora/laravel-extras/badges/issue_count.svg)](https://codeclimate.com/github/bluora/laravel-extras) [![Code Climate](https://codeclimate.com/github/bluora/laravel-extras/badges/gpa.svg)](https://codeclimate.com/github/bluora/laravel-extras) 

Provides various extra features and functionality for Laravel 5.

* Blade directives to reduce php in a blade template.

## Install

Via composer:

`$ composer require bluora/laravel-extras dev-master`

Enable additional blade directions by editing config/app.php.

```php
    'providers' => [
        ...
        Bluora\LaravelExtras\BladeDirectiveServiceProvider::class,
        ...
    ];
```

## Usage

In a blade template:

```php
<?php
@call('test()')
@csrf
@raw(echo 'This is a raw command')
```

Would render to:

```php
<?php test(); ?>
<?= csrf_field(); ?>
<?php echo 'This is a raw command'; ?>
```

## Contributing

Please see [CONTRIBUTING](https://github.com/bluora/laravel-extras/blob/master/CONTRIBUTING.md) for details.

## Credits

* [Rocco Howard](https://github.com/therocis)
* [All Contributors](https://github.com/bluora/laravel-extras/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/bluora/laravel-extras/blob/master/LICENSE) for more information.
