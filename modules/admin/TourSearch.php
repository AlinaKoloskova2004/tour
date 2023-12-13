<?php

namespace app\modules\admin;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tour;

/**
 * TourSearch represents the model behind the search form of `app\models\Tour`.
 */
class TourSearch extends Tour
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'old_number', 'child_number', 'day_number', 'is_hotter', 'id_country', 'id_operator', 'id_type', 'id_food', 'id_hotel'], 'integer'],
            [['name', 'image', 'date_depature', 'date_arrival', 'city_fly'], 'safe'],
            [['price'], 'number'],
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
        $query = Tour::find();

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
            'price' => $this->price,
            'date_depature' => $this->date_depature,
            'date_arrival' => $this->date_arrival,
            'old_number' => $this->old_number,
            'child_number' => $this->child_number,
            'day_number' => $this->day_number,
            'is_hotter' => $this->is_hotter,
            'id_country' => $this->id_country,
            'id_operator' => $this->id_operator,
            'id_type' => $this->id_type,
            'id_food' => $this->id_food,
            'id_hotel' => $this->id_hotel,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'city_fly', $this->city_fly]);

        return $dataProvider;
    }
}
