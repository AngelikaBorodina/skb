<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Request */
/* @var $form ActiveForm */
?>
<div class="RequestForm">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'city')->label('Город')->dropDownList(['1'=>'Ектеринбург', '2'=>'Москва', '3'=>'Казань']) ?>
    <?= $form->field($model, 'second_name')->label('Фамилия') ?>
    <?= $form->field($model, 'name')->label('Имя') ?>
    <?= $form->field($model, 'patronymic')->label('Отчество') ?>
    <?= $form->field($model, 'birthday')->label('Дата рождения')
        ->textInput(['type' => 'date'])?>
    <?= $form->field($model, 'phone')->label('Телефон')
        ->widget(\yii\widgets\MaskedInput::className(),[
            'mask' => '+\7 (999) 999-99-99']) ?>
    <?= $form->field($model, 'email')->label('E-mail')
        ->input('email') ?>
    <?= $form->field($model, 'subscription')
        ->checkbox(['label' => 'Я не против получать выгодные предложения на этот адрес',
        ])?>
    <?= $form->field($model, 'accept_conditions')
        ->checkbox(['label' => 'Я принимаю условия банковского соглашения',
        ])?>

    <div class="form-group">
        <?= Html::submitButton('Получить кредит', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- RequestForm -->
