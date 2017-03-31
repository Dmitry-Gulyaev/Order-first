<?php
namespace app\controllers;

use yii;

use yii\web\controller;

class TestController extends Controller
{
    public function actionIndex() {
        echo $this->render('index');
    }
}
