<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Teachers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 't_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dob')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
