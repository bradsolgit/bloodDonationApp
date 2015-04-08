<?php
/* @var $this UserDetailsController */
/* @var $model UserDetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-details-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number'); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area'); ?>
		<?php echo $form->textField($model,'area'); ?>
		<?php echo $form->error($model,'area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city'); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dob'); ?>
		<?php echo $form->textField($model,'dob'); ?>
		<?php echo $form->error($model,'dob'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'confirmation_code'); ?>
		<?php echo $form->textField($model,'confirmation_code',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'confirmation_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'donation_status'); ?>
		<?php echo $form->textField($model,'donation_status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'donation_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lookup_details_lookup_id'); ?>
		<?php echo $form->textField($model,'lookup_details_lookup_id'); ?>
		<?php echo $form->error($model,'lookup_details_lookup_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lookup_details_2_lookup_id'); ?>
		<?php echo $form->textField($model,'lookup_details_2_lookup_id'); ?>
		<?php echo $form->error($model,'lookup_details_2_lookup_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lookup_details_3_lookup_id'); ?>
		<?php echo $form->textField($model,'lookup_details_3_lookup_id'); ?>
		<?php echo $form->error($model,'lookup_details_3_lookup_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blood_group'); ?>
		<?php echo $form->textField($model,'blood_group'); ?>
		<?php echo $form->error($model,'blood_group'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lookup_details_4_lookup_id'); ?>
		<?php echo $form->textField($model,'lookup_details_4_lookup_id'); ?>
		<?php echo $form->error($model,'lookup_details_4_lookup_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->