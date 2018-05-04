<?php
$this->title = 'Detail Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Administrasi Pegawai', 'url' => ['/administrasipegawai/default']];
$this->params['breadcrumbs'][] = ['label' => 'Daftar Pegawai', 'url' => ['default/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="tmst-default-view">
    <?php // echo $this->render(Yii::$app->params['pathDataPegawaiView'] . 'default/_header', ['model' => $model,]); ?>
    <?php echo $this->render('_header', ['model' => $model,]); ?>

    <div class="body-content">
        <?php //echo $this->render($page, ['model' => $model, 'id' => $id,]); ?>
        <?php
        echo $this->render(Yii::$app->params['pathDataPegawaiView'] . $page, [
            'model' => $model,
            'modelAnak' => isset($modelAnak) ? $modelAnak : NULL,
            'id' => $id,
            'searchModel' => isset($searchModel) ? $searchModel : NULL,
            'dataProvider' => isset($dataProvider) ? $dataProvider : NULL,
        ]);
        ?>
    </div>

</div>