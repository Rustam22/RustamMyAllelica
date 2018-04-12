<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 24.01.18
 * Time: 13:07
 */

$this->title = 'Nutrizione';
$this->params['breadcrumbs'][] = $this->title;

?>


<!--<h1><?/*= $info */?></h1>-->




<style type="text/css">
    .clear {
        clear: both;
    }
    .iframe-section p {
        font-size: 23px;
    }
    #doppia_elica {
        width: 90% !important;
        height: 590px;
        margin-top: 35px;
    }
    @media only screen and (min-width: 1024px) {
        .call-to-action {
            background-attachment: fixed;
        }
        .rised {
            margin-top: -210px;
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
        #doppia_elica {
            height: 300px !important;
        }
    }
    .chi-siamo .row .author-details img {
        margin-bottom: 10px;
    }
    .promo-details .row ul li {
        margin-bottom: 25px;
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
    @media only screen and (max-width: 930px) {
        .nutrition-block {
            margin-top: 0px !important;
        }
    }
    .nutrition-block {
        margin-top: 120px;
    }
    @media only screen and (max-width: 790px) {
        .hero-first-image {
            display: none;
        }
        .hero-second-image {
            display: block !important;
        }
    }
    .hero-second-image {
        display: none;
    }
    .hero-area h1 {
        color: #20536c;
    }
</style>
<section class="hero-area">
    <div class="container">
        <div class="row">

            <div class="col-md-6 text-center hero-first-image">
                <img width="100%" src="<?php echo Yii::$app->homeUrl; ?>allelica/images/doppia_elica.jpg" id="doppia_elica"/>
            </div>

            <div class="col-md-6">
                <div class="block">
                    <h1 class="">Scopri il tuo rischio genetico di sviluppare malattie. Ti aiutiamo a capire come prevenirle nel modo più efficace.</h1>
                    <p>
                        Le variazioni genetiche contenute nel tuo Genoma ti possono predisporre a sviluppare malattie con un rischio più alto rispetto alla media.<br> <br>

                        <!--Vogliamo portare le più recenti scoperte scientifiche direttamente a casa tua per darti la possibilità di capire le azioni di prevenzione da compiere più adatte a te.--></p>
                    <a class="btn btn-main cta" id="top" style="background: rgba(27,168,183,.9); -webkit-box-shadow: none;" href="<?php echo Yii::$app->homeUrl; ?>acquista/prevenzione" role="button">Compra ora &euro;169</a>
                </div>
            </div>

            <div class="col-md-6 text-center hero-second-image">
                <img width="100%" src="<?php echo Yii::$app->homeUrl; ?>allelica/images/doppia_elica.jpg" id="doppia_elica"/>
            </div>

        </div><!-- .row close -->
    </div><!-- .container close -->
</section><!-- header close --><br>



<style>
    @import url(https://fonts.googleapis.com/css?family=Josefin+Sans:300,400);
    .scroll-down {
        opacity: 1;
        -webkit-transition: all .5s ease-in 3s;
        transition: all .5s ease-in 3s;
    }
    .scroll-down {
    //position: absolute;
    //bottom: 30px;
    //left: 50%;
        background-color: #35adba;
        margin-left: -16px;
        display: block;
        width: 35px;
        height: 35px;
        /* border: 2px solid #20536c; */
        background-size: 14px auto;
        border-radius: 50% !important;
        z-index: 2;
        -webkit-animation: bounce 2s infinite 2s;
        animation: bounce 2s infinite 2s;
        -webkit-transition: all .2s ease-in;
        transition: all .2s ease-in;
    }
    .scroll-down:before {
    //position: absolute;
    //top: calc(50% - 8px);
    //left: calc(50% - 6px);
        transform: rotate(-45deg);
        display: block;
        width: 12px;
        height: 12px;
        content: "";
        border: 2px solid white;
        border-width: 0px 0 2px 2px;
    }
    .scroll-second-down {
        color: white;
        margin: 20px auto;
    }
    .scroll-second-down a{
        padding: 17px 18px;
        background: rgba(27,168,183,.9);
    }
    .hero__action a{

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
</style>
<div class="hero__action scroll-second-down">
    <a class="btn btn-navy btn-wide btn-xl scroll-down doscroll-prevenzione" style="padding: 9px 0px 0px 10px;"></a>
</div>





<script type="text/javascript">
    $(document).ready(function() {
        $('.download-button').click(function () {
            $(".send-to-user").slideToggle("slow");
        });



        $('#reused_form').submit(function () {
            var name = $(".send-to-user #name").val().trim();
            var email = $(".send-to-user #email").val().trim();

            $.ajax({
                type: "POST",
                url: "feedback-download.php",
                data: "name=" + name + "&email=" + email,
                async: true,
                success: function (data) {
                    $(".modal-class .modal-body p").html(data);
                    $(".modal-class button[data-target='#myModal']").click();
                    $("#myModal, #myModal .close, #myModal .modal-footer button[data-dismiss='modal']").click(function () {
                        location.reload();
                    });
                }
            });

        });

        $('#reused_form').submit(function () {
            return false;
        });

    })
</script>
<style type="text/css">
    .nutrition-block .different ul li {
        margin-left: 35px;
        list-style-type: disc;
        margin-bottom: 35px;
        font-size: 23px !important;
    }
    .nutrition-block .download-button {
        border-radius: 3px;
    }
    .send-to-user label {
        float: left;
        margin-right: 10px;
        margin-top: 5px;
    }
    .send-to-user input {
        width: 40%;
    }
    #btnContactUs {
        border-radius: 3px;
        background-color: #5cb85c;
        border-color: #5cb85c;
        padding: .5rem 1rem;
        font-size: 2rem;
        line-height: 1.25;
    }
    .send-to-user {
        display: none;
    }
    .download-button {
        padding: 10px 18px;
        font-size: 20px;
        background: rgba(27,168,183,.9);
        border-color: rgba(27,168,183,.9);
    }
    .download-button:hover, .download-button:after, .download-button:before,  .download-button:focus{
        background: rgba(27,168,183,.9);
        border-color: rgba(27,168,183,.9);
    }
    #impegno, #impegno:hover, #impegno:focus, #impegno:before, #btnContactUs, #btnContactUs:hover, #btnContactUs:after, #btnContactUs:before, #btnContactUs:focus {
        background: rgba(27,168,183,.9);
        border-color: rgba(27,168,183,.9);
        -webkit-box-shadow: none;
    }
    .nutrition-block .subheading {
        text-align: left;
    }
    .form-control {
        display: block;
        width: 100%;
        padding: .5rem .75rem;
        font-size: 1.5rem;
        line-height: 1.25;
        color: #55595c;
        background-color: #fff;
        background-image: none;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid rgba(0,0,0,.15);
        border-radius: .25rem;
    }
    label {
        display: inline-block;
        margin-bottom: .5rem;
    }
    .send-to-user label {
        float: left;
        margin-right: 10px;
        margin-top: 5px;
    }
    .send-to-user input {
        width: 90%;
    }
</style>
<br><br><br>
<section class="hero-area nutrition-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <img width="100%" src="<?php echo Yii::$app->homeUrl; ?>allelica/images/new-nut.png" alt="" />
                <button type="button" class="btn btn-success download-button">Scarica un esempio del report</button><br><br>


                <div class="container send-to-user">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3" style="width: 48%; margin-left: 0px;">
                            <form role="form" id="reused_form" >
                                <div class="form-group">
                                    <label for="name"> Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" required maxlength="50">
                                </div>
                                <div class="form-group">
                                    <label for="email"> Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                                </div>
                                <!--<div class="form-group visible">
                                    <label for="name"> Message:</label>
                                    <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                                </div>-->
                                <!--<div class="row" style="margin-bottom:30px;">
                                    <div class="col-sm-5" style="margin-top: 25px; margin-left: 35px;">
                                        <img src="captcha.php" id="captcha_image"/>
                                        <br/>
                                        <a id="captcha_reload" href="#">reload</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="email">Enter the code from the image here:</label>
                                        <input type="text" class="form-control" required id="captcha" name="captcha" >
                                    </div>
                                </div>-->
                                <button type="" class="btn btn-lg btn-success btn-success pull-right" id="btnContactUs">Scarica ora!</button>
                            </form>
                            <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                            <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="col-md-6">
                <div class="block different">
                    <!--<h1 class="subheading" style="text-transofrm:none;margin-top:0;">Effetta subito il test del DNA</h1>-->
                    <h2 class="subheading">Cosa scoprirai:</h2>
                    <ul>
                        <li>Quali cibi mangiare per minimizzare i tuoi sintomi indesiderati.</li>
                        <li>Quali e quanti carboidrati il tuo corpo digerisce e metabolizza al meglio.</li>
                        <li>La quantità massima di grassi che dovresti assumere giornalmente.</li>
                        <li>Se sei intollerante al lattosio.</li>
                        <li>Se puoi diventare celiaco.</li>
                        <li>Quanta caffeina il tuo organismo può assumere giornalmente.</li>
                        <li>Quanti cibi grigliati o affumicati puoi mangiare con serenità ogni settimana.</li>
                        <li>Di quali vitamine il tuo corpo ha più necessità per sentirsi al meglio.</li>
                        <li>Le tua probabilità di sviluppare malattie del metabolismo alimentare.</li>
                    </ul>
                </div>
            </div>
        </div><!-- .row close -->
    </div><!-- .container close -->
</section><!-- header close --><br><br><br><br><br><br><br>







<section class="feature section">
    <div class="container">
        <div class="row">
            <div class="heading">
                <h2>Perché fare il test Allelica</h2>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="feature-box">
                    <i class="fa fa-smile-o" aria-hidden="true"></i>
                    <h4>Benessere</h4>
                    <p>Grazie alle istruzioni contenute nel tuo DNA, al tuo stile di vita e ai tuoi obiettivi, ti forniamo il piano alimentare giusto per te. Basta supposizioni.</p>
                </div>
                <div class="feature-box">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <!--i class="tf-ion-ios-alarm-outline"></i-->
                    <h4>Il più accurato di sempre</h4>
                    <p>Siamo gli unici ad analizzare più di 650.000 variazioni genetiche. I test già presenti sul mercato analizzano al massimo 40 variazioni genetiche, risultando inefficaci</p>
                </div>
                <div class="feature-box">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <h4>Massima sicurezza</h4>
                    <p>Diamo priorità assoluta alla tua privacy:
                        i tuoi dati genetici sono codificati attraverso un protocollo sicuro.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-center">
                <img class="happy-people" style="" src="<?php echo Yii::$app->homeUrl; ?>allelica/images/happy-people.png" alt="" width="450">
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="feature-box">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <h4>Prodotto da scienziati</h4>
                    <p>Sviluppato grazie ad una collaborazione tra ricercatori dell'università di Oxford e "La Sapienza" di Roma.</p>
                </div>
                <div class="feature-box">
                    <i class="fa fa-history" aria-hidden="true"></i>
                    <h4>Velocità</h4>
                    <p>Elimina lunghi e faticosi tentativi. Con un unico test ottieni informazioni complete sul tuo metabolismo alimentare.</p>
                </div>
                <div class="feature-box">
                    <i class="fa fa-eur" aria-hidden="true"></i>
                    <h4>Risparmio</h4>
                    <p>Risparmi fino a €2000 ripetto a quanto avresti speso per effettuare le stesse analisi con un'altra azienda. Utilizziamo le tecnologie di ultima generazione che hanno permesso un enorme abbattimento dei costi e un aumento dell'accuratezza del test.</p>
                </div>
            </div>
        </div>
    </div><!-- .container close -->
</section><!-- #service close -->


<br><br><br>




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
            <div class="col-md-6 col-sm-12 sub-container" style="width: 100%;">
                <div class="content mt-100" style="float: left; margin-right: 10px; width: 50%;">
                    <h2 class="subheading">Come fare il test Allelica</h2>
                    <br>
                    <p>Ricevi il kit con un tampone, utilizzalo e rimandacelo gratuitamente.<br><br>Otterrai il report con tutte le tue informazioni per individuare le cause dei tuoi problemi alimentari e un piano nutrizionale personalizzato comodamente a casa tua.</p><br/><br/>
                </div>


                <style type="text/css">
                    .subheading {
                        text-align: center;
                    }
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
                    <video id="vid1" controls="controls" src="<?php echo Yii::$app->homeUrl; ?>allelica/videos/Allelica-v4.mp4"></video>
                </div>

                <div class="embed-responsive embed-responsive-16by9 switch-iframe">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0m67Mv31xhY" style="height: 50%;margin-top: 40px;"></iframe>
                </div>

            </div>
        </div>
    </div>
</section>
<br><br><br><br><br><br><br>

<section class="call-to-action section bg-opacity bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow text-center">
                <div class="block">
                    <h2 class="subheading">Il nostro impegno</h2>
                    <p style="color: white !important; font-size: 21px;text-align: center;">

                        Allelica si impegna a fornirti le raccomandazioni scientifiche piu efficaci e aggiornate di sempre.<br>
                        La scienza genomica e' in continua evoluzione, se ci saranno delle modifiche alle informazioni fornite te lo comunicheremo immediatamente.<br>
                        Ci impegnamo con te ad avere una relazione duratura e stabile in modo che avrai sempre le migliori informazioni per sapere come il tuo corpo reagisce al cibo che mangi.
                    </p>
                    <div class="col-lg-6 offset-lg-3 buttonica">
                        <br>
                        <a class="btn btn-main cta" id="impegno" style="background: rgba(27,168,183,.9); -webkit-box-shadow: none;"  href="<?php echo Yii::$app->homeUrl; ?>acquista/nutrizione" role="button" style="margin-top:20px;">Compra ora &euro;169</a>
                        <!--div class="input-group">
                          <input type="text" class="form-control" placeholder="Il tuo indirizzo email">
                          <span class="input-group-btn">
                            <button class="btn btn-default btn-main" type="button">Sottoscrivi</button>
                          </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                </div>
            </div>
        </div>
    </div>
</section><!-- #call-to-action close -->






<section class="promo-details section">
    <style type="text/css">
        .new-block {
            width: 100% !important;
            margin-bottom: 50px;
        }
        .new-block .feature-box {
            float: left;
            width: 255px;
            height: 100%;
            margin-left: 6%;
            color: #3b4045;
            margin-bottom: 50px;
        }
        .new-block .feature-box h4, p {
            /*text-align: left;*/
            color: #3b4045 !important;
        }
        .new-block .feature-box h4 {
            font-size: 22px;
            line-height: 35px;
            font-weight: 400;
        }
        .new-block .feature-box img {
            width: 270px;
            margin-bottom: 15px;
            height: 225px;
        }
        .embeded-block{
            padding: 0px;
        }
        .embeded-block p, span, h4{
            color: #3b4045; !important;
        }
        .ffaq h2, p, ul li, li, ul li p{
            color: #20536c; !important;
        }
        .faq p{
            color: #3b4045; !important;
            margin: auto;
        }

        .buttonica {
            float: none;
            width: inherit;
        }
    </style>

    <div class="container">
        <div class="row">

            <section class="testimonials section embeded-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <div class="testimonial-block">
                                <i class="tf-ion-quote"></i>
                                <p style="text-align: center;font-size: 20px;">

                                    "Allelica offre sicuramente un prodotto
                                    eccellente e altamente tecnologico
                                    al servizio della salute".
                                </p>
                                <div class="author-details">
                                    <img src="<?php echo Yii::$app->homeUrl; ?>allelica/images/virgili_elixir.jpg" style="width: 55%;" alt="">
                                    <h4>Prof. Fabio Virgili</h4>
                                    <span style="font-size: 24px;line-height: 40px;">Editore della rivista scientifica: "Genes and Nutrition"</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br><br><br><br>



            <div class="col-md-2 text-center new-block">
                <div class="feature-box">
                    <img src="<?php echo Yii::$app->homeUrl; ?>allelica/images/111111.jpg" alt="">
                    <!--<h4>Benessere</h4>-->
                    <p>Le analisi vengono effettuate nel nostro laboratorio Accreditato e Certificato, garantendo i più alti Standard di Qualità.</p>
                </div>

                <div class="feature-box">
                    <img src="<?php echo Yii::$app->homeUrl; ?>allelica/images/222222.jpg" alt="">
                    <!--<h4>Risparmio</h4>-->
                    <p>Utilizziamo esclusivamente macchinari Illumina, leader mondiale nella produzione di strumenti per le analisi Genomiche.</p>
                </div>

                <div class="feature-box">
                    <img src="<?php echo Yii::$app->homeUrl; ?>allelica/images/3333333.jpg" alt="">
                    <!-- <h4>Risparmio</h4>-->
                    <p>Gli Array Illumina di ultima generazione permettono di accedere al genoma in modo estremamente accurato e allo stesso tempo ad un prezzo accessibile.</p>
                </div>

                <div class="clear"></div>
                <div class="big-image" style="text-align: center;">
                    <br><br>
                    <h2 style="color: #20536c !important;
                                      text-align: center;
                                      font-size: 24px;
                                      margin-left: -45px;">Il team del laboratorio di Genomica Funzionale Genomix4Life</h2><br>
                    <img src="<?php echo Yii::$app->homeUrl; ?>allelica/images/000000.jpg" alt="" style="width: 84%;text-align: center;    margin-left: -50px;">
                </div>
            </div>



            <div class="clear"></div><br><br>

            <div class="col-md-6 col-sm-12  ffaq" style="margin: auto; float: none;">
                <div class="content mt-100">
                    <h2 class="subheading">FAQ</h2>
                    <ul class="faq">
                        <li style="color: #20536c; !important;">Quanto tempo ci vuole per ricevere il kit?<p>Riceverai il tuo kit entro massimo 5 giorni lavorativi, a seconda della zona in cui abiti.
                                Ti spediremo il kit con corriere espresso rapido DHL.</p></li>
                        <li style="color: #20536c; !important;">Dopo quanto tempo avrò i miei risultati? <p>Potrai accedere alla tua area riservata dopo massimo due settimane dalla ricezione del tampone al nostro laboratorio. Ti invieremo una mail appena il campione sara pronto per essere analizzato.</p></li>
                        <li style="color: #20536c; !important;">Devo pagare la spedizione al laboratorio?<p>No, la spedizione al laboratorio e' compresa nel prezzo. Usa comodamente il tampone e prenota il ritiro direttamente dal nostro sito. Un fattorino passera' a ritirare la busta contenente il tampone. </p></li>
                        <li style="color: #20536c; !important;">
                            Posso detrarre la spesa del test dalle tasse?<p>
                                No, al momento non e' possibile detrarre le spese
                            </p><li style="color: #20536c; !important;">

                    </ul>

                </div>
            </div>
            <div class="col-md-2 text-center">
                &nbsp;
            </div>
        </div>
    </div>
</section>