# ci_php
Validator for Uruguayan ID

This library is a porting of https://github.com/picandocodigo/ci_js for PHP

## Usage

### Install it via composer:

```composer require leewayweb/ci_php:*```

### Include it in your project

```php
<?php

require_once 'vendor/autoload.php';

use Leewayweb\CiValidator\CiValidator;

$validator = new CiValidator();
```

## Methods available

### validate_ci

Takes a CI as a string and returns a boolean indicating the validity of the ID.

Example:
========

```php
<?php

require_once 'vendor/autoload.php';

use Leewayweb\CiValidator\CiValidator;

$validator = new CiValidator();

echo "Validation for '1.111.111': ".($validator->validate_ci( '1.111.111' ) ? 'true' : 'false').PHP_EOL;
```

### validation_digit

Takes a CI as a string and returns an integer (the validation digit for the given CI).

Example:
========

```php
<?php

require_once 'vendor/autoload.php';

use Leewayweb\CiValidator\CiValidator;

$validator = new CiValidator();

echo "Validation digit for '1.111.111': ".$validator->validation_digit( '1.111.111' ).PHP_EOL;
```

### random_ci

Returns a randomly (but valid) generated CI.

Example:
========

```php
<?php

require_once 'vendor/autoload.php';

use Leewayweb\CiValidator\CiValidator;

$validator = new CiValidator();

echo "Random ci: ".$validator->random_ci().PHP_EOL;`
