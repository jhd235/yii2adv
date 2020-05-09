<?php
    namespace frontend\controllers;
    //namespace common\models;

    use yii\rest\ActiveController;

    class UserController extends ActiveController
    {
        //public $modelClass = 'app\models\User';
        public $modelClass = 'common\models\User';
    }