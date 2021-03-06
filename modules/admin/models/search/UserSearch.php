<?php

namespace app\modules\admin\models\search;

use app\models\User;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use Yii;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * @var string
     */
    public $username;
    /**
     * @var string
     */
    public $email;
    /**
     * @var timestamp
     */
    public $date_create;
    /**
     * @var string
     */
    public $ip;
    /**
     * @var string
     */
    public $role;
    /**
     * @var int
     */
    public $status;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'string'],

            ['email', 'string'],

            ['date_create', 'date', 'format' => 'yyyy-mm-dd'],

            ['ip', 'string'],

            ['role', 'string'],

            ['status', 'integer'],
            ['status', 'in', 'range' => array_keys(User::getStatuses())],
        ];
    }

    /**
     * Search by request criteria.
     *
     * @param array|null Filter params.
     * @return ActiveDataProvider Data provider.
     */
    public function search($params)
    {
        $query = User::find()->with('roles');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'date_create' => SORT_DESC,
                ]
            ],
            'pagination' => [
                'pageSizeLimit' => [50, 100],
            ],
        ]);

        $dataProvider->getPagination()->setPageSize(Yii::$app->request->get('pageSize'), true);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ip' => !empty($this->ip) ? ip2long($this->ip) : null,
            'status' => $this->status,
            'role' => $this->role,
            'DATE(date_create)' => $this->date_create
        ]);

        $query->andFilterWhere(['like', 'user.username', $this->username]);
        $query->andFilterWhere(['like', 'user.email', $this->email]);

        return $dataProvider;
    }
}
