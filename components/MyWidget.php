<?php
/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 25.07.17
 * Time: 11:02
 */

namespace app\components;


use yii\base\Widget;

class MyWidget
extends Widget
{
    public $name;

    public function init()
    {
        parent::init();
        if ($this->name === NULL)
        {
//            $this->name = 'Genjo';
        }
        ob_start();
    }

    public function run()
    {
       $content=ob_get_clean();
       $content = mb_strtoupper($content,'utf-8');
       return $this->render('my',['content'=>$content]);
        return $this->render('my',['name'=>$this->name]);
    }
}