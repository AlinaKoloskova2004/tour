<style>
    body{
        background-color: #080710;
    }
    .btn{
        color:white;
    }
</style>
<div class="d-flex justify-content-center mt-3" style="">
    <div class="card w-50s align-items-center shadow p-3 mb-5 rounded" style="margin-top: 100px;background-color: rgba(255,255,255,0.13);">
        <div class="card-body w-100">
            <div class="d-flex justify-content-center" style="color: white;">
                <h2>Забронировать тур</h2>
            </div>

            <?php use yii\bootstrap5\ActiveForm;
            use yii\helpers\Html;
            use yii\widgets\MaskedInput;
            $items=\app\models\Tour::find()
                ->select(['name','id'])
                ->indexBy('id')
                ->column();

            $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    /*'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],*/
                ],
            ]); ?>

            <h5 style="color: white">Ваши данные:</h5>
            <div class="d-flex justify-content-between" style="color: white;">
                <div class="w-25 me-2"><?= $form->field($model, 'surname')->textInput(['autofocus' => true]) ?></div>

                <div class="w-25 me-2"><?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?></div>

                <div class="w-25 me-2"><?= $form->field($model, 'patronymic')->textInput(['autofocus' => true]) ?></div>


            </div>
            <div class="d-flex justify-content-between" style="color: white;">

                <div class="w-25"><?= $form->field($model, 'phone')->widget(MaskedInput::class, ['mask' => '+7(999)-999-99-99']) ?></div>

                <div class="w-25 me-2"><?= $form->field($model, 'age')->textInput(['autofocus' => true]) ?></div>

                <div class="w-25 me-2"><?= $form->field($model, 'address')->textInput(['autofocus' => true]) ?></div>
            </div>
            <div class="d-flex justify-content-between" style="color: white;">
                <div class="w-25"><?= $form->field($model, 'old_number')->textInput(['autofocus' => true])?> </div>

                <div class="w-25 me-2"><?= $form->field($model, 'child_number')->textInput(['autofocus' => true]) ?></div>



            </div>
            <div class="d-flex justify-content-between" style="color: white;">


                <div class="w-50 me-2"><?= $form->field($model, 'id_tour')->dropdownList($items,['prompt' => 'Выбрать тур']) ?></div>


            </div>


            <div class="form-group" style="color: white;">
                <div>
                    <?= Html::submitButton('Отправить', ['class' => 'btn', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>