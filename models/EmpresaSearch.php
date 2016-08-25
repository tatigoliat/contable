<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Empresa;

/**
 * EmpresaSearch represents the model behind the search form about `app\models\Empresa`.
 */
class EmpresaSearch extends Empresa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigoempresa', 'cedulaempresa'], 'integer'],
            [['nombreempresa', 'nombresresponsable', 'apellidosresponsable', 'rifempresa', 'telefono', 'correoempresa'], 'safe'],
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
        $query = Empresa::find();

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
            'codigoempresa' => $this->codigoempresa,
            'cedulaempresa' => $this->cedulaempresa,
        ]);

        $query->andFilterWhere(['like', 'nombreempresa', $this->nombreempresa])
            ->andFilterWhere(['like', 'nombresresponsable', $this->nombresresponsable])
            ->andFilterWhere(['like', 'apellidosresponsable', $this->apellidosresponsable])
            ->andFilterWhere(['like', 'rifempresa', $this->rifempresa])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'correoempresa', $this->correoempresa]);

        return $dataProvider;
    }
}
