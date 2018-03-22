<?php

namespace kouosl\survey\models;

use Yii;

/**
 * This is the model class for table "samples".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $picture
 *
 * @property data[] $data
 */
class Surveys extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'surveys';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description', 'picture'], 'string'],
            [['title'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'picture' => 'Picture',
        ];
    }

    public function getImagePath(){
        return sprintf("%s/surveys/%s",Yii::getAlias ( '@data' ),$this->picture);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getData()
    {
        return $this->hasMany(SurveyData::className(), ['survey_id' => 'id']);
    }
}
