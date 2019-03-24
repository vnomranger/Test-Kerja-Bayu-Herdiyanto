<?php
/* @var $this AnggotaController */
/* @var $model Anggota */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_anggota'); ?>
		<?php echo $form->textField($model,'id_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_member'); ?>
		<?php echo $form->textField($model,'nama_member',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_hp'); ?>
		<?php echo $form->textField($model,'no_hp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_lahir_member'); ?>
		<?php echo $form->textField($model,'tanggal_lahir_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_member'); ?>
		<?php echo $form->textField($model,'email_member',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_kelamin'); ?>
		<?php echo $form->textField($model,'jenis_kelamin',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_ktp'); ?>
		<?php echo $form->textField($model,'no_ktp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->