<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\Pagination;
use app\models\Country;
use app\models\EntryForm;
use app\models\PostForm;
use app\models as models;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
	public $layout= false;
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
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
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
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
        return $this->render('about');
    }
	public function actionSay($message = 'Hello')
    {
        $aa=Yii::$app->request->post('username');
		$saydata = new models\Say;
		$insert=Yii::$app->request->post('insert');
		if($insert=='insert' and $aa<>'')
		{echo $saydata->insertData($aa);}
		return $this->render('say', ['message' => $message,'aa'=>$aa,'saydata'=>$saydata->sayData($aa)]);
    }
	public function actionAdminpage()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 300,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
		$model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            //return $this->goBack();
        }

        return $this->render('adminpage', [
			'model' => $model,
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
	
	public function actionHeader()
    {
		return $this->render('header');
    }
	public function actionGetdata()
    {
		return $this->render('getdata');
    }
	
	public function actionEntry()
    {
        $model = new EntryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('entry', ['model' => $model]);
        }
    }

	public function actionGetpost()
    {
		$model = new PostForm();
		var_dump($model);
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
		echo 111;
		}
		else {echo 222;}
		//return $this->render('header');
    }
	public function actionEntrypost()
    {
		$model = new PostForm();
		if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...

            return $this->render('post-confirm', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('entrypost', ['model' => $model]);
        }
    }
	
	public function actionAdd($id = '')
    {
        


        return $this->render('add', [
            'id' => $id,
        ]);
    }




}
