<?php

namespace app\controllers;

use app\models\Booking;
use app\models\Category;
use app\models\Comment;
use app\models\Country;
use app\models\Hotel;
use app\models\News;
use app\models\Post;
use app\models\Record;
use app\models\RegisterForm;
use app\models\Section;
use app\models\Teacher;
use app\models\Tour;
use app\models\User;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'kabinet'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['kabinet'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $tours = Tour::find()->where(['is_hotter'=>'1'])->all();
        $countries = Country::find()->all();
        return $this->render('index', ['tours'=>$tours, 'countries'=>$countries]);
    }
    public function actionHotels()
    {

        $hotels = Hotel::find()->all();
        return $this->render('hotels', ['hotels'=>$hotels]);
    }
    public function actionTours()
    {
        $tours = Tour::find()->all();
        $countries = Country::find()->all();
        return $this->render('tours', ['tours'=>$tours, 'countries'=>$countries]);
    }
    public function actionBooking()
    {
        $model = new Booking();
        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->session->setFlash('success', 'Ваша запись успешно отправлена!');
            $model->saveBooking();
            return $this->refresh();
        }
        return $this->render('booking', [

            'model'=>$model,
        ]);
    }
    public function actionDetail(){

        if(isset($_GET['id']) && $_GET['id']!=""){

            $countries= Country::find()->where(['id'=>$_GET['id']])->asArray()->one();
            $tours = Tour::find()->where(['id'=>$_GET['id']])->asArray()->all();
            return $this->render('detail', [
                'countries'=>$countries,
                'tours'=>$tours,

            ]);
        }

    }
    public function actionReviews()
    {

        $model = new Comment();
        $comments = Comment::find()->orderBy('id desc')->all();
        $goodstatus = Comment::find()->where(['status'=>1])->all();
        if ($model->load(Yii::$app->request->post()) && $model->saveComment()) {
            Yii::$app->session->setFlash('success', 'Ваш отзыв успешно отправлен!');

            return $this->refresh();
        }
            return $this->render('reviews', [
                'model'=>$model,
                'comments' =>$comments,
                'goodstatus'=>$goodstatus,




            ]);
    }

        public function actionRegister()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new RegisterForm();
        if ($model->load(Yii::$app->request->post()) && $model->register()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('register', [
            'model' => $model,
        ]);
    }
    public function actionKabinet(){
        $user = User::findOne(Yii::$app->user->id);
        $bookings = $user->booking;
        $tours= Tour::find()->all();
        return $this->render('kabinet',['bookings'=>$bookings,'tours'=>$tours]);
    }
    public function actionNews()
    {
        //пагинация
        $query = News::find()->orderBy('date desc');
        $count = clone $query;
        $pages = new Pagination(['totalCount' =>$count->count(), 'pageSize'=>1]);

        $news = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $popular = News::find()->orderBy('viewed desc')->limit(2)->all();
        $recent = News::find()->orderBy('date asc')->limit(4)->all();

        return $this->render('news', ['popular'=>$popular, 'recent'=>$recent,
            'news'=>$news, 'pages'=>$pages]);
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            if (Yii::$app->user->identity->isAdmin()) {
                return $this->redirect(['/admin']);
            }
            return $this->redirect(['site/kabinet']);
        }
        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {

        if(isset($_GET['id']) && $_GET['id']!=""){
            $countries = Country::find()->where(['id'=>$_GET['id']])->asArray()->one();
            $tours = Tour::find()->where(['id_country'=>$_GET['id']])->all();

            return $this->render('about', [
                'countries'=>$countries,
                'tours'=>$tours





            ]);

        }
        else
            return $this->redirect(['site/about']);
    }
}
