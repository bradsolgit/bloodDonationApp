<?php
/* @var $this EmpRegistrationController */
/* @var $model EmpRegistration */
/* @var $form CActiveForm */
?>
<html>
<head>


</head>
</html>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'emp-registration-form',
        'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        )); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	


	
	
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo CHtml::activeFileField($model, 'email'); ?> 
		<?php echo $form->error($model,'email'); ?>
	</div>

	
	

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
	

<?php $this->endWidget(); ?>

</div><!-- form -->