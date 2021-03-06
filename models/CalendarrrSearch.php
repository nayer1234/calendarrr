<?php

namespace kouosl\calendarrr\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\calendarrr\models\Calendarrr;

/**
 * CalendarrrSearch represents the model behind the search form of `kouosl\calendarrr\models\Calendarrr`.
 */
class CalendarrrSearch extends Calendarrr
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['day', 'month'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Calendarrr::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'day' => $this->day,
            'month' => $this->month,
        ]);

        return $dataProvider;
    }
}
