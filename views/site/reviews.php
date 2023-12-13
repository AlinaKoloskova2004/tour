<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300,400);
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
        .snip1533 {
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
            color: #9e9e9e;
            display:flex;
            font-family: 'Roboto', Arial, sans-serif;
            font-size: 16px;
            margin: 35px 10px 10px;
            width: 310px;
            height: 200px;
            position: relative;

            background-color: #ffffff;
            border-radius: 5px;
            border-top: 5px solid #d2652d;
            align-items: center;
            justify-content: center;
        }

        .snip1533 *,
        .snip1533 *:before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.1s ease-out;
            transition: all 0.1s ease-out;
        }

        .snip1533 figcaption {
            padding: 13% 10% 12%;
        }

        .snip1533 figcaption:before {
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            background-color: #fff;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
            color: #d2652d;
            content: "\f10e";
            font-family: 'FontAwesome';
            font-size: 32px;
            font-style: normal;
            left: 50%;
            line-height: 60px;
            position: absolute;
            top: -30px;
            width: 60px;
        }

        .snip1533 h3 {
            color: #3c3c3c;
            font-size: 20px;
            font-weight: 300;
            line-height: 24px;
            margin: 10px 0 5px;
        }

        .snip1533 h4 {
            font-weight: 400;
            margin: 0;
            opacity: 0.5;
        }

        .snip1533 blockquote {
            font-style: italic;
            font-weight: 300;
            margin: 0 0 20px;
        }



        body {
            background-color: #212121;
            text-align: center;
        }
        .com{
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="com">
<?php foreach ($goodstatus as $comment):?>
<div class="container" style="width: 1200px; padding: 0px;">
    <div class="col">
<div class="d-flex justify-content-center flex-column align-items-center">
<figure class="snip1533">
    <figcaption>
        <blockquote>
            <p><?php echo $comment['text']?></p>
        </blockquote>
        <h3><?php echo $comment->user->username;?></h3>

    </figcaption>

</figure>
</div>
    </div>
<?php endforeach;?>
</div>

</div>
<div class="row d-flex align-items-center-center justify-content-center" style="margin-top:40px;">

    <div class="d-flex flex-column align-items-center" style="color: white;">
        <h2>Напишите свой отзыв!</h2>
        <?php use yii\bootstrap5\ActiveForm;
        use yii\bootstrap5\Html;
        use yii\bootstrap5\LinkPager;

        $form = ActiveForm::begin([
            'id' => 'login-form',
            'fieldConfig' => [
                'template' => "{label}\n{input}\n{error}",
                'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                'inputOptions' => ['class' => 'col-lg-3 form-control'],
                'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
            ],
        ]); ?>
        <div style="width:800px; height:120px;">
            <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>
        </div>



    </div>
        <div class="form-group" style="margin-top: 20px;">
            <div>
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>



</div>
</div>




</body>
</html>
