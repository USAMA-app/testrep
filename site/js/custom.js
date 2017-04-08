$(function(){$("li:first-child").addClass("first");$("li:last-child").addClass("last");$("tr:nth-child(odd)").addClass("alter");$('[href="#"]').attr("href","javascript:;");$(".typed").typed({strings:["Get the Perfect Custom Design, with the world's #1 custom logo design company"],typeSpeed:30,onStringTyped:function(e){console.log(e+'done');$('#typed-cursor').hide();},backspace:function(curString,curStrPos){setTimeout(function(){if(self.arrayPos==1){self.stopNum=3;}else{self.stopNum=0;}})}});var getval1=$(".typed1").data("tag");console.log(getval1);$(".typed1").typed({strings:[getval1],typeSpeed:30,onStringTyped:function(e){console.log(e+'done');$('#typed-cursor').hide();},backspace:function(curString,curStrPos){setTimeout(function(){if(self.arrayPos==1){self.stopNum=3;}else{self.stopNum=0;}})}});if(jQuery().lazyload){$("img.lazy").lazyload({effect:"fadeIn",skip_invisible:false});}$('#cyear').text(new Date().getFullYear());function sendReq(){$.ajax({url:'http://j.maxmind.com/app/geoip.js',type:'GET',success:function(data){var ctrycode1=geoip_country_code(),tgtctry=$('.jform select.countrylist option[data-abbr="'+ctrycode1+'"]');tgtctry.attr('selected','selected');$('.jform input[name="code"]').val('+'+tgtctry.attr('value'));$('.jform input[name="ctry"]').val($('.jform select.countrylist option:selected').html());$('.jform select.countrylist[name="ctry"]').each(function(){var cval=$(this).children('option:selected').attr('value');$('form .pc span').attr('class','fg'+cval);})},error:function(e){console.log('Error:',e);},contentType:'application/javascript; charset=ISO-8859-1',dataType:'script'});}$('input').on('focus',function(){if(window.blurred==false){window.blurred=true;sendReq();}});$('.s-bar').hover(function(){$(this).stop(true,true).animate({right:'184px'},500,'easeOutExpo');$('.side-bars').css('z-index','1004');},function(){$(this).animate({right:'0px'},500,'easeOutBounce');$('.side-bars').css('z-index','999');});$('.cus-overlay').click(function(){$('.popup-form, .callback-form, .bxch').css({'overflow':'hidden'})
$('.popup-form, .callback-form, .bxch').hide(300);$(this).fadeOut(300);$('.floating-form-wrap').animate({'margin-right':'-584px'})});$('.floating-form-wrap .form-handle, #slideform').click(function(){if($('.floating-form-wrap').css('margin-right')=='-584px'){$('.floating-form-wrap').animate({'margin-right':'0px'})
$('.cus-overlay').fadeIn(300);}else{$('.floating-form-wrap').animate({'margin-right':'-584px'})
$('.cus-overlay').fadeOut(300);}});$('.floating-banner').hover(function(){$('.floating-banner').stop(1,1).animate({'margin-left':'0px'},200);$('.cus-overlay').stop(1,1).fadeIn(200);},function(){$('.floating-banner').animate({'margin-left':'-610px'},200);$('.cus-overlay').fadeOut(200);});$('.masthead-slider button, .hire-btn, .portfoliopage .masthead .contact, .cta-red-pf button.hire, .custom-quote').click(function(){$('.popup-form').show(300).addClass('visibleit');$('.cus-overlay').fadeIn(300);})
$('.req-callback').on('click',function(){$('.callback-form').show(300).addClass('visibleit');$('.cus-overlay').fadeIn(300);})
$('.cus-overlay').click(function(){$(this).fadeOut(300);$('.callback-form, .popup-form').removeClass('visibleit');$('.floating-form-wrap').animate({'margin-right':'-584px'})})
$('a.close').click(function(){$('.cus-overlay').trigger('click');});$('.floating-form-wrap .form-handle, #slideform').click(function(){if($('.floating-form-wrap').css('margin-right')=='-584px'){$('.floating-form-wrap').animate({'margin-right':'0px'})
$('.cus-overlay').fadeIn(300);}else{$('.floating-form-wrap').animate({'margin-right':'-584px'})
$('.cus-overlay').fadeOut(300);}})
$(window).scroll(function(){var topPlusWindowSize=$(window).scrollTop()+$(window).height();if($('.floating-form-wrap')[0]&&$('.side-bars')[0]){var headerHeight=$('.header-wrap').height()-140;if(($(window).scrollTop()>=headerHeight)){$('.floating-form-wrap, .side-bars').fadeIn(300);$('.floating-banner').fadeIn(300);}else{$('.floating-form-wrap, .side-bars').fadeOut(300);$('.floating-banner').fadeOut(300);}}});function sendReq(){$.ajax({url:'http://j.maxmind.com/app/geoip.js',type:'GET',success:function(data){var ctrycode1=geoip_country_code(),tgtctry=$('.jform select.countrylist option[data-abbr="'+ctrycode1+'"]');tgtctry.attr('selected','selected');$('.jform input[name="code"]').val('+'+tgtctry.attr('value'));$('.jform input[name="ctry"]').val($('.jform select.countrylist option:selected').html());$('.jform select.countrylist[name="ctry"]').each(function(){var cval=$(this).children('option:selected').attr('value');$('form .pc span').attr('class','fg'+cval);})},error:function(e){console.log('Error:',e);},contentType:'application/javascript; charset=ISO-8859-1',dataType:'script'});}$('input').on('focus',function(){if(window.blurred==false){window.blurred=true;sendReq();}});$('.nav-tabs li a').click(function(){var gethref=$(this).attr('href');$(gethref+' .cycle-slideshow').hide();setTimeout(function(){$(gethref+' .cycle-slideshow').cycle('reinit');$('html,body').animate({scrollTop:$(gethref).offset().top-20},'slow');$(gethref+' .cycle-slideshow').fadeIn('slow');},500);});$(window).load(function(){$('.jform select.countrylist[name="pc"]').each(function(){var ctcd=$(this).val();$(this).prev('span').addClass('fg'+ctcd);});});$('.jform select.countrylist[name="pc"]').bind('change',function(){var cval=$(this).children('option:selected').attr('value');$(this).parent().children('span').attr('class','fg'+cval);});resizer();});$(window).resize(function(e){resizer()});function resizer(){var ht=$('.webSec .ri-grid img').height();$('.webSec .ri-grid, .webSec .ri-grid .row, .webSec .ri-grid .leftSec, .webSec .ri-grid .rightSec').height(ht);$('.webSec .tempSlide').height(ht-$('.hd1').height()-60);}var getid;function gotoscroll(getid){jQuery('html,body').animate({scrollTop:jQuery(getid).offset().top},'slow');}


function Views(type){
    $('#portfolio-logo-text').removeClass('portfolio-text-on');
        $('#portfolio-website-text').removeClass('portfolio-text-on');
        $('#portfolio-corporate-text').removeClass('portfolio-text-on');
        $('#portfolio-video-text').removeClass('portfolio-text-on');
        switch (type) {
            case 'logo':
                $('.slab-portfolio-item').hide();
                $('#portfolio-logo').show();
                $('#portfolio-logo-text').addClass('portfolio-text-on');
                break;
            case 'web':
                $('.slab-portfolio-item').hide();
                $('#portfolio-website').show();
                $('#portfolio-website-text').addClass('portfolio-text-on');
                break;
            case 'cidentity':
                $('.slab-portfolio-item').hide();
                $('#portfolio-corporate').show();
                $('#portfolio-corporate-text').addClass('portfolio-text-on');
                break;
            case 'video':
                $('.slab-portfolio-item').hide();
                $('#portfolio-video').show();
                $('#portfolio-video-text').addClass('portfolio-text-on');
                break;
            default:
                $('.slab-portfolio-item').hide();
                $('#portfolio-logo').show();
                $('#portfolio-logo-text').addClass('portfolio-text-on');
        }
}

$(document).ready(function(){

size_li = $(".logolist div").length;
console.log(size_li);
    increaseSize = 6;
    x = 9;
    $('.logolist div:lt(' + x + ')').css('display', 'inline-block');
    $('#loadMore').click(function() {
        if (x > size_li - 4) {
            $('#loadMore').css('display', 'none');
        }
        x = (x + increaseSize <= size_li) ? x + increaseSize : size_li;
        $('.logolist div:lt(' + x + ')').css('display', 'inline-block');
        $('.logolist div:lt(' + x + ')').fadeIn('fast');
    });


});