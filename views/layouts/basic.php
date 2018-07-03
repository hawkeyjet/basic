<?php
use app\assets\PostAsset;
use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
PostAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= Html::csrfMetaTags() ?>
  <title><?=Html::encode($this->title)?></title>
  <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
  <?php
  NavBar::begin(['brandLabel' => 'Articles']);
  echo Nav::widget([
    'items' => [
      //['label' => 'Home', 'url' => ['/site/index']],
      ['label' => 'Articles', 'url' => ['/post/index']],
      ['label' => 'Article', 'url' => ['/post/article']],
      ['label' => 'Form', 'url' => ['/post/form']]
    ],
    'options' => ['class' => 'navbar-nav'],
  ]);
  NavBar::end();
  ?>
  <div class="container-fluid">
    <?= $content ?>
  </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>