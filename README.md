Yii2 Popup Image
========
Based on a plugin [jQuery Lightbox v2.10.0 by Lokesh Dhakar](https://lokeshdhakar.com/projects/lightbox2/)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist b4djo/yii2-popup-image "*"
```

or add

```
"b4djo/yii2-popup-image": "*"
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
]); ?>
```