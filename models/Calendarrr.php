<?php

namespace kouosl\calendarrr\models;

use Yii;

/**
 * This is the model class for table "calendarrr".
 *
 * @property int $id
 * @property string $day
 * @property string $month
 */
class Calendarrr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calendarrr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'day', 'month'], 'required'],
            [['id'], 'integer'],
            [['day', 'month'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'day' => 'Day',
            'month' => 'Month',
        ];
    }
}
