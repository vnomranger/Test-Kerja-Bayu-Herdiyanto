<?php
/* @var $this AnggotaController */
/* @var $model Anggota */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anggota-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_member'); ?>
		<?php echo $form->textField($model,'nama_member',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nama_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_hp'); ?>
		<?php echo $form->textField($model,'no_hp'); ?>
		<?php echo $form->error($model,'no_hp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_lahir_member'); ?>
		<?php echo $form->dateField($model,'tanggal_lahir_member'); ?>
		<?php echo $form->error($model,'tanggal_lahir_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_member'); ?>
		<?php echo $form->emailField($model,'email_member',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kelamin'); ?>
		<?php echo $form->dropDownList($model,'jenis_kelamin',array("Laki - Laki" => "Laki - Laki", "Perempuan" => "Perempuan")); ?>
		<?php echo $form->error($model,'jenis_kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_ktp'); ?>
		<?php echo $form->textField($model,'no_ktp'); ?>
		<?php echo $form->error($model,'no_ktp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->