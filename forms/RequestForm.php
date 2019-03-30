<?php

namespace app\forms;
/**
 * Created by PhpStorm.
 * User: angelika
 * Date: 29.03.19
 * Time: 9:49
 */
class RequestForm extends \yii\base\Model
{
    public $second_name;
    public $name;
    public $patronymic;
    public $birthday;
    public $phone;
    public $email;
    public $city;
    public $subscription;
    public $accept_conditions;

    public function rules()
    {
        return [
            [['second_name', 'name', 'phone', 'city'], 'required', 'message'=>'Обязательно для заполнения'],
            [['second_name', 'name', 'patronymic', 'email'], 'string', 'max' => 255],
            [['email'], 'email', 'message'=>'Неверный формат email'],
            [['second_name', 'name', 'patronymic'], 'match', 'pattern' => '/^[А-Яа-яЁё]+$/iu', 'message'=>'Можно использовать только русские буквы'],
            [['birthday', 'subscription', 'accept_conditions' ], 'safe'],

            //обрезает пробелы
            [['second_name', 'name', 'patronymic', 'email'], 'trim'],

            // нормализует значение
            [['phone'], 'filter', 'filter' => function ($value) {
                return preg_replace("/[^0-9]/", '', $value);
            }],

            // нормализует значение
            [['subscription', 'accept_conditions'], 'filter', 'filter' => function ($value) {
                return (int) $value;
            }],

            //условная валидация
            ['email', 'required', 'when' => function ($model) {
                return $model->subscription == 1;
            }, 'whenClient' => "function (attribute, value) { 
                    return $('#requestform-subscription').val() == 1;
                }", 'message'=>'Обязательно для заполнения при подписке'],

            ['accept_conditions', function ($attribute) {
                if (!$this->$attribute) {
                    $this->addError($attribute, 'Необходимо согласиться с уловиями');
                }
            }]
        ];
    }



}