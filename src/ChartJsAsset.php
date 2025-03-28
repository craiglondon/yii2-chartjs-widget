<?php

/*
 * This file is part of the 2amigos/yii2-chartjs-widget project.
 * (c) 2amigOS! <http://2amigos.us/>
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace dosamigos\chartjs;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 *
 * ChartPluginAsset
 */
class ChartJsAsset extends AssetBundle
{
    public function init(): void
    {
        $this->sourcePath = '@vendor/nnnick/chartjs';

        $this->css = [
            'dist/Chart.min.css',
        ];

        $this->js = [
            'dist/Chart.bundle.js',
        ];

        $this->depends = [
            JqueryAsset::class,
        ];

        parent::init();
    }
}
