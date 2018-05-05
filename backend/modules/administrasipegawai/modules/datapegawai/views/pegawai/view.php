<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\detail\DetailView;
use common\components\SikepHelper;
use kartik\file\FileInput;

/**
 * note: DetailView
 * http://demos.krajee.com/detail-view
 * 
 */
Url::remember();

$this->title = 'Biodata';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="tmst-pegawai-view">

    <div class="row form-group">
        <?php echo Html::a('Kembali', Url::to(['default/view', 'id' => $model->IdPegawai]), ['class' => 'btn btn-warning pull-right']); ?>
    </div>

    <div class="body-content">
        <?= Html::a('Update', ['pegawai/update', 'id' => $model->IdPegawai], ['class' => 'btn btn-primary']) ?>
        <?php
//        echo Html::a('Delete', ['delete', 'id' => $model->IdPegawai], [
//            'class' => 'btn btn-danger',
//            'data' => [
//                'confirm' => 'Are you sure you want to delete this item?',
//                'method' => 'post',
//            ],
//        ]);
        ?>
        </p>

        <?=
        DetailView::widget([
            'model' => $model,
            'condensed' => true,
            'hover' => true,
            'mode' => DetailView::MODE_VIEW,
//            'panel' => [
//                'heading' => 'Book # ' . $model->id,
//                'type' => DetailView::TYPE_INFO,
//            ],
            'formOptions' => ['options' => ['enctype' => 'multipart/form-data']],
            'attributes' => [
                'NIK',
                [
                    'attribute' => 'StatusPerkawinan',
                    'value' => $model->statusPerkawinan->NamaStatusKawin,
//                    'type' => DetailView::INPUT_SELECT2,
//                    'widgetOptions' => [
//                        'data' => ArrayHelper::map(Author::find()->orderBy('name')->asArray()->all(), 'id', 'name'),
//                    ]
                ],
                [
                    'attribute' => 'JenisPegawai',
                    'value' => isset($model->jenisPegawai) ? $model->jenisPegawai->NamaJenisPegawai : '',
                ],
                [
                    'attribute' => 'StatusPegawai',
                    'value' => isset($model->statusPegawai) ? $model->statusPegawai->StatusPegawai : '',
                ],
                [
                    'attribute' => 'Agama',
                    'value' => isset($model->agama) ? $model->agama->NamaAgama : '',
                ],
                'NomorTelepon',
                [
                    'attribute' => 'PropinsiTempatLahir',
                    'value' => isset($model->propinsiTempatLahir) ? $model->propinsiTempatLahir->NamaPropinsi : '',
                ],
                'JenisKelamin',
                [
                    'attribute' => 'GolonganDarah',
                    'value' => isset($model->golonganDarah) ? $model->golonganDarah->NamaGolonganDarah : '',
                ],
                'TinggiBadan',
                'BeratBadan',
                [
                    'attribute' => 'Rambut',
                    'value' => isset($model->rambut) ? $model->rambut->NamaJenisRambut : '',
                ],
                [
                    'attribute' => 'WarnaKulit',
                    'value' => isset($model->warnaKulit) ? $model->warnaKulit->NamaWarnaKulit : '',
                ],
                [
                    'attribute' => 'BentukMuka',
                    'value' => isset($model->bentukMuka) ? $model->bentukMuka->NamaBentukMuka : '',
                ],
                'CiriKhusus',
                'CacatTubuh',
                [
                    'attribute' => 'IdSukuBangsa',
                    'value' => isset($model->sukuBangsa) ? $model->sukuBangsa->NamaSukuBangsa : '',
                ],
                [
                    'attribute' => 'DokumenAktaLahir',
                    'value' => FileInput::widget([
                        'model' => $model,
                        'attribute' => 'DokumenAktaLahir',
                        'value' => SikepHelper::getImageUrl($model->DokumenAktaLahir, '@uploadaktapegawaiurl'),
                        'options' => [
                            //'accept' => 'image/*',
                            'multiple' => false
                        ],
                        'language' => 'id',
                        'pluginOptions' => [
                            'initialPreview' => [
                                SikepHelper::getImageUrl($model->DokumenAktaLahir, '@uploadaktapegawaiurl'),
                            ],
                            'maxFileCount' => 1,
                            'overwriteInitial' => FALSE,
                            'initialPreviewAsData' => TRUE,
                            'initialCaption' => isset($model->DokumenAktaLahir) && !empty($model->DokumenAktaLahir) ? $model->DokumenAktaLahir : '',
                            'showRemove' => FALSE,
                            'showUpload' => FALSE,
                            'showBrowse' => FALSE,
                            'showCaption' => FALSE,
                            'dropZoneEnabled ' => FALSE,
                            'disabled' => TRUE,
                        ]
                    ]),
                    'format' => 'raw',
                ],
                'KegemaranHobi',
                'MasaKerja',
                [
                    'attribute' => 'KodeBankPegawai',
                    'value' => isset($model->kodeBankPegawai) ? $model->kodeBankPegawai->NamaBank : '',
                ],
                'NomorRekeningPegawai',
                'CabangRekeningPegawai',
                'NamaRekeningPegawai',
                'FingerprintPegawai:ntext',
            //'IdPegawai',
            //'NIPLama',
            //'NIPBaru',
            //'NamaLengkap',
            //'GelarDepan',
            //'GelarBelakang',
            //'kodeGolonganRuang.NamaGolongan',
            //'TanggalLahir',
            //'kabupatenTempatLahir.NamaKabupaten',
            //'propinsiTempatLahir.NamaPropinsi',
            //'jabatan.NamaJabatan',                
            //'FotoPegawai',
            //'EmailPegawai:email',
            //'NomorHandphone',
            //['attribute' => 'publish_date', 'type' => DetailView::INPUT_DATE],
            ]
        ])
        ?>

    </div>
</div>
