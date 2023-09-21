$(document).ready(function(){

    $('input[name="place"]').change(function(){
        $('#next_question').click(function(){
            $('#question_place').fadeOut(function(){
                $('#question_budget').fadeIn();
            });
        });
    });

    $('input[name="budget"]').change(function(){
        $('#next_question').click(function(){
            $('#question_budget, #next_question').fadeOut(function(){
                $('#finish').fadeIn();
            });
        });
    });

    $('#back_question').click(function(){
        $('#question_budget').fadeOut(function(){
            $('#question_place').fadeIn();
        });
    });

});