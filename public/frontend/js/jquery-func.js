/*
	Name: jquery-funcs.js
	Version: 1.0
*/

$(document).ready(function(){	

 	//=================================== Nav Responsive ===============================//
    $('#menu').tinyNav({
       active: 'selected'
    });

    //=================================== Nav Superfish ===============================//

	jQuery('ul.sf-menu').superfish();


	//=================================== Totop  ===================================//
	$().UItoTop({ 		
		scrollSpeed:500,
		easingType:'linear'
	});	

	//=================================== Subtmit Form  =================================//

	$('#form').submit(function(event) {  
	  event.preventDefault();  
	  var url = $(this).attr('action');  
	  var datos = $(this).serialize();  
	  $.get(url, datos, function(resultado) {  
	    $('#result').html(resultado);  
	  });  
	});  
	
	//=================================== Ligbox  ===================================//	

	    jQuery("a[class*=fancybox]").fancybox({
		'overlayOpacity'	:	0.7,
		'overlayColor'		:	'#000000',
		'transitionIn'		: 'elastic',
		'transitionOut'		: 'elastic',
		'easingIn'      	: 'easeOutBack',
		'easingOut'     	: 'easeInBack',
		'speedIn' 			: '700',
		'centerOnScroll'	: true,
		'titlePosition'     : 'over'
	});
	
	jQuery("a[class*='video_lightbox']").click(function(){
		var et_video_href = jQuery(this).attr('href'),
			et_video_link;

		et_vimeo = et_video_href.match(/vimeo.com\/(.*)/i);
		if ( et_vimeo != null )	et_video_link = 'http://player.vimeo.com/video/' + et_vimeo[1];
		else {
			et_youtube = et_video_href.match(/watch\?v=([^&]*)/i);
			if ( et_youtube != null ) et_video_link = 'http://youtube.com/embed/' + et_youtube[1];
		}
		
		jQuery.fancybox({
			'overlayOpacity'	:	0.7,
			'overlayColor'		:	'#000000',
			'autoScale'		: true,
			'transitionIn'	: 'elastic',
			'transitionOut'	: 'elastic',
			'easingIn'      : 'easeOutBack',
			'easingOut'     : 'easeInBack',
			'type'			: 'iframe',
			'centerOnScroll'	: true,
			'speedIn' 			: '700',
			'href'			: et_video_link
		});
		return false;
	});
	
	//=================================== Tooltips =====================================//

	if( $.fn.tooltip() ) {
		$('[class="tooltip_hover"]').tooltip();
	}		
	
	//=================================== Animations =====================================//

	var $item = jQuery('.info_resalt');
        $item.hover(function(){             
     	   jQuery(this).find('.animation').stop(true, true).animate({right: 0, top: 0},500);            
     	}); 

     var $item_two = jQuery('.info_white');
        $item_two.hover(function(){             
     	   jQuery(this).find('.animation_two').stop(true, true).animate({left: 0, top: 0},500);            
     	});
     
	 var $item_three = jQuery('.info_white');
        $item_three.hover(function(){             
     	   jQuery(this).find('.animation_three').stop(true, true).animate({left: 0, top: 0},500);            
     	});
		
     var $item_three = jQuery('.info_resalt');
        $item_three.hover(function(){             
     	   jQuery(this).find('.animation_three').stop(true, true).animate({left: 0, top: 0},500);            
     	});
		
	 var $item_four = jQuery('.info_white');
        $item_four.hover(function(){             
     	   jQuery(this).find('.animation_four').stop(true, true).animate({right: 0, top: 0},500);            
     	});

    //================================== Scrollama Efects ================================//

    var controller = $.superscrollorama();        
        // top_animations
       // controller.addTween('.top_animationa', TweenMax.from( $('.top_animationa'), .5, {css:{opacity: 0, top: '20px'}}));
        controller.addTween('.top_animationb', TweenMax.from( $('.top_animationb'), .5, {css:{opacity: 0, top: '20px'}}));
        //controller.addTween('.top_animationc', TweenMax.from( $('.top_animationc'), .5, {css:{opacity: 0, top: '20px'}}));        
        //controller.addTween('.top_animationd', TweenMax.from( $('.top_animationd'), .5, {css:{opacity: 0, top: '20px'}}));        
        //controller.addTween('.top_animatione', TweenMax.from( $('.top_animatione'), .5, {css:{opacity: 0, top: '20px'}}));        
        //controller.addTween('.top_animationf', TweenMax.from( $('.top_animationf'), .5, {css:{opacity: 0, top: '20px'}}));        
       // controller.addTween('.top_animationg', TweenMax.from( $('.top_animationg'), .5, {css:{opacity: 0, top: '20px'}}));        
        // rotation_animations
       // controller.addTween('.rotation_animation', TweenMax.from( $('.rotation_animation'), .50, {css:{opacity:0, rotation: 220}, ease:Quad.easeOut}));        


	//================================== Grid Gallery ====================================//

	$('#ri-grid').gridrotator({

		// number of rows
		rows : 3,

		// number of columns
		columns : 10,

		// rows/columns for different screen widths
		// i.e. w768 is for screens smaller than 768 pixels
		w1024 : {
			rows : 3,
			columns : 8
		},

		w768 : {
			rows : 3,
			columns : 6
		},

		w480 : {
			rows : 3,
			columns : 4
		},

		w320 : {
			rows : 2,
			columns : 3
		},

		w240 : {
			rows : 2,
			columns : 3
		},

		// step: number of items that are replaced at the same time
		// random || [some number]
		// note: for performance issues, the number should not be > options.maxStep
		step : 'random',
		maxStep : 3,

		// prevent user to click the items
		preventClick : true,

		// animation type
		// showHide || fadeInOut || slideLeft ||
		// slideRight || slideTop || slideBottom ||
		// rotateLeft || rotateRight || rotateTop ||
		// rotateBottom || scale || rotate3d ||
		// rotateLeftScale || rotateRightScale ||
		// rotateTopScale || rotateBottomScale || random
		animType : 'random',

		// animation speed
		animSpeed : 600,

		// animation easings
		animEasingOut : 'linear',
		animEasingIn : 'linear',

		// the item(s) will be replaced every 3 seconds
		// note: for performance issues, the time "can't" be < 300 ms
		interval : 2500,
		// if false the animations will not start
		// use false if onhover is true for example
		slideshow : true,
		// if true the items will switch when hovered
		onhover : false,
		// ids of elements that shouldn't change
		nochange : []

	});

	//=================================== Carousel team =====================================//

	$( '#mi-slider' ).catslider();


	//=================================== Carousel comments =====================================//
  
    $('#comments_carousel').flexslider({
	   	animation: "slide",
	   	animationLoop: false,	   	
	   	slideshow: false, 
	   	itemMargin: 0,
	   	minItems: 1,	   	
		directionNav: false,   
	   	maxItems: 1
  	});

    //=================================== Carousel Sponsors =====================================//

    $('#sponsors').flexslider({
	   	animation: "slide",
	   	animationLoop: false,
	   	itemWidth: 200,
	   	slideshow: true, 
	   	itemMargin: 0,
	   	minItems: 1,
	   	maxItems: 8
  	});
	
});

	//=================================== Carousel portfolio =====================================//

    $('#gallery').flexslider({
	   	animation: "slide",
	   	animationLoop: false,
	   	itemWidth: 200,
	   	slideshow: false, 
	   	controlNav: false,  
	   	itemMargin: 0,
	   	minItems: 1,
	   	maxItems: 3
  	});

  	
    //=================================== Slide Home =====================================//

     $('#slide').camera({        
        height: '33%'
     });


