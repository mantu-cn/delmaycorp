<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */

$this->breadcrumbs=array(
	'Email Templates'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmailTemplate', 'url'=>array('admin')),
	array('label'=>'Create EmailTemplate', 'url'=>array('create')),
	array('label'=>'View EmailTemplate', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Update EmailTemplate <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'update' => true)); ?>