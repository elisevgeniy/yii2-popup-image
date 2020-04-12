<?php

namespace b4djo\popup_image;

use yii\base\Widget;

/**
 * Class PopupImageWidget
 * @package b4djo\popup_image
 */
class PopupImageWidget extends Widget
{
    /**
     * @var string
     */
    public $thumbnail;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $style = "";

    /**
     * @var string
     */
    public $group = "default_group";

    public $height = "125px";

    public $width = "150px";

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->registerAssets();
    }

    /**
     * @return string
     */
    public function run()
    {
        return $this->render('view');
    }

    /**
     * Register assets
     */
    private function registerAssets()
    {
        $path = \Yii::$app->getAssetManager()->publish(__DIR__ . '/assets/');
        $this->getView()->registerCssFile($path[1] . '/css/lightbox.css');
        $this->getView()->registerJsFile(
            $path[1] . '/js/lightbox.js',
            [
                'position' => \yii\web\View::POS_END,
                'depends'  => ['\yii\web\JqueryAsset'],
            ]
        );
    }
}
