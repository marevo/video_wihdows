<?php
    //подключение отладочной информации через обновление переменной YII-DEBUG
    define("YII_DEBUG",true);
    require __DIR__.'/../vendor/yiisoft/yii2/Yii.php';
	
	$config = require __DIR__.'/../config/web.php';
	$yii = new yii\web\Application($config);
    $yii->run();
	
	
    //Hello
    

	
 
