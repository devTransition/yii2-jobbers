# Asychronous job processing for Yii 2

This module provides the [php-jobbers](https://github.com/devtransition/php-jobbers) integration for the [Yii framework 2.0](http://www.yiiframework.com).

# !!!!!!!!!!!! NOT YET WORKING !!!!!!!!!!!!

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

### Highlights
- Easy integration in every existing class via traits
- Every method can be called asynchronously (transparent) and not just pre defined jobs
- Different queue backends like Rabbitmq or Redis are supported
- Web views and commands for monitoring and management

## Install

Via Composer

``` bash
$ composer require devtransition/yii2-jobbers
```

## Usage

``` php
whattodo();
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Credits

- [Nicolas Wild][link-author]
- [All Contributors][link-contributors]

## License

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this work except in compliance with the License.
You may obtain a copy of the License in the [LICENSE File](LICENSE) file, or at:

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.


[ico-version]: https://img.shields.io/packagist/v/devtransition/yii2-jobbers.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-Apache-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/devtransition/yii2-jobbers/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/devtransition/yii2-jobbers.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/devtransition/yii2-jobbers.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/devtransition/yii2-jobbers.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/devtransition/yii2-jobbers
[link-travis]: https://travis-ci.org/devtransition/yii2-jobbers
[link-scrutinizer]: https://scrutinizer-ci.com/g/devtransition/yii2-jobbers/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/devtransition/yii2-jobbers
[link-downloads]: https://packagist.org/packages/devtransition/yii2-jobbers
[link-author]: https://github.com/devtransition
[link-contributors]: ../../contributors
