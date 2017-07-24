<?php
/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 18.07.17
 * Time: 9:07
 */

namespace app\controllers;
use app\models\Category;
use app\models\News;
use app\models\Posts;
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
        $post = Posts::findOne(2);
//        debug($post);
        $post->email = '2@2mail.ru';
        $post->save();
        $model = new Posts();

//        $model->name= 'Артем';
//        $model->email = 'mail@mail.ru';
//        $model->text = 'Text';
//        $model->save();

        if ($model->load(Yii::$app->request->post()))
        {
//            debug($model);
            if ($model->save())
            {
                Yii::$app->session->setFlash('success','Данные приняты');
                return $this->refresh();
            }
            else
                {
                    Yii::$app->session->setFlash('Error','Ошибка');

                }

        }
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

//        $items = News::find()->all();
//        $items = News::find()->orderBy(['id'=> SORT_DESC])->all();
//        $items = News::find()->asArray()->all();
//        $items = News::find()->asArray()->where(['parent'=>'1'])->all();
//        $items = News::find()->asArray()->where(['parent'=>'1'])->all();
//        $items = News::find()->asArray()->where(['<=','parent',2])->all();
//        $items = News::find()->asArray()->where(['parent'=>'1'])->limit(1)->all();
//        $items = News::find()->asArray()->where(['parent'=>'1'])->limit(1)->one();
//        $items = News::find()->asArray()->where(['parent'=>'1'])->count();
//        $item = News::findAll(['parent'=>1]);
//        $querry = "SELECT * FROM news WHERE parent =:parent";
//        $item = News::findBySql($querry,[':parent'=>1])->asArray()->one();
//          $category = Category::find()->all();
          $category = Category::find()->with('news')->all();





        return $this->render('test',compact('category'));
    }
}