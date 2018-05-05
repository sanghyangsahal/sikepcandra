<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TmstKeluarga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tmst-keluarga-form">

    <?php $isNewRecord = $model->isNewRecord; ?>

    <?php $form = ActiveForm::begin(); ?>

    <?php // echo $form->field($model, 'IDPegawai')->textInput(); ?>

    <?= $form->field($model, 'JenisHubunganKeluarga')->textInput() ?>


    <?= $form->field($model, 'NamaAnggotaKeluarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TempatLahirAnggotaKeluarga')->textInput(['maxlength' => true]) ?>

    <?php
    if (!$isNewRecord) {
        echo $form->field($model, 'TanggalLahirAnggotaKeluarga')->textInput();

        echo $form->field($model, 'JenisKelamin')->dropDownList(['Pria' => 'Pria', 'Wanita' => 'Wanita',], ['prompt' => 'Pilih Jenis Kelamin']);

        echo $form->field($model, 'PekerjaanAnggotaKeluarga')->textInput();

        echo $form->field($model, 'AlamatKantorAnggotaKeluarga')->textInput(['maxlength' => true]);

        echo $form->field($model, 'NoIndukPegawaiKeluarga')->textInput();

        echo $form->field($model, 'Agama')->textInput();
    }
    ?>

    <?= $form->field($model, 'StatusPerkawinan')->textInput() ?>

    <?php
    if (!$isNewRecord) {
        echo $form->field($model, 'TanggalNikah')->textInput();

        echo $form->field($model, 'StatusKesehatan')->textInput(['maxlength' => true]);

        echo $form->field($model, 'PendidikanTerakhir')->textInput();
    }
    ?> 

    <?= $form->field($model, 'IsHidup')->dropDownList(['Y' => 'Y', 'N' => 'N',], ['prompt' => '']) ?>

    <?= $form->field($model, 'BerhakTunjangan')->dropDownList(['Y' => 'Y', 'N' => 'N',], ['prompt' => '']) ?>

    <?php
    if (!$isNewRecord) {
        echo $form->field($model, 'DokumenHubunganKeluarga')->textInput(['maxlength' => true]);

        echo $form->field($model, 'NomorKARIS_KARSU')->textInput(['maxlength' => true]);

        echo $form->field($model, 'FotoAnggotaKeluarga')->textInput(['maxlength' => true]);
    }
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
