$('.floating-form-wrap, .side-bars').hide();
$('.cus-overlay').hide();

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



$(function() {

size_li = $(".logolist div").length;
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

    $('.showHide').click(function() {
        $(this).hide();
        $('.showHideDiv').fadeToggle();
        $('.showHideDiv').ScrollTo();
    });
    $('.signupErrors').hide();
    $('.signupSuccess').hide();
    $('.homeSignup').submit(function(evnt) {
        evnt.preventDefault();
        var submitData = $(this).serializeArray()
        var serviceName = submitData[5].name;
        var serviceValue = submitData[5].value;
        var hashTagName = '';
        var allServices = [];
        allServices.push({
            name: 'Logo Design',
            value: 'logo'
        });
        allServices.push({
            name: 'Stationery Design',
            value: 'logo'
        });
        allServices.push({
            name: 'Business Card',
            value: 'logo'
        });
        allServices.push({
            name: 'Letterhead',
            value: 'logo'
        });
        allServices.push({
            name: 'Envelop',
            value: 'logo'
        });
        allServices.push({
            name: 'Folder',
            value: 'logo'
        });
        allServices.push({
            name: 'Brochure',
            value: 'logo'
        });
        allServices.push({
            name: 'Flyer',
            value: 'logo'
        });
        allServices.push({
            name: 'Catalog Design',
            value: 'cidentity'
        });
        allServices.push({
            name: 'Magazine Design',
            value: 'cidentity'
        });
        allServices.push({
            name: 'Car Wrap Design',
            value: 'cidentity'
        });
        allServices.push({
            name: 'Packaging Design',
            value: 'cidentity'
        });
        allServices.push({
            name: 'T-shirt Design',
            value: 'cidentity'
        });
        allServices.push({
            name: 'Label Design',
            value: 'cidentity'
        });
        allServices.push({
            name: 'CD/DVD Cover Design',
            value: 'cidentity'
        });
        allServices.push({
            name: 'Banners',
            value: 'cidentity'
        });
        allServices.push({
            name: 'Signage',
            value: 'cidentity'
        });
        allServices.push({
            name: 'Billboards',
            value: 'cidentity'
        });
        allServices.push({
            name: 'Promotional Products',
            value: 'cidentity'
        });
        allServices.push({
            name: 'Illustration Design',
            value: 'cidentity'
        });
        allServices.push({
            name: 'Custom Website',
            value: 'web'
        });
        allServices.push({
            name: 'HTML Website',
            value: 'web'
        });
        allServices.push({
            name: 'CMS Website',
            value: 'web'
        });
        allServices.push({
            name: 'Wordpress Theme',
            value: 'web'
        });
        allServices.push({
            name: 'E-Com Website',
            value: 'web'
        });
        allServices.push({
            name: 'Online Store',
            value: 'web'
        });
        allServices.push({
            name: 'Web Portals',
            value: 'web'
        });
        allServices.push({
            name: 'Website Banners',
            value: 'web'
        });
        allServices.push({
            name: 'Google Adwords banners',
            value: 'web'
        });
        allServices.push({
            name: '2D Animated Videos',
            value: 'video'
        });
        allServices.push({
            name: 'White Board Animation',
            value: 'video'
        });
        allServices.push({
            name: 'Stop Motion',
            value: 'video'
        });
        for (i = 0; i < allServices.length; i++) {
            if (allServices[i].name == serviceValue) {
                hashTagName = '#' + allServices[i].value;
            }
        }
        var thisForm = $(this);
        var url = '/order-form/process-signup-home.php';
        var postData = $(this).serialize();
        $.post(url, postData, function(o) {
            if (o.result === 1) {
                thisForm.find($('.signupErrors')).hide();
                thisForm.find($('.signupSuccess')).fadeIn('slow');
                thisForm.find($('.signupSuccess')).text(o.data);
                window.location.href = "/pricing.php" + hashTagName;
            } else {
                thisForm.find($('.signupErrors')).hide();
                thisForm.find($('.signupSuccess')).hide();
                thisForm.find($('.signupErrors')).fadeIn('slow');
                var output = '<ul>';
                for (var key in o.data) {
                    var value = o.data[key];
                    output += '<li>' + value + '</li>';
                }
                output += '</ul>';
                $('.signupErrors').html(output);
            }
        });
    });
    $('.sidePanelSignup').submit(function(evnt) {
        evnt.preventDefault();
        var dialCode = "+" + telInput.intlTelInput("getSelectedCountryData").dialCode;
        var cNumber = $('#signupform-phone').val();
        var pNumber = cNumber.replace(dialCode, '');
        $('#pnumber').val(pNumber);
        var thisForm = $(this);
        var url = '/order-form/process-signup-sidepanel.php';
        var postData = $(this).serialize();
        $.post(url, postData, function(o) {
            if (o.result === 1) {
                thisForm.find($('.signupErrors')).hide();
                thisForm.find($('.signupSuccess')).fadeIn('slow');
                thisForm.find($('.signupSuccess')).text(o.data);
                window.location.href = "/pricing.php";
            } else {
                thisForm.find($('.signupErrors')).hide();
                thisForm.find($('.signupSuccess')).hide();
                thisForm.find($('.signupErrors')).fadeIn('slow');
                var output = '<ul>';
                for (var key in o.data) {
                    var value = o.data[key];
                    output += '<li>' + value + '</li>';
                }
                output += '</ul>';
                $('.signupErrors').html(output);
            }
        });
    });
    $("#signupform-bphone").intlTelInput("setCountry", "us");
    $('.bannerPanelSignup').submit(function(evnt) {
        evnt.preventDefault();
        var dialCode = "+" + telInput.intlTelInput("getSelectedCountryData").dialCode;
        var cNumber = $('#signupform-bphone').val();
        var pNumber = cNumber.replace(dialCode, '');
        $('#bpnumber').val(pNumber);
        $(this).find('#bflagCountries').val(telInput.intlTelInput("getSelectedCountryData").name);
        var thisForm = $(this);
        var url = '/order-form/process-signup-sidepanel.php';
        var postData = $(this).serialize();
        $.post(url, postData, function(o) {
            if (o.result === 1) {
                thisForm.find($('.bsignupErrors')).hide();
                thisForm.find($('.bsignupSuccess')).css('background', 'rgb(227, 255, 183)');
                thisForm.find($('.bsignupSuccess')).css('border', '1px solid #527d0f');
                thisForm.find($('.bsignupSuccess')).css('color', 'rgb(122, 176, 37)');
                thisForm.find($('.bsignupSuccess')).fadeIn('slow');
                thisForm.find($('.bsignupSuccess')).text(o.data);
                window.location.href = "/pricing.php";
            } else {
                thisForm.find($('.bsignupErrors')).css('background', 'rgb(255, 188, 188)');
                thisForm.find($('.bsignupErrors')).css('border', '1px solid rgb(218, 94, 94)');
                thisForm.find($('.bsignupErrors')).css('color', 'rgb(135, 2, 2)');
                thisForm.find($('.bsignupErrors')).hide();
                thisForm.find($('.bsignupSuccess')).hide();
                thisForm.find($('.bsignupErrors')).fadeIn('slow');
                var output = '<ul>';
                for (var key in o.data) {
                    var value = o.data[key];
                    output += '<li>' + value + '</li>';
                }
                output += '</ul>';
                $('.bsignupErrors').html(output);
            }
        });
    });
    $('#loader').hide();
    $('#errors1').hide();
    $('#btn_paypal').click(function(evnt) {
        $(this).hide();
        var url = '../_admin/orderProcess.php';
        var postData = $(this).serialize();
        $.post(url, postData, function(o) {
            if (o.result === 1) {
                $('#btn_paypal').hide();
                $('#loader').show();
                $('.editform').hide();
                $("#packageID").val(o.data[1]);
                $('#ppaypal').unbind();
                $('#ppaypal').submit();
            } else {
                evnt.preventDefault();
                $('#errors1').show('slow');
                var output = '<ul>';
                for (var key in o.data) {
                    var value = o.data[key];
                    output += '<li>' + value + '</li>';
                }
                output += '</ul>';
                $('#errors1').html(output);
            }
        }, 'json');
    });
    $('.loader').hide();
    $('#changePassword').submit(function(evnt) {
        evnt.preventDefault();
        $('.loader').show();
        var thisForm = $(this);
        var url = $(this).attr('action');
        var postData = $(this).serialize();
        $.post(url, postData, function(o) {
            if (o.result === 1) {
                $('.loader').hide();
                thisForm.find($('.signupErrors')).hide();
                thisForm.find($('.signupSuccess')).fadeIn('slow');
                thisForm.find($('.signupSuccess')).text(o.data);
            } else {
                $('.loader').hide();
                thisForm.find($('.signupErrors')).hide();
                thisForm.find($('.signupSuccess')).hide();
                thisForm.find($('.signupErrors')).fadeIn('slow');
                var output = '<ul>';
                for (var key in o.data) {
                    var value = o.data[key];
                    output += '<li>' + value + '</li>';
                }
                output += '</ul>';
                $('.signupErrors').html(output);
            }
        });
    });
    $('.accordion-content').hide();
    $('.copen').show();
    $('.accordion-content:first-child').show();
    $('.accordion-header').click(function(e) {
        $(this).next('.accordion-content').slideToggle();
    })
    size_li = $(".logolist div").length;
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
    $('ul.tabs').each(function() {
        var $active, $content, $links = $(this).find('a');
        if (page == 'logo') {
            $active = $($links.filter('[href="' + location.hash + '"]')[0] || $links[0]);
            $active.addClass('active');
        } else if (page == 'cidentity') {
            $active = $($links.filter('[href="' + location.hash + '"]')[1] || $links[1]);
            $active.addClass('active');
        } else if (page == 'website') {
            $active = $($links.filter('[href="' + location.hash + '"]')[2] || $links[2]);
            $active.addClass('active');
        } else if (page == 'video') {
            $active = $($links.filter('[href="' + location.hash + '"]')[3] || $links[3]);
            $active.addClass('active');
        } else {
            $active = $($links.filter('[href="' + location.hash + '"]')[0] || $links[0]);
            $active.addClass('active');
        }
        $content = $($active[0].hash);
        $links.not($active).each(function() {
            $(this.hash).hide();
        });
        $(this).on('click', 'a', function(e) {
            $active.removeClass('active');
            $content.hide();
            $active = $(this);
            $content = $(this.hash);
            $active.addClass('active');
            $content.fadeIn('fast');
            e.preventDefault();
        });
    });
    $('ul.tabs2').each(function() {
        var $active, $content, $links = $(this).find('a');
        $active = $($links.filter('[href="' + location.hash + '"]')[0] || $links[0]);
        $active.addClass('active');
        $content = $($active[0].hash);
        $links.not($active).each(function() {
            $(this.hash).hide();
        });
        $(this).on('click', 'a', function(e) {
            $active.removeClass('active');
            $content.hide();
            $active = $(this);
            $content = $(this.hash);
            $active.addClass('active');
            $content.fadeIn('fast');
            e.preventDefault();
        });
    });
    $(".vplink").hover(function() {
        $(this).find($('.hovervideo')).css('z-index', '999');
        $(this).find($('.hovervideo')).height($(this).parent().find($('img')).height() + 1);
        $(this).find($('.hovervideo')).fadeIn();
    }, function() {
        $(this).find($('.hovervideo')).css('z-index', '-1');
        $(this).find($('.hovervideo')).fadeOut();
    });
    $('.country').change(function() {
        cID = $(this).prop('selectedIndex') + 1;
        $('.codeSelect :nth-child(' + cID + ')').prop('selected', true);
        $('.country :nth-child(' + cID + ')').prop('selected', true);
    });
    var type = window.location.hash.substr(1);
    console.log(type);
    if (type) {
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
    } else {
        if (page == 'website') {
            $('.slab-portfolio-item').hide();
            $('#portfolio-website').show();
            $('#portfolio-website-text').addClass('portfolio-text-on');
        } else if (page == 'logo') {
            $('.slab-portfolio-item').hide();
            $('#portfolio-logo').show();
            $('#portfolio-logo-text').addClass('portfolio-text-on');
        } else if (page == 'cidentity') {
            $('.slab-portfolio-item').hide();
            $('#portfolio-corporate').show();
            $('#portfolio-corporate-text').addClass('portfolio-text-on');
        } else if (page == 'video') {
            $('.slab-portfolio-item').hide();
            $('#portfolio-video').show();
            $('#portfolio-video-text').addClass('portfolio-text-on');
        } else {
            $('.slab-portfolio-item').hide();
            $('#portfolio-logo').show();
            $('#portfolio-logo-text').addClass('portfolio-text-on');
        }
    }
    $('.portfolio a').click(function() {
        $('.portfolio a').removeClass('portfolio-text-on');
        $(this).addClass('portfolio-text-on');
        $('.slab-portfolio-item').hide();
        var portfolio = $(this).attr('rel');
        $('.portfolio-container').find('.' + portfolio).fadeIn('fast');
        if (portfolio == 'plogo') {
            var imageHeight = $('.pcontainer').find('.' + portfolio).find('img').height();
            $('.pcontainer').height(imageHeight * 2 + 100);
        } else {
            var imageHeight = $('.pcontainer').find('.' + portfolio).find('img').height();
            $('.pcontainer').height(imageHeight + 100);
        }
    });
    $('.Count').counterUp({
        delay: 10,
        time: 1000
    });
    $('.testim1').click(function() {
        $('.cycle-slideshow').cycle(0)
    });
    $('.testim2').click(function() {
        $('.cycle-slideshow').cycle(1)
    });
    $('.testim3').click(function() {
        $('.cycle-slideshow').cycle(2)
    });
    $(".cus-overlay").hide();
    $('.s-bar').hover(function() {
        $(this).stop(true, true).animate({
            right: '200px'
        }, 500, 'easeOutExpo');
        $('.side-bars').css('z-index', '1004');
    }, function() {
        $(this).animate({
            right: '0px'
        }, 500, 'easeOutBounce');
        $('.side-bars').css('z-index', '999');
    });
    $('.floating-form-wrap .form-handle').click(function() {
        if ($('.floating-form-wrap').css('margin-right') == '-580px') {
            $('.floating-form-wrap').animate({
                'margin-right': '0px'
            });
            $('.cus-overlay').fadeIn(300);
            $('.form-handle').addClass('active');
        } else {
            $('.floating-form-wrap').animate({
                'margin-right': '-580px'
            });
            $('.cus-overlay').fadeOut(300);
            $('.form-handle').removeClass('active');
        }
    });
    $('.floating-banner').hover(function() {
        $('.floating-banner').stop(1, 1).animate({
            'margin-left': '0px'
        }, 200);
        $('.cus-overlay').stop(1, 1).fadeIn(200);
    }, function() {
        $('.floating-banner').animate({
            'margin-left': '-580px'
        }, 200);
        $('.cus-overlay').fadeOut(200);
    });
    $('.cus-overlay').click(function() {
        $(this).fadeOut(300);
        $('.floating-form-wrap').animate({
            'margin-right': '-580px'
        });
        $('.form-handle').removeClass('active');
    });
    $('a.close').click(function() {
        $('.cus-overlay').trigger('click');
    });
    $(".countryList").intlTelInput({
        autoPlaceholder: true,
        defaultCountry: "auto",
        nationalMode: false,
        geoIpLookup: function(callback) {
            $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        }
    });
    $("#signupform-phone").change(function() {
        var dialCode = telInput.intlTelInput("getSelectedCountryData").dialCode;
        var countryName = telInput.intlTelInput("getSelectedCountryData").name;
        $('#flagCode').val("+" + dialCode);
        $('#flagCountries').val(countryName);
    });
    var telInput = $(".countryList");
    telInput.on("country-change", function() {
        alert($(".countryList").intlTelInput("getNumberType"));
    });
    $('.floating-form-wrap, .side-bars').hide();
    $(window).scroll(function(e) {
        if ($(window).width() >= 767) {
            if ($('.floating-form-wrap')[0] && $('.side-bars')[0]) {
                var headerHeight = $('#myCarousel').height() + $('header').height() + $('.topheader').height();
                if (($(window).scrollTop() >= headerHeight)) {
                    $('.floating-form-wrap, .side-bars').fadeIn(300);
                    $('.floating-banner').fadeIn(300);
                } else {
                    $('.floating-form-wrap, .side-bars').fadeOut(300);
                    $('.floating-banner').fadeOut(300);
                }
            }
        }
    });
    $('#nav-icon3').click(function() {
        $(this).toggleClass('open');
        $('.secright').slideToggle();
    });
});
jQuery(".owl-carousel-logo").owlCarousel({
    autoPlay: 3000,
    items: 5
});
jQuery(".owl-carousel-corp").owlCarousel({
    autoPlay: 3000,
    items: 3
});
jQuery(".owl-carousel-web").owlCarousel({
    autoPlay: 3000,
    items: 3
});
jQuery(".owl-carousel-video").owlCarousel({
    autoPlay: 3000,
    items: 3
});
jQuery(".home-slider-top").owlCarousel({
    autoPlay: 3000,
    pagination: false,
    transitionStyle: "fade",
    items: 1,
    itemsDesktop: true,
    itemsDesktopSmall: true,
    itemsTablet: true,
    itemsMobile: true
});
jQuery("#homeBanner").owlCarousel({
    autoPlay: 8000,
    pagination: true,
    items: 1,
    itemsDesktop: true,
    itemsDesktopSmall: true,
    itemsTablet: true,
    itemsMobile: true,
    mouseDrag: false
});