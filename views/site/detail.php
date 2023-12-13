<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<h2 style="margin-top: 50px;">Подробное описание</h2>
<div class="row" style="display: flex;justify-content: center;">
    <?php use yii\helpers\Url;

    foreach ($tours as $tour):?>
        <div class="col-sm-4" style="margin-top: 40px; width: 350px; ">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $tour['image'];?>" class="card-img-top" alt="...">
                <div class="package-content" style="margin-left: 10px;">
                    <h3><?php echo $tour['name'];?></h3>
                    <p>Цена - <?php echo $tour['price']. ' рублей';?></p>
                    <p>Кол-во взрослых - <?php echo $tour['old_number'];?></p>
                    <p>Кол-во детей - <?php echo $tour['child_number'];?></p>
                    <p>Дата отправления - <?php echo $tour['date_depature'];?></p>
                    <p>Дата прибытия - <?php echo $tour['date_arrival'];?></p>
                    <p>Город отправления - <?php echo $tour['city_fly'];?></p>


                </div>
                <div class="package-calto-action" style="margin-left: 10px;">
                    <button ><a href="<?php echo Url::toRoute(['site/booking']);?>" class="travel-booking-btn hvr-shutter-out-horizontal" style="background: #1B5E6E; color: white">Забронировать</a>
                    </button>
                    <img src="../web/images/star.png" style="width: 90px; margin-left: 35px;">
                </div>

                </button>
            </div>

        </div>
    <?php endforeach;?>
</div>
</body>
</html>
