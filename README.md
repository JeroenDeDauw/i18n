# i18n

Library that provides a simple i18n message interface that wraps some of the MediaWiki i18n
functionality. The aim of this library is to collect the code needed by any extension to
MediaWiki that wants to use the MediaWiki i18n system though at the same time not fall victim
to the design issues of its code.

MediaWiki 1.20 or later is required.

[![Build Status](https://secure.travis-ci.org/JeroenDeDauw/i18n.png?branch=master)](http://travis-ci.org/JeroenDeDauw/i18n)

On [Packagist](https://packagist.org/packages/jeroen-de-dauw/i18n):
[![Latest Stable Version](https://poser.pugx.org/jeroen-de-dauw/i18n/version.png)](https://packagist.org/packages/jeroen-de-dauw/i18n)
[![Download count](https://poser.pugx.org/jeroen-de-dauw/i18n/d/total.png)](https://packagist.org/packages/jeroen-de-dauw/i18n)

## Installation

The recommended way to use this library is via [Composer](http://getcomposer.org/).

### Composer

To add this package as a local, per-project dependency to your project, simply add a
dependency on `jeroen-de-dauw/i18n` to your project's `composer.json` file.
Here is a minimal example of a `composer.json` file that just defines a dependency on
version 1.0 of this package:

    {
        "require": {
            "jeroen-de-dauw/i18n": "1.0.*"
        }
    }

### Manual

Get the code of this package, either via git, or some other means. Also get all dependencies.
You can find a list of the dependencies in the "require" section of the composer.json file.
Then take care of autoloading the classes defined in the src directory.

## Authors

i18n has been written by [Jeroen De Dauw] (https://github.com/JeroenDeDauw), partially
as [Wikimedia Germany](https://wikimedia.de) employee for the [Wikidata project](https://wikidata.org/).

## Release notes

### 0.1 (2013-12-07)

Initial release with these features:

* MessageBuilder interface
* MediaWiki specific implementation
	* MediaWiki\MessageTextBuilder implementation of MessageBuilder
	* MediaWiki\MessageObjectBuilder to construct Message objects
	* MediaWiki\MessageBuilderFactory for construction of the message builders
	* MediaWiki\LanguageTypes enum with the available language types

## Links

* [i18n on Packagist](https://packagist.org/packages/jeroen-de-dauw/i18n)
* [i18n on TravisCI](https://travis-ci.org/JeroenDeDauw/i18n)
