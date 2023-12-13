<?php use yii\bootstrap5\LinkPager;?>
<div class="d-flex justify-content-between" style="margin-top: 40px;">
    <div class="d-flex flex-column">
        <h4>Новости туризма и путешествий</h4>


        <?php foreach ($news as $new):?>
            <div class="card">
                <img src="images/<?php echo $new['image']?>" class="card-img-top" alt="..." style="height: 400px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $new['title']?></h5>
                    <p class="card-text"><?php echo $new['content']?></p>
                    <p class="card-text"><small class="text-muted"><?php echo $new['date']?></small></p>
                </div>
            </div>
        <?php endforeach;?>
    </div>

    <div class="d-flex flex-column">
        <h4 class="text-end">Популярные</h4>
        <?php foreach ($popular as $new):?>
            <div class="card ms-5 mb-4" style="width: 18rem;">
                <img src="images/<?php echo $new['image']?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $new['title']?></h5>
                    <p class="card-text"><small class="text-muted">Просмотров: <?php echo $new['viewed']?></small></p>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
<div class="h-100 d-flex align-items-center justify-content-center mt-5">
    <?php echo LinkPager::widget([
        'pagination' => $pages,]);?>
</div>
<div class="d-flex flex-column">
    <h4 class="mt-4">Последние новости</h4>
    <div class="d-flex justify-content-between">
        <?php foreach ($recent as $new):?>
            <div class="card mt-3" style="width: 18rem;">
                <img src="images/<?php echo $new['image']?>" class="w-100 h-50" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $new['title']?></h5>
                    <p class="card-text"><small class="text-muted"><?php echo $new['date']?></small></p>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
</div>
