function showCheckboxes() {
    var checkboxes = document.getElementById("checkboxes");
    if ($(checkboxes).hasClass('hidden')) {
        $(checkboxes).removeClass('hidden');
    } else {
        $(checkboxes).addClass('hidden');
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

function showdropdev() {
    $('.search-dev.dropdown .dropdown-menu').addClass('show');
}

function hidedropdowndev() {
    setTimeout(function() {
        if (!$('.dropdown .search-dev:focus').length) {
            $('.search-dev.dropdown .dropdown-menu').removeClass('show');
        }
    },200);
}

function filterdev() {
    search = $('.search-dev.dropdown .search-dev').val().toLowerCase();
    $('.search-dev.dropdown .dropdown-menu .dropdown-item').each(function() {
        itemtext = $(this).text().toLowerCase();
        if (itemtext.includes(search)) {
            $(this).removeClass('hidden');
        } else {
            $(this).addClass('hidden');
        }
    });
}
function showdropgenre() {
    $('.search-genre.dropdown .dropdown-menu').addClass('show');
}

function hidedropdowngenre() {
    setTimeout(function() {
        if (!$('.dropdown .search-genre:focus').length) {
            $('.search-genre.dropdown .dropdown-menu').removeClass('show');
        }
    },200);
}

function filtergenre() {
    search = $('.search-genre.dropdown .search-genre').val().toLowerCase();
    $('.search-genre.dropdown .dropdown-menu .dropdown-item').each(function() {
        itemtext = $(this).text().toLowerCase();
        if (itemtext.includes(search)) {
            $(this).removeClass('hidden');
        } else {
            $(this).addClass('hidden');
        }
    });
}
function select(element) {
    if ($(element).hasClass('selected')) {
        $(element).removeClass('selected');
    } else {
        $('.dropdown.search-dev .dropdown-item.selected').removeClass('selected');
        $(element).addClass('selected');
    }
    filtertable();
    $('.search-dev').focus();
}
function selectgenre(element) {
    if ($(element).hasClass('selected')) {
        $(element).removeClass('selected');
    } else {
        $(element).addClass('selected');
    }
    $('.dropdown .search-genre').focus();
    filtertable();
}

function filtertable() {
    director_id = $('.dropdown.search-dev .dropdown-item.selected').data('id');
    genre_ids = {};
    $('.dropdown.search-genre .dropdown-item.selected').each(function() {
        genre_ids[$(this).data('id')] = $(this).data('id');
    });
    postData = {
        director_id: director_id,
        genre_ids: genre_ids,
    }
    $.ajax({
        url: '/index.php/movies/search',
        type: "POST",
        data: postData,
        success: function(result) {
            $('.filtered-list').empty().append(result);
        },
    })
}