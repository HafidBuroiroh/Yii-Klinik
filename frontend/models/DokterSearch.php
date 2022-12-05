<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dokter;

/**
 * DokterSearch represents the model behind the search form of `app\models\Dokter`.
 */
class DokterSearch extends Dokter
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nip', 'no_sip'], 'integer'],
            [['nama_dokter'], 'safe'],
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
        $query = Dokter::find();

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
            'nip' => $this->nip,
            'no_sip' => $this->no_sip,
        ]);

        $query->andFilterWhere(['like', 'nama_dokter', $this->nama_dokter]);

        return $dataProvider;
    }
}
