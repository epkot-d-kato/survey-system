$(document).ready(function(){
    let currentQuestion=1;

    $('#next_question').click(function(){
        const currentDiv = $('.question[data-id="'+ currentQuestion + '"]');
        const nextDiv = $('.question[data-id="' + (currentQuestion + 1) + '"]');

        if (currentDiv.length > 0 && nextDiv.length > 0) {
            currentDiv.fadeOut(function(){
                nextDiv.fadeIn();
            });
            currentQuestion++;
        }

    });

    $('#back_question').click(function(){
        const currentDiv = $('.question[data-id="'+ currentQuestion + '"]');
        const prevDiv = $('.question[data-id="' + (currentQuestion - 1) + '"]');

        if (currentDiv.length > 0 && prevDiv.length > 0) {
            currentDiv.fadeOut(function(){
                prevDiv.fadeIn();
            });
            currentQuestion--;
        }

    });

});

