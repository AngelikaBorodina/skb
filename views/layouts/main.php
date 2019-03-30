<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
        <div class="wrap">
            <header class="header">
                <div class="container">
                    <div class="pull-left">
                        <img src="<?= \yii\helpers\Url::to(['@web/images/logo.png']) ?>" alt="">
                    </div>
                    <div class="pull-right header__contact">
                        <p class="header__contact_text">бесплатный звонок по россии</p>
                        <p class="header__contact_phone">8 800 1000 600</p>
                    </div>
                </div>
            </header>
            <div class="container">
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <div class="col-sm-6 col-md-4 footer__copyright">
                    <p> &copy; СКБ-банк, 2012</p>
                    <p>Генеральная лицензия №705</p>
                    <p>Центрального банка Российской Федерации</p>
                </div>
                <div class="col-sm-6 col-md-4 footer__detail">
                    <a href="/">Подробнее об условиях и видах кредитов</a>
                    <p>*По данным рейтинга портала Сравни.ру - <a href="/">подробнее</a></p>
                </div>
                <div class="col-sm-12 col-md-4 footer__contact">
                    <p class="footer__contact_phone">8-800-1000-600</p>
                    <p>Бесплатный звонок по России</p>
                </div>
            </div>
        </footer>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
