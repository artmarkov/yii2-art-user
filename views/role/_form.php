<?php

/**
 * @var artsoft\widgets\ActiveForm $form
 * @var artsoft\models\Role $model
 */
use artsoft\helpers\Html;
use artsoft\widgets\ActiveForm;

?>

<div class="role-form">

    <?php
    $form = ActiveForm::begin([
        'id' => 'role-form',
        'validateOnBlur' => false,
    ])
    ?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?= $form->field($model, 'description')->textInput(['maxlength' => 255, 'autofocus' => $model->isNewRecord ? true : false]) ?>
                    <?= $form->field($model, 'name')->textInput(['maxlength' => 64]) ?>
                </div>
                <div class="panel-footer">
                    <div class="record-info">
                        <div class="form-group">
                            <?php if ($model->isNewRecord): ?>
                                <?= Html::submitButton(Yii::t('art', 'Create'), ['class' => 'btn btn-primary']) ?>
                                <?= Html::a(Yii::t('art', 'Cancel'), ['/user/role/index'], ['class' => 'btn btn-default']) ?>
                            <?php else: ?>
                                <?= Html::submitButton(Yii::t('art', 'Save'), ['class' => 'btn btn-primary']) ?>
                                <?= Html::a(Yii::t('art', 'Delete'),
                                    ['delete', 'id' => $model->name], [
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