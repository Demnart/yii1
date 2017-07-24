<?php
/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 24.07.17
 * Time: 10:43
 */

namespace app\models;


use yii\db\ActiveRecord;

class News
extends ActiveRecord
{

    public static function tableName()
    {
        return 'news';
    }
}