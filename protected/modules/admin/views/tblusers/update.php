<?php
/* @var $this TblusersController */
/* @var $model Tblusers */

$this->breadcrumbs=array(
	'Tblusers'=>array('admin'),
	$model->first_name.' '.$model->last_name=>array('view','id'=>$model->my_index),
	'Update',
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->my_index)),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Update User : <?php echo $model->first_name; ?> <?php echo $model->last_name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>