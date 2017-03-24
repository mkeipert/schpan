$(function(){
		$('#menu').slicknav({
			allowParentLinks: true,
			label: ''
		});
		$('.slicknav_menu').prepend('<a class="logo" href="<?php echo $site->language()->url() ?>"><img src="<?php echo url(\'assets/images/logo-invert.png\') ?>" alt="<?php echo $site->title()->html() ?>" /></a>');
	});

	function resizeElements() {
		var large = window.matchMedia( "screen and (min-width: 798px)" );
	
	    if (large.matches) {
			var viewportHeight 		= 	$(window).height();
			var headerHeight		=	$('header').height();
			var	separatorHeight		=	$('.separator').height();
			var backgroundHeight	=	viewportHeight - headerHeight - separatorHeight;
			$('.background').css('height', backgroundHeight);
			$('.fullheight').css('height', backgroundHeight);
		}
	}
	
	$(document).ready(function() {
		resizeElements();
	});
	
	$(window).resize(function() {
		resizeElements();	
	});

	$("#tobottom i").on('click', function() {
		   var x = $('article').offset().top;
     		console.log(x);
   			$('html,body').animate({scrollTop: x}, 1000);
 		  return false;
		});

	$("#totop i").on('click', function() {
   			$('html,body').animate({scrollTop: 0}, 1000);
 		  	return false;
		});

	window.onscroll = function()
    {
    if (document.documentElement.scrollTop < 50 || self.pageYOffset < 150) {
            $('#tobottom').css('opacity','1');
        } else if (document.documentElement.scrollTop > 150 || self.pageYOffset > 150) {
            $('#tobottom').css('opacity','0');
        }
    }

    var smallOnly = window.matchMedia( "screen and (max-width: 797px)" );

    if (smallOnly.matches) {
    	$('#toggleElevator').click(function(){
    		$('.elevator').show();
    		$('.elevatorClose').show();
    	});
    	$('.elevatorClose').click(function(){
    		$('.elevator').hide();
    		$('.elevatorClose').hide();
    	});
	} else {
		$('#toggleElevator').click(function(){
			$('.elevator.left').animate({
				left: '0',
			},300);
			$('.elevator.right').animate({
				right: '0',
			},300)
			$('.elevatorClose').animate({
				opacity: '1'
			},300)
		});
		$('.elevatorClose').click(function(){
			$('.elevator.left').animate({
				left: '-50%',
			},300);
			$('.elevator.right').animate({
				right: '-100%',
			},300)
			$('.elevatorClose').animate({
				opacity: '0'
			},300)
		});

		
	}
