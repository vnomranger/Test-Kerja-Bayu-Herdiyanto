<?php
/* @var $this AnggotaController */
/* @var $model Anggota */

$this->breadcrumbs=array(
	'Anggotas'=>array('index'),
	$model->id_anggota=>array('view','id'=>$model->id_anggota),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Anggota', 'url'=>array('create')),
	array('label'=>'List Anggota', 'url'=>array('admin')),
);
?>

<h1>Update Anggota <?php echo $model->id_anggota; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>