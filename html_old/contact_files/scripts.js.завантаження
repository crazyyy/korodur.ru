(function () {

    $('document').ready(function () {
        // Photoswipe:
        initPhotoSwipe('.wpPhotoSwipe', '.wpPhotoSwipeImage', 'A', '.caption');

        // Productsearch:
        jQuery.expr[':'].icontains = function (a, i, m) {
            return jQuery(a).text().toUpperCase()
                    .indexOf(m[3].toUpperCase()) >= 0;
        };
        $('.wpProductSearch INPUT').on('keyup', function () {
            var q = $(this).val();
            var navlist = $(this).parent().find('ul');
            navlist.children().hide();
            navlist.find('LI:icontains(' + q + ')').show();
            navlist.show();
        })
        
        //Same Height Containers
        $('.row > .wpCard > .card').matchHeight({
            byRow: true,
            property: 'height',
            target: null,
            remove: false
        });

    });

    // close productsearch when clicking outside:
    $(document).mouseup(function (e)
    {
        var container = $(".wpProductSearch UL");

        if (!container.is(e.target) // if the target of the click isn't the container...
                && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            container.hide();
        }
    });

})();
