$(document).ready(function() {
    var user_id = 0;

    /********************************************  Menu active click  ********************************************/
    $('.user-diet ul:last li').click(function(e) {
        $('.user-diet ul:last li').removeClass('active');
        $(this).addClass('active');
    });

    /********************************************  Scroll block do it main via menu click  ********************************************/
    var indexSS = '';
    $('.user-diet ul:last li').on('click', function () {
        indexSS = $(this).index();
        selectSign($(this).index(), 1);
    });

    function selectSign(indexS, accident) {
        $('.user-diet .inner-diet .card-body .plane-selects .food-group').addClass('btn-primary');
        $('.user-diet .inner-diet .card-body .moreInfoN button').addClass('btn-primary');
        $('.user-diet .card-header').addClass('primary-color');
        $('.day-' + (indexS + 1) + ' .card-header').removeClass('primary-color');
        $('.day-' + (indexS + 1) + ' .card-header').addClass('stupid-class');
        $('.user-diet .day-' + (indexS + 1) + ' .inner-diet .card-body .plane-selects .food-group').removeClass('btn-primary');
        $('.user-diet .day-' + (indexS + 1) + ' .inner-diet .card-body .moreInfoN button').removeClass('btn-primary');
        $('.user-diet .day-' + (indexS + 1) + ' .inner-diet .card-body .moreInfoN button').addClass('btn-success');
        $('.user-diet .day-' + (indexS + 1) + ' .inner-diet .card-body .plane-selects .food-group').addClass('btn-success');

        if(accident == 1) {
            $('.text-center').scrollTo('.day-' + (indexS + 1) + '', 500);
            if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                $('body, html').scrollTo('.day-' + (indexS + 1) + '', 200);
            }
        }

    }

    /********************************************   Add Json to the Local Storage in order to keep tracking   ********************************************/
    function returnJsonDataToLocalStorage() {
        user_id = jsonDefaultData[0]['user_id'];
        if(!localStorage.getItem('jsonData['+user_id+']')) {
            try {
                localStorage.removeItem('jsonData['+user_id+']');
            } catch(e) {}
            localStorage.setItem('jsonData['+user_id+']', JSON.stringify(jsonInitialData));
            localStorage.setItem('jsonDefaultData['+user_id+']', JSON.stringify(jsonDefaultData));

            return JSON.parse(localStorage.getItem('jsonData['+user_id+']'));
        }

        return JSON.parse(localStorage.getItem('jsonData['+user_id+']'));
    }

    /********************************************   Simplifying jsonData by days of the week for rendering only  ********************************************/
    function rebuildJsonByDays(jsonData) {
        var dayIndex = 0;
        var dayIndexArray = [];

        for (var key_1 in jsonData) {
            if(key_1 % 5 == 0) {
                dayIndex += 1;
                var currentCollectionByDays = [];

                for (var key_2 in jsonData) {
                    if(jsonData[key_2]['dayNumber'] == dayIndex) {currentCollectionByDays.push(jsonData[key_2]);}
                }

                dayIndexArray[dayIndex-1] = currentCollectionByDays;
            }
        }

        return dayIndexArray;
    }

    /********************* RESET THE PLAN TO INITIAL VALUES ***************************/
    var resetPlan = function () {
        if(!confirm('Questa funzione eliminerà  tutte le scelte fatte fino ad ora.\nVuoi procedere?'))
            return false;
        localStorage.setItem('jsonData['+user_id+']', JSON.stringify(jsonDefaultData));
        var jsonFromLocalStorage = returnJsonDataToLocalStorage();
        renderUserDietView(rebuildJsonByDays(jsonFromLocalStorage));
    }
    $(document).on('click','#resetPlan',function () {
        resetPlan();
        selectSign(indexSS, 1);
    });


    /******************** CALCULATING KCAL ********************************/

    var calculateKcal = function (data) {
        var arrangedData = data;
        for (day in arrangedData) {
            var niTotal = {'kcal': 0, 'carb': 0, 'pro': 0, 'fat': 0}
            var all_wrote = 0;
            for(meal in arrangedData[day]) {
                var wrote = 0;
                var ni = {'kcal': 0, 'carb': 0, 'pro': 0, 'fat': 0}
                for(selection in arrangedData[day][meal]['food_groups']) {
                    var foods_selection = arrangedData[day][meal]['food_groups'][selection];
                    if('crazyFoodValue' in foods_selection) {
                        var info = foods_selection['foods'][foods_selection['crazyFoodValue']]['nutrient_info'];
                        ni['kcal'] += parseFloat(info['kcal']);
                        ni['carb'] += parseFloat(info['carb']);
                        ni['pro'] += parseFloat(info['pro']);
                        ni['fat'] += parseFloat(info['fat']);
                        niTotal['kcal'] += parseFloat(info['kcal']);
                        niTotal['carb'] += parseFloat(info['carb']);
                        niTotal['pro'] += parseFloat(info['pro']);
                        niTotal['fat'] += parseFloat(info['fat']);
                    } else {
                        /*console.log(day + ' ' + meal);
                        console.log(foods_selection);
                        console.log('*****');*/
                        $($('#day-' +  ( parseInt(day) + 1 ) + ' .plane-kcal')[meal]).html('Seleziona tutti i cibi per calcolare i nutrienti');
                        wrote = 1;
                        all_wrote = 1;
                    }
                }
                for(food in arrangedData[day][meal]['foods']) {
                    var info =  arrangedData[day][meal]['foods'][food]['nutrient_info'];
                    ni['kcal'] += info['kcal'];
                    ni['carb'] += info['carb'];
                    ni['pro'] += info['pro'];
                    ni['fat'] += info['fat'];
                    niTotal['kcal'] += info['kcal'];
                    niTotal['carb'] += info['carb'];
                    niTotal['pro'] += info['pro'];
                    niTotal['fat'] += info['fat'];
                }
                var tot = ni['carb'] + ni['pro'] + ni['fat'];
                ni['kcal'] = Math.round(ni['kcal']);
                ni['carb'] = Math.round(ni['carb'] / tot * 100);
                ni['pro'] = Math.round(ni['pro'] / tot * 100);
                ni['fat'] = Math.round(ni['fat'] / tot * 100);
                if(wrote == 0){
                    if(parseInt(day) != 6 || meal != 2) {
                        $($('#day-' +  ( parseInt(day) + 1) + ' .plane-kcal')[meal]).html('<div class="moreInfoN"><table><tr><th>KCal</th><th>Carbo</th><th>Grassi</th><th>Proteine</th></tr><tr><td>' + ni['kcal'] + '</td><td>' + ni['carb'] + '%</td><td>'+ni['fat']+'%</td><td>'+ni['pro']+'%</td></tr></table></div>');
                    }
                }
            }
            var tot = niTotal['carb'] + niTotal['pro'] + niTotal['fat'];
            niTotal['kcal'] = Math.round(niTotal['kcal']);
            niTotal['carb'] = Math.round(niTotal['carb'] / tot * 100);
            niTotal['pro'] = Math.round(niTotal['pro'] / tot * 100);
            niTotal['fat'] = Math.round(niTotal['fat'] / tot * 100);
            if(all_wrote == 0) {
                if(parseInt(day) == 6) {
                    $('#day-' + ( parseInt(day) + 1 ) + '-recap').html('<div style="text-align:left;max-width: 100%;" class="moreInfoN tot">Il calcolo dei nutrienti la Domenica non viene effettuato<br>per la presenza del pranzo con ricetta libera.</div>');
                } else {
                    $('#day-' + ( parseInt(day) + 1 ) + '-recap').html('<div class="moreInfoN tot"><table><tr><th>KCal</th><th>Carbo</th><th>Grassi</th><th>Proteine</th></tr><tr><td>' + niTotal['kcal'] + '</td><td>' + niTotal['carb'] + '%</td><td>'+niTotal['fat']+'%</td><td>'+niTotal['pro']+'%</td></tr></table></div>');
                }
            } else {
                $('#day-' + ( parseInt(day) + 1 ) + '-recap').html('Seleziona tutti i cibi per calcolare i nutrienti');
            }
        }
    }

    /************* ADD SYMPTOM FORM ************************/

    var addSymptoms = function () {
        $('.addSymptom').detach();
        var idx = 0;
        $('.plane-kcal').each(function() {
            var html = '<button type="button" class="btn btn-primary mS" data-id="'+ idx + '" data-toggle="modal" data-target="#modalSymptom">+</button>';
            $(this).children('.moreInfoN').append(html);
            idx = idx + 1;
        });
    }

    $(document).on('click','.mS', function () {
        $('#formSymptom input').prop('checked', false);
        $('#formSymptom textarea').val('');
        $('#formSymptom select').prop('selectedIndex', 0);
        $('#id-meal').val($(this).attr('data-id'));
    });

    /********************************************   Inserting some data to the day's panels in meal's row's   ********************************************/
    function renderUserDietView(rebuildedJsonData) {
        $('.user-diet .text-center .user-meal .inner-diet .card-body h4').html('');
        $('.user-diet .text-center .user-meal .inner-diet .card-body .plane-text').html('');
        $('.user-diet .text-center .user-meal .inner-diet .card-body .plane-selects').html('');

        for(var weekDayIndex in rebuildedJsonData) {
            weekDayIndex = parseInt(weekDayIndex);
            for(var mealIndex in rebuildedJsonData[parseInt(weekDayIndex)]) {

                // Insert Meal title text
                mealIndex = parseInt(mealIndex);
                var meals_name = ['Colazione','Spuntino','Pranzo','Merenda','Cena'];
                var name = meals_name[mealIndex];
                $('.user-diet .text-center .user-meal:nth-child(' + (weekDayIndex + 1) + ') .card-body:nth-child('+ (mealIndex+1) +') .card-title').html(name);

                // Insert Meal Text Plane and Select box
                var foods      = rebuildedJsonData[weekDayIndex][mealIndex]['foods'];
                var food_groups = rebuildedJsonData[weekDayIndex][mealIndex]['food_groups'];

                for(var food in foods) {    // Add Plane Texts
                    var amTxt =  ': ' + foods[food]['amount'];
                    if(foods[food]['amount'] < 5)
                        amTxt = '';
                    var text = '<p class="card-text" id="foodId-' + foods[food]['id'] + '">' + foods[food]['name'] + amTxt + '</p>';

                    $('.user-diet .text-center .user-meal:nth-child(' + (weekDayIndex + 1) + ') .card-body:nth-child('+ (mealIndex+1) +') .plane-text').append(text);
                }

                for(var foodGroupType in food_groups) {     // Add Plane Selects
                    var counter = 0;
                    var collection = [];
                    var dataMapRoute = [
                        {
                            'weekDayIndex': weekDayIndex,
                            'mealIndex': mealIndex,
                            'foodGroupType': foodGroupType,
                        }
                    ];

                    for(var foodGroupTypeFoods in food_groups[foodGroupType]['foods']) {
                        collection[counter] = [{'id': food_groups[foodGroupType]['foods'][foodGroupTypeFoods]['id'], 'name': food_groups[foodGroupType]['foods'][foodGroupTypeFoods]['name'], 'amount': food_groups[foodGroupType]['foods'][foodGroupTypeFoods]['amount']}];
                        counter++;
                    }
                    dataMapRoute = JSON.stringify(dataMapRoute);
                    collection = JSON.stringify(collection);


                    // If Crazy Food selected then output for user instead of food type the value which already was choosen by user itself
                    var selectText = '';
                    if(food_groups[foodGroupType]['crazyFoodValue'] >= 0) {
                        var amTxt = ': ' + food_groups[foodGroupType]['foods'][food_groups[foodGroupType]['crazyFoodValue']]['amount'];
                        if(parseInt(food_groups[foodGroupType]['foods'][food_groups[foodGroupType]['crazyFoodValue']]['amount']) < 5)
                            amTxt = '';

                        var foodGroupToShowReset = foodGroupType;
                        if(foodGroupType == 'Verdure')
                            foodGroupToShowReset = 'Verdure/condimento cereali';

                        selectText = '<p class="card-text" id="reset-current-food">' +
                            food_groups[foodGroupType]['foods'][food_groups[foodGroupType]['crazyFoodValue']]['name'] + amTxt +
                            ' <a data-week-day-index=' + weekDayIndex + ' data-meal-index=' + mealIndex + ' data-food-type="' + foodGroupType + '" class="reset-current-food"  id="'+ foodGroupType +' " style="cursor: pointer;font-weight: bold;"> <img src="http://my.allelica.com/allelica/images/refresh-512.png" width="20" height="20"></a></p>';
                    } else {
                        var foodGroupToShow = foodGroupType;
                        if(foodGroupType == 'Verdure')
                            foodGroupToShow = 'Verdure/condimento cereali';
                        selectText = '<a href="#" data-map-route=' + encodeURIComponent(dataMapRoute) + ' data-map-collection=' + encodeURIComponent(collection) + '  class="food-group btn btn-primary waves-effect waves-light" id="'+ foodGroupType +'" >' + foodGroupToShow + '</a>';
                    }

                    $('.user-diet .text-center .user-meal:nth-child(' + (weekDayIndex + 1) + ') .card-body:nth-child('+ (mealIndex+1) +') .plane-selects').append(selectText);
                }
            }
        }
        calculateKcal(rebuildedJsonData);
        addSymptoms();
    }



    /********************************************   Fill Up Meals By Days with Json   ********************************************/
    var jsonFromLocalStorage = returnJsonDataToLocalStorage();
    console.log(jsonFromLocalStorage);
    console.log(rebuildJsonByDays(jsonFromLocalStorage));
    renderUserDietView(rebuildJsonByDays(jsonFromLocalStorage));



    /********************************************   Build Select box and preform to the User   ********************************************/
    var saveDataMapRoute = '';
    var clickedFood = '';
    $(document).on('click', '.user-diet .food-group', function () {
        var crazyFood = '';
        var dataMapRoute      = JSON.parse(decodeURIComponent($(this).attr('data-map-route')));
        var dataMapCollection = JSON.parse(decodeURIComponent($(this).attr('data-map-collection')));
        clickedFood = $(this);
        $('#mealModal #exampleModalLabel').html(dataMapRoute[0]['foodGroupType'].toUpperCase());   // Modal Title
        $('#mealModal .modal-body').html('');

        for(var index in dataMapCollection) {
            var amTxt =   ': ' + dataMapCollection[index][0]['amount'];
            if( parseInt(dataMapCollection[index][0]['amount']) < 5)
                amTxt =  '';
                crazyFood = '<div class="checkbox">' +
                                '<label><input type="radio" name="crazyFood" data-food-type="'+dataMapRoute[0]['foodGroupType']+'" value="' + index + '"><span style="margin-left:10px;font-size:18px;">' + dataMapCollection[index][0]['name'] + amTxt + '</span></label>' +
                            '</div>';
            $('#mealModal .modal-body').append(crazyFood);
        }
        $('.sundayLunch').html('');
        if(dataMapRoute[0].weekDayIndex == 6 && dataMapRoute[0].mealIndex == 2) {
            $('.sundayLunch').html('In questo pasto puoi scegliere le quantità  che preferisci');
        }
        saveDataMapRoute = dataMapRoute;
        $('#targetMealModal').click();
    });


    /********************************************   Save actions from user by modifying local storage json data   ********************************************/
    $('#mealModal #editDataJsonStorage').click(function () {
        if($('#mealModal input[name=crazyFood]:checked').val()) {
            var foodIndex = parseInt($('#mealModal input[name=crazyFood]:checked').val());

            var dataFoodType = $('#mealModal input[name=crazyFood]:checked').attr('data-food-type');
            var currentDataLocalStorage = returnJsonDataToLocalStorage();

            // Modify Data Storage Json
            for(var key in currentDataLocalStorage) {
                if((parseInt(currentDataLocalStorage[key]['dayNumber']) == parseInt(saveDataMapRoute[0]['weekDayIndex'] + 1)) && (parseInt(currentDataLocalStorage[key]['meal']) == parseInt(saveDataMapRoute[0]['mealIndex'] + 1))) {
                    currentDataLocalStorage[key]['food_groups'][dataFoodType]['crazyFoodValue'] = foodIndex;
                    try {
                        localStorage.removeItem('jsonData['+user_id+']');
                    } catch(e) {}

                    localStorage.setItem('jsonData['+user_id+']', JSON.stringify(currentDataLocalStorage));
                    renderUserDietView(rebuildJsonByDays(returnJsonDataToLocalStorage()));
                    $('#mealModal').modal('hide');
                    var scrollMapping = JSON.parse(decodeURIComponent(clickedFood.attr('data-map-route')));
                    console.log(scrollMapping);
                    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                        $('body, html').scrollTo('#day-' + (scrollMapping[0]['weekDayIndex'] + 1) + ' .card-body:nth-child(' +  (scrollMapping[0]['mealIndex'] + 1) + ')', 200);
                    }
                }
            }

            selectSign(indexSS, 0);
        }
    });


    /********************************************   Reset Current Selected Button   ********************************************/
    $(document).on('click', '#reset-current-food', function () {
        var innerInfo = $(this).find('.reset-current-food');
        var currentDataLocalStorage = returnJsonDataToLocalStorage();

        // Modify Data Storage Jsons
        for(var key in currentDataLocalStorage) {
            if((parseInt(currentDataLocalStorage[key]['dayNumber']) == (parseInt(innerInfo.attr('data-week-day-index'))+1)) && (parseInt(currentDataLocalStorage[key]['meal']) == (parseInt(innerInfo.attr('data-meal-index')) + 1))) {
                delete currentDataLocalStorage[key]['food_groups'][innerInfo.attr('data-food-type')]['crazyFoodValue'];
                console.log(currentDataLocalStorage);
                try {
                    localStorage.removeItem('jsonData['+user_id+']');
                } catch(e) {}

                localStorage.setItem('jsonData['+user_id+']', JSON.stringify(currentDataLocalStorage));
                renderUserDietView(rebuildJsonByDays(returnJsonDataToLocalStorage()));
            }
        }

        selectSign(indexSS, 0);
    });


    /********************************************   Save User Diet   ********************************************/
    $('#saveUserDiet').click(function () {
        var insert = JSON.stringify(returnJsonDataToLocalStorage());

        $.ajax({
            url: 'diet/submit',
            type: 'POST',
            dataType : 'json',
            data: {submit:insert},
            async: false,
            success: function(data) {
                console.log(data.submit);
                try {
                    localStorage.removeItem('jsonData['+user_id+']');
                } catch(e) {}

                jsonInitialData = data;
                location.reload();
            },
            error: function(){
                // ...
            }
        });
    });

    $('#sendSymptom').click(function () {
        var data = $('#formSymptom').serializeArray();

        $.ajax({
            url: 'diet/submitsymptom',
            type: 'POST',
            data: {data: data},
            async: false,
            success: function(data) {
                $('#modalSymptom .close').click();
                //alert('Grazie, questa informazione ci sarÃ  preziosa per migliorare i tuoi prossimi piani alimentari');
            },
            error: function(){
                // ...
            }
        });
    });

    /********************************************   Save User PDF   ********************************************/
    $('#saveUserPDF').click(function () {
        alert('Questa  funzionalità  sarà  disponibile a breve');
        return true;
    });
})

$(document).ready(function() {
    $('.second-menu ul .active').click();
})


