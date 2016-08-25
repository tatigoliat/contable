<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Movimientocontable;

/**
 * MovimientocontableSearch represents the model behind the search form about `app\models\Movimientocontable`.
 */
class MovimientocontableSearch extends Movimientocontable
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idmovimientocontable', 'fkcuentacontable', 'fkempresa', 'fknaturaleza', 'reversado'], 'integer'],
            [['fecha', 'fechareverso'], 'safe'],
            [['mdebe', 'mhaber'], 'number'],
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
        $query = Movimientocontable::find();

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
            'idmovimientocontable' => $this->idmovimientocontable,
            'fecha' => $this->fecha,
            'fechareverso' => $this->fechareverso,
            'fkcuentacontable' => $this->fkcuentacontable,
            'fkempresa' => $this->fkempresa,
            'mdebe' => $this->mdebe,
            'mhaber' => $this->mhaber,
            'fknaturaleza' => $this->fknaturaleza,
            'reversado' => $this->reversado,
        ]);

        return $dataProvider;
    }
}
