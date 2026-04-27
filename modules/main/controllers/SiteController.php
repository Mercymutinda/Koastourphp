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
        // Use the model from 'auth' because 'dashboard' is disabled in wrapper.php
        $model = new \auth\models\contactForm();

        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();

            // Manual mapping to handle different names in index.php vs contacts.php
            $model->name = $post['name'] ?? 'Web User';
            $model->email = $post['email'] ?? $post['email3'] ?? null;
            $model->subject = $post['subject'] ?? 'Website Inquiry';
            $model->body = $post['message'] ?? 'User requested registration from the home page.';

            // Call contact() which uses the params from wrapper.php
            if ($model->email && $model->contact(Yii::$app->params['adminEmail'])) {
                return "Success! Your message has been sent.";
            }
            return "Error: Could not send message. Please check your email.";
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