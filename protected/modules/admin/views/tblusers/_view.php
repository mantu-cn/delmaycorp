<?php
/* @var $this TblusersController */
/* @var $data Tblusers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('my_index')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->my_index), array('view', 'id'=>$data->my_index)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_address')); ?>:</b>
	<?php echo CHtml::encode($data->email_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_type')); ?>:</b>
	<?php echo CHtml::encode($data->user_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_login')); ?>:</b>
	<?php echo CHtml::encode($data->last_login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bad_logins')); ?>:</b>
	<?php echo CHtml::encode($data->bad_logins); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bad_login_date')); ?>:</b>
	<?php echo CHtml::encode($data->bad_login_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password_changed')); ?>:</b>
	<?php echo CHtml::encode($data->password_changed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activated')); ?>:</b>
	<?php echo CHtml::encode($data->activated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password_show')); ?>:</b>
	<?php echo CHtml::encode($data->password_show); ?>
	<br />

	*/ ?>

</div>