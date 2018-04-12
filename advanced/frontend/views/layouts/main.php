<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="no-js">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta charset="<?= Yii::t('app', 'Welcome') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">

    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400i|Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">

    <?= Html::csrfMetaTags() ?>

    <title><?= $this->title = "Allelica"; Html::encode($this->title); ?></title>

    <?php $this->head() ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-101154194-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1523964057695100');
        fbq('track', 'PageView');
    </script>

    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=1523964057695100&ev=PageView&noscript=1"/>
    </noscript>

    <script src="https://use.fontawesome.com/bb99c802c4.js"></script>
    <style type="text/css">
	.btn-link:hover {
		color: #3b4045 !important;
	}
	#subHeader, #description {
		font-size: 20px;
		font-weight: 500;
		color: #7f8686;
	}
        .breadcrumb li a, .active {
            font-size: 18px !important;
            font-weight: 400 !important;
        }
        .breadcrumb > li + li:before {
            color: #ababab;
        }
        .dropdown-toggle, .dropdown-toggle:focus, .dropdown-toggle:active {
            background-color: #fff !important;
        }
        .dropdown-menu {
            left: -25px !important;
        }
        .breadcrumb {
            display: none !important;
        }
    </style>

</head>

<body id="body">
<?php $this->beginBody() ?>

<div class="wrap">

    <style>
        .breadcrumb {
            margin-bottom: 10px !important;
        }
    </style>

    <div id="preloader-wrapper">
        <div class="pre-loader"><i class="flaticon-null"></i></div>
    </div>

    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/allelica/images/logo.jpg', ['alt'=>Yii::$app->name, 'width' => '200']),
        'brandUrl' => Yii::$app->homeUrl.'landinghome',
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top allelica-menu-inverse',
        ],
    ]);
    $noplan_id = [72,73,50,67];
    if(!Yii::$app->user->isGuest && in_array(Yii::$app->user->identity->id,$noplan_id)) {
        $menuItems = [
        ['label' => 'RISULTATI', 'url' => ['/results/'], 'visible'=>!Yii::$app->user->isGuest,'items' => [
            ['label' => 'Nutrizione', 'url' => ['results/', 'product' => 'Nutrizione']],
            ['label' => 'Prevenzione', 'url' => ['results/', 'product' => 'Prevenzione']],
        ]],
        ];
    } else {
	$menuItems = [
        ['label' => 'RISULTATI', 'url' => ['/results/'], 'visible'=>!Yii::$app->user->isGuest,'items' => [
            ['label' => 'Nutrizione', 'url' => ['results/', 'product' => 'Nutrizione']],
            ['label' => 'Piano nutrizionale', 'url' => ['/diet']],
            ['label' => 'Prevenzione', 'url' => ['results/', 'product' => 'Prevenzione']],
        ]],
    ];
    }
    if (Yii::$app->user->isGuest) {
        /*$menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];*/
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

</div>


<div class="container">

    <?=
        Breadcrumbs::widget([
            'homeLink' => [
                'label' => Yii::t('yii', 'Home'),
                'url' => Yii::$app->homeUrl,
            ],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
    ?>

    <?= Alert::widget() ?>
</div>



<?= $content ?>



<footer class="footer">
    <!--<div class="container">
        <?php /*foreach(Yii::$app->params['languages'] as $key => $value) {echo '<h1>'.$key.' - '.$value.'</h1>';} */?>
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>-->

    <br><br><br>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <a href="" class="footer-logo">Allelica</a>
                    <ul class="menu">
                        <li class=" active">
                            <a href="https://www.allelica.com">HOME</a>
                        </li>
                        <li class="">
                            <a href="https://www.allelica.com/prevenzione/">PREVENZIONE</a>
                        </li>
                        <li class="">
                            <a href="https://www.allelica.com/nutrizione/">NUTRIZIONE</a>
                        </li>
                        <li class="">
                            <a href="//www.allelica.com/privacy.html">PRIVACY POLICY</a>
                        </li>
                    </ul>
                    <p class="copyright-text">Copyright &copy;2018 Allelica | All right reserved.</p>
                    <p class="copyright-text" style="display: none;">Templates is Copyright &copy; of<a href="http://www.Themefisher.com">Themefisher</a>| All right reserved.
                    <p class="copyright-text">
                        Icon made by freepick from <a href="http://www.flaticon.com" target="_blank">www.flaticon.com</a> </p>
                </div>
            </div>
        </div>
    </div>

</footer>



<?php $this->endBody() ?>
</body>
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>

</html>
<?php $this->endPage() ?>
