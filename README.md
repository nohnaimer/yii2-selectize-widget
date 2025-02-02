# Selectize JS Widget for Yii2

[![Latest Version](https://img.shields.io/github/tag/2amigos/yii2-selectize-widget.svg?style=flat-square&label=release)](https://github.com/2amigos/yii2-selectize-widget/tags)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/2amigos/yii2-selectize-widget/master.svg?style=flat-square)](https://travis-ci.org/2amigos/yii2-selectize-widget)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/2amigos/yii2-selectize-widget.svg?style=flat-square)](https://scrutinizer-ci.com/g/2amigos/yii2-selectize-widget/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/2amigos/yii2-selectize-widget.svg?style=flat-square)](https://scrutinizer-ci.com/g/2amigos/yii2-selectize-widget)
[![Total Downloads](https://img.shields.io/packagist/dt/2amigos/yii2-selectize-widget.svg?style=flat-square)](https://packagist.org/packages/2amigos/yii2-selectize-widget)

[Selectize](https://selectize.github.io/selectize.js/) is an extensible jQuery-based custom &lt;select&gt; UI control. It's useful for tagging, contact lists, country selectors, and so on. It clocks in at around ~7kb (gzipped). The goal is to provide a solid & usable experience with a clean and powerful API.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ composer require 2amigos/yii2-selectize-widget:~1.0
```

or add

```
"2amigos/yii2-selectize-widget": "~1.0"
```

to the `require` section of your `composer.json` file.

For selectize with bootstrap4 theme run

```bash
$ composer require 2amigos/yii2-selectize-widget:~2.0
```

or add

```
"2amigos/yii2-selectize-widget": "2.0.*"
```

to the `require` section of your `composer.json` file.

## Usage

Selectize has lots of configuration options. For further information, please check the Selectize plugin [website](https://selectize.github.io/selectize.js/).

### Text input widget

To use text input widget add the following to the view

```php
use dosamigos\selectize\SelectizeTextInput;

echo SelectizeTextInput::widget([
    'name' => 'tags',
    'value' => 'love, this, game',
    'clientOptions' => [
        // ...
    ],
]);
```

### Dropdown list widget

To use dropdown list widget add the following to the view

```php
use dosamigos\selectize\SelectizeDropDownList;

echo SelectizeDropDownList::widget([
    'name' => 'tags',
    'items' => ['love', 'this', 'game'],
    'clientOptions' => [
        // ...
    ],
]);
```

## Configuration
SelectizeDropDownList extends from [InputWidget](http://www.yiiframework.com/doc-2.0/yii-widgets-inputwidget.html), but have additional properties that can be configured.

|Property|Type|Default|Description
|-|-|-|-|
|`loadUrl`|string&#124;array|null|Optional. This parameter will be passed to [Url::to](http://www.yiiframework.com/doc-2.0/guide-runtime-routing.html). If set, selectize plugin will be configured to send ajax requests to the defined url to retrieve options. Url must return a valid JSON response.  |
|`queryParam`|string|'query'|The name of the request parameter to use on ajax requests|
|`clientOptions`|array|null|Configuration of selectize plugin. This configuration is individual for each selectize instance.|

## Testing

```bash
$ ./vendor/bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Antonio Ramirez](https://github.com/tonydspaniard)
- [All Contributors](https://github.com/2amigos/yii2-selectize-widget/graphs/contributors)

## License

The BSD License (BSD). Please see [License File](LICENSE.md) for more information.

<blockquote>
    <a href="http://www.2amigos.us"><img src="http://www.gravatar.com/avatar/55363394d72945ff7ed312556ec041e0.png"></a><br>
    <i>web development has never been so fun</i><br> 
    <a href="http://www.2amigos.us">www.2amigos.us</a>
</blockquote>
