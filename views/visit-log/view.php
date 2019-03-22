<?php

use yii\widgets\DetailView;

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
                        'value' => $model->visitDatetime,
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
