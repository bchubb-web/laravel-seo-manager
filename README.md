# SEO management without a CMS

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bchubb-web/laravel-seo-manager.svg?style=flat-square)](https://packagist.org/packages/bchubb-web/laravel-seo-manager)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/bchubb-web/laravel-seo-manager/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/bchubb-web/laravel-seo-manager/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/bchubb-web/laravel-seo-manager/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/bchubb-web/laravel-seo-manager/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bchubb-web/laravel-seo-manager.svg?style=flat-square)](https://packagist.org/packages/bchubb-web/laravel-seo-manager)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-seo-manager.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-seo-manager)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Prerequisites

You must have a filament panel installed to use this package. you can specify the panel to use this package with the install command

## Installation

You can install the package via composer:

```bash
composer require bchubb-web/laravel-seo-manager
```

then publish the required files

```bash
php artisan seo:install
```
This will publish a config file, migration and generate a filament resource for the seo manager


You can then run the migration to create the required tables
```bash
php artisan migrate
```

## The toolbar

To add the toolbar to your site add the following tag at the beginning of your body tag.
```blade
@livewire('seo-manager:toolbar')
```
Currently you will have to handle conditional rendering of the toolbar when the user is not logged in yourself.

Optionally, you can publish the toolbar view and customise yourself
```bash
php artisan vendor:publish --tag="laravel-seo-manager-views"
```


## Usage

```php
$seoManager = new Bchubbweb\SeoManager();
echo $seoManager->echoPhrase('Hello, Bchubbweb!');
```

## Credits

- [Billy Chubb](https://github.com/bchubb-web)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
