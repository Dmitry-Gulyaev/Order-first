<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use app\assets\AppAsset;
Yii::$app->view->registerJs("
    $(document).ready(function(){
        $(\"#aj\").on('click',function(){
            alert(\"Hello\");
        });
    });
");
?>
<a href="" id="aj">Test</a>
