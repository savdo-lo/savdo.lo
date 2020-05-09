<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\product;

/**
 * ProductSearch represents the model behind the search form of `common\models\product`.
 */
class ProductSearch extends product
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'count', 'category_id', 'hit'], 'integer'],
            [['name', 'description', 'keywords', 'new', 'sale', 'img', 'content'], 'safe'],
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
        $query = product::find();

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
            'count' => $this->count,
            'category_id' => $this->category_id,
            'hit' => $this->hit,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'new', $this->new])
            ->andFilterWhere(['like', 'sale', $this->sale])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
