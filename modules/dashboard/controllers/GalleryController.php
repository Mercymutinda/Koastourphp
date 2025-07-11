<?php

namespace dashboard\controllers;

use Yii;
use dashboard\models\Gallery;
use dashboard\models\searches\GallerySearch;
use helpers\DashboardController;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;


/**
 * GalleryController implements the CRUD actions for Gallery model.
 */
class GalleryController extends DashboardController
{
    public $permissions = [
        'dashboard-gallery-list'=>'View Gallery List',
        'dashboard-gallery-create'=>'Add Gallery',
        'dashboard-gallery-update'=>'Edit Gallery',
        'dashboard-gallery-delete'=>'Delete Gallery',
        'dashboard-gallery-restore'=>'Restore Gallery',
        ];

    public function GetViewPath()
    {
        return '@dashboard/views/cms/gallery';
    }
    
    public function actionIndex()
    {
        Yii::$app->user->can('dashboard-gallery-list');
        $searchModel = new GallerySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionCreate()
    {
        Yii::$app->user->can('dashboard-board-create'); //permission check
        $model = new Gallery();
      
        if ($this->request->isPost) {
            if ($model->load(Yii::$app->request->post())) {
                $model->imageFile = UploadedFile::getInstance($model,'imageFile');
                if ($model->upload()) {
                    if ($model->save(false)) {
                        // $model->image = 'uploads/' . $model->imageFile->baseName . '.' . $model->imageFile->extension;
                        Yii::$app->session->setFlash('success', 'Board created successfully');
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
    Yii::$app->user->can('dashboard-board-update');
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
            
            
            // Save the model
            if ($model->save(false)) {
                Yii::$app->session->setFlash('success', 'Board updated successfully');
                return $this->redirect(['index']);
            }
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
            Yii::$app->user->can('dashboard-gallery-restore');
            $model->restore();
            Yii::$app->session->setFlash('success', 'Gallery has been restored');
        } else {
            Yii::$app->user->can('dashboard-gallery-delete');
            $model->delete();
            Yii::$app->session->setFlash('success', 'Gallery has been deleted');
        }
        return $this->redirect(['index']);
    }
    protected function findModel($id)
    {
        if (($model = Gallery::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}