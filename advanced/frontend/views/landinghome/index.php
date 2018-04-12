<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 24.01.18
 * Time: 13:07
 */

$this->title = 'Home';
$this->params['breadcrumbs'][] = '';

?>


<!--<h1><?/*= $info */?></h1>-->


<style type="text/css">
    .hero-home {
          background-image: url(<?php echo Yii::$app->homeUrl; ?>allelica/images/divano.jpg);
          height: 82vh;
          background-position: center;
          background-repeat: no-repeat;
          background-size: 100%;
          width: 85%;
          margin: auto;
      }
    .hero-home .hero-inner {
        width: 70%;
        padding: 35px 15px 35px;
        margin-top: 8%;
    }

    .hero-inner {
        width: 50%;
        padding: 30px 0 32px 0;
        background: rgba(27,168,183,.9);
        min-height: 206px;
    }
    .hero-inner p {
        font-size: 18px;
        line-height: 1.5em;
        font-weight: 500;
        color: #fff;
    }
    .hero-inner h1 {
        font-weight: 400;
    }

    .amazing-button {
        height: 50%;
        margin: 25px auto;
        background-color: #20536c;
        -webkit-box-shadow: none;
        color: #fff;
        font-weight: 300;
        text-align: center;
        display: block;
        width: 180px;
    }


    .clear {
        clear: both;
    }
    .iframe-section p {
        font-size: 23px;
    }
    @media only screen and (min-width: 1024px) {
        .call-to-action {
            background-attachment: fixed;
        }
    }
    @media only screen and (max-width: 1150px) {
        .hero-area h1 {
            font-size: 30px !important;
        }
    }
    @media only screen and (max-width: 1150px) {
        .heading h2 {
            font-size: 23px !important;
        }
    }
    @media only screen and (max-width: 800px) {
        .hero-area .btn-main {
            display: block;
        }
    }
    @media only screen and (max-width: 1000px) {
        .chi-siamo .row .col-sm-12 {
            margin-bottom: 40px;
            margin-left: 50px;
        }
    }
    @media only screen and (max-width: 700px) {
        .chi-siamo .row .col-sm-12 {
            margin-left: 5px;
        }
        .first-first {
            float: none !important;
            max-width: 100% !important;
        }
        .second-second {
            float: left !important;
            max-width: 100% !important;
            margin-top: 75px;
        }
        .sub-container {
            height: 100% !important;
        }
    }
    .chi-siamo .row .author-details img {
        margin-bottom: 10px;
    }
    .promo-details .row ul li {
        margin-bottom: 45px;
    }
    .promo-details .row ul li img {s
    margin-right: 15px;
    }
    @media only screen and (max-width: 1000px) {
        .row .testimonial-block .author-details img {
            width: 100% !important;
        }
    }
    @media only screen and (max-width: 1000px) {
        .iframe-section .content {
            float: none !important;
            margin-right: 0px !important;
            width: 100% !important;
        }
        .iframe-section iframe {
            height: 100% !important;
        }
        .iframe-section .sub-container {
            height: 100% !important;
        }
    }
    .extra {
        display: none;
    }
    @media only screen and (max-width: 925px) {
        .hero-home .hero-inner {
            width: 100%;
        }
        .hero-home .col-md-12 {
            padding-right: 0px;
            padding-left: 0px;
        }
        .hero-home .container {
            padding-left: 0px;
        }

        .hero-home-first {
            display: none;
        }
        .extra {
            display: block;
        }
        .extra .container {
            float: none !important;
            width: 85%;
        }
        .extra .container .hero-inner {
            width: 100%;
            padding: 30px 13px 32px 13px;
        }
        .extra .container .col-md-12 {
            padding-left: 0px;
            padding-right: 0px;
        }
        .extra .hero-home {
            height: 55vh;
            background-size: cover;
        }

    }
    @media only screen and (max-width: 577px) {
        .extra {
            margin-bottom: -65px;
        }
        .extra .container {
            float: none !important;
            width: 85%;
            //padding-left: 0px;
        }
        .extra .hero-home {
            height: 30vh;
        }
        .extra .hero-inner h1 {
            font-size: 20px !important;
            font-weight: 400;
        }
        .scroll-down {
            bottom: -30px !important;
        }

        .scroll-second-down {
            margin-top: 85px !important;
            margin-bottom: 0px !important;
        }
        .gap-bottom-large {
            line-height: 35px !important;
        }
    }
    @media only screen and (max-width: 1239px) {
        .hero-home-first .col-md-12 {
            margin-top: 120px;
        }
    }
</style>
<style type="text/css">
    .hero__action a{
        background-color: #20536c;
        font-size: 19px;
        line-height: 1.5em;
        padding: 10px 60px;
        border-radius: 3px;
        font-weight: 500;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        background-image: none;
        display: inline-block;
        margin-bottom: 0;
        border: 1px solid transparent;
        white-space: nowrap;
        backface-visibility: hidden;
        color: #fff;
    }
    .hero__action {
        margin: 25px auto;
        text-align: center;
    }
    @media only screen and (max-width: 1950px) {
        .hero-home .hero-inner {
            width: 67%;
        }
    }
    @media only screen and (max-width: 1945px) {
        .hero-home .hero-inner {
            width: 65%;
        }
    }
    @media only screen and (max-width: 1750px) {
        .hero-home .hero-inner {
            width: 60%;
        }
    }
    @media only screen and (max-width: 1580px) {
        .hero-home .hero-inner {
            width: 53%;
        }
    }
    @media only screen and (max-width: 1450px) {
        .hero-home .hero-inner {
            width: 50%;
        }
    }
    ol {
        width: 85%;
    }
    ol li {
        margin-bottom: 20px;
        font-size: 18px;
        line-height: 25px;
        margin: 0px

    }
</style>
<section class="hero-home hero-home-first" >
    <div class="container" style="float: left;">
        <div class="row">
            <!--div class="col-md-6 text-center">
                <img width="100%" src="images/doppia_elica.jpg" alt="" style="margin-top: 35px; height: 565px;"/>
            </div-->
            <div class="col-md-12" style="padding-left: 0px">
                <div class="block">
                    <div class="hero-inner">
                        <h1 class="" style="color: #fff;font-size:27px;line-height:36px;text-align: center;">MIGLIORA E MANTIENI LA TUA SALUTE CON IL TEST DEL DNA GENOMICO</h1>
                        <br>
                        <p  style="color: #fff !important;">
                            Crea il tuo piano alimentare personalizzato e scopri il tuo rischio di sviluppare intolleranze alimentari e malattie ereditarie.<br/>Il tutto con un test del DNA semplice ed efficace, non invasivo, che puoi fare comodamente a casa tua.</p>


                        <!--<a class="btn btn-main cta amazing-button" id="top" href="/landing_4/buy.html" role="button">Scopri di più</a>-->
                        <div class="hero__action">
                            <a style="color: white;" class="btn btn-navy btn-wide btn-xl doscroll">Scopri di più</a>
                        </div>
                        <span style="color:#fff !important;display:block;font-size:16px;font-weight:500;margin-top:15px">
                               <a href="https://allelica.com/landing_home/contact.html" style="color: white; text-decoration: underline; font-size: 20px;">Contattaci subito</a><span style="text-decoration: none;font-size: 20px;"> o chiamaci al: 0621119708</span></span>
                    </div>
                </div>
            </div>
        </div><!-- .row close -->
    </div><!-- .container close -->
</section><!-- header close -->




<div class="extra">
    <section class="hero-home hero-home-second" >

    </section><!-- header close -->
    <div class="container" style="float: left;">
        <div class="row">
            <!--div class="col-md-6 text-center">
                <img width="100%" src="images/doppia_elica.jpg" alt="" style="margin-top: 35px; height: 565px;"/>
            </div-->
            <div class="col-md-12" style="padding-left: 0px">
                <div class="block">
                    <div class="hero-inner">
                        <h1 class="" style="color: #fff;font-size:27px;line-height:36px;text-align: center;">MIGLIORA E MANTIENI LA TUA SALUTE CON IL TEST DEL DNA GENOMICO</h1>
                        <br>
                        <p  style="color: #fff !important;">
                            Crea il tuo piano alimentare personalizzato e scopri il tuo rischio di sviluppare intolleranze alimentari e malattie ereditarie.<br/>Il tutto con un test del DNA semplice ed efficace, non invasivo, che puoi fare comodamente a casa tua.
                            <!--Allelica è un'azienda leader nelle analisi Genetiche di ultima generazione che ti aiuta a conoscere e trarre beneficio dal tuo DNA, con l'obiettivo di utilizzare queste informazioni per creare piani personalizzati per migliorare e preservare il tuo benessere.</p>

                        <!--<a class="btn btn-main cta amazing-button" id="top" href="/landing_4/buy.html" role="button">Scopri di più</a>-->
                        <div class="hero__action">
                            <a style="color: white;" class="btn btn-navy btn-wide btn-xl doscroll">Scopri di più</a>
                        </div>
                        <span style="color:#fff !important;display:block;font-size:16px;font-weight:500;margin-top:15px">
                                Scrivici: <a href="mailto:info@allelica.com" style="color:#fff !important;">info@allelica.com</a> oppure chiamaci: 0621119708</span>
                    </div>
                </div>
            </div>
        </div><!-- .row close -->
    </div><!-- .container close -->
</div>




<div class="hero__action scroll-second-down">
    <a class="btn btn-navy btn-wide btn-xl scroll-down doscroll" style="padding: 9px 0px 0px 10px;"></a>
</div><br><br><br><br>




<style>
    .bw {
        -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
        filter: grayscale(100%);
    }
    .img--homepage_computer {

        display: block;

        margin-bottom: 30px;
        text-align: center;
        margin: 0 auto 30px auto;
    }
    .img--homepage_computer img{
        width: 65%;
    }
    .pre-iframe-section p {
    //text-align: center;
    }
    .pre-iframe-section h2 {
        color: #20536c;
        padding-bottom: 15px;
        text-transform: capitalize;
        font-weight: 500;
        font-size: 25px;
        line-height: 35px;
    }
    .sub-container .hero__action {
        margin: 15px auto;
    }
    .sub-container .hero__action a {
        font-size: 17px;
        line-height: 1.5em;
        padding: 8px 30px;
        background-color: rgba(27,168,183,.9);
    }
    .sub-container .hero__action a:hover {
        background-color: #20536c;
    }
    @media only screen and (max-width: 700px) {
        .sub-container .hero__action {
            text-align: center;
        }
    }
    .box-cta {
        height: 220px;
        background-color: #3890BC;
        color: #fff;
        position: relative;
        margin: 30px 0 35px;
        cursor: pointer;
        font-weight: 500;
    }
    .box-cta .title {
        background-color: #20536c;

    }
    .box-cta .prezzo {
        background-color: #20536c;
        font-size: 24px;
        position: absolute;
        bottom: 0;
    }
    .box-cta span {
        width: 100%;
        display: block;
        padding: 15px 0;
        text-align: center;
    }
    .sub-container.box {
        font-size: 18px;
    }
    .box-cta:hover {
        background-color: #20536c;
    }
    .box-cta:hover .prezzo {
        background-color: #3890BC;
    }
    .box-cta .text {
        padding: 15px;
        font-size: 26px;
        position: absolute;

    }
</style>
<script>
    $(document).on('click','.box.nutrizione', function () {
        window.location.href = '<?php echo Yii::$app->homeUrl; ?>products/nutrizione'
    });
    $(document).on('click','.box.prevenzione', function () {
        window.location.href = '<?php echo Yii::$app->homeUrl; ?>products/prevenzione'
    });
    $(document).on('click','.box.completo', function () {
        window.location.href = '<?php echo Yii::$app->homeUrl; ?>acquista/acquistabuy'
    });
</script>
<section class="feature section pre-iframe-section">
    <div class="container">
        <h2 class="t--h2 u--align-center gap-bottom-large" style="color: #1ba8b7;
    text-align: center;
    margin-bottom: 40px;
    font-size: 2.5em;
    font-weight: 400;">Benvenuti in Allelica:  facile, efficace, personale.</h2>

        <div class="row">
            <!--<div class="col-md-6 col-sm-12 text-center embed-responsive embed-responsive-1by1" style="float: inherit;">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zPQ0eTxMDgI" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>-->
            <div class="col-md-5 col-sm-12 sub-container" style="width: 100%; height: 450px;">
                <div class="content mt-100 first-first" style="float: left; margin-right: 10px; max-width: 40%;">
                    <div class="img img--homepage_computer gap-bottom-medium"><a href="<?php echo Yii::$app->homeUrl; ?>products/prevenzione"> <img src="<?php echo Yii::$app->homeUrl; ?>allelica/images/donna_medico_riduc_little.jpg"></a></div>
                    <a href="<?php echo Yii::$app->homeUrl; ?>products/prevenzione"><h2 class="subheading" style="text-align: center;">Predisposizione Genetica alle Malattie</h2></a>
                    <p >Scopri il tuo rischio di sviluppare malattie per intraprendere il percorso di prevenzione più efficace per te.  La predisposizione genetica non determina una diagnosi, ma permette di capire di cosa il tuo corpo ha più bisogno per essere e rimanere in salute.</p>
                    <div class="hero__action">
                        <a style="color: white;" href="<?php echo Yii::$app->homeUrl; ?>products/prevenzione" class="btn btn-navy btn-wide btn-xl doscroll">Scopri di più</a>
                    </div>
                </div>

                <div class="content mt-100 second-second" style="float: right; margin-right: 10px; max-width: 40%;">
                    <div class="img img--homepage_computer gap-bottom-medium"><a href="<?php echo Yii::$app->homeUrl; ?>products/nutrizione"> <img src="<?php echo Yii::$app->homeUrl; ?>allelica/images/ride_mangia_afro_little.jpg"></a></div>
                    <a href="<?php echo Yii::$app->homeUrl; ?>products/nutrizione"><h2 class="subheading" style="text-align: center;">Nutrizione Personalizzata</h2></a>
                    <p >Ora puoi conoscere come il tuo corpo metabolizza in modo unico i carboidrati e i grassi e le tue predisposizioni alle intolleranze alimentari. Capiremo insieme quali sono i cibi da preferire e quelli da evitare individuando la tua alimentazione ideale.  </p>
                    <div class="hero__action">
                        <a style="color: white;" href="<?php echo Yii::$app->homeUrl; ?>products/nutrizione" class="btn btn-navy btn-wide btn-xl doscroll">Scopri di più</a>
                    </div>
                </div>
            </div>
        </div> <br><br><br><br><br>

        <h2 class="t--h2 u--align-center gap-bottom-large" style="color: #1ba8b7;
    text-align: center;
    margin: 40px;
    font-size: 2.5em;
    font-weight: 400;">Cosa puoi scoprire con l'analisi del tuo DNA?</h2>

        <div class="row">
            <div class="col-md-4 col-sm-12 sub-container box prevenzione">
                <div class="box-cta">
                    <span class="text" style="top:30px;">Voglio sapere il mio rischio di sviluppare malattie</span>
                    <span class="prezzo">Acquista ora il test a &euro;169</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 sub-container box nutrizione" >
                <div class="box-cta">
                    <span class="text" style="top:30px;">Voglio sapere la mia alimentazione ideale</span>
                    <span class="prezzo">Acquista ora il test a &euro;169</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 sub-container box completo" >
                <div class="box-cta">
                    <span class="text" style="top:15px;">Voglio sapere sia il mio rischio di sviluppare malattie che la mia alimentazione ideale</span>

                    <span class="prezzo">Acquista ora il test a &euro;249</span>
                </div>
            </div>
        </div>

    </div>
</section> <br><br><br>




<script type="text/javascript">
    $(document).ready(function () {
        supportType('video/mp4','avc1.42E01E, mp4a.40.2');

        function supportType(vidType,codType) {
            var vid = document.createElement('video');
            isSupp = vid.canPlayType(vidType+';codecs="'+codType+'"');

            if(isSupp == "probably") {
                $(".switch-html5-frame").show();
            } else {
                $(".switch-iframe").show();
            }
        }
    })
</script>
<section class="feature section iframe-section" style="padding-bottom:35px;">
    <div class="container">
        <div class="row">
            <!--<div class="col-md-6 col-sm-12 text-center embed-responsive embed-responsive-1by1" style="float: inherit;">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zPQ0eTxMDgI" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>-->
            <div class="col-md-6 col-sm-12 sub-container" style="width: 100%; height: 450px;">
                <div class="content mt-100" style="float: left; margin-right: 10px; width: 50%;">
                    <h2 class="subheading" style="color: #1ba8b7;
    text-align: center;
    margin-bottom: 30px;
    font-size: 2.5em;
    font-weight: 400;">Come fare il test Allelica</h2>
                    <br>
                    <ol style="">
                        <li>Ricevi il kit con un tampone, utilizzalo e rimandacelo gratuitamente.</li>
                        <li>Consulta i risultati direttamente sulla tua pagina online.</li>
                        <li>Un nostro specialista risponderà per telefono alle tue domande e pianificherà con te i prossimi passi.</li>
                    </ol><br/><br/>
                </div>


                <style type="text/css">
                    .switch-iframe, .switch-html5-frame {
                        display: none;
                    }

                    .iframe-section .embed-responsive-16by9 {
                        /*padding-bottom: 31.25% !important;*/
                    }
                    .switch-html5-frame {
                        padding-bottom: 31.25% !important;
                    }
                    .first-first {
                        margin-left: 40px;
                    }
                    .second-second {
                        margin-right: 40px;
                    }
                    @media only screen and (max-width: 1000px) {
                        .iframe-section .embed-responsive-16by9  {
                            padding-bottom: 56.25% !important;
                            margin-top: 0px !important;
                        }
                        .sub-container span {
                            line-height: 35px;
                        }
                    }
                    @media only screen and (max-width: 580px) {
                        img[src='images/oxford.png']  {
                            margin-bottom: 20px;
                        }
                        .sub-container span {
                            line-height: 35px;
                        }
                    }
                </style>


                <div class="embed-responsive embed-responsive-16by9 switch-html5-frame" style="margin-top: 15px;">
                    <video id="vid1" controls="controls" src="<?php echo Yii::$app->homeUrl; ?>allelica/videos/Allelica-v4.mp4">
                    </video>
                </div>

                <div class="embed-responsive embed-responsive-16by9 switch-iframe">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0m67Mv31xhY" style="height: 50%;margin-top: 40px;"></iframe>
                </div>

            </div>
        </div>
    </div>
</section>




<section class="feature section iframe-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 sub-container" style="width: 100%;">
                <h2 class="subheading" style="text-align: center;
                        color: #1ba8b7;
    text-align: center;
    margin-bottom: 30px;
    font-size: 2.5em;
    font-weight: 400;
                        ">Perché scegliere Allelica</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 p sub-container" style="text-align:left;">
                        <span style="font-size: 18px;line-height: 25px;margin: 0px;">
                        Allelica è stata fondata da scienziati per portare le scoperte scientifiche della Genomica al di fuori dei laboratori a porte chiuse. <br>Possiamo garantirti la massima efficacia delle informazioni che otterrai perché abbiamo lavorato per anni in centri di ricerca internazionali e usiamo i più alti standard di qualità nell'interpretazione dei dati. <br>
Le analisi vengono effettuate in un laboratorio accreditato e certificato.<br>
La tua privacy è fondamentale per noi:<br>
Avrai sempre la proprietà dei tuoi dati genetici, rimarranno al sicuro criptati nel nostro database finchè lo vorrai e potrai scaricarli, consultarli o cancellarli quando preferisci.<br></span>
            </div>

        </div>

        <div class="row">

            <div class="col-md-12 col-sm-12 p sub-container" style="text-align: center;
                        color: #1ba8b7;
    text-align: center;
    font-size: 2.5em;
    font-weight: 400;margin: 50px 0;
                        "><span>I nostri fondatori hanno effettuato ricerche presso le Università di</span></div>
            <div class="col-md-1">&nbsp;</div>
            <div class="col-md-5 col-sm-6" style="text-align:center;">
                <img class="bw" src="<?php echo Yii::$app->homeUrl; ?>allelica/images/oxford.png" style="width: 85%;">
            </div>
            <div class="col-md-5 col-sm-6" style="text-align:center;">
                <img class="bw" src="<?php echo Yii::$app->homeUrl; ?>allelica/images/logo_sapienza.png" style="width: 85%;">
            </div>
            <div class="col-md-1">&nbsp;</div>
        </div>

    </div>
</section>