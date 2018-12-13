$(document).ready(function() {
    $('.tag-bar.desktop .tag').click(function() {
        id = $(this).data('id');
        if ($(this).hasClass('selected')) {
            $('.tag-bar.mobile .tag-select option[value='+id+']').attr('selected',false);
            $(this).removeClass('selected');
        } else {
            $('.tag-bar.mobile .tag-select option[value='+id+']').attr('selected',true);
            $(this).addClass('selected');
        }
        tagArray = {};
        $('.tag-bar.desktop .tag.selected').each(function() {
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

function selecttag() {
    $('.tag-bar.desktop .tag.selected').removeClass('selected');
    tagArray = {};
    $('.tag-bar.mobile .tag-select option:selected').each(function() {
        id = $(this).val();
        $('.tag-bar.desktop .tag[data-id='+id+']').addClass('selected');
        tagArray[id] = id;
    });
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
    
}

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
            if (result.success) {
                renderPopupMessage("Thank you for suggesting a game!","You're Welcome!");
            }
        },
        error: function(error) {
        }
    });

}