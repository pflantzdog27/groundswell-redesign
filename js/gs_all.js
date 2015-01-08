if(!GS){
    var GS = {}
}


/* ===========================================
        FUNCTIONS
// ========================================== */

GS.navigation = new function(){
    var searchButton = $('.search-toggle');
    var form = $('#primary-search-field')

    this.searchDisplay = function() {
        searchButton.click(function(e) {
            e.preventDefault()
            form.slideToggle(400);
        })
    };

    this.navigateDown = function() {
        $("#get-started").click(function() {
            var scrollHere = parseInt($("#sub-intro-section").offset().top);
            $('html, body').animate({
                scrollTop: scrollHere - 0
            }, 600);
        });
    };

    this.backToTop = function() {
        $("#back-top").click(function() {
            var scrollHere = parseInt($("#intro-section-wrapper").offset().top);
            $('html, body').animate({
                scrollTop: scrollHere
            }, 600);
        });
    };

    this.navigationBoxShadow = function() {
        $('#primary-navigation-wrapper').css('box-shadow', 'none');
        var distance = $('.content-section').eq(0).offset().top;
        var offset = 70;
        $(window).scroll(function() {
            if ($(window).scrollTop() >= distance - offset) {
                $('#primary-navigation-wrapper').css('box-shadow', '0px 1px 8px 0px rgba(0, 0, 0, 0.6)');
            } else {
                $('#primary-navigation-wrapper').css('box-shadow', 'none');
            }
        });
    }

};

GS.backgroundVideo = new function() {
    var windowWidth = $(window).width();
    var aspectRatio;
    this.sizingFunction = function() {
        var videoID = 'homepage-videoBG';
        _V_(videoID).ready(function(){

            var myPlayer = this;
            if (windowWidth < 768) {
                aspectRatio = 4/6;
            } else {
                aspectRatio = 4/9.4;
            }
            var width = document.getElementById(myPlayer.id).parentElement.offsetWidth;
            myPlayer.width(width).height( width * aspectRatio );
            $('#hero').find('.container').height(width * aspectRatio);

            function resizeVideoJS(){
                var width = document.getElementById(myPlayer.id).parentElement.offsetWidth;
                myPlayer.width(width).height( width * aspectRatio );
            }
            window.onresize = resizeVideoJS;

            // when video finishes
            this.addEvent("ended", function(){
                myPlayer.pause();
                $('#playback-control').removeClass('icon-pause').addClass('icon-play');
                isPlaying = false;
            });

            //pause/pause video
            var isPlaying = !myPlayer.paused();
            $('#playback-control').click(function() {
                if(isPlaying == true) {
                    myPlayer.pause();
                    $(this).removeClass('icon-pause').addClass('icon-play');
                    isPlaying = false;
                } else {
                    myPlayer.play();
                    $(this).removeClass('icon-play').addClass('icon-pause');
                    isPlaying = true;
                }
            })
        });
    }
};

GS.teamDisplay = new function() {
    var teamMember = $('#team-graphic li');
    this.clickAction = function() {
        teamMember.click(function() {
            var hiddenHtml = $(this).find('.hidden').html();
            teamMember.find('h4').css({color : '#44aeea', 'font-size': '1.1em'});
            teamMember.removeClass('active');
            $(this).find('h4').css({color : '#ea5a3a;', 'font-size': '1.2em'});
            $(this).addClass('active');

            if($('#team-member-bio').length <= 0) {
                $('#team-member-bio').html(hiddenHtml).slideDown(300);
            } else {
                $('#team-member-bio').html(hiddenHtml);
            }
        });
    };

    this.hoverAction = function() {
        teamMember.hover(function() {
            $(this).find('h4').stop().css({'border-top' : '5px solid #ea5a3a', color : '#ea5a3a'});
            $(this).find('img').stop().animate({opacity : 1},400);
        },function() {
            $(this).find('h4').stop().css({'border-top' : '5px solid #44aeea', color : '#44aeea'});
            $(this).find('img').stop().animate({opacity : 0.7},400);
        })
    };
};

GS.scrolloramaEffects = new function() {
    var controller = $.superscrollorama({
        triggerAtCenter: false,
        playoutAnimations: true
    });

    this.mainNavBackground = function() {
        var tweeningElement = '#sub-intro-section'
        var heightOfTweeningElement = $(tweeningElement).innerHeight();
        controller.addTween(
            tweeningElement,
            (new TimelineLite())
                .append([
                    TweenMax.fromTo($('#primary-navigation-wrapper'),.1,
                        {css: {'background-color': 'rgba(68,174,234,0)'}, immediateRender: true},
                        {css: {'background-color': 'rgba(68,174,234,1)'}})
                ]),
            heightOfTweeningElement);
    };

    this.introSection = function() {
        var heightOfTweeningElement = $('#intro-section-wrapper').innerHeight();
        controller.addTween(
            '#intro-section-wrapper',
            (new TimelineLite())
                .append([
                    TweenMax.fromTo($('.jumbotron'), 1,
                        {css: {top: 0}, immediateRender: true},
                        {css: {top: -150}}),
                    TweenMax.fromTo($('#get-started'), 1,
                        {css: {bottom: 0}, immediateRender: true},
                        {css: {bottom: -100}}),
                    TweenMax.fromTo($('#sub-intro-section'), 1,
                        {css: {'padding-top': 100}, immediateRender: true},
                        {css: {'padding-top': 70}}),
                    TweenMax.fromTo($('#back-top'), 1,
                        {css: {opacity: 0}, immediateRender: true},
                        {css: {opacity: 1}})
                ]),
            heightOfTweeningElement);
    };

    this.trainings = function() {
        var heightOfTweeningElement = $('#training').innerHeight();
        controller.addTween(
            '#training',
            (new TimelineLite())
                .append([
                    TweenMax.fromTo($('.icon-comment'), 1,
                        {css: {top: 30}, immediateRender: true},
                        {css: {top: -45}})
                ]),
            heightOfTweeningElement);
    };

    this.parallax = function(tweeningElement) {
        var heightOfTweeningElement = $(tweeningElement).innerHeight();
        controller.addTween(
        tweeningElement,
            (new TimelineLite())
                .append([
                    TweenMax.fromTo($(tweeningElement+ ' .parallax'), .1 ,
                        {css:{top: 0 }, immediateRender:true},
                        {css:{top: -100}})
                ]),
            heightOfTweeningElement);
    };

    this.zoom = function(tweeningElement) {
        var heightOfTweeningElement = $(tweeningElement).innerHeight();
        controller.addTween(
            tweeningElement,
            (new TimelineLite())
                .append([
                    TweenMax.fromTo($(tweeningElement+ ' .parallax'), .1 ,
                        {css:{zoom: 1 }, immediateRender:true},
                        {css:{zoom: 1.3}})
                ]),
            heightOfTweeningElement);
    };

    this.talk_to_us = function(tweeningElement) {
        controller.addTween(
            tweeningElement,
            (new TimelineLite())
                .append([
                    TweenMax.fromTo($(tweeningElement+ ' .company-meta-block:nth-child(even)'), .1 ,
                        {css:{'padding-left' : 15 }, immediateRender:true},
                        {css:{'padding-left' : 0}}),
                    TweenMax.fromTo($(tweeningElement+ ' .company-meta-block:nth-child(odd)'), .1 ,
                        {css:{'padding-right' : 15 }, immediateRender:true},
                        {css:{'padding-right' : 0}}),
                    TweenMax.fromTo($(tweeningElement+ ' .large-icon'), .1 ,
                        {css:{zoom: 0.8 }, immediateRender:true},
                        {css:{zoom: 1}})
                ]),
            100);
    };

    this.steps = function(tweeningElement) {
        var heightOfTweeningElement = $(tweeningElement).innerHeight();
        controller.addTween(
            tweeningElement,
            (new TimelineLite())
                .append([
                    TweenMax.fromTo($(tweeningElement+ ' .section-number'),1 ,
                        {css:{top: 70 }, immediateRender:true},
                        {css:{top: '80%'}}),
                    TweenMax.fromTo($(tweeningElement+ ' .parallax'), .5 ,
                        {css:{top: 0 }, immediateRender:true},
                        {css:{top: -50}})
                ]),
            heightOfTweeningElement);
    };

    this.blog_single_video = function(section) {
        controller.addTween(
            section,
            (new TimelineLite())
                .append([
                    TweenMax.fromTo($('.social-link-bar ul li'),.1,
                        {css: {'padding-left': 15, 'padding-right': 15 }, immediateRender: true},
                        {css: {'padding-left': 0, 'padding-right': 0}}),
                    TweenMax.fromTo($('.social-link-bar ul li a'),.1,
                        {css: {'padding-top': 8, 'padding-bottom': 8 }, immediateRender: true},
                        {css: {'padding-top': 15, 'padding-bottom': 15}})
                ]),
            100, false);
    };

    this.stats = function(section) {
        var counterShares;
        var counterViews;
        var counterHours;
        controller.addTween(
            section,
            (new TimelineLite())
                .append([
                    TweenMax.fromTo($(section+ ' li:eq(0)'),.1,
                        {css: { top : '50%' }, immediateRender: true},
                        {css: { top: '50%' },onComplete: function(){
                            if(counterViews != 'complete') {
                                GS.landingPages.statCounter('page-views')
                            }
                            counterViews = 'complete';
                        }}),
                    TweenMax.fromTo($(section+ ' li:eq(1)'),.3,
                        {css: { top : '50%' }, immediateRender: true},
                        {css: { top: '80%'},onComplete: function(){
                            if(counterShares != 'complete') {
                                GS.landingPages.statCounter('shares')
                            }
                            counterShares = 'complete';
                        }}),
                    TweenMax.fromTo($(section+ ' li:eq(2)'),.1,
                        {css: { top : '50%' }, immediateRender: true},
                        {css: { top: '50%' },onComplete: function(){
                            if(counterHours != 'complete') {
                                GS.landingPages.statCounter('hours')
                            }
                            counterHours = 'complete';
                        }}),

                    TweenMax.fromTo($('.circle'),.5,
                        {css: {'font-size': 20 }, immediateRender: true},
                        {css: {'font-size': 45, width: 100, height: 100, 'border-radius' : 50, 'margin-top': -50}}),
                    TweenMax.fromTo($('.circle:eq(0), .circle:eq(1)'),.5,
                        {css: {'background': 'rgb(68,174,234)' }, immediateRender: true},
                        {css: {'background': 'rgb(234,90,58)'}}),

                    TweenMax.fromTo($('.circle abbr'),.5,
                        {css: {'margin-top': -25 }, immediateRender: true},
                        {css: {'margin-top': -45}}),
                    TweenMax.fromTo($('.connecting-line:eq(0)'),.3,
                        {css: {rotation: 0, 'border-color': 'rgb(68,174,234)' }, immediateRender: true},
                        {css: {rotation: 20, width: 100, left: 130, 'border-color': 'rgb(234,90,58)'}}),
                    TweenMax.fromTo($('.connecting-line:eq(1)'),.3,
                        {css: {rotation: 0 }, immediateRender: true},
                        {css: {rotation: -20, left: 300, width: 100}})
                ]),
            100, false);
    };
    this.columnSections = function() {
        controller.addTween(
            '#sub-intro-section',
            (new TimelineLite())
                .append([
                    TweenMax.fromTo($('#column-buckets article header'), 1,
                        {css: {'margin-top': 20 }, immediateRender: true},
                        {css: {'margin-top': 0}}),
                    TweenMax.fromTo($('#column-buckets article header h2'),.5,
                        {css: {'font-weight': 300 }, immediateRender: true},
                        {css: {'font-weight': 700}})
                ]),
            100, false);
    }
};

GS.petitions = new function() {
    var categorySlug = 'immigration';
    var catSelectorButton = $('#cat-selector');
    var petitionWrapperID = '#petitions';
    var petitions = $(petitionWrapperID);
    this.petitionsGenerator = function(){
        var galleryTemplate = $('#petitionsLayout').html();
        var petitionList = [];
        var jsonRequest = $.getJSON('http://action.groundswell-mvmt.org/categories/'+categorySlug+'.json?callback=?', function (data) {
            var displayLimit = 0;
            $.each(data.results, function (i, item) {
                if (displayLimit <= 3) {
                    var percentage = (item.signature_count / item.goal) * 100;
                    var fromNow = moment(item.created_at).fromNow();
                    petitionList.push({
                        title: item.title,
                        signatures: item.signature_count,
                        goal: item.goal,
                        image : item.image,
                        url: item.url,
                        slug: item.slug,
                        creator: item.creator_name,
                        created_date: fromNow,
                        percent: percentage,
                        why: item.why,
                        index : displayLimit
                    })
                    displayLimit++
                } else {
                    return true;
                }
            });
        })
            .done(function () {
                if($('.mCSB_container').length > 0) {
                    petitions.find('.item').hide();
                    petitions.find('.mCSB_container').prepend(Mustache.render(galleryTemplate, petitionList));
                    petitions.mCustomScrollbar("update"); //update scrollbar according to newly loaded content
                    petitions.mCustomScrollbar("scrollTo","top",{scrollInertia:200}); //scroll to top
                    $('#loading-image').fadeOut(300,function() {
                        $(this).remove();
                    })
                } else {
                    petitions.prepend(Mustache.render(galleryTemplate, petitionList));
                }
            })
            // error handling here
            .fail(function () {
                console.log("Error");
            });
    };
    this.scrollBar = function() {
        $('.scroll-area').mCustomScrollbar( {
            theme:"dark"
        });
    };
    this.slideToggleCats = function() {
        $('#petition-wrap').on('click','#cat-selector', function() {
            $('#cat-list').slideToggle(300);
            catSelectorButton.find('b').toggleClass('icon-arrow-down, icon-arrow-up');
        });
    };
    this.selectCategory = function() {
        $('#petition-wrap').on('click','#cat-list li', function() {
            catSelectorButton.find('b').toggleClass('icon-arrow-down, icon-arrow-up');
            catSelectorButton.find('span').text($(this).text());
            $('#cat-list').slideToggle(300);
            categorySlug = $(this).attr('data-value');
            $('<div></div>').attr('id','loading-image').appendTo(petitionWrapperID);
            GS.petitions.petitionsGenerator();
        });
    }

    this.modalWindow = function() {
        $('#petition-wrap').on('click','.sign-init', function() {
            var action = $(this).next('a').attr('href');
            $('#petition-form').find('form').attr('action',action+'/signatures');
        })
    }

};

GS.sectionHacks = new function() {
    this.evenLengthColumns = function() {
        var bigbrother = -1;
        var columnBuckets = $('#column-buckets article');

        columnBuckets.each(function () {
            bigbrother = bigbrother > columnBuckets.height() ? bigbrother : columnBuckets.height();
        });

        columnBuckets.each(function () {
            columnBuckets.height(bigbrother + 50);
        });
    }


};

GS.blog = new function() {

    this.selectMenu = function() {
        $('.select-box').click(function() {
            $('.select-options').slideToggle(300);
            $(this).find('b').toggleClass('icon-arrow-down, icon-arrow-up');
        })

        $('.select-options li').click(function() {
            var cat = $(this).text();
            $('.select-box').find('b').toggleClass('icon-arrow-down, icon-arrow-up');
            $('.select-options').slideToggle(300);
            $('.select-box span').text(cat);
        })
    }

    this.affixSocialIcons = function() {
        var distance = $('#blog-left-column').offset().top;
        var height = $('#blog-left-column').height();
        var $window = $(window);

        $window.scroll(function() {
            if ( $window.scrollTop() >= height -350 ) {
                $(".social-link-column").addClass('unfreeze');
                $('.unfreeze').css({position:'absolute',top: height-250, width: '75%'})
            } else {
                $('.unfreeze').css({position:'fixed',top: '90px', width: '5%'})
            }
        });
    }

};

GS.landingPages = new function() {
    this.statCounter = function(element) {
        var endAt = $('#'+element).parent('abbr').parent('.circle').attr('data-count');
        $('#'+element).countTo({
            from: 0,
            to: endAt,
            speed: 2000,
            refreshInterval: 300,
            onComplete: function(value) {
                //
            }
        });
    };

    this.FAQ = function() {
        var plusMinusIcon = '#faq li > span';
        $(plusMinusIcon + ', .faq-question').click(function() {

            $(this).parent('li').find('.faq-question').toggleClass('active');
            $(this).parent('li').find('span').toggleClass('icon-minus , icon-plus');
            $(this).parent('li').find('.faq-answer').slideToggle(300);
        })
    }
};

GS.carousel = new function() {
    this.carouselInit = function(element) {
        // init carousel
        var theCarousel = $(element);
        theCarousel.carousel({
            interval: false,
            wrap: false
        });
    };

    this.toggleTextDisplay = function() {
        $('#toggle-display').click(function() {
            $('.text-overlay').slideToggle(300);
            $('#toggle-display').find('i').toggleClass('icon-minus, icon-plus');
        })
    }

};

$(function() {

    var bodyClass = $('body').attr('class');

    GS.navigation.searchDisplay();
    GS.navigation.backToTop();

    if(bodyClass == 'home') { // JUST THE HOME
        GS.navigation.navigateDown();
        GS.backgroundVideo.sizingFunction();
        GS.teamDisplay.clickAction();
        GS.teamDisplay.hoverAction();

        //scrollorama
        GS.scrolloramaEffects.mainNavBackground();
        GS.scrolloramaEffects.introSection();
        GS.scrolloramaEffects.steps('#action');
        GS.scrolloramaEffects.steps('#training');
        GS.scrolloramaEffects.steps('#inspiration');
        GS.scrolloramaEffects.parallax('#blog');
        GS.scrolloramaEffects.parallax('#team');
        GS.scrolloramaEffects.parallax('#partners');
        GS.scrolloramaEffects.trainings();

        //navigation
        GS.navigation.navigationBoxShadow();
    }

    if(bodyClass == 'inspiration') { // INSPIRATION
        GS.scrolloramaEffects.stats('#landing-page-content');
        GS.scrolloramaEffects.mainNavBackground();
        GS.navigation.navigationBoxShadow();
        GS.scrolloramaEffects.zoom('#get-updates');
    }

    if(bodyClass == 'what-we-do') { // WHAT WE DO
        GS.scrolloramaEffects.mainNavBackground();
        GS.navigation.navigationBoxShadow();
        if ($(window).width() > 768) {
            GS.sectionHacks.evenLengthColumns();
        }
        GS.scrolloramaEffects.parallax('#slider-wrapper');
        GS.scrolloramaEffects.columnSections();
        GS.carousel.carouselInit('#full-width-slider');
        GS.carousel.toggleTextDisplay();
    }

    if(bodyClass == 'who-we-are') { // WHO WE ARE
        GS.scrolloramaEffects.mainNavBackground();
        GS.navigation.navigationBoxShadow();
        GS.teamDisplay.clickAction();
        GS.teamDisplay.hoverAction();
        GS.carousel.carouselInit('#photo-carousel');
        GS.scrolloramaEffects.parallax('#fine-print');
    }

    if(bodyClass == 'action') { // ACTION
        GS.scrolloramaEffects.mainNavBackground();
        GS.navigation.navigationBoxShadow();
        GS.carousel.carouselInit('#full-width-slider');
        GS.scrolloramaEffects.parallax('#slider-wrapper');
        GS.landingPages.FAQ();
    }

    if(bodyClass == 'trainings') { // TRAININGS
        GS.scrolloramaEffects.mainNavBackground();
        GS.navigation.navigationBoxShadow();
        GS.landingPages.FAQ();
        GS.teamDisplay.clickAction();
        GS.teamDisplay.hoverAction();
    }


    if(bodyClass == 'talk-to-us') { // Talk to US
        GS.scrolloramaEffects.talk_to_us('.talk-to-us');
    }

    if(bodyClass == 'blog-index') { // JUST BLOG INDEX
        GS.blog.selectMenu();
        GS.scrolloramaEffects.parallax('#blog');
        GS.scrolloramaEffects.parallax('#petition-wrap');
    }

    if(bodyClass == 'blog-single-video' || bodyClass == 'blog-two-columns') { // BLOG VIDEO PAGE BOTH LAYOUTS
        GS.scrolloramaEffects.blog_single_video('.blog-single-video');
        GS.scrolloramaEffects.blog_single_video('.blog-two-columns');
        GS.blog.selectMenu();
        GS.blog.affixSocialIcons();
    }

    if(bodyClass == 'blog-index' || bodyClass == 'home') { // BLOG AND HOME
        GS.petitions.slideToggleCats();
        GS.petitions.selectCategory();
    }



    GS.petitions.petitionsGenerator();
    GS.petitions.modalWindow();


    $(window).load(function(){
        GS.petitions.scrollBar();
    });


    // MOVE EVERYTHING BELOW HERE!!!

    $('.fancybox').fancybox();

    $('.navbar-toggle').click(function() {
        var windowHeight = $(window).height();
        if($('.collapse.in').length == 0) {
            $('#primary-navigation').addClass('menu-expanded');
            setTimeout(function() {
                $('body > *').animate({'margin-left': '-190px', 'margin-right': '190px'}, 500);
                $('#primary-navigation').height(windowHeight);
                $('.menu-expanded').animate({right: 0},500);
            }, 1);

        } else {
            $('body > *').animate({'margin-left': '0', 'margin-right': '0'}, 500);
            $('.menu-expanded').animate({right: '-190px'},500);
            $('#primary-navigation').removeClass('menu-expanded');
        }
    })





});



