<?php
/* @var $this TblusersController */
/* @var $model Tblusers */

$this->breadcrumbs=array(
	'Admin Users'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Manage User', 'url'=>array('admin')),
	array('label'=>'Create User', 'url'=>array('create')),
);
?>

<h1>Manage Admin Users</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tblusers-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'my_index',
		//'user_id',
		array(
            'name'=>'first_name',
            'header'=>'Name',
            'value'=>'$data->first_name ." ". $data->last_name',
        ),
		'email_address',
		'username',
		array(
            'name'=>'user_type',
            'header'=>'User Type',
            'filter'=>array('main_administrator'=>'Main Administrator','director'=>'Director','manager'=>'Manager','coordinator'=>'Coordinator','resticted'=>'Restricted','reservationist'=>'Reservationist'),
            'value'=>'$data->user_type',
        ),
		/*'password',
		'user_type',
		'last_login',
		'bad_logins',
		'bad_login_date',
		'password_changed',
		'activated',*/
		array(
            'name'=>'activated',
            'header'=>'Active',
            'filter'=>array('yes'=>'Yes','no'=>'No'),
            'value'=>'($data->activated=="yes")?("Yes"):("No")'
        ),
		//'password_show',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
