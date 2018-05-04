<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\jui\DatePicker;
use kartik\file\FileInput;
use kartik\select2\Select2;
use common\components\SikepHelper;
use yii\bootstrap\ActiveForm;

/*
 * note: models yang dipakai di view ini, sorted alphabetically
 */
use backend\models\TrefAgama;
use backend\models\TrefBank;
use backend\models\TrefBentukMuka;
use backend\models\TrefGolonganDarah;
use backend\models\TrefGolonganRuang;
use backend\models\TrefJenisPegawai;
use backend\models\TrefKabupaten;
use backend\models\TrefPropinsi;
use backend\models\TrefRambut;
use backend\models\TrefStatusPegawai;
use backend\models\TrefStatusPerkawinan;
use backend\models\TrefSukubangsa;
use backend\models\TrefWarnaKulit;

/**
 * FileInput
 * http://demos.krajee.com/widget-details/fileinput
 * http://plugins.krajee.com/file-advanced-usage-demo
 */
?>

<div class="tmst-pegawai-form">

    <?php $isNewRecord = $model->isNewRecord; ?>

    <?php
    $form = ActiveForm::begin([
                'layout' => 'horizontal',
                'class' => 'form-horizontal',
                'options' => ['enctype' => 'multipart/form-data'],
    ]);
    ?>

    <?=
    $form->field($model, 'JenisPegawai')->dropDownList(
            ArrayHelper::map(TrefJenisPegawai::find()->orderBy('NamaJenisPegawai ASC')->all(), 'IdJenisPegawai', 'NamaJenisPegawai'), ['prompt' => 'Pilih jenis pegawai']
    )
    ?>

    <?= $form->field($model, 'NIPLama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIPBaru')->textInput(['maxlength' => true])->label('NIP Baru') ?>

    <?= $form->field($model, 'NIK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GelarDepan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NamaLengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GelarBelakang')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'KodeGolonganRuang')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(TrefGolonganRuang::find()->orderBy('NamaGolongan ASC')->all(), 'IdGolonganRuang', function($model) {
                    $golRuang = (!empty($model->Golongan) && !empty($model->Ruang) ? ' (' . $model->Golongan . '/' . $model->Ruang . ')' : '');
                    return $model->NamaGolongan . $golRuang;
                }),
        'options' => ['placeholder' => 'Pilih golongan ruang'],
        'pluginOptions' => [
            'allowClear' => true
        ],
        'language' => 'id',
    ]);
    ?>

    <?=
    $form->field($model, 'StatusPerkawinan')->dropDownList(
            ArrayHelper::map(TrefStatusPerkawinan::find()->orderBy('NamaStatusKawin ASC')->all(), 'IdStatusKawin', 'NamaStatusKawin'), ['prompt' => 'Pilih status perkawinan']
    )
    ?>

    <?=
    $form->field($model, 'StatusPegawai')->dropDownList(
            ArrayHelper::map(TrefStatusPegawai::find()->orderBy('StatusPegawai ASC')->all(), 'IdStatusPegawai', 'StatusPegawai'), ['prompt' => 'Pilih status pegawai']
    )
    ?>

    <?php
    if (!$isNewRecord) {
        echo $form->field($model, 'Agama')->dropDownList(
                ArrayHelper::map(TrefAgama::find()->orderBy('NamaAgama ASC')->all(), 'IdAgama', 'NamaAgama'), ['prompt' => 'Pilih agama']
        );

        echo $form->field($model, 'EmailPegawai')->textInput(['maxlength' => true]);

        echo $form->field($model, 'NomorHandphone')->textInput(['maxlength' => true]);

        echo $form->field($model, 'NomorTelepon')->textInput(['maxlength' => true]);
    }
    ?>

    <?=
    $form->field($model, 'TanggalLahir')->widget(DatePicker::class, [
        //'language' => 'id', //note: kalo dijadiin indonesia, error pas saving
        'dateFormat' => 'php:d F Y',
        //'dateFormat' => 'yyyy-MM-dd',
        'options' => [
            'class' => 'form-control',
        ],
        'clientOptions' => [
            'changeYear' => TRUE,
            'changeMonth' => TRUE,
            'yearRange' => '1901:2099',
            'minDate' => '-80Y', //note: 80 tahun ke belakang only
            'maxDate' => '+0Y',
        ],
    ])
    ?>

    <?=
    $form->field($model, 'KabupatenTempatLahir')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(TrefKabupaten::find()->orderBy('NamaKabupaten ASC')->all(), 'IdKabupaten', 'NamaKabupaten'),
        'language' => 'id',
        'options' => [
            'placeholder' => 'Pilih kabupaten',
            'id' => 'dropdown-kabupaten'
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?php
    echo $form->field($model, 'PropinsiTempatLahir')->dropDownList(
            ArrayHelper::map(TrefPropinsi::find()->orderBy('NamaPropinsi ASC')->all(), 'IdPropinsi', 'NamaPropinsi'), [
        'prompt' => 'Pilih propinsi',
        'id' => 'dropdown-propinsi',
        'disabled' => 'disabled'
    ]);

    echo Html::activeHiddenInput($model, 'intIdPropinsi', ['id' => 'hidden-propinsi']);
    /**
     * note: karena field PropinsiTempatLahir diisi valuenya secara otomatis pake ajax
     * dan di-disable, dia ga nge-post value ke controller. 
     * Jadi perlu hidden field buat nyimpen value yg akan dikirim ke controller.
     * Di controller, value ini di-assign secara manual ke $model->PropinsiTempatLahir
     */
    ?>

    <?php
    if (!$isNewRecord) {
        echo $form->field($model, 'JenisKelamin')->dropDownList(['Pria' => 'Pria', 'Wanita' => 'Wanita',], ['prompt' => 'Pilih jenis kelamin']);

        echo $form->field($model, 'TinggiBadan')->textInput();

        echo $form->field($model, 'BeratBadan')->textInput();

        echo $form->field($model, 'Rambut')->dropDownList(
                ArrayHelper::map(TrefRambut::find()->orderBy('NamaJenisRambut ASC')->all(), 'IdJenisRambut', 'NamaJenisRambut'), ['prompt' => 'Pilih jenis rambut']
        );

        echo $form->field($model, 'WarnaKulit')->dropDownList(
                ArrayHelper::map(TrefWarnaKulit::find()->orderBy('NamaWarnaKulit ASC')->all(), 'IdWarnaKulit', 'NamaWarnaKulit'), ['prompt' => 'Pilih warna kulit']
        );

        echo $form->field($model, 'BentukMuka')->dropDownList(
                ArrayHelper::map(TrefBentukMuka::find()->orderBy('NamaBentukMuka ASC')->all(), 'IdBentukMuka', 'NamaBentukMuka'), ['prompt' => 'Pilih bentuk muka']
        );

        echo $form->field($model, 'CiriKhusus')->textInput(['maxlength' => true]);

        echo $form->field($model, 'CacatTubuh')->textInput(['maxlength' => true]);

        echo $form->field($model, 'IdSukuBangsa')->dropDownList(
                ArrayHelper::map(TrefSukubangsa::find()->orderBy('NamaSukuBangsa ASC')->all(), 'IdSukuBangsa', 'NamaSukuBangsa'), ['prompt' => 'Pilih suku bangsa']
        );

        echo $form->field($model, 'KegemaranHobi')->textInput(['maxlength' => true]);

        echo $form->field($model, 'GolonganDarah')->dropDownList(
                ArrayHelper::map(TrefGolonganDarah::find()->orderBy('NamaGolonganDarah ASC')->all(), 'IdGolonganDarah', 'NamaGolonganDarah'), ['prompt' => 'Pilih golongan darah']
        );
    }
    ?>

    <?php
    //echo $form->field($model, 'IdJabatan')->textInput();
    /*
     * note: kamus data SIKEP hal.14
     * IdJabatan diisi dengan trigger dan SP saat ada isian baru di riwayat jabatan
     * 
     */
    ?>

    <?= $form->field($model, 'MasaKerja')->textInput(['maxlength' => true]) ?>

    <!--echo $form->field($model, 'DokumenAktaLahir')->textInput(['maxlength' => true]);-->
    <?php
    ?>

    <?php
    if (!$isNewRecord) {
        echo $form->field($model, 'fileAktaPegawai')->widget(FileInput::classname(), [
            'resizeImages' => TRUE,
            'options' => ['accept' => 'image/*'],
            'language' => 'id',
            'pluginOptions' => [
                'maxImageWidth' => 600,
                'maxImageHeight' => 900,
                'maxFileCount' => 1,
                'allowedFileExtensions' => ['jpg', 'png', 'pdf'],
                'initialPreview' => [
                    SikepHelper::getImageUrl($model->DokumenAktaLahir, '@uploadaktapegawaiurl'),
                ],
                'initialPreviewAsData' => TRUE,
                'initialCaption' => isset($model->DokumenAktaLahir) && !empty($model->DokumenAktaLahir) ? $model->DokumenAktaLahir : '',
                'maxFileSize' => 2000,
                'showRemove' => FALSE,
                'showUpload' => FALSE,
                'deleteUrl' => 'delete-image?id=' . $model->IdPegawai . '&prefix=' . Yii::$app->params['prefixFileAkta'] . '&filename=' . $model->DokumenAktaLahir,
            //'overwriteInitial' => TRUE,
            //'uploadUrl' => 'upload-image?id=' . $model->IdPegawai,
            //'initialPreviewShowDelete' => false,
            //'previewFileType' => 'any',//'any','image'
            //'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            //'browseLabel' => 'Select Photo'
            //'browseClass' => 'btn btn-success',
            //'uploadClass' => 'btn btn-info',
            //'removeClass' => 'btn btn-danger',
            //'removeIcon' => '<i class="glyphicon glyphicon-trash"></i> '
            //'browseLabel' => '',
            //'removeLabel' => '',
            //'mainClass' => 'input-group-lg'
            //'showPreview' => false,
            //'showCaption' => true,
            //'dropZoneEnabled ' => FALSE,
            //'showBrowse' => FALSE,
            //'showCaption' => FALSE,
            //'dropZoneEnabled ' => FALSE,
            ]
        ]);

        echo $form->field($model, 'fileFotoPegawai')->widget(FileInput::classname(), [
            'resizeImages' => TRUE,
            'options' => ['accept' => 'image/*'],
            'language' => 'id',
            'pluginOptions' => [
                'maxImageWidth' => 200,
                'maxImageHeight' => 300,
                'maxFileCount' => 1,
                'allowedFileExtensions' => ['jpg', 'png'],
                'initialPreview' => [
                    SikepHelper::getImageUrl($model->FotoPegawai, '@uploadfotopegawaiurl'),
                ],
                'initialPreviewAsData' => TRUE,
                'initialCaption' => isset($model->FotoPegawai) && !empty($model->FotoPegawai) ? $model->FotoPegawai : '',
                'maxFileSize' => 2000,
                'showRemove' => FALSE,
                'showUpload' => FALSE,
                'deleteUrl' => 'delete-image?id=' . $model->IdPegawai . '&prefix=' . Yii::$app->params['prefixFileFoto'] . '&filename=' . $model->FotoPegawai,
            ]
        ]);

        echo $form->field($model, 'KodeBankPegawai')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(TrefBank::find()->orderBy('NamaBank ASC')->all(), 'IdBank', 'NamaBank'),
            'language' => 'id',
            'options' => ['placeholder' => 'Pilih bank'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);

        echo $form->field($model, 'NomorRekeningPegawai')->textInput(['maxlength' => true]);

        echo $form->field($model, 'CabangRekeningPegawai')->textInput(['maxlength' => true]);

        echo $form->field($model, 'NamaRekeningPegawai')->textInput(['maxlength' => true]);

        echo $form->field($model, 'FingerprintPegawai')->textarea(['rows' => 6]);
    }
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>