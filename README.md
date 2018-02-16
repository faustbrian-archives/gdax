# GDAX PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/GDAX-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/GDAX-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/gdax-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/GDAX-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/GDAX-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/GDAX-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/GDAX-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/gdax-php-client
```

## Usage

```php
<?php

$client = new BrianFaust\GDAX\Client('key', 'secret', 'passphrase');

dump($client->api('Accounts')->all());
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
