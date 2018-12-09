var basicHTML = "<div class='blocker'><div class='popup'><div class='message'></div><div class='button-row'><div class='fake-button' onclick='closePopup()'></div></div></div></div>";

function renderPopupMessage(message,buttonlabel,func) {
    $('body').append(basicHTML);
    if (typeof message != "undefined") {
        $('div.popup .message').text(message);
    }
    if (typeof buttonlabel != "undefined") {
        $('div.popup .fake-button').text(buttonlabel);
    }
    if (typeof func != "undefined") {
        $('div.popup .fake-button').attr('onclick','closePopup('+func+')');
    }
}
function closePopup(func) {
    $('div.blocker').remove();
    if (typeof func != "undefined") {
        func();
    }
}