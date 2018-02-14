<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User; 
class SiteController extends Controller
{

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
        $users=User::find()->all();
        return $this->render('index',['users' => $users]);
    }
    public function actionCreate(){
       $user=new User();
        if(isset($_POST))
        {

            $user->username=$_POST["username"];
            $user->user=$_POST["user"];
            $user->password=$_POST["password"];
            $user->email=$_POST["email"];
            if ($user->save())
            {
                  return \yii\helpers\Json::encode($user);

 
            }else{
            }
          }
   }
   
}
