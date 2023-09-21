$(document).ready(function(){

    $('input[name="place"]').change(function(){
        if($(this).is(':checked')) {
            $('#question_place').fadeOut(function(){
                $('#question_budget').fadeIn();
            });
        }
    });

});