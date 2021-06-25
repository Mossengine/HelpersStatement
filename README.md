<h1 align="center">Mossengine/HelpersStatement</h1>

<p align="center">
    <strong>A PHP sub library for the Mossengine/Helper library that provides Statement helper functions</strong>
</p>

<p align="center">
    <a href="https://github.com/Mossengine/HelpersStatement"><img src="https://badgen.net/packagist/name/Mossengine/HelpersStatement" alt="Source Code"></a>
    <a href="https://packagist.org/packages/Mossengine/HelpersStatement"><img src="https://badgen.net/packagist/v/Mossengine/HelpersStatement" alt="Download Package"></a>
    <a href="https://php.net"><img src="https://badgen.net/packagist/php/Mossengine/HelpersStatement" alt="PHP Programming Language"></a>
    <img src="https://badgen.net/circleci/github/Mossengine/HelpersStatement/master?icon=circleci" alt="Build Status">
    <a href="https://codecov.io/github/Mossengine/HelpersStatement"><img src="https://badgen.net/codecov/c/github/Mossengine/HelpersStatement/master?icon=codecov" alt="Codecov Code Coverage"></a>
    <a href="https://github.com/Mossengine/HelpersStatement/blob/master/LICENSE"><img src="https://badgen.net/packagist/license/Mossengine/HelpersStatement" alt="Read License"></a>
    <a href="https://packagist.org/packages/Mossengine/HelpersStatement/stats"><img src="https://badgen.net/packagist/dt/Mossengine/HelpersStatement" alt="Package downloads on Packagist"></a>
</p>

## About
This library can be used on it's own, however, it is intended to be used with the [Mossengine/Helper](https://github.com/Mossengine/Helper) library.

There is a group of Statement type classes with single methods within that single out logic only needed for the given use, you can call them directly or using the Mossgnein Helper you can call into them simply without needing to use them in your project.
## Installation

### Using composer to install
```
$ composer require mossengine/helpersstatement
```

### Adding to package.json
```json
{
    "require": {
        "mossengine/helpersstatement": "~1.0.0"
    }
}
```

## Usage

### Call helper method on a specific helper class
```php
// Require the autoloader, normal composer stuff
require 'vendor/autoload.php';

// Direct usage ( not intended )
$result = Mossengine\Helpers\_Statement\_Is::_Is(1, '===', 1);

// Mossengine Helper usage ( intended )
$result = Mossengine\Helper::Statement()::Is(1, '===', 1);
```

## Documentation
Read the <a href="/docs/readme.md">docs</a> for more details on Helpers Statement methods.
