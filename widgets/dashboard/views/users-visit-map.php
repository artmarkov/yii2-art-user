<?php

use yii\helpers\Html;
use cjtterabytesoft\widget\jvectormap\JvectorMap;

/**
* This file is part of the CJTTERABYTESOFT yii2-jvectormap
*
* (c) CJT TERABYTE LLC yii2-widget <https://github.com/cjtterabytesoft/yii2-jvectormap>
* For the full copyright and license information, please view the LICENSE.md
* file that was distributed with this source code
*
* @link: https://github.com/cjtterabytesoft/yii2-jvectormap
* @author: Wilmer Arámbula <cjtterabytellc@gmail.com>
* @copyright (c) CJT TERABYTE LLC
* @Widget: [yii2-jvectormap]
* @Layout [Plugin_JvectorMaps]
* @since: 0.0.1-dev
**/

?>
<div class="pull-<?= $position ?> col-xs-12 col-md-<?= $width ?> widget-height-<?= $height ?>">
<?= Html::beginTag('div', ['class' => 'panel panel-default dw-widget']) ?>
    <?= Html::beginTag('div', ['class' => 'panel-heading']) ?>
            <?= Yii::t('art','Site Visits') ?>
        <?= Html::endTag('div') ?>
        <?= Html::beginTag('div', ['class' => 'panel-body']) ?>
        
            <?= JvectorMap::widget([
                /** [div container] **/
                'id' => 'vmap',
                'style' => [
                    'border' => '1px solid rgba(228, 225, 225, 0.92)',
                    'height' => '300px',
                    'position' => 'relative',
                    'overflow' => 'hidden',
                ],
                /** [map config] **/
                'map' => 'world_mill',
                'backgroundColor' => '#fefefe',
//                'focusOn' => [
//                    'LT',
//                    'LV', 
//                    'EE', 
//                    'BY', 
//                    'UA', 
//                    'RU', 
//                ],
                'markers' => $markers,
                'markersSelectable' => true,
                'markersSelectableOne' => true,
                'markerStyle' => [
                    'initial' => [
                        'r' => 4,
                        'fill' => '#fff',
                        'fill-opacity' => 1,
                        'stroke' => '#000',
                        'stroke-width' => 2,
                        'stroke-opacity' => 0.4,
                    ],
                ],
                'panOnDrag' => true,
                'regionLabelStyle' => [
                    'initial' => [
                        'font-family' => 'Verdana',
                        'font-size' => '12',
                        'font-weight' => 'bold',
                        'cursor' => 'default',
                        'fill' => 'black',
                    ],
                    'hover' => [
                        'cursor' => 'pointer',
                    ],
                ],
                'regionsSelectable' => true,
                'regionsSelectableOne' => true,
//                'selectedMarkers' => [0,1],
//                'selectedRegions'=> ['US','AE'],
                'regionStyle' => [
                    'initial' => [
                        'fill' => '#CCCCCC',
                    ],
                ],
                'series' => [
                    'regions' => [[
                        'values' => $values,
                        'scale' => ['#81A5B3', '#4D7686'],
                        'normalizeFunction' => 'polynomial',
                    ]],
                ],
                'zoomAnimate' => true,
                'zoomMax' => 8,
                'zoomMin' => 1,
                'zoomOnScroll' => true,
            ]); ?>
        <?= Html::endTag('div') ?>
    <?= Html::endTag('div') ?>
    </div>