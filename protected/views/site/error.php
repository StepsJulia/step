
<section class="section">
	<div class="container">
		<?php
		/* @var $this SiteController */
		/* @var $error array */

		$this->pageTitle=Yii::app()->name . ' - Error';
		$this->breadcrumbs=array(
			'Error',
		);
		?>

		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif?>

		<h2>Error <?php echo $code; ?></h2>

		<div class="error">
		<?php echo CHtml::encode($message); ?>
		</div>
	</div>
</section>