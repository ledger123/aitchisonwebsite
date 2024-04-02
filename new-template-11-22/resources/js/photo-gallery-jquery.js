$(document).ready(function () {

    /* ----------------------------------------------------------- */
    /*  11. GALLERY SLIDER
    /* ----------------------------------------------------------- */

    $('#gallerySLide a').tosrus({
        buttons: 'inline',
        pagination : {
            add     : true,
            type    : 'thumbnails'
        },
        keys: {
            next: true,
            prev: true,
            close: true
        },
        wrapper  : {
            onClick     : 'close',
        },
        caption   : {
            add     : true
        }
    });


});