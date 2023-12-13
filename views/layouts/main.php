<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<!-- custom js -->
<script src="../web/js/custom.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="../web/images/favicon.ico">
<!-- bootstrap css -->
<link rel="stylesheet" href="../web/css/bootstrap.min.css">
<!-- animate css -->
<link rel="stylesheet" href="../web/css/animate.css">
<!-- Button Hover animate css -->
<link rel="stylesheet" href="../web/css/hover-min.css">
<!-- jquery-ui.min css -->
<link rel="stylesheet" href="../web/css/jquery-ui.min.css">
<!-- meanmenu css -->
<link rel="stylesheet" href="../web/css/meanmenu.min.css">
<!-- owl.carousel css -->
<link rel="stylesheet" href="../web/css/owl.carousel.min.css">
<!-- slick css -->
<link rel="stylesheet" href="../web/css/slick.css">
<!-- chosen.min-->
<link rel="stylesheet" href="../web/css/chosen.min.css">
<!-- chosen.min-->
<link rel="stylesheet" href="../web/css/jquery-customselect.css">
<!-- font-awesome css -->
<link rel="stylesheet" href="../web/css/font-awesome.min.css">
<!-- magnific Css -->
<link rel="stylesheet" href="../web/css/magnific-popup.css">
<!-- Revolution Slider -->
<link rel="stylesheet" href="../web/css/assets/revolution/layers.css">
<link rel="stylesheet" href="../web/css/assets/revolution/navigation.css">
<link rel="stylesheet" href="../web/css/assets/revolution/settings.css">
<!-- custome css -->
<link rel="stylesheet" href="../web/css/style.css">
<!-- responsive css -->
<link rel="stylesheet" href="../web/css/responsive.css">
<!-- modernizr css -->
<script src="../web/js/vendor/modernizr-2.8.3.min.js"></script>
<link rel="stylesheet" href="../web/css2/style.css">
<link rel="stylesheet" href="../web/css2/screen.css">
<!-- custom CSS -->
<link rel="stylesheet" href="../web/css2/custom.css">

<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
<!-- JS libs -->
<script src="../web/images/modernizr-2.5.3.min.js"></script>
<script src="../web/images/respond.min.js"></script>
<script src="../web/images/jquery.min.js"></script>

<!-- scripts -->
<script src="../web/images/jquery.easing.1.3.min.js"></script>
<script src="../web/images/hoverIntent.js"></script>
<script src="../web/images/general.js"></script>
<!-- sliders -->
<script src="../web/images/slides.min.jquery.js"></script>
<!-- range sliders -->
<script src="../web/images/jquery.slider.bundle.js"></script>
<script src="../web/images/jquery.slider.js"></script>
<link rel="stylesheet" href="../web/css2/jslider.css">
<!-- custom input -->
<link href="../web/css2/customInput.css" rel="stylesheet">
<script src="../web/images/jquery.customInput.js"></script>
<!-- datepicker -->
<link href="../web/css2/jquery-ui-1.8.20.custom.css" rel="stylesheet">
<script src="../web/images/jquery-ui-1.8.20.custom.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        $("#date_in, #date_out").datepicker({
            dateFormat: 'MM dd, yy',
            minDate: 0,
            showOtherMonths: true
        });
    });
</script>
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        .navbar-expand-md{
            background: #1B5E6E;
            font-family: "Gothic A1";
            font-size: 20px;
            font-weight: bold;
            color: white;


        }
       .nav-link{
           display: flex;
           justify-content: center;
           margin-left: 20px;
       }
       .button1{
           background-color: #D2D5D5;
           width: 268px;
           height: 76px;
           border-radius: 5px;
           font-family: "Gothic A1";
           font-size: 36px;
           color: #545151;

           display: flex;
           justify-content: center;
           align-items: center;

       }
       .a1{
           display: flex;
           justify-content: center;
           margin-top: 20px;
       }

    </style>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => '<img src="../web/img/logo.png" style="width: 100px;height: 40px;">',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark  fixed-top']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Новости', 'url' => ['/site/news']],
            ['label' => 'Отели', 'url' => ['/site/hotels']],
            ['label' => 'Туры', 'url' => ['/site/tours']],
            ['label' => 'Отзывы', 'url' => ['/site/reviews']],
            ['label' => 'Бронирование', 'url' => ['/site/booking']],
            Yii::$app->user->isGuest ? (''): (Yii::$app->user->identity->isAdmin() ? ( ['label' => 'Личный кабинет', 'url' => ['/admin/index']] ) :
                (['label' => 'Личный кабинет', 'url' => ['/site/kabinet']])),
            ['label' => 'Регистрация', 'url' => ['/site/register'], 'visible'=>Yii::$app->user->isGuest],
            Yii::$app->user->isGuest
                ? ['label' => 'Вход', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Выход (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);
    NavBar::end();
    ?>
</header>



<main id="main" class="flex-shrink-0" role="main" style="margin-top: 50px;">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
