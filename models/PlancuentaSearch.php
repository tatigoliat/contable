<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Plancuenta;

/**
 * PlancuentaSearch represents the model behind the search form about `app\models\Plancuenta`.
 */
class PlancuentaSearch extends Plancuenta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pkplancuenta', 'fkempresa', 'fknaturaleza', 'tipopago', 'tiporecurso'], 'integer'],
            [['descripcionplancuenta', 'codigocuenta', 'espadre'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Plancuenta::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'pkplancuenta' => $this->pkplancuenta,
            'fkempresa' => $this->fkempresa,
            'fknaturaleza' => $this->fknaturaleza,
            'tipopago' => $this->tipopago,
            'tiporecurso' => $this->tiporecurso,
        ]);

        $query->andFilterWhere(['like', 'descripcionplancuenta', $this->descripcionplancuenta])
            ->andFilterWhere(['like', 'codigocuenta', $this->codigocuenta])
            ->andFilterWhere(['like', 'espadre', $this->espadre]);

        return $dataProvider;
    }
}
