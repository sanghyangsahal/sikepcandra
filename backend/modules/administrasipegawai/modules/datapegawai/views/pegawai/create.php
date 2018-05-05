<?php

use yii\helpers\Html;

$this->title = 'Tambah Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row form-group">
    <?= Html::a('Kembali', ['index'], ['class' => 'btn btn-warning pull-right']) ?>
</div>

<div class="tmst-pegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', ['model' => $model,]) ?>

</div>
