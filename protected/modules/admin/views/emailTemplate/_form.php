<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */
/* @var $form CActiveForm */
?>

<div class="form">
<link type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/calender/css/ui-lightness/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/calender/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/calender/js/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript">
	$(function(){

		// Datepicker
		$('#datepicker').datepicker({
			inline: true,
			dateFormat: 'yy-mm-dd',
			changeMonth: true,
			changeYear: true
		});
	});
</script>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'email-template-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'email_title'); ?>
		<?php echo $form->textField($model,'email_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_template_subject'); ?>
		<?php echo $form->textField($model,'email_template_subject',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email_template_subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_template_key'); ?>
		<?php if (isset($update)) { ?>
		<?php echo $form->textField($model,'email_template_key',array('size'=>60,'maxlength'=>255, 'readonly'=>'readonly')); ?>
		<?php } else {?>
		<?php echo $form->textField($model,'email_template_key',array('size'=>60,'maxlength'=>255)); ?>
		<?php }?>
		<?php echo $form->error($model,'email_template_key'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'email_template_body'); ?>
		<?php 
				$this->widget('application.extensions.TheCKEditor.TheCKEditorWidget',array(
			    'model'=>$model,                
			    'attribute'=>'email_template_body',         
			    'height'=>'300px',
			    'width'=>'700px',
			    'ckeditor'=>Yii::app()->basePath.'/../ckeditor/ckeditor.php',
			    'ckBasePath'=>Yii::app()->baseUrl.'/ckeditor/',
				'config' => array('toolbar'=>'Full',)
			) ); 
		?>
		<?php echo $form->error($model,'email_template_body'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'email_template_create_date'); ?>
		<?php echo $form->textField($model,'email_template_create_date',array('size'=>30,'id'=>'datepicker')); ?>
		<?php echo $form->error($model,'email_template_create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_template_is_active'); ?>
		<?php echo $form->dropDownList($model,'email_template_is_active',array('Active'=>'Active','In-Active'=>'In-Active'),array('width'=>30)); ?>
		<?php echo $form->error($model,'email_template_is_active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->