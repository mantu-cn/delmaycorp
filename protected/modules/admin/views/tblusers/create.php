<?php
/* @var $this TblusersController */
/* @var $model Tblusers */

$this->breadcrumbs=array(
	'Tblusers'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Create User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>