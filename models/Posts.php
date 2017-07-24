<?php
/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 19.07.17
 * Time: 14:55
 */

namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;

class Posts extends ActiveRecord
{


    public function attributeLabels()
    {
        return
        [
            'name'=>'Имя',
            'email'=>'E-mail',
            'text'=>'Текст сообщения'
        ];
    }

    public function rules()
    {

        return
        [
            [ [ 'name','email','text'],'required' ],
            [ 'email','email','message'=>'Поле E-mail должно содержать символ @' ],
            ['name','string','length'=>[2,5]],
            [ 'text' , 'trim' ],
        ];
    }


}