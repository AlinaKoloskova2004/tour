<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\TourSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tour-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'date_depature') ?>

    <?php // echo $form->field($model, 'date_arrival') ?>

    <?php // echo $form->field($model, 'city_fly') ?>

    <?php // echo $form->field($model, 'old_number') ?>

    <?php // echo $form->field($model, 'child_number') ?>

    <?php // echo $form->field($model, 'day_number') ?>

    <?php // echo $form->field($model, 'is_hotter') ?>

    <?php // echo $form->field($model, 'id_country') ?>

    <?php // echo $form->field($model, 'id_operator') ?>

    <?php // echo $form->field($model, 'id_type') ?>

    <?php // echo $form->field($model, 'id_food') ?>

    <?php // echo $form->field($model, 'id_hotel') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Поиск'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Восстановить'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
