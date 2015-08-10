<?php

/**
 * @copyright Copyright &copy;2015 Uros Gaber
 * @package yii2-jquery.inputmask
 * @version 1.0.0
 */

namespace urosg\widgets;

use yii\web\AssetBundle;

/**
 * Asset bundle for jquery.inputmask Widget
 *
 * @author Thiago Talma <thiago@thiagomt.com>
 * @since 1.0
 */
class InputMaskAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->js = ['jquery.inputmask.bundle' . (YII_DEBUG ? '' : '.min') . '.js'];
        $this->sourcePath = __DIR__ . '/../assets';
        parent::init();
    }
}
