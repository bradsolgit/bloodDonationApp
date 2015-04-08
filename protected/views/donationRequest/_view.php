<?php
/* @var $this DonationRequestController */
/* @var $data DonationRequest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->request_id), array('view', 'id'=>$data->request_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area')); ?>:</b>
	<?php echo CHtml::encode($data->area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number')); ?>:</b>
	<?php echo CHtml::encode($data->number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospital')); ?>:</b>
	<?php echo CHtml::encode($data->hospital); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lookup_details_lookup_id')); ?>:</b>
	<?php echo CHtml::encode($data->lookup_details_lookup_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lookup_details_2_lookup_id')); ?>:</b>
	<?php echo CHtml::encode($data->lookup_details_2_lookup_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lookup_details_3_lookup_id')); ?>:</b>
	<?php echo CHtml::encode($data->lookup_details_3_lookup_id); ?>
	<br />

	*/ ?>

</div>