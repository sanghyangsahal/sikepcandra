<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TmstKeluarga */

$this->title = 'Update Anak: ' . $model->IdAnggotaKeluarga;
$this->params['breadcrumbs'][] = ['label' => 'Anak', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdAnggotaKeluarga, 'url' => ['view', 'id' => $model->IdAnggotaKeluarga]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tmst-keluarga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
