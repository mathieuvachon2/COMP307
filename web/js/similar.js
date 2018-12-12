$(document).ready(function() {
    $('.tag-bar .tag').click(function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            $(this).addClass('selected');
        }
        tagArray = {};
        $('.tag-bar .tag.selected').each(function() {
            tagArray[$(this).data('id')] = $(this).data('id');
        })
        postData = {
            main_id: $('.main.item').data('id'),
            tag_ids: tagArray,
        }
        $.ajax({
            url: '/index.php/games/filterbytag',
            type: 'POST',
            data: postData,
            success: function(result) {
                $('.sim-list').empty().append(result);
            }
        })
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