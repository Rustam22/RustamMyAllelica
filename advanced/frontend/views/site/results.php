<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 08.02.18
 * Time: 13:54
 */


use yii\helpers\Url;
use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use frontend\models\Biometrics;
use frontend\models\User;

?>

    <script src="https://use.fontawesome.com/bb99c802c4.js"></script>

<?php if($status == "begin"){ ?>

    <style>
        .jumbotron {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        @media screen and (max-width: 700px) {
            .middlie-block  {
                width: 95% !important;
            }
            .btn-success, .btn-primary  {
                float: none !important;
                width: 95% !important;
                margin-right: 10px !important;
                margin-left: 10px !important;
                margin-top: 15px !important;
            }
            .btn-success {
                margin-top: 35px;
            }
        }
        .info {
            background-color: #519298 !important;
            border-color: #519298 !important;
        }
        .info:hover {
            background-color: #519298 !important;
        }

        .piano {
            background-color: #ff671f !important;
            border-color: #ff671f !important;
        }
        .piano:hover {
            background-color: #ff7332 !important;
        }

        .pdf:before {
            font-family: FontAwesome;
            font-size: 80px;
            color: #ff671f;
            content: '\f1c1';
            margin-top: -60px;
            position: absolute;
            margin-left: 90px;
        }
        .pdf {
            font-size: 24px;
            width: 100%;
            text-align: center;
            display: block;
            font-weight: 500;
        }
    </style>

    <script type="text/javascript">
        $(document).ready(function() {
            $( "#biometrics_done" ).on( "click",  function(e) {
                alert("Ti ringraziamo per aver inserito i tuoi dati.\nTra pochi giorni ti contatteremo per invitarti a consultare il tuo piano nutrizionale personalizzato");
                e.preventDefault();
                return false;
            });
        })
    </script>

    <div class="container">
        <div class="row" style="text-align:center;">
            <img src="<?php echo Yii::$app->homeUrl; ?>allelica/images/yoga.jpg" style="width: 90%;">
        </div>



        <div class="row col-md middlie-block" style="width: 95%;margin: auto;margin-bottom: 150px;">
            <h1 class="blue" style="color:rgba(27,168,183,.9) !important;text-align: center;font-size: 26px;padding: 0px 16px;font-weight: 500;line-height: 42px;margin-top:20px;">
                Sei ad un click dal conoscere il tuo DNA, esplora subito il tuo Genoma!
            </h1>
            <a href="<?php echo Yii::$app->homeUrl; ?>results?product=Nutrizione" style="font-size: 27px!important;margin-top: 35px;width: 25%;
    border-radius: 7px;float: left;" class="btn btn-success btn-lg active" role="button" aria-pressed="true">
                Nutrizione
            </a>
            <a href="<?php echo Yii::$app->homeUrl; ?>results?product=Prevenzione" style="font-size: 27px!important;width: 24%;
    border-radius: 7px;margin-top: 35px;float: right;" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
                Prevenzione
            </a>
            <a href="<?php echo Yii::$app->homeUrl; ?>diet/info" style="font-size: 27px!important;width: 24%; margin-right: 1%;
    border-radius: 7px;margin-top: 35px;float: right;" class="btn btn-primary btn-lg active info" role="button" aria-pressed="true">
                Info Nutrizionale
            </a>
            <?php
            $noplan_id = [72,73,50,67];
            if (!in_array(Yii::$app->user->identity->id,$noplan_id)) {
                ?>

                <a href="<?php echo Yii::$app->homeUrl; ?>diet" style="font-size: 27px!important;margin-top: 35px;width: 24%;border-radius: 7px;float: left;margin-left:1%" class="btn btn-success btn-lg active piano" role="button" aria-pressed="true" >
                    Piano nutrizionale
                </a>
                <?php
            }?>
        </div>
        <a class="pdf" target="_blank" href="<?php echo Yii::$app->homeUrl; ?>report/download" >
            Scarica il report completo</a>
    </div>

<?php } ?>


<?php if($status == "super"){ ?>
    <style type="text/css">
        .dropdown {
            display: none !important;
        }
        .table-responsive {
            border: 0px solid #ddd !important;
        }
        .super-user h1{
            color: rgba(59, 199, 214, 0.88) !important;
            text-align: center;
            font-size: 35px;
            padding: 0px 16px;
            font-weight: 400;
            line-height: 42px;
            margin-top: 20px;
        }
        .super-user {
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            background: #eee;
        }
        .super-user table tr th, td, td a {
            text-align: center;
        }
        .super-user table tr th {

        }
        .super-user table tr td:last-child a {
            text-decoration: underline;
        }
        .super-user table tr td:nth-child(2) a, td:last-child a {
            font-size: 20px;
            font-weight: 400;
        }
        .super-user table tr td {
            font-size: 1.20em !important;
        }
        .super-user table tr td:first-child div span {
            margin-top: 10px;
            display: block;
            float: left;
        }
        .super-user table tr td:first-child a {
            font-weight: 400;
        }
        .super-user table tr td div {
            text-align: center;
            margin-left: 20px;
        }
        .super-user table tr td i {
            font-size: 2.2em !important;
            margin-right: 30px;
            color: #0000008a;
            text-align: center;
            float: left;
        }
        .super-user .main-box.no-header {
            padding-top: 20px;
        }
        .super-user .main-box {
            background: #FFFFFF;
            -webkit-box-shadow: 1px 1px 2px 0 #CCCCCC;
            -moz-box-shadow: 1px 1px 2px 0 #CCCCCC;
            -o-box-shadow: 1px 1px 2px 0 #CCCCCC;
            -ms-box-shadow: 1px 1px 2px 0 #CCCCCC;
            box-shadow: 1px 1px 2px 0 #CCCCCC;
            margin-bottom: 16px;
            -webikt-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }
        .super-user .table a.table-link.danger {
            color: #e74c3c;
        }
        .super-user .label {
            border-radius: 3px;
            font-size: 0.875em;
            font-weight: 600;
        }
        .super-user .user-list tbody td .user-subhead {
            font-size: 0.875em;
            font-style: italic;
        }
        .super-user .user-list tbody td .user-link {
            display: block;
            font-size: 1.25em;
        }
        .super-user a {
            color: #3498db;
            outline: none!important;
        }
        .super-user .user-list tbody td>img {
            position: relative;
            max-width: 50px;
            float: left;
            margin-right: 15px;
        }

        .super-user .table thead tr th {
            text-transform: uppercase;
            font-size: 1.2em;
        }
        .super-user .table thead tr th {
            border-bottom: 2px solid #e7ebee;
        }
        .super-user .table tbody tr td:first-child {
            font-size: 1.125em;
            font-weight: 300;
        }
        .super-user .table tbody tr td {
            font-size: 0.875em;
            vertical-align: middle;
            border-top: 1px solid #e7ebee;
            padding: 12px 8px;
        }
    </style>

    <div class="super-user">
        <div class="container bootstrap snippet">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h1>
                            <?php echo(Yii::$app->user->identity->first_name); ?><?php echo(' '.Yii::$app->user->identity->last_name); ?>
                        </h1>
                    </div>
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
                                <table class="table user-list">
                                    <thead>
                                    <tr>
                                        <th scope="col"><span>User</span></th>
                                        <th scope="col"><span>Email</span></th>
                                        <th scope="col"><span>Category</span></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php foreach($users as $user) { ?>
                                        <tr>
                                            <td>
                                                <div>
                                                    <a class="user-link">
                                                        <i class="fa fa-2x fa-user fw"></i>
                                                        <span>
                                                                <?php echo($user['first_name'].", ".$user['last_name']); ?>
                                                            </span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <a><?php echo($user['username']); ?></a>
                                            </td>
                                            <td>
                                                <a href="<?php echo Yii::$app->homeUrl."super/index?user_id=".$user['id']."&product=Nutrizione"; ?>">Nutrizione</a><br>
                                                <a href="<?php echo Yii::$app->homeUrl."super/index?user_id=".$user['id']."&product=Prevenzione"; ?>">Prevenzione</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><br><br>
                </div>
            </div>
        </div>
    </div>
<?php } ?>