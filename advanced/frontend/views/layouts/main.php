<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
   <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="<?= Yii::$app->request->baseUrl ?>/https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="<?= Yii::$app->request->baseUrl ?>/https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="<?= Yii::$app->request->baseUrl ?>/https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <title>Sporto</title>
<?php $this->head() ?>
   
</head>
<body>
<?php $this->beginBody() ?>


    

        
        <?= Alert::widget() ?>
        <?= $content ?>
  




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
