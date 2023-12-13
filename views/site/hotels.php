<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
<h1 style="margin-top:20px;">Информация об отелях</h1>
<p>Наше туристическое агенство предлагает всего 2 отеля, в каждом туре свой определённый тип, подробнее узнавайте у операторов.</p>
<div class="card-group">
<?php foreach ($hotels as $hotel):?>
<div class="card" style="width: 18rem;margin-left: 50px;">

    <img src="<?php echo $hotel['image'];?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $hotel['type'];?></h5>
        <p class="card-text"><?php echo $hotel['price'].' рублей за ночь';?></p>
        <p class="card-text"><?php echo $hotel['description'];?></p>

    </div>
</div>
    <?php endforeach;?>
</div>

</body>
</html>