<?php
use dosamigos\chartjs\ChartJs;
?>
<div class="pull-<?= $position ?> col-xs-12 col-md-<?= $width ?> widget-height-<?= $height ?>">
        <div class="panel panel-default dw-widget">
            <div class="panel-heading"><?= Yii::t('art/user', 'Users Browser') ?></div>
            <div class="panel-body">
<?= ChartJs::widget([
    'type' => 'doughnut',    
    'data' => [
        'labels' => ["Chrome", "IE", "FireFox", "Safari", "Opera", "Others"],
        'datasets' => [
            [
               'backgroundColor' => [
                'rgba(77, 117, 133, 0.2)',
                'rgba(77, 117, 133, 0.4)',
                'rgba(77, 117, 133, 0.6)',
                'rgba(77, 117, 133, 0.8)',
                'rgba(77, 117, 133, 0.9)',
                'rgba(77, 117, 133, 1)',               
                
            ],
                'data' => [65,3,23,12,50,25],           
            ], 
            
        ]
    ]
]);
?>
                
 </div>
        </div>
    </div>