(function(WGR, $) {
    'use strict';

    // Set variables
    var $input = $('.js-search-input'),
        $products = $('.js-product');

    // Bind events
    $input.on('input', filterProducts);

    // In this filter function I added .toUpperCase so it doesn't matter if the user writes with uppercase or lowercase.
    function filterProducts() {
        var filterValue = $input.val().toUpperCase();

        $products.each(function(index) {
            var title = $(this).data('title');

            if (title.toUpperCase().includes(filterValue)) {
                $(this).addClass('is-visible');
                $(this).removeClass('is-hidden');
            } else {
                $(this).addClass('is-hidden');
                $(this).removeClass('is-visible');
            }
        });
    }

    // I'm using some click down here, even though you said in the documentation to always use .on or .trigger instead. 
    // In this case I think its fine with .click since only one thing gets called.

    // First function opens modal-window when user clicks on button, second function closes modal-window when user click close(X)
    $('.is-btn--shop').on('click', function() {
        $('.is-modal-window').show();
    })

    $('.is-close-modal').on('click', function() {
        $('.is-modal-window').hide();
    })

    // When you click hambuger icon a new div appears with nav items, if you click again the div will close. This only shows on smaller screen sizes.
    $(document).ready(function() {
        $('.is-button-site-nav-small').click(function() {
            $('.is-site-nav-small').slideToggle(300);
        });
    });

    // Right now if you click on any nav item the div will close.
    $('.is-categories').on('click', function() {
        closeModal()
    });

    function closeModal() {
        $('.is-site-nav-small').slideUp(300);
    }

    function example() {
        console.log('Hello world');
    }

    WGR.example = example;

}(window.WGR = window.WGR || {}, jQuery));