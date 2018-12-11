function showdropdown() {
    $('.search.dropdown .dropdown-menu').addClass('show');
}

function hidedropdown() {
    setTimeout(function() {
        $('.search.dropdown .dropdown-menu').removeClass('show');
    },200);
}

function filter(header) {
    if (header == 'mobile') {
        search = $('.header-mobile .search.dropdown .search-filter').val().toLowerCase();
        $('.header-mobile .search.dropdown .dropdown-menu .dropdown-item').each(function() {
            itemtext = $(this).text().toLowerCase();
            if (itemtext.includes(search)) {
                $(this).removeClass('hidden');
            } else {
                $(this).addClass('hidden');
            }
        });
    } else if (header == 'desktop') {
        search = $('.header-desktop .search.dropdown .search-filter').val().toLowerCase();
        $('.header-desktop .search.dropdown .dropdown-menu .dropdown-item').each(function() {
            itemtext = $(this).text().toLowerCase();
            if (itemtext.includes(search)) {
                $(this).removeClass('hidden');
            } else {
                $(this).addClass('hidden');
            }
        });
    }
    
}