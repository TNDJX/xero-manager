# Nova XeroManager

[![GitHub license](https://img.shields.io/github/license/tndjx/xero-manager?style=flat-square)](https://github.com/tndjx/xero-manager/blob/master/LICENSE)
[![Packagist Downloads](https://img.shields.io/packagist/dt/tndjx/xero-manager?style=flat-square&logo=packagist)](https://packagist.org/packages/tndjx/xero-manager)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/tndjx/xero-manager.svg?style=flat-square&logo=composer)](https://packagist.org/packages/tndjx/xero-manager)

----
# Intro
Nova XeroManager is a package based on [laravel-xero-oauth2](https://github.com/webfox/laravel-xero-oauth2)

It is a simple way that helps you manage your connection to xero.com

----



## Requirements:

- PHP 8.0 or higher
- Nova 4

## Installation
To get started just install the package via composer:

```shell
composer require tndjx/xero-manager
```

After that register tool in `NovaServiceProvider`:

```php
public function tools()
{
    return [
        \Tndjx\XeroManager\XeroManager::make(),
    ];
}
```

That's it, you're ready to go!

## Restricting Access
You can restrict access to the tool by using `canSee` method in `NovaServiceProvider`:

```php
public function tools()
{
    return [
        \Tndjx\XeroManager\XeroManager::make()->canSee(function ($request) {
            return $request->user()->isAdmin();
        }),
    ];
}
```

#### Screenshot
![screenshot.png](screenshot.png)

----


## License

This software is released under [The MIT License (MIT)](LICENSE.txt).
