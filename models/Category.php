<?php
/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 24.07.17
 * Time: 10:35
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category
extends ActiveRecord
{

    public static function tableName()
    {
        return 'category' ;
    }

    public function getNews()
    {
        return $this->hasMany(News::className(),['category_id'=>'id']);
    }
}