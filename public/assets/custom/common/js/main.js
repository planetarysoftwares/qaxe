jQuery(function($) {'use strict';

	//Responsive Nav
	$('li.dropdown').find('.fa-angle-down').each(function(){
		$(this).on('click', function(){
			if( $(window).width() < 768 ) {
				$(this).parent().next().slideToggle();
			}
			return false;
		});
	});

	//Initiat WOW JS
	new WOW().init();

	// portfolio filter
	$(window).on('load',function(){

		$('.main-slider').addClass('animate-in');
		$('.preloader').remove();
		//End Preloader

		if( $('.masonery_area').length ) {
			$('.masonery_area').masonry();//Masonry
		}

		var $portfolio_selectors = $('.portfolio-filter >li>a');
		
		if($portfolio_selectors.length) {
			
			var $portfolio = $('.portfolio-items');
			$portfolio.isotope({
				itemSelector : '.portfolio-item',
				layoutMode : 'fitRows'
			});
			
			$portfolio_selectors.on('click', function(){
				$portfolio_selectors.removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$portfolio.isotope({ filter: selector });
				return false;
			});
		}

	});


	$('.timer').each(count);
	function count(options) {
		var $this = $(this);
		options = $.extend({}, options || {}, $this.data('countToOptions') || {});
		$this.countTo(options);
	}
		
	// Search
	$('.fa-search').on('click', function() {
		$('.field-toggle').fadeToggle(200);
	});
//
//	// Contact form
var form = $('#main-contact-form');
form.submit(function(event){

    var mailRequest = {
        name    : $('input[name=name]').val(),
        email   : $('input[name=email]').val(),
        message : $('textarea[name=message]').val()
    }

    event.preventDefault();
    var form_status = $('<div class="form_status"></div>');
    
    $.ajax({
            url: '/contact-us',
            data: mailRequest,
            beforeSend: function(){
              form.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn() );
            },
            success:function(response){
            if(response.status == 'success'){
               form_status.html('<p class="text-success">Thank you for contact us. As early as possible we will contact you</p>').delay(3000).fadeOut();
            }
            else{
               form_status.html('<p class="text-error">An error has occurred. please check your input and try again  </p>').delay(3000).fadeOut();
            }
            },
            error:  function(jqXHR ) {
             form_status.html('<p class="text-error">An error has occurred. please try again later </p>').delay(3000).fadeOut();
            }
          })
    });

	// Progress Bar
	$.each($('div.progress-bar'),function(){
		$(this).css('width', $(this).attr('data-transition')+'%');
	});

	if( $('#gmap').length ) {
		var map;

		map = new GMaps({
			el: '#gmap',
			lat: 43.04446,
			lng: -76.130791,
			scrollwheel:false,
			zoom: 16,
			zoomControl : false,
			panControl : false,
			streetViewControl : false,
			mapTypeControl: false,
			overviewMapControl: false,
			clickable: false
		});

		map.addMarker({
			lat: 43.04446,
			lng: -76.130791,
			animation: google.maps.Animation.DROP,
			verticalAlign: 'bottom',
			horizontalAlign: 'center',
			backgroundColor: '#3e8bff',
		});
	}

 //select rank

 $('select[name=organiser_id]').change(function () {
       var organiser_id =$(this).val();
       var select = $('select[name=event]');
       select.empty();
       var position;

      $.ajax({
            type : 'get',
            url :'/search',
            data:{'organiser_id': organiser_id },

            success:function(data){
               for (position = 0; position < data.tickets.length; position++) {
                    select.append('<option value='+ data.tickets[position].id +'>' + data.tickets[position].title+ '</option>');
               }
            }
           });

 }).change();

//select a new queue on rank  cange
$("button[name=send_queue]").click(function(e) {
    e.preventDefault();
     var organiser_id = $('select[name=organiser_id]').val();
     var event_id =  $('select[name=event]').val();
     if(event_id){
         var path =  '/e/'+event_id;
         console.log(event);
         window.location = window.location.origin+path;
     }
});

});