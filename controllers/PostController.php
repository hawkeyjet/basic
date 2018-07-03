<?php

namespace app\controllers;
use app\models\StudyForm;
use Yii;

class PostController extends AppController
{
  public $layout = 'basic';
      public function actionIndex($id = null)
      {
          $this->view->title = 'Articles';
          if (!$id)
              $id = 'id';
          $hello = "Hello, world";
          $names = ['name1', 'name2', 'name3'];
          //return $this->render("index", ['hello' => $hello, 'names' => $names]);
          return $this->render("index", compact('hello', 'names', 'id'));
      }
      public function  actionArticle()
      {
          $this->view->title = 'Article';
          if (Yii::$app->request->isAjax)
          {
              return debug($_POST);
          }
          return $this->render("article");
      }
      public function  actionForm()
      {
          $this->view->title = 'Form';
          $model = new StudyForm();
          return $this->render("form", compact('model'));
      }
}