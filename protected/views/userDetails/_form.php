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

<?php
$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
 'name'=>'name',
 'sourceUrl'=>'suggestName'
, 'value'=>'some initial value',
 ));
?>
<?php 
    $this->widget('ext.YiiComplete.YiiComplete', array(
    'jsonUrl' => 'localhost/bloodDonationApp/index.php/search/city',
));
?>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blood_group'); ?>
		<?php echo $form->textField($model,'blood_group'); ?>
		<?php echo $form->error($model,'blood_group'); ?>
	</div>
	
<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'password'); ?>
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
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'dob'); ?>
		<?php
$this->widget('ext.my97DatePicker.JMy97DatePicker',array(
    'name'=>CHtml::activeName($model,'dob'),
    'value'=>$model->dob,
		
    'options'=>array('dateFmt'=>'dd-MM-yyyy',),
));
?>
		<?php echo $form->error($model,'dob'); ?>
	</div>
	
<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
	male:<?php echo $form->radioButton($model, 'gender', array(
    'value'=>'M',
    'uncheckValue'=>null
));
 ?>female:<?php 
echo $form->radioButton($model, 'gender', array(
    'value'=>'F',
    'uncheckValue'=>null
)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'donation_status'); ?>
	<?php 
		echo $form->dropDownList($model,
                        'donation_status',
                        array('Y'=>'Y','N'=>'N'),
                        array('empty'=>'Select Option'));
		?>
		<?php echo $form->error($model,'donation_status'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->