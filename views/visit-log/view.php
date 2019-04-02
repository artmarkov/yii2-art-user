<?php

use yii\widgets\DetailView;
use artsoft\helpers\Html;

/**
 * @var yii\web\View $this
 * @var artsoft\models\UserVisitLog $model
 */

$this->title = Yii::t('art/user', 'Log №{id}', ['id' => $model->id]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('art/user', 'Users'), 'url' => ['/user/default/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('art/user', 'Visit Log'), 'url' => ['/user/visit-log/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-visit-log-view">

    <h3 class="lte-hide-title"><?= $this->title ?></h3>
 <?php if (Yii::$app->user->isSuperadmin): ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <?= Html::a(Yii::t('art', 'Delete'), ['/user/visit-log/delete', 'id' => $model->id], [
                'class' => 'btn btn-sm btn-default',
                'data' => [
                    'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]) ?>
        </div>
 <?php endif; ?>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    [
                        'attribute' => 'user_id',
                        'value' => @$model->user->username,
                    ],
                    [
                        'attribute' => 'visit_time',
                        'value' => $model->visitDatetime 
                            . ' ' . $model->geoLocation['city']['name_en'] 
                            . ' ' . $model->geoLocation['country']['name_en'],
                    ],
                    'ip',
                    'language',
                    'os',
                    'browser',
                    'user_agent',
                ],
            ]) ?>
        </div>
    </div>
</div>
