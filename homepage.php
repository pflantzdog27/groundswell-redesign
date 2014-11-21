<?php include('partials/header.php'); ?>

<body class="home">
<?php include_once('partials/primary-navigation.php'); ?>

<header id="intro-section-wrapper">
    <div id="intro-section">
        <!-- video -->
        <video id="homepage-videoBG" class="video-js" data-setup='{
                    "controls" : false,
                    "autoplay" : true,
                    "preload" : "auto",
                    "poster": "images/training-bg.jpg",
                    "muted" : true
                }'>
            <!--<source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />-->
            <source src="video/homepageBanner.mp4" type='video/mp4' />
            <!--<source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' /> -->
            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
        </video>

        <!-- hero message -->
        <div id="hero">
            <div class="container">
                <div class="jumbotron col-sm-12 col-md-9 col-lg-7">
                    <h1>Inspiring<br> Faithful Action<br> to Heal and<br> Repair the World</h1>
                </div>
            </div>
            <span id="playback-control" class="icon-pause"></span>
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
                    <p><a href="#"><strong>JOIN</strong></a> or <a href="#"><strong>START</strong></a> your own campaign for
                        justice inspired by your faith and values.</p>
                    <p>We’ve got a <a href="#"><strong>FREE Online Tool</strong></a> Set to help.</p>
                </article>
                <button class="btn gs-btn gs-btn-blue">Learn More</button>
            </div>
            <div class="section-right-column col-sm-6" id="petition-wrap">
                <?php include('partials/petitions-app.php');?>
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
            <form class="col-sm-6">
                <div class="form-group col-xs-8">
                    <label class="sr-only" for="emailInput">Email address</label>
                    <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
                </div>
                <button type="submit" class="col-xs-3 btn gs-btn gs-btn-orange">Submit</button>
            </form>
        </div>
    </div>
</aside>

<!-- TRAININGS -->
<section id="training" class="content-section" style="color:#fff; background-image: url(images/training-bg.jpg);">
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
                <button class="btn gs-btn gs-btn-white">Learn More and Book a Training</button>
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

<section id="inspiration" class="content-section" style="color:#fff; background: #44aeea;">
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
                <figure>
                    <img class="img-responsive align-center" src="images/INSPIREcollage.png" alt="Inspiration Collage">
                </figure>
                <button class="btn gs-btn gs-btn-white">Learn More about how we inspire</button>
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
            <div id="team-graphic" class="col-sm-12">
                <ul class="list-unstyled clearfix">
                    <li>
                        <img src="images/isaac.jpg" alt="Isaac" class="img-responsive">
                        <hgroup>
                            <h4>Isaac Luria</h4>
                            <h5>Title Here</h5>
                        </hgroup>
                    </li>
                    <li>
                        <img src="images/michelle.jpg" alt="Michelle" class="img-responsive">
                        <hgroup>
                            <h4>Michelle Reyf</h4>
                            <h5>Title Here</h5>
                        </hgroup>
                    </li>
                    <li>
                        <img src="images/dan.jpg" alt="Dan" class="img-responsive">
                        <hgroup>
                            <h4>Dan Greenman</h4>
                            <h5>Title Here</h5>
                        </hgroup>
                    </li>
                    <li>
                        <img src="images/esther.jpg" alt="Esther" class="img-responsive">
                        <hgroup>
                            <h4>Esther Mere&#324;o</h4>
                            <h5>Title Here</h5>
                        </hgroup>
                    </li>
                    <li>
                        <img src="images/macky.jpg" alt="Macky" class="img-responsive">
                        <hgroup>
                            <h4>Macky Alston</h4>
                            <h5>Title Here</h5>
                        </hgroup>
                    </li>
                    <li>
                        <img src="images/john.jpg" alt="John" class="img-responsive">
                        <hgroup>
                            <h4>John Vaughn</h4>
                            <h5>Title Here</h5>
                        </hgroup>
                    </li>
                </ul>
            </div>
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
                <?php include('partials/image-carousel.php');?>
            </div>
        </div>
    </div>
</section>


<?php include('partials/footer.php');?>



