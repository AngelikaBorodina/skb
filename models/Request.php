<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property string $second_name
 * @property string $name
 * @property string $patronymic
 * @property string $birthday
 * @property string $phone
 * @property string $email
 * @property string $date_request
 * @property string $ip
 * @property string $headers
 * @property string $city
 * @property int $subscription
 * @property int $accept_conditions
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['second_name', 'name', 'phone', 'date_request', 'ip', 'headers', 'city'], 'required'],
            [['birthday', 'date_request'], 'safe'],
            [['headers'], 'string'],
            [['subscription', 'accept_conditions'], 'integer'],
            [['second_name', 'name', 'patronymic', 'phone', 'email', 'ip', 'city'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'second_name' => 'Second Name',
            'name' => 'Name',
            'patronymic' => 'Patronymic',
            'birthday' => 'Birthday',
            'phone' => 'Phone',
            'email' => 'Email',
            'date_request' => 'Date Request',
            'ip' => 'Ip',
            'headers' => 'Headers',
            'city' => 'City',
            'subscription' => 'Subscription',
            'accept_conditions' => 'Accept Conditions',
        ];
    }

    public function getHeader($title)
    {
        return (json_decode($this->headers)->$title)?:null;
    }
}
