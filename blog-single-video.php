<?php include('partials/header.php'); ?>
<body class="blog-single-video">
<?php include_once('partials/primary-navigation.php'); ?>

<header class="single-post-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Blog Post Title goes here, over one or two lines of text - here and here and here and here</h1>
                <b>October 9 2014</b>
            </div>
        </div>
    </div>
</header>

<section id="blog-video">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="author-info row">
                    <div class="author col-sm-3">
                        <figure>
                            <img class="img-responsive" src="http://placehold.it/50x50" alt="Author Name">
                        </figure>
                        <div class="author-name">
                            <h4>First Name <br> Last Name</h4>
                        </div>
                    </div>
                    <div class="post-intro col-sm-9">
                        <p>Growing up in a small Baptist church in Texas, I'm used to faith making me laugh, cry, feel God's love, and want to dance. Coincidentally, all these posts do that too. Click, enjoy and share.</p>
                    </div>
                </div>
                <article class="blog-post-full">
                    <div class="social-link-bar">
                        <ul class="list-unstyled col-sm-8 col-sm-offset-2">
                            <li class="facebook col-xs-4"><a href="#"><i class="icon-facebook"></i> Facebook</a></li>
                            <li class="twitter col-xs-4"><a href="#"><i class="icon-twitter"></i> Twitter</a></li>
                            <li class="email col-xs-4"><a href="#"><i class="icon-mail"></i> Email</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <!-- video embed -->
                    <div class="embed-responsive embed-responsive-16by9" id="video-content">
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen=""></iframe>
                    </div>

                    <div class="social-link-bar">
                        <ul class="list-unstyled col-sm-8 col-sm-offset-2">
                            <li class="facebook col-xs-4"><a href="#"><i class="icon-facebook"></i> Facebook</a></li>
                            <li class="twitter col-xs-4"><a href="#"><i class="icon-twitter"></i> Twitter</a></li>
                            <li class="email col-xs-4"><a href="#"><i class="icon-mail"></i> Email</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <p>Optional outro. Growing up in a small Baptist church in Texas, I'm used to faith making me laugh, cry, feel God's love, and want to dance. Coincidentally, all these posts do that too. Click, enjoy and share.</p>
                </article>
                <footer class="row">
                    <div class="col-sm-12 text-center">
                        <p>If you like this post <a href="#">Subscribe</a> or <a href="#">Donate</a></p>
                    </div>
                </footer>
            </div>
            <div class="recent-article-sidebar col-sm-3">
                <?php include('partials/column-blog-posts-short.php'); ?>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="content-section">
    <div class="container">
        <h2 class="section-title">Other Inspiration</h2>
        <div class="section-template parallax three-column-section row">
            <?php include('partials/row-blog-posts-short.php');?>
            <?php include('partials/row-blog-posts-short.php');?>
        </div>
    </div>
</section>

<section id="petition-wrap" class="content-section" style="background: #44aeea;">
    <div class="container">
        <div class="parallax">
            <?php include('partials/petitions-app.php');?>
        </div>
    </div>
</section>



<?php include('partials/footer.php');?>



