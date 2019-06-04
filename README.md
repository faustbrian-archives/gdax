# GDAX PHP Client

[![Build Status](https://img.shields.io/travis/plients/GDAX-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/GDAX-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/gdax.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/GDAX-PHP-Client.svg?style=flat-square)](https://github.com/plients/GDAX-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/GDAX-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/GDAX-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require plients/gdax
```

## Usage

```php
<?php

$client = new Plients\GDAX\Client('key', 'secret', 'passphrase');

dump($client->api('Accounts')->all());
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
