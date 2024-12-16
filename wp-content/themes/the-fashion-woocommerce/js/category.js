jQuery(function($){
    $('body').on('click', '.the_fashion_woocommerce_upload_image_button', function(e){
        e.preventDefault();
        the_fashion_woocommerce_aw_uploader = wp.media({
            title: 'Custom image',
            button: {
                text: 'Use this image'
            },
            multiple: false
        }).on('select', function() {
            var attachment = the_fashion_woocommerce_aw_uploader.state().get('selection').first().toJSON();
            $('#cat-image').val(attachment.url);
        })
        .open();
    });
});