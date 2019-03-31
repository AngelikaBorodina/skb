<div class="container">
    <div class="row ">
        <div class="col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 thanks-block">
            <div class="thanks-block__head">
                <h3>Спасибо за обращение!</h3>
                <h3>Ваша заявка принята в работу.</h3>
            </div>
            <div class="thanks-block__body">
                <div class="row thanks-block__element">
                    <div class="col-md col-md-offset-2 thanks-block__text">
                        <p>Для оформления кредита Вы можете подать документы в любом офисе СКБ-банка</p>
                    </div>
                </div>
                <div class="row thanks-block__element">
                    <div class="col-md-2 ">
                        <img src="<?= \yii\helpers\Url::to(['@web/images/thanks/ikon1.png']) ?>" alt="">
                    </div>
                    <div class="col-md thanks-block__text">
                        <p>На сумму до <b>180 000 рублей</b> Вам потребуется паспорт и второй документ (на выбор – страховое свидетельство пенсионного фонда/СНИЛС, водительское удостоверение, загран.паспорт, удостоверение военнослужащего).</p>
                    </div>
                </div>
                <div class="row thanks-block__element">
                    <div class="col-md-2 ">
                        <img src="<?= \yii\helpers\Url::to(['@web/images/thanks/ikon2.png']) ?>" alt="">
                    </div>
                    <div class="col-md thanks-block__text">
                        <p>Для получения <b>пониженной ставки или суммы до 1 300 000 рублей</b> – паспорт, второй документ и справка о доходах за последние 6 месяцев.</p>
                    </div>
                </div>
                <div class="row thanks-block__element">
                    <div class="col-md-2 ">
                        <img src="<?= \yii\helpers\Url::to(['@web/images/thanks/ikon3.png']) ?>" alt="">
                    </div>
                    <div class="col-md thanks-block__text">
                        <p>Для <b>мужчин младше 27 лет</b> – обязательно наличие военного билета.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
                <div class="row">
                    <?= \yii\helpers\Html::submitButton('Выбрать офис', ['class' => 'request-block__button']) ?>
                </div>
            </div>

        </div>
    </div>
</div>
