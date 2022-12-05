<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Berobat;

/**
 * BerobatSearch represents the model behind the search form of `app\models\Berobat`.
 */
class BerobatSearch extends Berobat
{

    public $nama_pasien;
    public $nama_dokter;
    public $obat;
    public $rujukan;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nama_pasien_id', 'nama_dokter_id', 'obat_id', 'rujukan_id', 'biaya'], 'integer'],
            [['tanggal_berobat', 'keluhan', 'hasil_periksa','nama_pasien','nama_dokter','obat','rujukan'], 'safe'],
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
        $query = Berobat::find();
        $query->leftJoin('pasien', 'berobat.nama_pasien_id = pasien.id');
        $query->leftJoin('dokter', 'berobat.nama_dokter_id = dokter.id');
        $query->leftJoin('obat', 'berobat.obat_id = obat.id');
        $query->leftJoin('rs_rujuk', 'berobat.rujukan_id = rs_rujuk.id');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);


        // Add sorting
        $dataProvider->sort->attributes['nama_pasien'] = [
            'asc' => ['pasien.nama_pasien' => SORT_ASC],
            'desc' => ['pasien.nama_pasien' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['nama_dokter'] = [
            'asc' => ['dokter.nama_dokter' => SORT_ASC],
            'desc' => ['dokter.nama_dokter' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['obat'] = [
            'asc' => ['obat.nama_obat' => SORT_ASC],
            'desc' => ['obat.nama_obat' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['rujukan'] = [
            'asc' => ['rs_rujuk.nama_rs' => SORT_ASC],
            'desc' => ['rs_rujuk.nama_rs' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'nama_pasien_id' => $this->nama_pasien_id,
            'tanggal_berobat' => $this->tanggal_berobat,
            'nama_dokter_id' => $this->nama_dokter_id,
            'obat_id' => $this->obat_id,
            'rujukan_id' => $this->rujukan_id,
            'biaya' => $this->biaya,
        ]);

        $query->andFilterWhere(['like', 'keluhan', $this->keluhan])
            ->andFilterWhere(['like', 'hasil_periksa', $this->hasil_periksa])
            ->andFilterWhere(['like', 'pasien.nama_pasien', $this->nama_pasien])
            ->andFilterWhere(['like', 'dokter.nama_dokter', $this->nama_dokter])
            ->andFilterWhere(['like', 'obat.nama_obat', $this->obat])
            ->andFilterWhere(['like', 'rs_rujuk.nama_rs', $this->rujukan]);

        return $dataProvider;
    }
}
