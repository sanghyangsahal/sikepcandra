<?php

use yii\helpers\Html;

$this->title = 'Create Pegawai';
//$this->params['breadcrumbs'][] = ['label' => 'Administrasi Pegawai', 'url' => ['/administrasipegawai/default']];
//$this->params['breadcrumbs'][] = ['label' => 'Daftar Pegawai', 'url' => ['default/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::a('Kembali', ['default/index'], ['class' => 'btn btn-warning pull-right']) ?>

<div class="tmst-pegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', ['model' => $model,]) ?>

</div>
