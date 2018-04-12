function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
function checkCookie() {
    var username = getCookie("username");
    if (username != "") {
        alert("Welcome again " + username);
    } else {
        username = prompt("Please enter your name:", "");
        if (username != "" && username != null) {
            setCookie("username", username, 365);
        }
    }
}
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

try {
    $(document).ready(function() {
        setTimeout(function () { $("#preloader-wrapper").fadeOut("slow") },500);
    });

} catch (e) {

}

var book = false;
if(window.location.href.indexOf("book.php") >= 0)
    book = true;
else
    book = false;



try {
    $(".doscroll").click(function() {
        $('html, body').animate({
            scrollTop: $(".pre-iframe-section").offset().top
        }, 800);
    });
    $(".doscroll-prevenzione").click(function() {
        $('html, body').animate({
            scrollTop: $(".iframe-section").offset().top
        }, 800);
    });
} catch (e) {

}






/********************************************************************** Shamrun Updates *************************************************************/
$(".list-group-item").hover(function(){
    if ($( "p.result" ).text() == "You have high risk"){
        $(this).css("background-color", "red");
        $("p.result").css("background-color", "red");
    }
    else if ($( "p.result" ).text() == "You have normal risk"){
        $(this).css("background-color", "yellow");
        $("p.result").css("background-color", "yellow");
    }
    else if ($( "p.result" ).text() == "You have low risk"){
        $(this).css("background-color", "green");
        $("p.result").css("background-color", "green");
    }
}, function(){
    $(this).css("background-color", "white");
    $("p.result").css("background-color", "white");
});

function add() {
    if ($("#comment").css('display') == 'none') {
        $("#comment").show().text("Reduce saturated fats and trans fats. These are the fats commonly found in animal products, fast foods, commercially baked goods, and other packaged foods.\n" +
            "\n" +
            "Use healthy mono- and polyunsaturated fats. These are found in olive oil or canola oil for cooking.\n" +
            "Get most of your calories from fruits, vegetables, and non-fat or low-fat dairy products.\n" +
            "\n" +
            "Drink alcohol only in moderation. \"Alcohol is full of empty calories that are particularly bad for high triglycerides,\" warns Dinwoodey.\n" +
            "\n" +
            "Avoid added and refined sugars.\n" +
            "Eat fish as a protein source once or twice a week. \"Coldwater fish oils, such as those in salmon, are high in omega-3 fatty acids that help lower triglycerides,\" says Dinwoodey.\n" +
            "\n" +
            "Make sure you have plenty of fiber in your diet. Whole-grain products add fiber and help you avoid overeating because they fill you up.\n" +
            "\n" +
            "Limit your total dietary cholesterol to 200 mg per day.")
        ;
        $("#button").html('Close');
    }else{
        $("#comment").hide();
        $("#button").html('Details');
    }
}
/********************************************************************* End ******************************************************************/










/********************************************************************** Rustam Updates *************************************************************/
// Ajax user login request
$(document).on('submit','#registerKit', function (e) {
    e.preventDefault();

    var email    = $('#registerKit input[name=email]').val().trim();
    var password = $('#registerKit input[name=password]').val().trim();
    var data     = 'email=' + email + '&password=' + password;

    $.ajax({
        url: '/landing_home/slimapp/public/api/user/login',
        dataType: 'json',
        type: 'post',
        data: data,
        processData: false,
        success: function( data, textStatus, jQxhr ){
            console.log(data);
            if(data["status"] == "success") {
                //alert('wait');
                location.reload();
            }
        },
        error: function( jqXhr, textStatus, errorThrown ){
            data = jqXhr.responseJSON;
            console.log( data );
            if(data["status"] == "error") {
                if(data["errorType"] == "invalidEmail" || data["errorType"] == "invalidPassword" || data["errorType"] == "wrongPassOrEmail") {
                    $('.registerKit-class #error').html("C'è stato un errore nell'autenticazione.<br> Riprova oppure <a href='mailto:info@allelica.com'>contattaci</a>" );
                }
                if(data["errorType"] == "databaseError") {
                    $('.registerKit-class #error').html("C'è stato un errore nell'autenticazione.<br> Riprova oppure <a href='mailto:info@allelica.com'>contattaci</a>" );
                }
            }
        }
    });

});

$(document).ready(function() {

    // Pre send message
    try {
        function sendMessage() {
            // If user is not logged in
            if(!email || !bool || !token || !user_id || !name) {
                $(".initial-form").fadeOut(1);
                $(".login-form").fadeIn(100);
            } else if(!barcodeRegistered) {
                $(".login-form").fadeOut(1);
                $(".initial-form").fadeOut(1);
                $(".barcode-form").fadeIn(100);
            } else {
                $(".login-form").fadeOut(1);
                $(".barcode-form").fadeOut(1);
                $(".initial-form").fadeIn(100);
            }
        }
        sendMessage();
    }
    catch(err) {

    }


    // Different barcode register form
    $(document).on('click','#secondSubmit_1', function(e) {
        e.preventDefault();

        var barcode = $('.barcode-form #barcode').val().trim();
        var data = 'token=' + token + '&userId=' + user_id + '&barcode=' + barcode;

        $.ajax({
            url: url + '/landing_home/slimapp/public/api/user/barcode',
            dataType: 'json',
            type: 'post',
            data: data,
            processData: false,
            success: function( data, textStatus, jQxhr ){
                console.log(data);
                if(data["status"] == "success") {
                    location.reload();
                    //$('.barcode-form').html('');
                    //$('barcode-form').append('<span style="color: #fff;font-size:24px;">Il tuo codice è stato attivato con successo.<br/>Appena sei pronto puoi prenotare il ritiro del test</span>');
                }
            },
            error: function( jqXhr, textStatus, errorThrown ){
                data = jqXhr.responseJSON;
                console.log( data );
                if(data["status"] == "error") {
                    $('.barcode-form #error').html("C'è stato un errore nella registrazione.<br> Riprova oppure <a href='mailto:info@allelica.com'>contattaci</a>" );
                }
            }
        });
    });

    // Send message event
    $(document).on('click','#56inviaMessaggio', function(e) {
        var message = $('textarea[name=text]').val().trim();
        var data = 'token=' + token + '&userId=' + user_id + '&email=' + email + '&name=' + name + '&message=' + message;

        $.ajax({
            url: url + '/slimapp/public/api/contact',
            dataType: 'json',
            type: 'post',
            data: data,
            processData: false,
            success: function( data, textStatus, jQxhr ){
                console.log(data);
                if(data["status"] == "success") {
                    $('.hero-inner').html('<h1 style="color: #fff;">Messaggio inviato correttamente.</h1>');
                    $('.hero-inner').append('<h2 style="font-size: 24px; color: #fff;">Ti aggiorneremo al più presto per maggiori dettagli sulla spedizione.</h2>');
                }
            },
            error: function( jqXhr, textStatus, errorThrown ){
                data = jqXhr.responseJSON;
                console.log( data );
                if(data["status"] == "error") {
                    $('.hero-inner .hero-inform').html("<h2 style='font-size: 24px; color: #fff;'>C'è stato un' errore nella prenotazione. <a href=\'mailto:info@allelica.com\' style='color: #fff;text-decoration: underline;'>contattaci</a> </h2>");
                }
            }
        });

        return false;
    });

    try {
        function showBarcodeFiled(bool=false, token, token_time, user_id, barcodeRegistered) {
            if(bool && token && user_id && barcodeRegistered == '') {
                $('.registerKit-class').html('');
                $('.registerKit-class').append('<table><tr><td><label for="barcode">Barcode</label></td><td><input type="text" id="barcode" name="barcode" /></td></tr><tr><td colspan="2" text-align="center"><input type="hidden" id="userId" name="userId" value="'+user_id+'"><button id="secondSubmit">Registra</button></td></tr><tr><td colspan="2" style="text-align:center;color:#fff;" id="error"></tr></table>');
            } else if(bool && token && user_id && barcodeRegistered == '1') {
                $('.registerKit-class').html('<span style="color: #fff;font-size:24px;">Il tuo codice è stato attivato con successo.<br/>Appena sei pronto puoi prenotare il ritiro del test.</span><a id="logOutSubmit2">Log Out</a>');
                if(book) {
                    $('.registerKit-class').html('<div class="form-group" style="margin-left:10px">\n' +
                        '                        <div style="text-align: center; margin: 10px 0px; color: #fff;">\n' +
                        '                            <h1>Prenota il ritiro.</h1>\n' +
                        '                            <h2 style="font-size: 24px;">Indicaci la data e l\'ora più comodi per te a partire dal ' + currDatePlusTwo + ' </h2>\n' +
                        '                        </div><div class="clear"></div><br>\n' +
                        '                        <textarea type="textarea" name="text" style="width: 98.5%;border: 1px solid #20536c;border-radius: 5px; padding: 10px;" required></textarea><br>\n' +
                        '                        <!--<button type="submit" id="inviaMessaggio" class="btn btn-primary">Invia il messaggio</button>-->\n' +
                        '                        <input type="button" id="56inviaMessaggio" class="btn send-email-btn" value="Invia il messaggio">\n' +
                        '                    </div>');
                }
            }
        }
        showBarcodeFiled(bool, token, token_time, user_id, barcodeRegistered);
    }
    catch(err) {

    }




    $(document).on('click','#secondSubmit', function(e) {
        e.preventDefault();

        var barcode = $('.registerKit-class #barcode').val().trim();
        var data = 'token=' + token + '&userId=' + user_id + '&barcode=' + barcode;

        $.ajax({
            url: '/landing_home/slimapp/public/api/user/barcode',
            dataType: 'json',
            type: 'post',
            data: data,
            processData: false,
            success: function( data, textStatus, jQxhr ){
                console.log(data);
                if(data["status"] == "success") {
                    location.reload();
                    $('.registerKit-class').html('');
                    $('.registerKit-class').append('<span style="color: #fff;font-size:24px;">Il tuo codice è stato attivato con successo.<br/>Appena sei pronto puoi prenotare il ritiro del test.</span><a id="logOutSubmit2">Log Out</a>');
                }
            },
            error: function( jqXhr, textStatus, errorThrown ){
                data = jqXhr.responseJSON;
                console.log( data );
                if(data["status"] == "error") {
                    $('.registerKit-class #error').html("C'è stato un errore nella registrazione.<br> Riprova oppure <a href='mailto:info@allelica.com'>contattaci</a>" );
                    $('.registerKit-class #error').html("C'è stato un errore nella registrazione.<br> Riprova oppure <a href='mailto:info@allelica.com'>contattaci</a>" );
                }
            }
        });
    });



    $(document).on('click','#logOutSubmit, #logOutSubmit2', function(e) {
        e.preventDefault();
        var data = 'token=' + token + '&userId=' + user_id;

        $.ajax({
            url: '/landing_home/slimapp/public/api/user/logout',
            dataType: 'json',
            type: 'post',
            data: data,
            processData: false,
            success: function( data, textStatus, jQxhr ){
                console.log(data);
                if(data["status"] == "success") {
                    location.reload();
                }
            },
            error: function( jqXhr, textStatus, errorThrown ){
                data = jqXhr.responseJSON;
                console.log( data );
                if(data["status"] == "error") {
                    $('.registerKit-class #error').html("C'è stato un errore nella registrazione.<br> Riprova oppure <a href='mailto:info@allelica.com'>contattaci</a>" );
                }
            }
        });
    });
});



/********************************************************************* End ******************************************************************/











$(document).ready(function(){


     
    //animated header class
    $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
     //console.log(scroll);
    if (scroll > 200) {
        //console.log('a');
        $(".navigation").addClass("animated");
    } else {
        //console.log('a');
        $(".navigation").removeClass("animated");
    }});


    try {
        $(".gallery-slider").owlCarousel(
            {
                pagination : true,
                autoPlay : 5000,
                itemsDesktop  :  [1500,4],
                itemsDesktopSmall :  [979,3]
            }
        );
    } catch(e) {

    }


    // Gallery Popup
    try {
        $('.image-popup').magnificPopup({type:'image'});
    } catch(e) {

    }




});

$(document).on('click','.faq li', function ()  {
    if(!$(this).hasClass('opened')) {
        $(this).addClass('opened');
        $(this).children('p').slideDown();
    } else {
        $(this).removeClass('opened');
        $(this).children('p').slideUp();
    }
});



/*$(document).ready(function () {
    if($('#customButton').length > 0) {
        var handler = StripeCheckout.configure({
          key: 'pk_live_jISuAVgDyITNrh8Gs0YgWv3T',
          image: 'http://antiaging.allelica.com/img/pack.jpg',
          locale: 'auto',
          token: function(token) {
            // You can access the token ID with `token.id`.
            // Get the token ID to your server-side code for use.
          }
        });
        document.getElementById('customButton').addEventListener('click', function(e) {
            e.preventDefault(); 
            setCookie('buy','done',365)
            ga('send', 'event', 'pagamento');
            if(!document.getElementById('terms').checked) {
              alert("Assicurati di avere letto e accettato i termini e le condizioni di acquisto.\n");
                  $('#terms').focus();
                  $('#terms').addClass('notslected');
                  $('#terms').next('span').css('font-size','34px;');
                  $('#terms').next('span').css('color','red');
                  $('#terms').next('span').css('font-weight','bold');
                  return false;
              } else {
                  // Open Checkout with further options:
                  window.location = "https://allelica.com/landing_home/checkout.html";
                  /!*
                 handler.open({
                     name: 'Allelica',
                     description: 'Test genetico',
                     currency: 'eur',
                     address: true,
                     amount: 16900,
                     token: function (token,args) {
                         $('#token').val(JSON.stringify(token));
                         $('#payment').submit();
                     }
                });*!/
            }
        });
        
        // Close Checkout on page navigation:
        window.addEventListener('popstate', function() {
          handler.close();
        });
    }
})*/


 $(document).on('submit','#paypal-button', function (e) {
          
    setCookie('buy','done',365)

          ga('send', 'event', 'paypal');
          if(!document.getElementById('terms').checked) {
              alert("Assicurati di avere letto e accettato i termini e le condizioni di acquisto.\n");
              // ga('send', 'event', 'nutrizione - termini non selezionati per:'+pacchettoScelto);
              $('#terms').focus();
               $('#terms').addClass('notslected');
              $('#terms').next('span').css('font-size','34px;');
              $('#terms').next('span').css('color','red');
              $('#terms').next('span').css('font-weight','bold');
              return false;
          } else {
             //ga('send', 'event', 'nutrizione - verso paypal per il pacchetto: '+pacchettoScelto);
             return true;
          }
      });

$(document).on('click','.cta', function () {
    var id = $(this).attr('id');
    ga('send','event','call-to-action '+ id);
})

$(document).on('click','#inviaMessaggio', function (e) {
    e.preventDefault();
    var form = document.getElementById('contatti_form');
    if(form.checkValidity()) {
       var formValue = $('#contatti_form').serialize();
        $.ajax({
           url: 'email.php',
           method: 'POST',
           data: formValue,
           success: function (data) {
               alert(data);
               window.location = 'index.html';
           }
       }); 
    }
})


