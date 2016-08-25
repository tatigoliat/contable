<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cuentacontable;

/**
 * CuentacontableSearch represents the model behind the search form about `app\models\Cuentacontable`.
 */
class CuentacontableSearch extends Cuentacontable
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcuentac', 'haber', 'idempresa', 'idplancuentacontable', 'numhijos'], 'integer'],
            [['codigocuentacontable'], 'safe'],
            [['debe', 'saldo', 'saldoinicialdebe', 'saldoinicialhaber'], 'number'],
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
        $query = Cuentacontable::find();

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
            'idcuentac' => $this->idcuentac,
            'debe' => $this->debe,
            'haber' => $this->haber,
            'idempresa' => $this->idempresa,
            'idplancuentacontable' => $this->idplancuentacontable,
            'numhijos' => $this->numhijos,
            'saldo' => $this->saldo,
            'saldoinicialdebe' => $this->saldoinicialdebe,
            'saldoinicialhaber' => $this->saldoinicialhaber,
        ]);

        $query->andFilterWhere(['like', 'codigocuentacontable', $this->codigocuentacontable]);

        return $dataProvider;
    }
}
