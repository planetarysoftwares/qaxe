//profile image upload preview

jQuery(function($) {

'use strict';

jQuery(".ticket_holder_profile_photo").change(function () {
    readURL(this);
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            jQuery('#profile_image_preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
});