$(document).ready(function () {
    let currentQuestion = 1;

    updateStepColor(currentQuestion);

    $('#next_question').click(function () {
        const currentDiv = $('.question[data-id="' + currentQuestion + '"]');
        const nextDiv = $('.question[data-id="' + (currentQuestion + 1) + '"]');

        if (currentDiv.length > 0 && nextDiv.length > 0) {
            currentDiv.fadeOut(function () {
                nextDiv.fadeIn();
                currentQuestion++;
                updateStepColor(currentQuestion);
            });

        }
    });

    $('#back_question').click(function () {
        const currentDiv = $('.question[data-id="' + currentQuestion + '"]');
        const prevDiv = $('.question[data-id="' + (currentQuestion - 1) + '"]');

        if (currentDiv.length > 0 && prevDiv.length > 0) {
            currentDiv.fadeOut(function () {
                prevDiv.fadeIn();
                currentQuestion--;
                updateStepColor(currentQuestion);
            });

        }
    });

    function updateStepColor(currentQuestion) {

        $('.circle[data-id]').css('background-color', '');

        if (currentQuestion === 1) {
            $('.circle[data-id="1"]').fadeIn(function () {
                $(this).css('background-color', 'skyblue');
            });
        } else if (currentQuestion === 2) {
            $('.circle[data-id="2"]').fadeIn(function () {
                $(this).css('background-color', 'skyblue');
            });
        } else if (currentQuestion === 3) {
            $('.circle[data-id="3"]').fadeIn(function () {
                $(this).css('background-color', 'skyblue');
            });
        }
    }

});

