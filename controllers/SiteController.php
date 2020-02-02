<?php
namespace app\controllers;

use yii\web\Controller;

class SiteController extends \yii\web\Controller
{
	public function actionIndex(){
	    //return 'Video School';
	    return $this->render('index');
	}
	
}