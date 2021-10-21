<?php
/**
 * @link https://github.com/2amigos/yii2-selectize-widget
 * @copyright Copyright (c) 2013-2017 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace dosamigos\selectize;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;
use yii\bootstrap5\BootstrapPluginAsset;

/**
 * SelectizeAsset
 *
 * @author 2amigos.us <hola@2amigos.us>
 */
class SelectizeAsset extends AssetBundle
{
    public $sourcePath = '@npm/selectize/dist';

    public $css = [
        'css/selectize.bootstrap5.css',
    ];
    public $js = [
        'js/standalone/selectize.js',
    ];
    public $depends = [
        BootstrapPluginAsset::class,
        JqueryAsset::class,
    ];
}
