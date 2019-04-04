<?php
use dosamigos\chartjs\ChartJs;
?>
<div class="pull-<?= $position ?> col-xs-12 col-md-<?= $width ?> widget-height-<?= $height ?>">
        <div class="panel panel-default dw-widget">
            <div class="panel-heading"><?= Yii::t('art/user', 'Users Browser') ?></div>
            <div class="panel-body">
<?= ChartJs::widget([
    'type' => 'doughnut',
    'clientOptions' => [
        'legend' => [
            'display' => true,
            'position' => 'left',
            'labels' => [
                'fontSize' => 14,
                'fontColor' => "#425062",
            ]
        ],
    ],  
     'data' => [
        'labels' => $labels,
        'datasets' => [
            [
               'backgroundColor' => $backgroundColor,
               'data' => $data,           
            ], 
            
        ]
    ]
]);
?>
                
 </div>
        </div>
    </div>