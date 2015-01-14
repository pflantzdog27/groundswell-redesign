<?php include('partials/header.php'); ?>

<body class="home">

<?php include_once('partials/primary-navigation.php'); ?>

<header id="intro-section-wrapper">
    <div id="intro-section">
        <!-- video -->
        <video id="homepage-videoBG" class="video-js hidden-xs" data-setup='{
                    "controls" : false,
                    "autoplay" : true,
                    "preload" : "auto",
                    "poster": "images/training-bg.jpg",
                    "muted" : true
                }'>
            <source src="video/homepageBanner.mp4" type='video/webm' />
            <source src="video/homepageBanner.mp4" type='video/mp4' />
            <source src="video/homepageBanner.mp4" type='video/ogg' />
            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
        </video>

        <!-- hero message -->
        <div id="hero">
            <div class="container">
                <div class="jumbotron col-sm-12 col-md-9 col-lg-7">
                    <h1>Inspiring<br> Faithful Action<br> to Heal and<br> Repair the World</h1>
                </div>
            </div>
            <span id="playback-control hidden-xs" class="icon-pause"></span>
        </div>

        <!-- get started button -->
        <button id="get-started"><a href="#"><span class="icon-arrow-down"></span></a></button>
    </div>
    <div id="sub-intro-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <p>Groundswell is a growing online community of nearly 100,000 people who believe faith can be a force for good in the world. We offer tools and training for organizing online, and share the best faithful justice content on the Web daily. </p>
                    <p>We do three things...</p>
                </div>
                <div class="col-sm-3">
                    <p class="text-center">Powered By</p>
                    <img src="images/auburn.svg" class="img-responsive" alt="Auburn Logo">
                </div>
            </div>
        </div>
    </div>
</header>

<section id="action" class="content-section" style="color:#44aeea;">
    <aside class="section-number">
        <span>1</span>
    </aside>
    <div class="container">
        <div class="section-template two-column-section row">
            <div class="section-left-column parallax col-sm-6">
                <h2 class="section-title">Action</h2>
                <article>
                    <p><a href="#"><strong>JOIN</strong></a> or <a href="#"><strong>START</strong></a> your own campaign for justice inspired by your faith and values.</p>
                    <p>We’ve got a <a href="#"><strong>FREE Online Tool</strong></a> Set to help.</p>
                </article>
                <button class="btn gs-btn gs-btn-orange">Learn More</button>
            </div>
            <div class="section-right-column col-sm-6" id="petition-wrap">
                <?php include('partials/petitions-app-small.php');?>
            </div>
        </div>
    </div>
</section>
<aside class="section-breaker" style="background: #44aeea;">
    <div class="container">
        <div class="row">
            <header class="col-sm-6">
                <h2><b>Sign Up</b> for our email alerts</h2>
            </header>
            <div id="email-subscription" class="col-sm-6">
                <?php include('partials/email-input-form.php');?>
            </div>
        </div>
    </div>
</aside>
<!-- TRAININGS -->
<section id="training" class="coverBG content-section" style="color:#fff; background-image: url(images/training-bg.jpg);">
    <aside class="section-number">
        <span>2</span>
    </aside>
    <div class="container">
        <div class="section-template content-overlay-section row">
            <div class="section-left-column parallax col-sm-6">
                <h2 class="section-title">Trainings</h2>
                <article>
                    <p>We offer <a href="#"><strong>TRAININGS</strong></a> that help faith leaders and organizers get better at faith-rooted organizing in a modern age—and with digital tools! Plus, story-telling for social change, speaking prophetically in the media, and more.</p>
                </article>
                <button class="btn gs-btn gs-btn-orange">Learn More and Book a Training</button>
            </div>
            <div class="section-overlay">
                <article>
                    <span class="icon-comment"></span>
                    <p>Isaac’s training on organizing in a modern age helped us grapple with how to integrate digital strategies with on-the-ground organizing. The Jewish Organizing Fellows loved Isaac’s <span class="blue-background">interactive exercises</span> and his <span class="blue-background">real world stories</span> of successful online organizing campaigns.</p>
                    <footer>—<strong>Aliza Levine</strong>, JOIN for Justice</footer>
                </article>
            </div>
        </div>
    </div>
</section>

<section id="inspiration" class="coverBG content-section" style="color:#fff; background-image: url(images/inspiration.jpg);">
    <aside class="section-number">
        <span>3</span>
    </aside>
    <div class="container">
        <div class="section-template content-overlay-section row">
            <div class="section-left-column parallax col-sm-6">
                <h2 class="section-title">Inspiration</h2>
                <article>
                    <p>We’ve created a watering hole for the multifaith movement for justice to gather and get the most irresistible faith and justice content.</p>
                    <p>Check out the fun, faithful, and inspiring videos, photos, memes, and more from around the internet.</p>
                </article>
                <button class="btn gs-btn gs-btn-orange">Learn More about how we inspire</button>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="content-section" style="color:#333; background: #fff;">
    <div class="container">
        <div class="section-template parallax three-column-section row">
            <h2 class="section-title col-sm-12">What's Happenning Right Now</h2>
            <?php include('partials/row-blog-posts.php');?>
        </div>
        <button class="btn gs-btn gs-btn-orange">Read more of the latest on our blog</button>
    </div>
</section>

<section id="team" class="content-section" style="color:#44aeea; background: #fff;">
    <div class="container">
        <div class="section-template parallax single-column-section row">
            <h2 class="section-title col-sm-12">Our Team</h2>
                <?php include('partials/team.php'); ?>
        </div>
    </div>
</section>

<aside class="section-breaker" style="background: #ea5a3a;">
    <div class="container">
        <div class="row">
            <header class="col-sm-12">
                <h2>Let's make faith-rooted change together. <a href="#">Talk to Us</a></h2>
            </header>
        </div>
    </div>
</aside>

<section id="partners" class="content-section" style="color:#44aeea; background: #fff;">
    <div class="container">
        <div class="section-template parallax single-column-section row">
            <h2 class="section-title col-sm-12">Our Friends &amp; Partners</h2>
            <div class="col-sm-12">
                <?php include('partials/image-carousel-3cols.php');?>
            </div>
        </div>
    </div>
</section>


<?php include('partials/footer.php');?>



