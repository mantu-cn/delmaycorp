<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */

$this->breadcrumbs=array(
	'Email Templates'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EmailTemplate', 'url'=>array('admin')),
	array('label'=>'Create EmailTemplate', 'url'=>array('create')),
	array('label'=>'Update EmailTemplate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EmailTemplate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View EmailTemplate : <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email_title',
		'email_template_subject',
		//'email_template_body',
		array(
		'name'=>'email_template_body',
		'label'=>'Email Template Body',
		//'cssClass'=>'content',
		'template'=>"<tr class=\"{class}\"><th>{label}</th><td>{$model->email_template_body}</td></tr>\n",
		),
		'email_template_key',
		'email_template_create_date',
		'email_template_is_active',
	),
)); ?>
