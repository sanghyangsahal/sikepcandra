<?php

namespace backend\modules\administrasipegawai\modules\datapegawai\controllers;

use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use backend\models\TmstKeluarga;
use backend\models\TmstKeluargaSearch;
use backend\models\TmstPegawai;
use backend\models\TmstPegawaiSearch;

//use common\components\SikepHelper;

/**
 * PegawaiController implements the CRUD actions for TmstPegawai model.
 */
class DefaultController extends Controller {

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
     * Lists all TmstPegawai models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new TmstPegawaiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TmstPegawai model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $sub = 'default', $page = 'content') {
        $model = $this->findModel($id);

        switch ($sub) {
            case 'anak': //dari AnakController'
                if ($page == 'create') {
                    $modelAnak = new TmstKeluargaSearch();
                } else {
                    $modelAnak = TmstKeluarga::find()->where(['IDPegawai' => $id])->all();
                }

                $searchModel = new TmstKeluargaSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                //SikepHelper::consoleLog('anak : ', $dataProvider, true);exit;

                break;
            default:
                $searchModel = NULL;
                $dataProvider = NULL;
        }

        return $this->render('view', [
                    'model' => $model,
                    'modelAnak' => isset($modelAnak) ? $modelAnak : NULL,
                    'id' => $id,
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'page' => $sub . '/' . $page,
        ]);
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

}
