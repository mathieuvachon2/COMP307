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
            url: '/index.php/movies/filterbytag',
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
        mainid: $('input[name=curmovie]').val(),
        simids: $('select[name=movie]').val(),
    }
    $.ajax({
        url: '/index.php/movies/suggest',
        type: 'POST',
        dataType: 'json',
        data: postData,
        success: function(result) {
            console.log(result);
            renderPopupMessage("Thank you for suggesting a movies!","You're Welcome!");
        },
        error: function(error) {
            console.log(error);
        }
    });

}