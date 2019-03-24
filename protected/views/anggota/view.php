<?php
/* @var $this AnggotaController */
/* @var $model Anggota */

$this->breadcrumbs=array(
	'Anggotas'=>array('index'),
	$model->id_anggota,
);

$this->menu=array(
	array('label'=>'List Anggota', 'url'=>array('index')),
	array('label'=>'Create Anggota', 'url'=>array('create')),
	array('label'=>'Update Anggota', 'url'=>array('update', 'id'=>$model->id_anggota)),
	array('label'=>'Delete Anggota', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_anggota),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Anggota', 'url'=>array('admin')),
);
?>

<h1>View Anggota #<?php echo $model->id_anggota; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_anggota',
		'nama_member',
		'no_hp',
		'tanggal_lahir_member',
		'email_member',
		'jenis_kelamin',
		'no_ktp',
	),
)); ?>
