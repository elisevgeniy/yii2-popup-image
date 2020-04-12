Yii2 Popup Image
========
Based on a plugin [jQuery Lightbox v2.11.1 by Lokesh Dhakar](https://lokeshdhakar.com/projects/lightbox2/)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist elisevgeniy/yii2-lifhtbox2-lokeshdhakar "*"
```

or add

```
"elisevgeniy/yii2-lifhtbox2-lokeshdhakar": "*"
```

to the require section of your `composer.json` file.

Usage
-----

Once the extension is installed, simply use it in your code by:

```php
<?= \b4djo\popup_image\PopupImageWidget::widget([
    'thumbnail'     => $thumbnailUrl,
    'source'        => $sourceUrl,
    'description'   => $description,
    'group' => "default_group",
    'height' => "100%",
    'width' => "100%",
    'style' => ""
]); ?>
```
