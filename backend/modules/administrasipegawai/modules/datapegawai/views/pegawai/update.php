<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Update Pegawai';
//$this->params['breadcrumbs'][] = 'Update';
?>

<?= Html::a('Kembali', Url::previous(), ['class' => 'btn btn-warning pull-right']) ?>

<div class="tmst-pegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    $form = ActiveForm::begin([
                //'action' => ['pegawai/update?id=' . $id],
                'layout' => 'horizontal',
                'class' => 'form-horizontal',
                'options' => ['enctype' => 'multipart/form-data'],
                    //'enableAjaxValidation' => FALSE,
    ]);
    ?>

    <?=
    $this->render('_form', [
        'model' => $model,
        'form' => $form,
    ])
    ?>

    <?php ActiveForm::end(); ?>

</div>
