<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use backend\components\SikepHelper;
use backend\components\profile\ProfileHeader;

$this->title = 'Pasangan';
$this->params['breadcrumbs'][] = ['label' => 'Administrasi Pegawai', 'url' => ['/administrasipegawai/default']];
$this->params['breadcrumbs'][] = ['label' => 'Daftar Pegawai', 'url' => ['/administrasipegawai/datapegawai']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= ProfileHeader::widget($profileParams) ?>

<div class="tmst-keluarga-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Pasangan', ['create?idPegawai=' . $idPegawai], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'moduleId' => 'gridview',
        'condensed' => TRUE,
        'hover' => TRUE,
        'resizableColumns' => TRUE,
        'persistResize' => TRUE,
        'responsiveWrap' => TRUE,
        'floatHeader' => TRUE,
        'floatHeaderOptions' => ['scrollingTop' => '50'],
        'export' => ['fontAwesome' => TRUE],
        'exportConfig' => SikepHelper::getDocumentExportConfig($this->title),
        'panel' => ['before' => ''], //'before' harus diset biar toolbar nongol
        'toolbar' => [
//            [
//                'content' => Html::button('<i class="glyphicon glyphicon-plus"></i>', [
//                    'type' => 'button',
//                    //'title' => Yii::t('kvgrid', 'Add Book'),
//                    'title' => 'title 1',
//                    'class' => 'btn btn-success',
//                ]) . ' ' .
//                Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['grid-demo'], [
//                    'class' => 'btn btn-default',
//                    'title' => 'title 2',
//                        //'title' => Yii::t('kvgrid', 'Reset Grid')
//                ]),
//            ],
            '{export}',
//            '{toggleData}'
        ],
        'toggleDataContainer' => ['class' => 'btn-group-sm'],
        'exportContainer' => ['class' => 'btn-group-sm'],
        'pjax' => TRUE,
        'pjaxSettings' => [
            'neverTimeout' => TRUE,
            'options' => ['id' => 'kv-unique-id-1'],
        //'beforeGrid' => 'My fancy content before.',
        //'afterGrid' => 'My fancy content after.',
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'IdAnggotaKeluarga',
            'IDPegawai',
            'JenisHubunganKeluarga',
            'JenisKelamin',
            'NamaAnggotaKeluarga',
            //'TempatLahirAnggotaKeluarga',
            //'TanggalLahirAnggotaKeluarga',
            //'PekerjaanAnggotaKeluarga',
            //'AlamatKantorAnggotaKeluarga',
            //'NoIndukPegawaiKeluarga',
            //'Agama',
            //'StatusPerkawinan',
            //'TanggalNikah',
            //'StatusKesehatan',
            //'PendidikanTerakhir',
            //'IsHidup',
            //'BerhakTunjangan',
            //'DokumenHubunganKeluarga',
            //'NomorKARIS_KARSU',
            //'FotoAnggotaKeluarga',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
