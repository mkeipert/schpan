<?php if($page->template()!= 'map' && $page->template()!= 'start' &&$page->template() != 'facebook' &&$page->template() != 'leistungsspektrum') : ?>	
	<div id="totop">
		<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
	</div>
<?php endif ?>

<footer>
	<?php snippet('social') ?>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script> 
<?php echo js('assets/js/jquery.bxslider.min.js') ?>
<?php echo js('assets/js/jquery.slicknav.js') ?>

<script>
	$(function(){
		$('#menu').slicknav({
			allowParentLinks: true,
			label: ''
		});
		$('.slicknav_menu').prepend('<a class="logo" href="<?php echo $site->language()->url() ?>"><img src="<?php echo url('assets/images/logo-invert.png') ?>" alt="<?php echo $site->title()->html() ?>" /></a>');
	});

	window.onscroll = function() {
    	if (document.documentElement.scrollTop < 50 || self.pageYOffset < 150) {
    		$('#tobottom').css('opacity','1');
    	} else if (document.documentElement.scrollTop > 150 || self.pageYOffset > 150) {
    		$('#tobottom').css('opacity','0');
    	}
    }

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

	$(".spektrum").on('click', function(e) {
		e.preventDefault();
		$(".spektrum").removeClass('active_item');
		$(this).addClass('active_item');
		var selId = $(this).attr('id');
		$('html, body').animate({
        	scrollTop: $(this).offset().top
    	}, 1000);
		$(".displayInfo").hide();
		$(".displayInfo#" + selId).show();

	})


	function setStageHeight() {
		var highest_element = 0;

		$('.displayInfo').each(function() {
	  		if ($(this).height() > highest_element) {
	    	highest_element = $(this).height() + 50;
	  		}
		});

		$('#stage').height(highest_element);
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

	$(document).ready(function() {
		resizeElements();
		setStageHeight();
		$(".displayInfo").hide();
	});
	
	$(window).resize(function() {
		resizeElements();	
	});


</script>

</body>
</html>