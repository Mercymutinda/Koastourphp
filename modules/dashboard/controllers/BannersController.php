<?php

namespace dashboard\controllers;

use Yii;
use dashboard\models\Banners;
use dashboard\models\searches\BannersSearch;
use helpers\DashboardController;
use yii\web\NotFoundHttpException;

/**
 * BannersController implements the CRUD actions for Banners model.
 */
class BannersController extends DashboardController
{
    public $permissions = [
        'dashboard-banners-list'=>'View Banners List',
        'dashboard-banners-create'=>'Add Banners',
        'dashboard-banners-update'=>'Edit Banners',
        'dashboard-banners-delete'=>'Delete Banners',
        'dashboard-banners-restore'=>'Restore Banners',
        ];

    public function getViewPath()
    {
        return Yii::getAlias('@ui/views/cms/banners');
    }    
    public function actionIndex()
    {
        Yii::$app->user->can('dashboard-banners-list');
         $searchModel = new BannersSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionCreate()
    {
        Yii::$app->user->can('dashboard-banners-create');
        $model = new Banners();
        if ($this->request->isPost) {
            if ($model->load(Yii::$app->request->post())) {
                if ($model->validate()) {
                    if ($model->save()) {
                        Yii::$app->session->setFlash('success', 'Banners created successfully');
                        return $this->redirect(['index']);
                    }
                }
            }
        } else {
            $model->loadDefaultValues();
        }
        if ($this->request->isAjax) {
      
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }else {
            return $this->render('create', [
                'model' => $model,
            ]);
           
        }   

     
    }
    public function actionUpdate($id)
    {
        Yii::$app->user->can('dashboard-banners-update');
        $model = $this->findModel($id);

        if ($this->request->isPost) {
            if ($model->load(Yii::$app->request->post())) {
                if ($model->validate()) {
                    if ($model->save()) {
                        Yii::$app->session->setFlash('success', 'Banners updated successfully');
                        return $this->redirect(['index']);
                    }
                }
            }
        }
     if ($this->request->isAjax) {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    public function actionTrash($id)
    {
        $model = $this->findModel($id);
        if ($model->is_deleted) {
            Yii::$app->user->can('dashboard-banners-restore');
            $model->restore();
            Yii::$app->session->setFlash('success', 'Banners has been restored');
        } else {
            Yii::$app->user->can('dashboard-banners-delete');
            $model->delete();
            Yii::$app->session->setFlash('success', 'Banners has been deleted');
        }
        return $this->redirect(['index']);
    }
    protected function findModel($id)
    {
        if (($model = Banners::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
