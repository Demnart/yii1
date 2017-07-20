<?php
/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 19.07.17
 * Time: 14:55
 */

namespace app\models;
use yii\base\Model;

class TestForm extends Model
{


    public $name;
    public $email;
    public $text;

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
            [ [ 'name','email','text' ],'required' ],
            [ 'email','email','message'=>'Поле E-mail должно содержать символ @' ],
//          ['name','string','min'=>2,'tooShort'=>'Минимальное количество символов 2'],
//          ['name','string','max'=>15,'tooShort'=>'Максимальное количество символов не должно превышать 15 символов'],
            ['name','string','length'=>[2,5]],
            ['name','myRule'],
            [ 'text' , 'trim' ]
        ];
    }

    public function myRule($atrrs){
        if (!in_array($this->attrs,['hello','world']))
        {
            $this->addError($atrrs,'Wrong');
        }
    }
}