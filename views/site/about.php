<?php

/** @var yii\web\View $this */

use yii\helpers\Html;


?>
<div class="site-about">
    <div class="row" style="display: flex;justify-content: center;">
        <?php foreach ($tours as $tour):?>
            <div class="col-sm-4" style="margin-top: 40px; width: 350px; ">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $tour['image'];?>" class="card-img-top" alt="...">
                    <div class="package-content" style="margin-left: 10px;">
                        <h3><?php echo $tour->country->name.' - Все потрясающие места';?></h3>
                        <p>4 дня, 5 ночей от <span>$500</span>
                        </p>

                    </div>
                    <div class="package-calto-action" style="margin-left: 10px;">
                        <button ><a href="#" class="travel-booking-btn hvr-shutter-out-horizontal" style="background: #1B5E6E; color: white">Забронировать</a>
                        </button>
                        <img src="../web/images/star.png" style="width: 90px; margin-left: 35px;">
                    </div>

                    </button>
                </div>

            </div>
        <?php endforeach;?>
    </div>

</div>
