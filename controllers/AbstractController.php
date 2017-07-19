<?php
/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 18.07.17
 * Time: 9:06
 */

namespace app\controllers;


use yii\web\Controller;

class AbstractController
extends Controller
{

}

function debug($arr)
{
    echo '<pre>' . print_r($arr,true) . '</pre>';
}