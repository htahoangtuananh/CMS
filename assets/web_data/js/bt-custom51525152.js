(function($){"use strict";$(document).ready(function(){var backtop=$(".back-to-top");backtop.hide();$(window).scroll(function(){if($(this).scrollTop()>100){backtop.fadeIn();}else{backtop.fadeOut();}});$('.back-to-top').click(function(){$('body,html').animate({scrollTop:0},800);return false;});$(".testimonial-slide .list-testimonial").owlCarousel({items:2,slideSpeed:300,paginationSpeed:800,autoPlay:true,stopOnHover:true,navigation:false,navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]});$(".teachers-slide .list-teachers").owlCarousel({items:4,slideSpeed:300,paginationSpeed:800,autoPlay:true,stopOnHover:true,navigation:true,navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]});$(function(){$('.header-menu li a').on('click',function(event){$('html, body').stop().animate({scrollTop:$($(this).attr('href')).offset().top-91},1000,'swing');event.preventDefault();});});processLine.init();});var processLine={el:".process-node",init:function(){processLine.bind();},bind:function(){$(window).scroll(function(){processLine.check();});},check:function(){$(processLine.el).each(function(){if($(this).offset().top<$(window).scrollTop()+$(window).height()-200){$(this).closest("li").addClass("active").find(".line").addClass("active");$(this).addClass("active");}else{$(this).removeClass("active");$(this).closest("li").removeClass("active").find(".line").removeClass("active");}});}}})(jQuery);