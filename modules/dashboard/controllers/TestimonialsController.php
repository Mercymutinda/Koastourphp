<?php

namespace dashboard\controllers;

use Google\Service\Aiplatform\GoogleCloudAiplatformV1SchemaTrainingjobDefinitionSeq2SeqPlusForecastingInputsTransformationCategoricalTransformation;
use Yii;
use dashboard\models\Testimonials;
use dashboard\models\searches\TestimonialsSearch;
use helpers\DashboardController;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;


/**
 * TestimonialsController implements the CRUD actions for Testimonials model.
 */
class TestimonialsController extends DashboardController
{
    public $permissions = [
        'dashboard-testimonials-list'=>'View Testimonials List',
        'dashboard-testimonials-create'=>'Add Testimonials',
        'dashboard-testimonials-update'=>'Edit Testimonials',
        'dashboard-testimonials-delete'=>'Delete Testimonials',
        'dashboard-testimonials-restore'=>'Restore Testimonials',
        ];

        public function getViewPath()
        {
            return Yii::getAlias('@ui/views/cms/testimonials');
        }  
    public function actionIndex()
    {
        Yii::$app->user->can('dashboard-testimonials-list');
        $searchModel = new TestimonialsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionCreate()
    {
        Yii::$app->user->can('dashboard-board-create'); //permission check
        $model = new Testimonials();
      
        if ($this->request->isPost) {
            if ($model->load(Yii::$app->request->post())) {
                $model->imageFile = UploadedFile::getInstance($model,'imageFile');
                if ($model->upload()) {
                    if ($model->save(false)) {
                        // $model->image = 'uploads/' . $model->imageFile->baseName . '.' . $model->imageFile->extension;
                        Yii::$app->session->setFlash('success', 'Testimonial created successfully');
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
            }
            
            // Save the model
            if ($model->save(false)) {
                Yii::$app->session->setFlash('success', 'Testimonial updated successfully');
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
            Yii::$app->user->can('dashboard-testimonials-restore');
            $model->restore();
            Yii::$app->session->setFlash('success', 'Testimonials has been restored');
        } else {
            Yii::$app->user->can('dashboard-testimonials-delete');
            $model->delete();
            Yii::$app->session->setFlash('success', 'Testimonials has been deleted');
        }
        return $this->redirect(['index']);
    }
    protected function findModel($id)
    {
        if (($model = Testimonials::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}