<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Request */
/* @var $form ActiveForm */
?>
<div class="banner">
    <img class="banner__img" src="<?= \yii\helpers\Url::to(['@web/images/request/banner.png']) ?>" alt="">
</div>
<?php $form = ActiveForm::begin(); ?>
    <div class="container">
        <div class="row ">
            <div class="col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 request-block">
                <img src="<?= \yii\helpers\Url::to(['@web/images/request/top.png']) ?>" class="request-block__top" alt="">
                <div class="row">
                    <div class="col-sm-3 col-md-3 request-block__label">Город</div>
                    <div class="col-sm-6 col-md-6">
                        <a href="#" class="request-block__link">Екатеринбург</a>
                        <?= $form->field($model, 'city')
                            ->hiddenInput(['value'=> 'Ектеринбург'])
                            ->label(false)?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-3 request-block__label">Фамилия</div>
                    <div class="col-sm-6 col-md-6">
                        <?= $form->field($model, 'second_name')
                            ->label(false)
                            ->textInput(['class' => 'request-block__text']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-3 request-block__label">Имя</div>
                    <div class="col-sm-6 col-md-6">
                        <?= $form->field($model, 'name')
                            ->label(false)
                            ->textInput(['class' => 'request-block__text']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-3 request-block__label">Отчество</div>
                    <div class="col-sm-6 col-md-6">
                        <?= $form->field($model, 'patronymic')
                            ->label(false)
                            ->textInput(['class' => 'request-block__text']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-3 request-block__label">Дата рождения</div>
                    <div class="col-sm-6 col-md-6">
                        <?= $form->field($model, 'birthday')
                            ->label(false)
                            ->textInput([
                                'class' => 'request-block__text',
                                'type'  => 'date'
                            ]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-3 request-block__label">Телефон</div>
                    <div class="col-sm-6 col-md-6">
                        <?= $form->field($model, 'phone')
                            ->label(false)
                            ->widget(\yii\widgets\MaskedInput::class, ['mask' => '+\7 (999) 999-99-99'])
                            ->textInput(['class' => 'request-block__text'])?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-3 request-block__label">E-mail</div>
                    <div class="col-sm-6 col-md-6">
                        <?= $form->field($model, 'email')
                            ->label(false)
                            ->textInput(['class' => 'request-block__text']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3">
                        <?= $form->field($model, 'subscription')
                            ->checkbox([
                                'label'     => 'Я не против получать выгодные предложения на этот адрес',
                                'checked'   => true,
                                'value'     => 1,
                                'onchange'  =>  'this.value = this.checked ? 1 : 0'
                        ])?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-3 col-md-9 col-md-offset-3">
                        <?= $form->field($model, 'accept_conditions')
                            ->checkbox([
                                'label'     => 'Я принимаю условия <a href="#">банковского соглашения</a>',
                                'onchange'  =>  'this.value = this.checked ? 1 : 0'
                            ])?>
                    </div>
                </div>

                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
                    <div class="row">
                        <?= Html::submitButton('Получить кредит', ['class' => 'request-block__button']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php ActiveForm::end(); ?>
