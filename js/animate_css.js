/**
 * Created by Metourni  Noureddine on 15/07/2017.
 */



$(document).ready(function(){


	/*$('#features').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $(this).find('.timer').each(function () {
                var $this = $(this);
                $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
            $(this).unbind('inview');
        }
    });*/

	//animationClick('#logo','lightSpeedIn');
/*
	$('.navbar').addClass('animated fadeInUpBig');
	animationHover('#bra','animated rotateOut');
	$('.list-group').addClass('animated bounceInRight');
*/
    animationHover('#logo','animated rotateOut');

	function animationHover(element, animation){
	  element = $(element);
	  element.hover(
	    function() {
	      element.addClass('animated ' + animation);
	    },
	    function(){
	      //wait for animation to finish before removing classes
	      window.setTimeout( function(){
	        element.removeClass('animated ' + animation);
	      }, 2000);
	    }
	  );
	};


	function animationClick(element, animation){
	  element = $(element);
	  element.click(
	    function() {
	      element.addClass('animated ' + animation);
	      //wait for animation to finish before removing classes
	      window.setTimeout( function(){
	          element.removeClass('animated ' + animation);
	      }, 2000);
	    }
	  );
	};


});