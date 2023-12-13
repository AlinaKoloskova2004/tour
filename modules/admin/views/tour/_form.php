<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tour $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tour-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_depature')->textInput() ?>

    <?= $form->field($model, 'date_arrival')->textInput() ?>

    <?= $form->field($model, 'city_fly')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'old_number')->textInput() ?>

    <?= $form->field($model, 'child_number')->textInput() ?>

    <?= $form->field($model, 'day_number')->textInput() ?>

    <?= $form->field($model, 'is_hotter')->textInput() ?>

    <?= $form->field($model, 'id_country')->textInput() ?>

    <?= $form->field($model, 'id_operator')->textInput() ?>

    <?= $form->field($model, 'id_type')->textInput() ?>

    <?= $form->field($model, 'id_food')->textInput() ?>

    <?= $form->field($model, 'id_hotel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
