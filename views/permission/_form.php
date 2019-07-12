<?php

/**
 * @var artsoft\widgets\ActiveForm $form
 * @var artsoft\models\Permission $model
 */

use artsoft\helpers\Html;
use artsoft\models\AuthItemGroup;
use yii\helpers\ArrayHelper;
use artsoft\widgets\ActiveForm;

?>

<div class="permission-form">

    <?php
    $form = ActiveForm::begin([
        'id' => 'permission-form',
        'validateOnBlur' => false,
    ])
    ?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?= $form->field($model, 'description')->textInput(['maxlength' => 255, 'autofocus' => $model->isNewRecord ? true : false]) ?>
                    
                    <?= $form->field($model, 'name')->textInput(['maxlength' => 64]) ?>
                    
                    <?= $form->field($model, 'group_code')->dropDownList(ArrayHelper::map(AuthItemGroup::find()->asArray()->all(), 'code', 'name'), ['prompt' => '']) ?>
                </div>
                <div class="panel-footer">
                    <div class="record-info">
                        <div class="form-group">
                            <?php if ($model->isNewRecord): ?>
                                <?= Html::submitButton(Yii::t('art', 'Create'), ['class' => 'btn btn-primary']) ?>
                                <?= Html::a(Yii::t('art', 'Cancel'), ['/user/permission/index'], ['class' => 'btn btn-default']) ?>
                            <?php else: ?>
                                <?= Html::submitButton(Yii::t('art', 'Save'), ['class' => 'btn btn-primary']) ?>
                                <?= Html::a(Yii::t('art', 'Delete'), ['delete', 'id' => $model->name], [
                                    'class' => 'btn btn-danger',
                                    'data' => [
                                        'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                        'method' => 'post',
                                    ],
                                ]) ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
