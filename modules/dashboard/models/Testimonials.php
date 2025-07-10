<?php

namespace dashboard\models;

use Yii;
/**
 *@OA\Schema(
 *  schema="Testimonials",
 *  @OA\Property(property="id", type="integer",title="Id", example="integer"),
 *  @OA\Property(property="name", type="string",title="Name", example="string"),
 *  @OA\Property(property="relation", type="string",title="Relation", example="string"),
 *  @OA\Property(property="content", type="string",title="Content", example="string"),
 *  @OA\Property(property="image", type="string",title="Image", example="string"),
 *  @OA\Property(property="is_deleted", type="int",title="Is deleted", example="int"),
 *  @OA\Property(property="created_at", type="int",title="Created at", example="int"),
 *  @OA\Property(property="updated_at", type="int",title="Updated at", example="int"),
 * )
 */

class Testimonials extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%testimonials}}';
    }
    /**
     * list of fields to output by the payload.
     */
    public function fields()
    {
        return array_merge(
            parent::fields(), 
            [
            'id',
            'name',
            'relation',
            'content',
            'image',
            'is_deleted',
            'created_at',
            'updated_at',
            ]
        );
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'relation', 'content'], 'required'],
            [['content'], 'string'],
            [['is_deleted', 'created_at', 'updated_at'], 'integer'],
            [['name', 'relation', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'relation' => 'Relation',
            'content' => 'Content',
            'image' => 'Image',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
