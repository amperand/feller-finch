jQuery(function(){
      SyntaxHighlighter.all();
    });
    jQuery(window).load(function(){
      jQuery('.flexslider.slideshow').flexslider({
	  	animation: "slide",
        controlNav: false,
        animationLoop: true,
        start: function(slider){
          jQuery('body').removeClass('loading');
          var thisSlide = slider.slides.eq(slider.currentSlide + 1);
        },
		before: function(slider){
			var thisSlide = slider.slides.eq(slider.currentSlide);
			jQuery(thisSlide).removeClass('fromRight');
			
	    	var animateSlide = slider.slides.eq(slider.animatingTo);
			jQuery(animateSlide).addClass('fromRight');
		},
		after: function(slider){
			var thisSlide = slider.slides.eq(slider.currentSlide);
			jQuery(slider).find('li').not(thisSlide).removeClass('toLeft');
		},
      });
      jQuery('.flexslider.portfolio').flexslider({
        animation: "slide",
        slideshow: false,
        controlNav: false,
        smoothHeight:true
      });
      jQuery('.portfolio li.flex-active-slide article').show('slow');
      jQuery('#toggle-menu').click(function(){
	  	jQuery(this).toggleClass('expanded');
	  	jQuery('.site-navigation').toggleClass('expanded');
	  	if(jQuery(this).hasClass('expanded')) {
	  		jQuery(this).siblings('#primary-navigation').slideDown();
	  	} else {
	  		jQuery(this).siblings('#primary-navigation').slideUp();
	  	}
	  });
    });
    
	jQuery(document).ready(function(){
		jQuery('.hide-for-large-up #primary-navigation a').click(function(event){
			event.preventDefault();
			var gotoSpot = jQuery(this).attr('href');
			console.log(gotoSpot);
			if(jQuery('#toggle-menu').hasClass('expanded')) {
				 jQuery('#toggle-menu').removeClass('expanded');
				 jQuery('.hide-for-large-up #primary-navigation').slideUp().removeClass('expanded');
			 } 
			 jQuery("html,body").animate({scrollTop:jQuery(gotoSpot).offset().top - 70},"50");
		  });
	
		jQuery(function(){jQuery(".scroll, .scroll2").click(function(){jQuery("html,body").animate({scrollTop:jQuery("#contact").offset().top - 70},"50");return false})});
	});
    jQuery(document).foundation({
		"magellan-expedition": {
		  active_class: 'active', 
		  threshold: 0, 
		  destination_threshold:40, 		  
		  throttle_delay: 50, 
		  fixed_top:25, 
		  offset_by_height: true 
		}
	});

	jQuery(document).foundation('magellan', 'reflow');