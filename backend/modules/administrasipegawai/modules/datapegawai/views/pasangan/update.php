<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TmstKeluarga */

$this->title = 'Update Tmst Keluarga: ' . $model->IdAnggotaKeluarga;
$this->params['breadcrumbs'][] = ['label' => 'Tmst Keluarga', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdAnggotaKeluarga, 'url' => ['view', 'id' => $model->IdAnggotaKeluarga]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tmst-keluarga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
