try {
    if(status == 'biometrics') {
        var currCheckBox = '';
        var is50 = false;

        var importArray = '';
        var importArraySecond = '';

        // CheckBox dependence from toher select si or no
        $(document).ready(function() {

            var slider_1 = document.getElementById("myRange-1");
            var output_1 = document.getElementById("rangePrimary");
            output_1.innerHTML = slider_1.value;

            slider_1.oninput = function() {
                output_1.innerHTML = this.value;
            }

            var slider_2 = document.getElementById("myRange-2");
            var output_2 = document.getElementById("rangeSuccess");
            output_2.innerHTML = slider_2.value + ' cm';

            slider_2.oninput = function() {
                output_2.innerHTML = this.value + ' cm';
            }

            var slider_3 = document.getElementById("myRange-3");
            var output_3 = document.getElementById("rangeWarning");
            output_3.innerHTML = slider_3.value + ' kg';

            slider_3.oninput = function() {
                output_3.innerHTML = this.value + ' kg';
            }


            $('.check-box-mania .form-check input[type="checkbox"]').prop('checked', false); // Unchecks it
            if(currentInputRadioValue == 'null') {
                $('.check-box-mania .form-check input[type="checkbox"]').prop('checked', false); // Unchecks it
                $('.user-experience .check-box-mania #comment').val('');
                $('.check-box-mania').fadeOut();
            }

            $('.user-experience .special-radio input[name="'+ specialRadioName +'"]').change(function(){
                var currentInputRadioValue = $(this).val();

                if(currentInputRadioValue == specialRadioValueSi) {
                    $('.check-box-mania').slideDown(300);
                }

                if(currentInputRadioValue == specialRadioValueNo) {
                    $('.check-box-mania').slideUp(300);
                    $('.check-box-mania .form-check input[type="checkbox"]').prop('checked', false); // Unchecks it
                    $('.user-experience .check-box-mania #comment').val('');
                }

                if(currentInputRadioValue == 'null') {
                    $('.check-box-mania .form-check input[type="checkbox"]').prop('checked', false); // Unchecks it
                    $('.check-box-mania').slideUp();
                    $('.user-experience .check-box-mania #comment').val('');
                }
            });


            $('.user-experience .check-box-mania-lactose').hide();
            $('.user-experience input[name="Biometrics[lactose_intolerance]"]').change(function(){
                var currentInputRadioValue = $(this).val();
                if(currentInputRadioValue == 'Non sono sicuro') {
                    $('.check-box-mania-lactose').slideDown(300);
                } else {
                    $('.check-box-mania-lactose').slideUp(300);
                }
            });

            $('.user-experience #osl').hide();
            $('.user-experience #otherSimptomLactose').click(function() {
                var currentInputRadioValue = $(this).val();
                if(currentInputRadioValue == 'altro' && !$('.user-experience #otherSimptomLactose').hasClass('clicked')) {
                    $('.user-experience #osl').slideDown(300);
                    $('.user-experience #otherSimptomLactose').addClass('clicked');
                } else {
                    $('.user-experience #osl').slideUp(300);
                    $('.user-experience #otherSimptomLactose').removeClass('clicked');
                }
            });

            $('.user-experience #otherGluten').hide();

            $('.user-experience input[name="Biometrics[gluten_celiac_intolerance]"]').change(function(){
                var currentInputRadioValue = $(this).val();
                if(currentInputRadioValue == 'Non sono sicuro') {
                    $('#otherGluten').slideDown(300);
                } else {
                    $('#otherGluten').slideUp(300);
                }
            });
            $('.user-experience #oG').hide();
            $('.user-experience #otherGlutenCheck').click(function() {
                var currentInputRadioValue = $(this).val();
                if(currentInputRadioValue == 'altro' && !$('.user-experience #otherGlutenCheck').hasClass('clicked')) {
                    $('.user-experience #oG').slideDown(300);
                    $('.user-experience #otherGlutenCheck').addClass('clicked');
                } else {
                    $('.user-experience #oG').slideUp(300);
                    $('.user-experience #otherGlutenCheck').removeClass('clicked');
                }
            });



            /*$(document).on('submit', '.user-experience #regForm', function (e) {
                alert('dfdfdf');
                $('.user-experience #simptomLactose li input').each(function(){
                    console.log($(this));
                });
                e.preventDefault();
                return false;
            });
            $('#regForm').submit(function(e) {

                $('.user-experience #simptomLactose li input').each(function(){
                    console.log($(this));
                });
                e.preventDefault();
                return false;
            });*/
            $(document).on('click', '.user-experience #submitForm', function (e) {
                e.preventDefault();
                $('.user-experience #simptomLactose li').each(function(e){
                    var field = $(this).children('input');
                    console.log(field);
                    if(field.prop('checked') == true) {
                        importArray += $(this).text() + ', ';
                    }
                });
                importArray += $('#descrizioneAltriSintomiLattosio').val();
                $('.add-hidden').val(importArray);

                $('.user-experience #otherGluten ul li').each(function(e){
                    var field = $(this).children('input');
                    console.log(field);
                    if(field.prop('checked') == true) {
                        importArraySecond += $(this).text() + ', ';
                    }
                });
                importArraySecond += $('#descrizioneAltroGlutine').val();
                $('.add-hidden-second').val(importArraySecond);




                alert('Ti ringraziamo per aver inserito i tuoi dati.\nTra pochi giorni ti contatteremo per invitarti a consultare il tuo piano nutrizionale personalizzato');
                $('#regForm').submit();
            });


            //$('.check-box-mania').fadeOut();


            // User can not submit without
            /*var countT = 0;
            $('.user-experience #nextBtn').click(function() {
                if($(this).html() == 'Submit') {
                    if(countT >= 1) {
                        $('.user-experience #regForm').submit();
                    }
                    countT += 1;
                }
            });*/

            var count = 0;
            /*//$('.user-experience #nextBtn').click(function() {*/
            $(document).on('click','.user-experience #prevBtn', function (e) {
                count = 0;
            });

            $(document).on('click','.user-experience #nextBtn', function (e) {
                var tthis = $(this).html();
                setTimeout(function(){
                    if(tthis == 'Submit') {
                        if(count >= 1) {

                            $('.user-experience #simptomLactose li input').each(function(){
                                console.log($(this));
                            });
                            return false;
                            //$('.user-experience #regForm').submit();
                        }
                        count++;
                    }
                    return false;
                }, 30);
            });

        })





        $('#nextBtn').on('click', function () { nextPrev(1); });
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }

            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n);
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //alert('999999');
               // document.getElementById("regForm").submit();

                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);

            if (currentTab == 7) {
                $("#nextBtn").hide();
                $('#submitForm').show();

            } else {
                $('#submitForm').hide();
                $("#nextBtn").show();
                try {
                    currCheckBox = $('.panel-body .tab:nth-child(' + (n+1) + ') input[type=radio]');

                    if(currCheckBox) {
                        console.log(n);
                        console.log(currCheckBox);
                    }
                } catch(e) {

                }

                /*console.log($('input[name="' + currCheckBox[0].name + '"]:checked').val());*/



            }

        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");



            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...

                var isValid = false;


                if(y[i].type == 'range') {
                    if($('#myRange-2').val() == '175' || $('#myRange-3').val() == '95') {

                        valid = false;

                        if(confirm('Hai confermato uno dei valori di default. Sei sicuro?')) {
                            valid = true;
                        }

                        return valid;
                    }
                }


                if(y[i].type == "radio") {
                    /*console.log(y[i]);
                    console.log(y[i].name);
                    console.log(y[i].checked);*/
                    var j;
                    for (j = 0; j < y.length; j++) {
                        if(y[j].checked == true) {
                            isValid = true;
                        }

                        if(j == 1) {
                            console.log(j + ' - ' + y[j]);
                            /*if($('#myRange-2').val() == '180' || $('#myRange-3').val() == '75') {
                                alert('Si prega di impostare altezza o peso');
                                valid = false;
                                return valid;
                            }*/
                        }
                    }

                    /*console.log('isValid: ' + isValid);*/



                    if(isValid == true) {

                        if(i == 0) {
                            if($('#myRange-1').val() == '50' && !is50) {
                                valid = false;

                                if(confirm("Hai selezionato il valore di default: hai davvero 50 anni oppure hai dimenticato di modificarlo?")) {
                                    valid = true;
                                    is50 = true;
                                } else {

                                    valid = false;
                                }

                                return valid;
                            }
                        }



                        valid = true;
                        return valid;
                        /*if (y[i].value == "") {
                            // add an "invalid" class to the field:
                            y[i].className += " invalid";
                            // and set the current valid status to false:
                            valid = true;
                            return valid;
                        }*/
                    } else {
                        valid = false;
                        alert("Uno dei campi obbligatori non è stato riempito, si prega di verificare");
                        return valid;
                    }
                }




                return valid;
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";
        }
    }
}catch(e) {

}
