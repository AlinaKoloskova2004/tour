<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <style>
      .flex-shrink-0{
          background-image: url('../web/img/slider.jpg');
          width: 100%; height: 840px;
          background-repeat: no-repeat;
      }
    </style>
</head>
<body>

<main id="main" class="flex-shrink-0" role="main" style="height: 650px;">
    <img src="../web/img/slider.jpg" style="width: 100%; height: 650px;">

    <p style="font-family: 'Gothic A1'; font-size: 48px; margin-top: -500px; color: white;display: flex; justify-content: center">Открой свои глаза</p>
    <p style="font-family: 'Gothic A1'; font-size: 64px; font-weight: bold; color: white; display: flex; justify-content: center">НА МИР ПУТЕШЕСТВИЙ</p>
    <div class="a1">
        <a href="<?php echo Url::toRoute(['site/tours']);?>" style="text-decoration: none;"><button class="button1">Каталог</button></a>
    </div>
</main>
</div>
<!-- before content -->
<div class="before_content">
    <div class="before_inner">
        <div class="container_12">

            <div class="title">
                <h2 style="text-transform: uppercase;font-weight: bold;font-size:19px;">Куда бы Вы хотели отправиться в путешествие?</h2>
                <span class="title_right"><a href="#" hidefocus="true" style="outline: none;">Просмотреть все предложения</a></span>
            </div>

            <div class="search_main">
                <form action="../web/css2/index.html#" method="get" class="form_search">

                    <div class="search_col_1 ">
                        <?php foreach ($countries as $country):?>
                        <div class="row input_styled inlinelist">
                            <div class="rowRadio" ><div class="custom-radio"><label for="africa" class="checked"><a style="text-decoration: none; color: black;" href="<?php echo Url::toRoute(['site/about' ,'id'=>$country['id']]) ;?>"><?php echo $country['name'];?></a></label></div> </div>

                        </div>
                        <?php endforeach;?>
                    </div>



                    <div class="clear"></div>
                </form>
            </div>

        </div>
    </div>
</div>
<!--/ before content -->
<!-- LATEST offers list -->

<section class="popular-packages pb-70 pt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="title">
                    <h2 style="text-transform: uppercase;font-weight: bold;font-size:19px;">НАШИ ГОРЯЩИЕ ТУРЫ И СПЕЦПРЕДЛОЖЕНИЯ</h2>
                    <span class="title_right"><a href="#" hidefocus="true" style="outline: none;">Смотреть все предложения</a></span>
                </div>
            </div>
        </div>


        <div class="row" style="display: flex;justify-content: center;">
            <?php foreach ($tours as $tour):?>
            <div class="col-sm-4" style="margin-top: 40px; width: 350px; ">
            <div class="card" style="width: 18rem;">
                <img src="../images/<?php echo $tour['image'];?>" class="card-img-top" alt="...">
                <div class="package-content" style="margin-left: 10px;">
                    <h3><?php echo $tour->country->name.' - Все потрясающие места';?></h3>
                    <p>4 дня, 5 ночей от <span>$500</span>
                    </p>

                </div>
                <div class="package-calto-action" style="margin-left: 10px;">
                <button ><a href="<?php echo Url::toRoute(['site/detail' ,'id'=>$tour['id']]);?>" class="travel-booking-btn hvr-shutter-out-horizontal" style="background: #1B5E6E; color: white">Забронировать</a>
                </button>
                    <img src="../web/images/star.png" style="width: 90px; margin-left: 35px;">
                </div>

                </button>
            </div>

            </div>
            <?php endforeach;?>
            </div>

</section> <!--end  popular packajge -->
<section class="trabble-bg image-bg-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title-white text-center">
                    <h2>Почему выбирают нас?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single travel start -->
            <div class="col-md-4 col-sm-6">
                <div class="single-travel">
                    <div class="media">
                        <div class="media-left media-middle travel-number">
                            <span>01.</span>
                        </div>
                        <div class="media-body travel-content">
                            <h4>Лидеры</h4>
                            <p>Наше туристическое агентство является лидером в отрасли.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- single travel end -->

            <div class="col-md-4 col-sm-6">
                <div class="single-travel">
                    <div class="media">
                        <div class="media-left media-middle travel-number">
                            <span>02.</span>
                        </div>
                        <div class="media-body travel-content">
                            <h4>Команда</h4>
                            <p>Мы гордимся своей командой профессионалов.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- single travel end -->

            <div class="col-md-4 col-sm-6">
                <div class="single-travel">
                    <div class="media">
                        <div class="media-left media-middle travel-number">
                            <span>03.</span>
                        </div>
                        <div class="media-body travel-content">
                            <h4>Выбор</h4>
                            <p>Мы предлагаем широкий выбор туров по низким ценам на рынке.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- single travel end -->

            <div class="col-md-4 col-sm-6">
                <div class="single-travel">
                    <div class="media">
                        <div class="media-left media-middle travel-number">
                            <span>04.</span>
                        </div>
                        <div class="media-body travel-content">
                            <h4>Безопасность</h4>
                            <p>Наша компания работает над всеми необходимыми страховками.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- single travel end -->

            <div class="col-md-4 col-sm-6">
                <div class="single-travel">
                    <div class="media">
                        <div class="media-left media-middle travel-number">
                            <span>05.</span>
                        </div>
                        <div class="media-body travel-content">
                            <h4>Доверие</h4>
                            <p>Мы ценим доверие наших клиентов и стремимся улучшить обслуживание.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- single travel end -->

            <div class="col-md-4 col-sm-6">
                <div class="single-travel">
                    <div class="media">
                        <div class="media-left media-middle travel-number">
                            <span>06.</span>
                        </div>
                        <div class="media-body travel-content">
                            <h4>Индивидуальность</h4>
                            <p>Мы предоставляем индивидуальный подход к каждому клиенту.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- single travel end -->
        </div>
    </div>
</section> <!-- choose trabble end here -->


<footer class="footer-area" style="background-color: #4e555b">
    <div class="container">
        <div class="row">
            <!-- footer left -->
            <div class="col-md-3 col-sm-6">
                <div class="single-footer" style="color: white">
                    <div class="footer-title">
                        <a href="#"><img src="../web/img/logo.png" alt="" >
                        </a>
                    </div>
                    <div class="footer-left">
                        <div class="footer-logo" >
                            <p>Lorem ipsum dolor sit amet conset ctetur adipiscin elit Etiam at ipsum at ligula vestibulum sodales.</p>
                        </div>
                        <ul class="footer-contact" style="color: white">
                            <li><img class="map" src="../web/images/icon/map.png" alt="">Russia, Moscow</li>
                            <li><img class="map" src="../web/images/icon/phone.png" alt="">+79617504121</li>
                            <li><img class="map" src="../web/images/icon/gmail.png" alt="">trabble@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div> <!-- footer left -->

            <div class="col-md-3 col-sm-6">
                <div class="single-footer">
                    <div class="single-recent-post">
                        <div class="footer-title">
                            <h3>Recent News</h3>
                        </div>
                        <ul class="recent-post">
                            <li>
                                <a href="#">
                                    <div class="post-thum">
                                        <img src="../web/images/blog/f4.jpg" alt="" class="img-rounded">
                                    </div>
                                    <div class="post-content" style="color: white">
                                        <p>A Clean Website Gives More Experience To The Visitors.
                                        </p>
                                        <span>12 July, 2018</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="post-thum">
                                        <img src="../web/images/blog/f5.jpg" alt="" class="img-rounded">
                                    </div>
                                    <div class="post-content">
                                        <p>A Clean Website Gives More Experience To The Visitors.
                                        </p>
                                        <span>12 July, 2018</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="post-thum">
                                        <img src="../web/images/blog/f6.jpg" alt="" class="img-rounded">
                                    </div>
                                    <div class="post-content">
                                        <p>A Clean Website Gives More Experience To The Visitors.
                                        </p>
                                        <span>12 July, 2018</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>	<!-- footer latest news -->

            <!-- footer destination -->
            <div class="col-md-3 col-sm-6">
                <div class="single-footer">
                    <div class="footer-title">
                        <h3>Destination</h3>
                    </div>
                    <ul class="footer-gallery">
                        <li>
                            <a href="#">
                                <div class="image-overlay">
                                    <img src="../web/images/destination/1.jpg" alt="">
                                    <div class="overly-city">
                                        <span>Austrila</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="image-overlay">
                                    <img src="../web/images/destination/2.jpg" alt="">
                                    <div class="overly-city">
                                        <span>England</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="image-overlay">
                                    <img src="../web/images/destination/3.jpg" alt="">
                                    <div class="overly-city">
                                        <span>France</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="image-overlay">
                                    <img src="../web/images/destination/4.jpg" alt="">
                                    <div class="overly-city">
                                        <span>America</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>	<!-- footer destination -->

            <!-- footer contact -->
            <div class="col-md-3 col-sm-6 f-phone-responsive">
                <div class="single-footer">
                    <div class="footer-title">
                        <h3>Quick Contact</h3>
                    </div>
                    <div class="footer-contact-form">
                        <form action="#">
                            <ul class="footer-form-element">
                                <li>
                                    <input type="text" name="email" id="email" placeholder="" value="Email Address" onblur="if(this.value==''){this.value='Email Address'}" onfocus="if(this.value=='Email Address'){this.value=''}">
                                </li>
                                <li>
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </li>
                                <li>
                                    <button>Send</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="footer-social-media">
                        <div class="social-footer-title">
                            <h3>Follow Us</h3>
                        </div>
                        <ul class="footer-social-link">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>	<!-- footer contact -->
        </div>

        <div class="row">
            <div class="footer-bottom">
                <div class="col-md-5">
                    <div class="copyright">
                        <p>Copyright &copy; 2018 Trabble By <a href="#"><span>SylTheme</span></a></p>
                    </div>
                </div>
                <div class="col-md-7">
                    <ul class="payicon pull-right">
                        <li>We Accept</li>
                        <li><img src="../web/images/payicon01.png" alt=""></li>
                        <li><img src=../web/images/payicon02.png" alt=""></li>
                        <li><img src="../web/images/payicon03.png" alt=""></li>
                        <li><img src="../web/images/payicon04.png" alt=""></li>
                        <li><img src="../web/images/payicon05.png" alt=""></li>
                        <li><img src="../web/images/payicon06.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer> <!-- end footer -->


</body>
</html>


