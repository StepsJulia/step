<?php
/* @var $this UserController */
/* @var $model User */

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Change User', 'url'=>array('update', 'id'=>$model->id)),
);
?>

<p>Enter password</p>

<?php
	echo CHtml::form();
	echo CHtml::textField('password');
	echo CHtml::submitButton('Change Button');
	echo CHtml::endForm();
?>