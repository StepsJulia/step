<?php

$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/jquery-1.12.4.min.js');
$cs->registerScriptFile($baseUrl.'/js/jquery.main.js');

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
}