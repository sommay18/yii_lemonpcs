<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actiontest1()
    {
    echo "ທົດສອບ";
   
    }

}
