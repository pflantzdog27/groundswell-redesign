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
                scrollTop: scrollHere - 30
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
                aspectRatio = 4/9.7;
            }
            var width = document.getElementById(myPlayer.id).parentElement.offsetWidth;
            myPlayer.width(width).height( width * aspectRatio );
            $('#hero').find('.container').height(width * aspectRatio);

            function resizeVideoJS(){
                var width = document.getElementById(myPlayer.id).parentElement.offsetWidth;
                myPlayer.width(width).height( width * aspectRatio );
            }
            window.onresize = resizeVideoJS;
        });
    }
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
                    TweenMax.fromTo($('#primary-navigation-wrapper'), 1,
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
                    TweenMax.fromTo($('#sub-intro-section'), .8,
                        {css: {'padding-top': 150, opacity: 0}, immediateRender: true},
                        {css: {'padding-top': 50, opacity: 1}}),
                    TweenMax.fromTo($('#hero'), .5,
                        {css: {background: 'rgba(68,174,234,0.6)'}, immediateRender: true},
                        {css: {background: 'rgba(68,174,234,1)'}}),
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
                        {css: {top: -30}})
                ]),
            heightOfTweeningElement);
    };

    this.blog = function() {
        var heightOfTweeningElement = $('#blog').innerHeight();
        controller.addTween(
            '#blog',
            (new TimelineLite())
                .append([
                    TweenMax.fromTo($('#blog .parallax'), .1 ,
                        {css:{top: 0 }, immediateRender:true},
                        {css:{top: -100}})
                ]),
            heightOfTweeningElement);
    };

    this.team = function() {
        var heightOfTweeningElement = $('#team').innerHeight();
        controller.addTween(
            '#team',
            (new TimelineLite())
                .append([
                    TweenMax.fromTo($('#team .parallax'), .1 ,
                        {css:{top: 0 }, immediateRender:true},
                        {css:{top: -100}})
                ]),
            heightOfTweeningElement);
    };

    this.partners = function() {
        var heightOfTweeningElement = $('#partners').innerHeight();
        controller.addTween(
            '#partners',
            (new TimelineLite())
                .append([
                    TweenMax.fromTo($('#partners .parallax'), .1 ,
                        {css:{top: 0 }, immediateRender:true},
                        {css:{top: -100}})
                ]),
            heightOfTweeningElement);
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
                if (displayLimit <= 5) {
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
                } else {
                    petitions.prepend(Mustache.render(galleryTemplate, petitionList));
                }
                petitions.mCustomScrollbar("update"); //update scrollbar according to newly loaded content
                petitions.mCustomScrollbar("scrollTo","top",{scrollInertia:200}); //scroll to top
                $('#loading-image').fadeOut(300,function() {
                    $(this).remove();
                })
        })
        // error handling here
        .fail(function () {
            console.log("Error");
        });
    };
    this.scrollBar = function() {
        petitions.mCustomScrollbar( {
            theme:"dark"
        });
    };
};

GS.sectionHacks = new function() {

    this.firstSection = function() {
        $('#primary-navigation-wrapper').css('box-shadow', 'none');
        var distance = $('.content-section').eq(0).offset().top;
        var offset = 150;
        $(window).scroll(function() {
            if ($(window).scrollTop() >= distance - offset) {
                $('#primary-navigation-wrapper').css('box-shadow', '0px 5px 8px 0px rgba(0,0,0,0.7)');
            } else {
                $('#primary-navigation-wrapper').css('box-shadow', 'none');
            }
        });


    }
};


$(function() {
    var bodyClass = $('body').attr('class');
    GS.navigation.searchDisplay();
    GS.navigation.backToTop();
    if(bodyClass == 'home') {
        GS.navigation.navigateDown();
        GS.backgroundVideo.sizingFunction();
        GS.petitions.petitionsGenerator();

        //scrollorama
        GS.scrolloramaEffects.mainNavBackground();
        GS.scrolloramaEffects.introSection();
        GS.scrolloramaEffects.steps('#action');
        GS.scrolloramaEffects.steps('#training');
        GS.scrolloramaEffects.steps('#inspiration');
        GS.scrolloramaEffects.blog();
        GS.scrolloramaEffects.trainings();
        GS.scrolloramaEffects.partners();

        //section hacks
        GS.sectionHacks.firstSection();
    }


    //move this
    $(window).load(function(){
        GS.petitions.scrollBar();
        $('body').css('visibility', 'visible')
    });




});



