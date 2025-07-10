<?php

namespace dashboard\controllers;

use Yii;
use dashboard\models\Banners;
use dashboard\models\searches\BannersSearch;
use helpers\DashboardController;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

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
        Yii::$app->user->can('dashboard-banners-create'); //permission check
        $model = new Banners();
      
        if ($this->request->isPost) {
            if ($model->load(Yii::$app->request->post())) {
                $model->imageFile = UploadedFile::getInstance($model,'imageFile');
                if ($model->upload()) {
                    if ($model->save(false)) {
                        // $model->image = 'uploads/' . $model->imageFile->baseName . '.' . $model->imageFile->extension;
                        Yii::$app->session->setFlash('success', 'Banners created successfully');
                        return $this->redirect(['index']);
                    }
                }
            }
        } else {
            $model->loadDefaultValues();
        }
    
        if ($this->request->isAjax) {
            return $this->renderAjax('create', ['model' => $model]);
        } else {
            return $this->render('create', ['model' => $model]);
        }
    }
    public function actionUpdate($id)
{
    Yii::$app->user->can('dashboard-banners-update');
    $model = $this->findModel($id);
    $currentImage = $model->image; // Store current image path

    if ($this->request->isPost) {
        if ($model->load(Yii::$app->request->post())) {
            // Get uploaded file instance
            $uploadedFile = UploadedFile::getInstance($model, 'imageFile');
            
            // Process only if a new file is uploaded
            if ($uploadedFile) {
                $model->imageFile = $uploadedFile;
                
                if ($model->upload()) {
                    // Delete old image if exists
                    if ($currentImage && file_exists($currentImage)) {
                        unlink($currentImage);
                    }
                } else {
                    // Keep current image if upload fails
                    $model->image = $currentImage;
                }
            }
            
            // Save the model
            if ($model->save(false)) {
                Yii::$app->session->setFlash('success', 'Banners updated successfully');
                return $this->redirect(['index']);
            }
        }
    }

    if ($this->request->isAjax) {
        return $this->renderAjax('update', ['model' => $model]);
    } else {
        return $this->render('update', ['model' => $model]);
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

    public function actionUpload(){
        $model = new Banners();
        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                // file is uploaded successfully
                return $this->redirect(['index']);
            } else {
                return $this->render('upload', ['model' => $model]);
            }
        }

    }
    protected function findModel($id)
    {
        if (($model = Banners::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


}
