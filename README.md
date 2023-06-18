# Nova XeroManager

[![GitHub license](https://img.shields.io/github/license/tndjx/xero-manager?style=flat-square)](https://github.com/tndjx/xero-manager/blob/master/LICENSE)
[![Packagist Downloads](https://img.shields.io/packagist/dt/tndjx/xero-manager?style=flat-square&logo=packagist)](https://packagist.org/packages/tndjx/xero-manager)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/tndjx/xero-manager.svg?style=flat-square&logo=composer)](https://packagist.org/packages/tndjx/xero-manager)

----
Nova XeroManager is a package based on [laravel-xero-oauth2](https://github.com/webfox/laravel-xero-oauth2)
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
        new \Tndjx\XeroManager\XeroManager,
    ];
}
```

That's it, you're ready to go!

#### Screenshot
![screenshot.png](screenshot.png)

----


## License

This software is released under [The MIT License (MIT)](LICENSE.txt).
