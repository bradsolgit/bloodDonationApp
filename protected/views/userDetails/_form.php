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
		<?php echo $form->emailField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
	<?php echo CHtml::dropDownList('state','',Utilities::getLookupListByState(),
array(
	'empty'=>'select',
    'ajax' => array(
    'type'=>'POST', //request type
    'url'=>CController::createUrl('userDetails/getDistrict'), //url to call.
    //Style: CController::createUrl('currentController/methodToCall')
    'update'=>'#district', //selector to update
    //'data'=>'js:javascript statement' 
    //leave out the data key to pass all form values through
))); 
//empty since it will be filled by the other dropdown
?>
	<?php echo $form->error($model,'state'); ?>
	</div>
	<div class="row">
	<?php echo $form->labelEx($model,'district'); ?>
		<?php echo  CHtml::dropDownList('district','',array(),array(
	'empty'=>'select',
    'ajax' => array(
    'type'=>'POST', //request type
    'url'=>CController::createUrl('userDetails/getCity'), //url to call.
    //Style: CController::createUrl('currentController/methodToCall')
    'update'=>'#city', //selector to update
    //'data'=>'js:javascript statement' 
    //leave out the data key to pass all form values through
))); 
//empty since it will be filled by the other dropdown
?>
		<?php echo $form->error($model,'district'); ?>
	</div>
	<div class="row">
	<?php echo $form->labelEx($model,'city'); ?>
		<?php echo  CHtml::dropDownList('city','',array(),array(
	'empty'=>'select',
    'ajax' => array(
    'type'=>'POST', //request type
    'url'=>CController::createUrl('userDetails/getArea'), //url to call.
    //Style: CController::createUrl('currentController/methodToCall')
    'update'=>'#area', //selector to update
    //'data'=>'js:javascript statement' 
    //leave out the data key to pass all form values through
))); 
//empty since it will be filled by the other dropdown
?>
		<?php echo $form->error($model,'city'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'area'); ?>
		<?php echo  CHtml::dropDownList('area','', array(''=>"please select"));?>
		<?php echo $form->error($model,'area'); ?>
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
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
<!--  
	<div class="row">
		<?php echo $form->labelEx($model,'confirmation_code'); ?>
		<?php echo $form->textField($model,'confirmation_code',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'confirmation_code'); ?>
	</div>
 -->
	<div class="row">
		<?php echo $form->labelEx($model,'donation_status'); ?>
		<?php echo $form->textField($model,'donation_status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'donation_status'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'blood_group'); ?>
		<?php echo $form->dropDownList($model,'blood_group',Utilities::getLookupListBybloodGroup(), array('empty'=>'Select Option')); ?>
		<?php echo $form->error($model,'blood_group'); ?>
	</div>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->