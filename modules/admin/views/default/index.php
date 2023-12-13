<div class="admin-default-index" style="margin-top: 50px;">
    <h1>Добро пожаловать в админ панель!</h1>


    <div class="my-3 d-flex justify-content-sm-around w-50">
        <button type="button" class="btn btn-success"><a style="text-decoration: none;" href="<?php use yii\helpers\Url;

            echo Url::toRoute(['booking/index'])?>" class="text-light">Бронирование</a></button>
        <button type="button" class="btn btn-success  "><a style="text-decoration: none;margin-bottom: 5px;" href="<?php echo Url::toRoute(['comment/index'])?>" class="text-light">Отзывы</a></button>
        <button type="button" class="btn btn-success"><a style="text-decoration: none;" href="<?php echo Url::toRoute(['tour/index'])?>" class="text-light">Туры</a></button>
        <button type="button" class="btn btn-success"><a style="text-decoration: none;" href="<?php echo Url::toRoute(['operator/index'])?>" class="text-light">Операторы</a></button>
        <button type="button" class="btn btn-success"><a style="text-decoration: none;" href="<?php echo Url::toRoute(['news/index'])?>" class="text-light">Новости</a></button>
    </div>
</div>
