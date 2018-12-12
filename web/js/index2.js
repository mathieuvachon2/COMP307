// For the checkboxes when the display is mobile
var expanded = false;

function showCheckboxes() {
    var checkboxes = document.getElementById("checkboxes");
    if (!expanded) {
        checkboxes.style.display = "block";
        expanded = true;
    } else {
        checkboxes.style.display = "none";
        expanded = false;
    }
}

// When search is by developer, submit form by ajax
function searchByDeveloper() {
    postData = {
        mainid: $('#searchDev').val()
    }
    $.ajax({
        url: 'index.html',
        type: 'POST',
        dataType: 'json',
        data: postData,
        success: function (result) {
        },
        error: function (error) {
            console.log(error);
        }
    });

}

// When the user searches by the tags
function searchByTags() {
    postData = {
        tagids: $('select[name=sellist]').val(),
    }
    $.ajax({
        url: 'index.html',
        type: 'POST',
        dataType: 'json',
        data: postData,
        success: function (result) {
        },
        error: function (error) {
            console.log(error);
        }
    });
}

// When the user searches by the tags on mobile
function searchByTagsMobile() {

    // FIND WAY TO CALL THIS FROM MOBILE

    var tags = [];
    $.each($("input[name='type']:checked"), function(){
        tags.push($(this).val());
    });
    postData = {
        tagids: tags,
    }
    $.ajax({
        url: 'index.html',
        type: 'POST',
        dataType: 'json',
        data: postData,
        success: function (result) {
        },
        error: function (error) {
            console.log(error);
        }
    });
}