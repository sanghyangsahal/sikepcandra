<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Update Pegawai';
$this->params['breadcrumbs'][] = 'Update';
?>

<?= Html::a('Kembali', Url::previous(), ['class' => 'btn btn-warning pull-right']) ?>

<div class="tmst-pegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', ['model' => $model,]) ?>

</div>
