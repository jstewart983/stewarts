function createEvent(value){

$.ajax({
    type: 'POST',
    url: "/events/ajax/startStopEvent.php"+value,
    success: function(json) {
        console.log(json);

        $("#stewartModal").removeClass("hidden");


    }

});

}



$(function() {



        $('#taskForm button').on('click',function(e){
            var clickedVal = $(this).attr('value');
            var currentClass = $(this).attr('class');

            

             e.preventDefault();

             if(clickedVal="nap"){

                var startState = $("#napStart").attr('class').search("disabled");
                var stopState = $("#napStop").attr('class').search("disabled");
                if(startState = -1){

                $('#napStart').addClass(".disabled");
                $('#napStop').removeClass(".disabled");

                }else{
                    $('#napStart').removeClass(".disabled");
                    $('#napStop').addClass(".disabled");
                }
               
             }


             if(clickedVal="exercise"){

                var startState = $("#execStart").attr('class').search("disabled");
                var stopState = $("#execStop").attr('class').search("disabled");
                if(startState = -1){

                $('#execStart').addClass(".disabled");
                $('#execStop').removeClass(".disabled");

                }else{
                    $('#execStart').removeClass(".disabled");
                    $('#execStop').addClass(".disabled");
                }
               
             }

            value = "?type="+clickedVal;
            console.log(clickedVal);
            createEvent(value);
            $('button').off('click');
        });
       


});