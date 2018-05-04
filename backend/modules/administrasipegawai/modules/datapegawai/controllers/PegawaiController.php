<?php

namespace backend\modules\administrasipegawai\modules\datapegawai\controllers;

use Yii;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use common\components\SikepHelper;
use backend\models\TrefKabupaten;
use backend\models\TmstPegawai;

/**
 * PegawaiController implements the CRUD actions for TmstPegawai model.
 */
class PegawaiController extends Controller /* implements ViewContextInterface */ {
//    /**
//     * note:
//     * ganti path default views folder, harus implements ViewContextInterface.
//     * untuk menyesuaikan dengan navigasi view modul Data Pegawai
//     * @return type
//     */
//    public function getViewPath() {
//        return Yii::getAlias('@backend/modules/administrasipegawai/modules/datapegawai/views/datapegawai');
//    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Creates a new TmstPegawai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new TmstPegawai();

        if ($model->load(Yii::$app->request->post())) {

            //sebelum simpan ke table, ganti format date dulu jadi yyyy-MM-dd            
            $model->TanggalLahir = Yii::$app->formatter->asDate($model->TanggalLahir, 'yyyy-MM-dd');
            if ($model->TanggalLahir == '0001-11-30') {
                $model->TanggalLahir = NULL;
            }

            $model->PropinsiTempatLahir = $model->intIdPropinsi;

            if ($model->save()) {
                //return $this->redirect(['view', 'id' => $model->IdPegawai]);
                return $this->render(Yii::$app->params['pathDataPegawaiView'] . 'default/view', [
                            'model' => $model,
                            'id' => $model->IdPegawai,
                            'page' => 'pegawai/view',
                ]);
            }
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing TmstPegawai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            //sebelum simpan ke table, ganti format date dulu jadi yyyy-MM-dd            
            $model->TanggalLahir = Yii::$app->formatter->asDate($model->TanggalLahir, 'yyyy-MM-dd');
            if ($model->TanggalLahir == '0001-11-30') {
                $model->TanggalLahir = NULL;
            }

            $model->PropinsiTempatLahir = $model->intIdPropinsi;

            $fotoPegawai = UploadedFile::getInstance($model, 'fileFotoPegawai');
            if (!empty($fotoPegawai)) {
                $model->FotoPegawai = SikepHelper::uploadFile($fotoPegawai, Yii::$app->params['prefixFileFoto'] . $model->IdPegawai);
            }

            $aktaPegawai = UploadedFile::getInstance($model, 'fileAktaPegawai');
            $model->DokumenAktaLahir = SikepHelper::uploadFile($aktaPegawai, Yii::$app->params['prefixFileAkta'] . $model->IdPegawai);

            if ($model->save()) {
                return $this->render(Yii::$app->params['pathDataPegawaiView'] . 'default/view', [
                            'model' => $model,
                            'id' => $model->IdPegawai,
                            'page' => 'pegawai/view',
                ]);
            }
        } else {
            /**
             * atribut intIdPropinsi perlu diinitialize dulu biar 
             * activeHiddenInput hidden-propinsi ga empty
             */
            $model->intIdPropinsi = $model->PropinsiTempatLahir;

            //date perlu dijadiin locale US dulu biar bisa saving ke table
            Yii::$app->formatter->locale = 'en-US';
            $model->TanggalLahir = Yii::$app->formatter->asDate($model->TanggalLahir, 'php:d F Y');
        }

        return $this->render(Yii::$app->params['pathDataPegawaiView'] . 'default/view', [
                    'model' => $model,
                    'id' => $id,
                    'page' => 'pegawai/update',
        ]);
    }

    /**
     * Deletes an existing TmstPegawai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $model = $this->findModel($id);

        SikepHelper::deleteFile($model->FotoPegawai);

        SikepHelper::deleteFile($model->DokumenAktaLahir);

        $model->delete();

        return $this->redirect(array('default/index'));
    }

    /**
     * Finds the TmstPegawai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TmstPegawai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = TmstPegawai::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * 
     * ambil data propinsi berdasarkan id kabupaten pake ajax
     * @param type $zipId
     */
    public function actionGetPropinsi($idKabupaten) {
        echo Json::encode(TrefKabupaten::findOne($idKabupaten)->propinsi);
    }

    /**
     * hapus image pake ajax
     * @param type $id
     */
    public function actionDeleteImage($id) {
        $success = FALSE;

        $model = $this->findModel($id);

        //kalo berhasil dihapus
        if (SikepHelper::deleteFile($model->FotoPegawai)) {
            $model->FotoPegawai = null;
            $success = $model->save();
        }

        echo Json::encode(['success' => $success]);
    }

    /**
     * Lists all TmstPegawai models.
     * @return mixed
     */
//    public function actionIndex() {
//        $searchModel = new TmstPegawaiSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//
//        return $this->render('index', [
//                    'searchModel' => $searchModel,
//                    'dataProvider' => $dataProvider,
//        ]);
//    }

    /**
     * Displays a single TmstPegawai model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
//    public function actionView($id) {
//        return $this->render('view', [
//                    'model' => $this->findModel($id),
//                    'id' => $id,
//        ]);
//    }

    /**
     * upload image pake ajax
     * @param type $id
     */
//    public function actionUploadImage($id) {
//        $isDocExist = FALSE;
//        $success = FALSE;
//
//        $model = $this->findModel($id);
//
//        //logic upload poto
//        $foto = UploadedFile::getInstance($model, 'fileFotoPegawai');
//        if (!empty($foto)) {
//            $model->FotoPegawai = Yii::$app->params['prefixFileFoto'] . $model->IdPegawai . '.' . $foto->extension;
//            $foto->saveAs(SikepHelper::getImagePath($model->FotoPegawai));
//            $isDocExist = TRUE;
//        }
//
//        //logic upload akta
//        $akta = UploadedFile::getInstance($model, 'fileAktaPegawai');
//        if (!empty($akta)) {
//            $model->DokumenAktaLahir = Yii::$app->params['prefixFileAkta'] . $model->IdPegawai . '.' . $akta->extension;
//            $akta->saveAs(SikepHelper::getImagePath($model->DokumenAktaLahir));
//            $isDocExist = TRUE;
//        }
//
//        if ($isDocExist) {
//            $success = $model->save();
//        }
//
//        echo Json::encode(['success' => $success]);
//    }
}
