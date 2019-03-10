<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TeachersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 't_id') ?>

    <?= $form->field($model, 't_name') ?>

    <?= $form->field($model, 'dob') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'department') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'subject') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
