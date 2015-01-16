<?php include('partials/header.php'); ?>

<body class="inspiration">
<?php include_once('partials/primary-navigation.php'); ?>

<header class="first-level-intro" style="background-image: url(images/inspiration.jpg)">
    <div id="hero">
        <div class="container">
            <div class="jumbotron col-sm-12">
                <hgroup>
                    <h1>Inspiration</h1>
                    <h2>Get the most inspiring and faithful stuff on the internet</h2>
                </hgroup>
            </div>
        </div>
    </div>
</header>
<div id="sub-intro-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p>Facebook, Twitter, YouTube and other social media channels are today's pulpit, but faith leaders preaching love, justice, and peace aren't getting very much attention online.</p>
            </div>
        </div>
    </div>
</div>
<section id="landing-page-content" class="content-section">
    <div class="container">
        <header class="content-title">
            <h2>Here's a story of what we did with one video</h2>
        </header>
        <div class="content-wrapper">
            <p>Remember when the government shut down over budget negotiations? Well, the Senate Chaplain had some choice words to share with our Representatives in a prayer that left our jaws on the floor.</p>
            <div class="row" id="feature-block">
                <article class="col-sm-6">
                    <p><strong>So we popped it up on a page and titled it thus:</strong></p>
                    <div class="blog-post">
                        <article>
                            <figure>
                                <img class="img-responsive" src="http://placehold.it/800x400" alt="Title">
                                <figcaption>
                                    <h3>Just got chills watching the Senate Chaplain throw down over the shutdown.</h3>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </article>
                <div class="col-sm-6" id="stats">
                    <ul class="list-unstyled">
                        <li>
                            <div class="circle" data-count="47">
                                <abbr><span id="page-views">0</span>K</abbr>
                                <h4>Views</h4>
                            </div>
                        </li>
                        <li>
                            <div class="circle" data-count="430">
                                <abbr><span id="shares">0</span></abbr>
                                <h4>Shares</h4>
                            </div>
                        </li>
                        <li>
                            <div class="circle" data-count="24">
                                <abbr><span id="hours">0</span></abbr>
                                <h4>Hours</h4>
                            </div>
                        </li>
                    </ul>
                    <span class="connecting-line" style="left: 150px;"></span>
                    <span class="connecting-line" style="left: 300px;"></span>
                </div>
            </div>
            <p>And while we can't take all the credit, we don't think it's a coincidence that a few days later, SNL had <a href="#"><b>this HILARIOUS parody</b></a> of Senate Chaplain Barry Black praying away the government shutdown.</p>
            <p>As the saying goes, "Nothing is more powerful than idea whose time has come." And today, if you want to spread an idea, you can't do it without the internet and social media.</p>
        </div>
    </div>
</section>

<section id="get-updates">
    <div class="container">
        <div>
            <h2 class="section-title">Receive regular digests of the best faithful stuff on the internet</h2>
            <div>
               <?php include('partials/social-share-bar.php'); ?>
            </div>
        </div>
    </div>
</section>

<aside class="section-breaker" style="background: #44aeea; display:none;">
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

<section id="submit-articles">
    <div class="container">
        <div class="section-template two-column-section row">
            <h2 class="section-title col-sm-12">Share your Content</h2>
            <div class="section-left-column col-sm-7">
                <article>
                    <p>Send us your best and we'll put it up on one of our special pages - they're optimized for helping your videos, photos, memes and more go viral.</p>
                </article>
            </div>
            <div class="section-right-column col-sm-5">
                <form>
                    <div class="form-group col-xs-8">
                        <label class="sr-only" for="emailInput">Email address</label>
                        <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
                    </div>
                    <button type="submit" class="col-xs-3 btn gs-btn gs-btn-orange">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="content-section" style="color:#333; background: #fff;">
    <div class="container">
        <div class="section-template parallax three-column-section row">
            <h2 class="section-title col-sm-12">Recent Inspiration</h2>
            <?php include('partials/row-blog-posts-short.php');?>
        </div>
        <button class="btn gs-btn gs-btn-orange">Click for more inspiration</button>
    </div>
</section>


<?php include('partials/footer.php');?>



