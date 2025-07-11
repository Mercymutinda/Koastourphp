<?php

namespace dashboard\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "banners".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property int|null $is_deleted
 * @property int $created_at
 * @property int $updated_at
 */
class Banners extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banners'; // Name of the table in the database
    }
    // public $File;

    /**
     * {@inheritdoc}
     */
    public $imageFile; // This property is used to handle file uploads

    //rules for validation
     public function rules()  


    {
        return [
            [['is_deleted'], 'default', 'value' => 0],
            [['title', 'description',], 'required'],
            [['description'], 'string'],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg' ,'maxSize' => 1024 * 1024 * 10], // 5MB max size
            [['is_deleted', 'created_at', 'updated_at'], 'safe'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function upload()
    {
        // Remove the extra validation - we need to validate normally
        if ($this->validate()) {
            // Generate a safe filename instead of using title
            // $fileName = Yii::$app->security->generateRandomString(10);
            $fileName = $this->title; // Use the title property of the class
            $directory = 'uploads/banners/';
            $path = $directory . $fileName . '.' . $this->imageFile->extension;
            
            // Create directory if it doesn't exist
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true);
            }
            
            $this->imageFile->saveAs($path);
            $this->image = $path;
            return true;
        }
        return false;
    }
}
