<?php
/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 18.07.17
 * Time: 9:07
 */

namespace app\controllers;
use app\models\TestForm;
use Yii;
class PostController
extends AbstractController
{

    public $layout='basic';

    public function beforeAction($action)
    {
        if ($action->id == 'index')
        {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        $model = new TestForm();
        $this->view->title = 'Index';
        $this->view->registerMetaTag(['name'=>'keywords','content'=>'Ключевики'] );
        $this->view->registerMetaTag(['name'=>'description','content'=>'Описание страницы'] );
        return $this->render('index',compact('model'));
    }

    public function actionTest()
    {
        $this->view->title = 'Test';
        $this->view->registerMetaTag(['name'=>'keywords','content'=>'Ключевики'] );
        $this->view->registerMetaTag(['name'=>'description','content'=>'Описание страницы'] );
        return $this->render('test');
    }
}