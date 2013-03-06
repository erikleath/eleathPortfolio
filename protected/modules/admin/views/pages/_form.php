<?php
/* @var $this PagesController */
/* @var $model Pages */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pages-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'domain_id'); ?>
		<?php echo $form->textField($model,'domain_id'); ?>
		<?php echo $form->error($model,'domain_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'page_name'); ?>
		<?php echo $form->textField($model,'page_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'page_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parm'); ?>
		<?php echo $form->textField($model,'parm',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'parm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'slider'); ?>
		<?php echo $form->textField($model,'slider',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'slider'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->