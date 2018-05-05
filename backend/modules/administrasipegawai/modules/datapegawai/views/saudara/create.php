<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TmstKeluarga */

$this->title = 'Tambah Saudara';
$this->params['breadcrumbs'][] = ['label' => 'Saudara', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmst-keluarga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
