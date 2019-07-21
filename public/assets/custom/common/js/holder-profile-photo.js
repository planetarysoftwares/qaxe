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

            var data = reader.result;
            var eNode = $('#profile_image_preview').attr('src', data);
            var image = new Image();

            image.src = data;

             image.onload = function() {
               EXIF.getData(image, function() {
                  var orientation = EXIF.getTag(this, "Orientation");
                  switch(orientation) {
                    case 2:
                      eNode.css('transform', 'rotateY(180deg)');
                      break;
                    case 3:
                      eNode.css('transform', 'rotate(180deg)');
                      break;
                    case 4:
                      eNode.css('transform', 'rotate(180deg) rotateY(180deg)');
                      break;
                    case 5:
                      eNode.css('transform', 'rotate(270deg) rotateY(180deg)');
                      break;
                    case 6:
                      eNode.css('transform', 'rotate(90deg)');
                      break;
                    case 7:
                      eNode.css('transform', 'rotate(90deg) rotateY(180deg)');
                      break;
                    case 8:
                      eNode.css('transform', 'rotate(270deg)');
                      break;
                  }
              });
            };

        }
        reader.readAsDataURL(input.files[0]);
    }
}

});