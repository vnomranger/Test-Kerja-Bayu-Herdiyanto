<?php
/* @var $this AnggotaController */
/* @var $data Anggota */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_anggota')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_anggota), array('view', 'id'=>$data->id_anggota)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_member')); ?>:</b>
	<?php echo CHtml::encode($data->nama_member); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_hp')); ?>:</b>
	<?php echo CHtml::encode($data->no_hp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir_member')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lahir_member); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_member')); ?>:</b>
	<?php echo CHtml::encode($data->email_member); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_ktp')); ?>:</b>
	<?php echo CHtml::encode($data->no_ktp); ?>
	<br />


</div>