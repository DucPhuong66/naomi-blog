// JavaScript Document

//var $=jQuery;
jQuery(document).ready(function($) {
	
	// scroll body to 0px on click
	// hide #back-top first
            $("#back-top").hide();

            // fade in #back-top
            $(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        $('#back-top').fadeIn();
                    } else {
                        $('#back-top').fadeOut();
                    }
                });
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
		});
	
	 //slider
   $('.slider-dc').slick({
	    slidesToShow: 1,
	    dots: true,
	    infinite: true,
	    fade: false,
	    autoplay: false,
	    arrows: false,
	    speed:700,
    });
    // scrollreveal
    window.sr = ScrollReveal({ /*reset: true, mobile: false*/ });
   	sr.reveal('.banner-page', { 
		duration: 1200,
		origin: 'top',
	});
	$( window ).load(function() {
		//footer always bottom
		var browser_height = $( window ).height();
		var body_height = $( 'body' ).height();

			if(browser_height > body_height){
				
				$('#colophon').css({
					'position': 'absolute',
					'bottom': 0,
					'width': '100%'
				});
			}
		});
	
	//tính padding menu
			var main_menu_li_count = $("#nav > ul > li").length;
			var main_menu_li_total_width = 0;
			var main_menu_li_width = 0;
			var main_menu_li_width_new = 0;
			$("#nav > ul >li" ).each(function() {
				main_menu_li_width = $(this).width();		
				//$(this).after($('<span class="li_width">' + main_menu_li_width + '</span>'));
				main_menu_li_total_width += Number($(this).width());
			});
			
		//end tính padding menu
		//tính padding foot menu
		var foot_menu_li_count = $("#foot_wrap > div").length;
		var foot_menu_li_total_width = 0;
		var foot_menu_li_width = 0;
		var foot_menu_li_width_new = 0;
		$("#foot_wrap > div" ).each(function() {
			foot_menu_li_width = $(this).width();		
			foot_menu_li_total_width += Number($(this).width());
		});
	
	///////////////////////
		

	///////////////////////

	var parent = $('#sidr-right')
					.find('.current_page_item > a > span.holder')
					.trigger('click')
					.find('li.current-menu-item > a > span.holder').trigger('click');
	var parent2 = $('#menu_footer_append')
					.find('.current_page_item > a > span.holder')
					.trigger('click')
					.find('li.current-menu-item > a > span.holder').trigger('click');
		
	
	$('#sidr-right li.has-sub > a span.holder').live( "click", function(){
			//var link=$(this).parent().attr('href');
			//alert("ok");
			//$(this).parent().removeAttr('href');
			//$(this).parent().removeAttr('href');
			$(this).parent().parent().css("height","auto");
			var element = $(this).closest('li');
			var element_a=$(this).parent();
			//console.log( link);
			if (element.hasClass('open')) 
			{
				element.removeClass('open');
				element.find('li').removeClass('open');
				element.find('ul').slideUp();
				return false;
			}
			else 
			{
				element.addClass('open');
				element.children('ul').slideDown();
				element.siblings('li').children('ul').slideUp();
				element.siblings('li').removeClass('open');
				element.siblings('li').find('li').removeClass('open');
				element.siblings('li').find('ul').slideUp();
				return false;
			}
			//element_a.attr("href",link);
		});
	
	$('#menu_footer_append li.has-sub > a span.holder').live( "click", function(){
			//var link=$(this).parent().attr('href');
			//alert("ok");
			//$(this).parent().removeAttr('href');
			//$(this).parent().removeAttr('href');
			$(this).parent().parent().css("height","auto");
			var element = $(this).closest('li');
			var element_a=$(this).parent();
			//console.log( link);
			if (element.hasClass('open')) 
			{
				element.removeClass('open');
				element.find('li').removeClass('open');
				element.find('ul').slideUp();
				return false;
			}
			else 
			{
				element.addClass('open');
				element.children('ul').slideDown();
				element.siblings('li').children('ul').slideUp();
				element.siblings('li').removeClass('open');
				element.siblings('li').find('li').removeClass('open');
				element.siblings('li').find('ul').slideUp();
				return false;
			}
			//element_a.attr("href",link);
		});
	
		
		/*Fix*/
			
				
				$('#copyrecht').waypoint(function( direction ){
					if( direction == 'down'){
						$('#back-top').removeClass('stuck');
						$('#back-top').addClass('no_stuck');
					} else {
						$('#back-top').removeClass('no_stuck');
						$('#back-top').addClass('stuck');
					}
				}, {offset:function(){
					var backtopH = $('#back-top').height();
					return $(window).height();// + backtopH;
				}});
				
				$('#content_main').waypoint(function( direction ){
					if( direction == 'down'){
						$('#nav_menu_top').removeClass('head_normal');
						$('#nav_menu_top').addClass('head_fix');
					} else {
						$('#nav_menu_top').removeClass('head_fix');
						$('#nav_menu_top').addClass('head_normal');
					}
				}, {offset:function(){
					//var mastheadH = $('#masthead').height();
					return 0;
				}});
			
				/*EndFix*/
			
	$(window).on('load resize', function () {
		
		//tính padding menu
			var main_menu_width = $("#nav > ul").outerWidth(true);
			//alert(main_menu_width);
			//li width main menu
			
			//alert(main_menu_width);
			$("#nav > ul > li > a").css({
				'padding-left': Math.floor(((main_menu_width - main_menu_li_total_width)/main_menu_li_count)/2),
				'padding-right': Math.floor(((main_menu_width - main_menu_li_total_width)/main_menu_li_count)/2),
			});
			$("#nav > ul > li > ul li a").css({
				'padding-left': Math.floor(((main_menu_width - main_menu_li_total_width)/ main_menu_li_count)/2),
				'padding-right': Math.floor(((main_menu_width - main_menu_li_total_width)/ main_menu_li_count)/2),
			});
			$("#nav > ul > li" ).each(function() {
				main_menu_li_width_new = $(this).outerWidth();		
				$(this).find('ul > li').css("min-width", main_menu_li_width_new);
			});
			
		//end tính padding menu
		//tính padding foot menu
		var foot_menu_width = $("#foot_wrap").width();
			
			$("#foot_wrap > div").css({
				'padding-right': Math.floor(((foot_menu_width - foot_menu_li_total_width)/ (foot_menu_li_count - 1))),
			});
			
	//////////////
		
		var vs_767= window.matchMedia("only screen and (max-width: 767px)");
		if(vs_767.matches)
		{
			//MOBILE CODE
			if($("#sidr-right").length == 0)
			{
				$("<div id='sidr-right' class='sidr right'><div id='close_mobile_menu'><span></span></div><ul class='menu_primary_custom clear' id='top_menu_sid'></ul></div>").appendTo("body");
				$("#nav >ul" ).each(function() {
							var sponsors_append=$(this).html();
							$("ul#top_menu_sid").append(sponsors_append);
				 });
				 $("#nav>ul").css({"display":"none"});
			}
			var height_top_header_group=$(".top_header_group").outerHeight(true);
			var height_right_menu=$("#right-menu").outerHeight(true);
			var height_top_phone=$(".top_phone_mobile").outerHeight(true);
			$("a#right-menu").css({
				'top':+(height_top_header_group-height_right_menu)/2 +7
				});
			
			   $("#right-menu").css({"display":"block"});
				$('#right-menu').sidr({
			      name: 'sidr-right',
			      side: 'right'
			    });
				$('#close_mobile_menu').sidr({
			      name: 'sidr-right',
			      side: 'right'
			    });
				
				$(".top_phone_mobile").css({
				'padding-top':+(height_top_header_group-height_top_phone)/2
				});
			
		
			//end code menu
			
			
		}
		else
		{
			//PC CODE
			$('#menu_footer_append').remove();
			 //$("#right-menu").css({"display":"none"});
			$("#nav>ul").css({"display":"block"});
			$("#sidr-right").remove();
			
		}
	});
	
});//end jquery

jQuery.fn.toggleChange = function(class1, class2){
var $=jQuery;
  if( !class1 || !class2 )
    return this;

  return this.each(function(){
    var $elm = $(this);

    if( $elm.hasClass(class1) || $elm.hasClass(class2) )
      $elm.toggleClass(class1 +' '+ class2);

    else
      $elm.addClass(class1);
  });
};