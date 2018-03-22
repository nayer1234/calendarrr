<?php

namespace kouosl\survey\models;

use Yii;

/**
 * This is the model class for table "sample_data".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sample_id
 *
 * @property Samples $sample
 */
class SurveyData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'survey_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'sample_id'], 'required'],
            [['sample_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['survey_id'], 'exist', 'skipOnError' => true, 'targetClass' => Surveys::className(), 'targetAttribute' => ['survey_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'survey_id' => 'Survey ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSurvey()
    {
        return $this->hasOne(Surveys::className(), ['id' => 'survey_id']);
    }
}
