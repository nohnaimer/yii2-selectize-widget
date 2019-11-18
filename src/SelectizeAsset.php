<?php
/**
 * @link https://github.com/2amigos/yii2-selectize-widget
 * @copyright Copyright (c) 2013-2017 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace dosamigos\selectize;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;
use yii\bootstrap4\BootstrapPluginAsset;

/**
 * SelectizeAsset
 *
 * @author 2amigos.us <hola@2amigos.us>
 */
class SelectizeAsset extends AssetBundle
{
    public $sourcePath = '@bower/selectize-bootstrap-4-style/dist';

    public $css = [
        'css/selectize.bootstrap4.css',
    ];
    public $js = [
        'js/selectize/standalone/selectize.js',
    ];
    public $depends = [
        BootstrapPluginAsset::class,
        JqueryAsset::class,
    ];
}
