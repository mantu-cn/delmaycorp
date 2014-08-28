<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<?php 
	/* $lang = Yii::app()->language;
	echo $lang.'<br/>';
	Yii::app()->setLanguage($lang);
	echo Yii::t('blog','Active record class "{class}" does not have a scope named "{scope}".'); */
	?>
<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainMbMenu">
		<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/admin/tblusers/view1'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Admin Users', 'url'=>array('/admin/tblusers/admin'), 'visible'=>Yii::app()->user->checkAccess('admin@TblusersAdministrating')),
				array('label'=>'Login', 'url'=>array('/admin/tblusers/index'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Email Template', 'url'=>array('/admin/emailTemplate/admin'), 'visible'=>Yii::app()->user->checkAccess('admin@EmailTemplateAdministrating')),
				array('label'=>'Accessibility Controll', 'url'=>array('/srbac/authitem/assign'), 'visible'=>Yii::app()->user->checkAccess('admin@TblusersAdministrating')),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/admin/tblusers/logout'), 'visible'=>!Yii::app()->user->isGuest),
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Capital Numbers Pvt Ltd.
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
