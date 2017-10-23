<?php
/* @var $this UserController */
/* @var $model User */

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('registration')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Users</h1>

<p>
Here we can see all list of users
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'usertname',
		'lastname',
		'email',
		'telephone',
		'password',
		'password2',
		'created' => array(
			'name' => 'created',
			'value' => 'date("j.m.Y H:i", $data->created)',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
