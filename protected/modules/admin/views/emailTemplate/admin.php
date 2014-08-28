<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */

$this->breadcrumbs=array(
	'Email Templates'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EmailTemplate', 'url'=>array('admin')),
	array('label'=>'Create EmailTemplate', 'url'=>array('create')),
);
?>

<h1>Manage Email Templates</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'email-template-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		array('header'=>'SN.','value'=>'++$row'),
		'email_title',
		//'email_template_subject',
		//'email_template_body',
		'email_template_key',
		'email_template_create_date',
		'email_template_is_active',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
