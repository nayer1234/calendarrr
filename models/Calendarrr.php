<?php

namespace kouosl\calendarrr\models;

use Yii;

/**
 * This is the model class for table "calendarrr".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $question
 * @property string $answer
 */
class Calendarrr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'calendarrr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content', 'question', 'answer'], 'string'],
            [['title'], 'string', 'max' => 255],
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
            'content' => 'Content',
            'question' => 'Question',
            'answer' => 'Answer',
        ];
    }
}
