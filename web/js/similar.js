$(document).ready(function() {
    $('.tag-bar .tag').click(function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            $(this).addClass('selected');
        }
    });
});

function submitSimilar() {
    postData = {
        mainid: $('input[name=curgame]').val(),
        simids: $('select[name=game]').val(),
    }
    $.ajax({
        url: 'index.html',
        type: 'POST',
        dataType: 'json',
        data: postData,
        success: function(result) {
            renderPopupMessage("Thank you for suggesting a game!","You're Welcome!");
        },
        error: function(error) {
            console.log(error);
        }
    });

}