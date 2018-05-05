<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use common\components\SikepHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TmstKeluargaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anak';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row form-group">
    <?php echo Html::a('Kembali', Url::to(['default/view', 'id' => $idPegawai]), ['class' => 'btn btn-warning pull-right']); ?>
</div>

<div class="tmst-keluarga-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Anak', ['create?idPegawai=' . $idPegawai], ['class' => 'btn btn-success']) ?>
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
