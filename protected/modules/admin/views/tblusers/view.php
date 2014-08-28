<?php
/* @var $this TblusersController */
/* @var $model Tblusers */

$this->breadcrumbs=array(
	'Tblusers'=>array('admin'),
	$model->first_name.' '.$model->last_name,
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->my_index)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->my_index),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View <?php echo $model->first_name; ?> <?php echo $model->last_name; ?> User's Details</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'my_index',
		//'user_id',
		'first_name',
		'last_name',
		'email_address',
		'username',
		'password',
		'user_type',
		'last_login',
		'bad_logins',
		'bad_login_date',
		'password_changed',
		'activated',
		'password_show',
	),
)); ?>
