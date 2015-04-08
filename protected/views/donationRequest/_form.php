<?php
/* @var $this DonationRequestController */
/* @var $model DonationRequest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'donation-request-form',
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
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number'); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hospital'); ?>
		<?php echo $form->textField($model,'hospital',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'hospital'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->