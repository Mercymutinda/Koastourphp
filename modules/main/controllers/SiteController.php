<?php

namespace main\controllers;

use Yii;
use yii\web\Response;

class SiteController extends \helpers\WebController
{
    public $layout = 'site';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            [
                'class' => 'yii\filters\ContentNegotiator',
                'only' => ['index'],
                'formats' => [
                    'application/json' => Response::FORMAT_HTML,
                ],
            ],
        ]);
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'layout' => 'errors'
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionServices()
    {
        return $this->render('services');
    }

    public function actionSupport()
    {
        return $this->render('support');
    }

    /**
     * Handles both the Contact Page display and the Form Submission
     */
    // /modules/main/controllers/SiteController.php

    // /modules/main/controllers/SiteController.php

    // /modules/main/controllers/SiteController.php

    public function actionContact()
    {
        $model = new \auth\models\contactForm(); // Ensure capital 'C'
    
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            
            $model->name = $post['name'] ?? '';
            $model->email = $post['email'] ?? '';
            $model->phone = $post['phone'] ?? null;
            $model->eventSelection = $post['eventSelection'] ?? [];
            $model->subject = $post['subject'] ?? 'New Registration: HEALTHY HEARTS AND MIND';
            $model->body = $post['message'] ?? 'Registration submission';
    
            if ($model->contact(Yii::$app->params['adminEmail'])) {
                // If submitted via AJAX (background), return JSON
                if (Yii::$app->request->isAjax) {
                    return $this->asJson(['success' => true, 'message' => 'Success! Your registration has been sent.']);
                }
                // Fallback for normal page load
                Yii::$app->session->setFlash('success', 'Registration successful!');
                return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
            } else {
                if (Yii::$app->request->isAjax) {
                    return $this->asJson(['success' => false, 'message' => 'Error: Could not send message. Please try again.']);
                }
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
                return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
            }
        }
        return $this->render('contacts');
    }
    public function actionImpact()
    {
        return $this->render('impact');
    }

    public function actionDonate()
    {
        return $this->render('donate');
    }

    public function actionVolunteer()
    {
        return $this->render('volunteer');
    }

    public function actionPartner()
    {
        return $this->render('partner');
    }

    public function actionBoard()
    {
        return $this->render('board');
    }

    public function actionDocs($mod = 'dashboard')
    {
        return $this->render('docs', [
            'mod' => $mod
        ]);
    }

    public function actionAbout1()
    {
        return [
            'data' => [
                'id' => $_SERVER['APP_CODE'],
                'name' => $_SERVER['APP_NAME'],
                'enviroment' => $_SERVER['ENVIRONMENT'],
                'version' => $_SERVER['APP_VERSION'],
            ]
        ];
    }

    public function actionJsonDocs($mod = 'dashboard')
    {
        $roothPath = Yii::getAlias('@webroot/');
        $openapi = \OpenApi\Generator::scan(
            [
                $roothPath . 'modules/' . $mod,
                $roothPath . 'providers/swagger/config',
            ]
        );
        Yii::$app->response->headers->set('Access-Control-Allow-Origin', ['*']);
        Yii::$app->response->headers->set('Content-Type', 'application/json');
        $file = $roothPath . 'modules/dashboard/docs/' . $mod . '-openapi-json-resource.json';
        if (file_exists($file)) {
            unlink($file);
            file_put_contents($file, $openapi->toJson());
        } else {
            file_put_contents($file, $openapi->toJson());
        }
        Yii::$app->response->sendFile($file, false, ['mimeType' => 'json', 'inline' => true]);
        return true;
    }
}