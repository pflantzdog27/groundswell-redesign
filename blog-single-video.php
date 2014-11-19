<?php include('partials/header.php'); ?>
<body class="blog-single-video">
<?php include_once('partials/primary-navigation.php'); ?>

<header class="single-post-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Blog Post Title goes here, over one or two lines of text - here and here and here and here</h1>
            </div>
        </div>
    </div>
</header>

<section id="blog-video">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="author-info row">
                    <figure>
                        <img class="img-responsive" src="http://placehold.it/50x50" alt="Author Name">
                    </figure>
                    <div class="author-name">
                        <h4>First Name <br> Last Name</h4>
                    </div>
                </div>
                <article class="blog-post-full">
                    <p>Growing up in a small Baptist church in Texas, I'm used to faith making me laugh, cry, feel God's love, and want to dance. Coincidentally, all these posts do that too. Click, enjoy and share.</p>
                    <div class="social-link-bar">
                        <ul class="list-unstyled col-sm-8 col-sm-offset-2">
                            <li class="facebook col-sm-4"><a href="#"><i class="icon-facebook"></i> Facebook</a></li>
                            <li class="twitter col-sm-4"><a href="#"><i class="icon-twitter"></i> Twitter</a></li>
                            <li class="email col-sm-4"><a href="#"><i class="icon-mail"></i> Email</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <!-- video embed -->
                    <div class="embed-responsive embed-responsive-16by9" id="video-content">
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen=""></iframe>
                    </div>

                    <div class="social-link-bar">
                        <ul class="list-unstyled col-sm-8 col-sm-offset-2">
                            <li class="facebook col-sm-4"><a href="#"><i class="icon-facebook"></i> Facebook</a></li>
                            <li class="twitter col-sm-4"><a href="#"><i class="icon-twitter"></i> Twitter</a></li>
                            <li class="email col-sm-4"><a href="#"><i class="icon-mail"></i> Email</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <p>Optional outro. Growing up in a small Baptist church in Texas, I'm used to faith making me laugh, cry, feel God's love, and want to dance. Coincidentally, all these posts do that too. Click, enjoy and share.</p>
                </article>
                <footer class="row">
                    <div class="col-sm-6">
                        <strong>More stuff like this:</strong> <small><a href="#">Category 1</a>, <a href="#">Category 2</a></small><br>
                        <strong>About: </strong><small>Credit or info goes here</small><br>
                        <b>October 9 2014</b>
                    </div>
                    <div class="col-sm-6">
                        <div class="select-menu col-sm-12">
                            <div class="select-box">
                                <h5>Category <span>Default Category</span> <b class="icon-arrow-down"></b></h5>
                            </div>
                            <div class="select-options scroll-area">
                                <ul class="list-unstyled ">
                                    <li>Category 1</li>
                                    <li>Category 2</li>
                                    <li>Category 3</li>
                                    <li>Category 4</li>
                                    <li>Category 5</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="content-section">
    <div class="container">
        <div class="section-template parallax three-column-section row">
            <?php include('partials/row-blog-posts.php');?>
            <?php include('partials/row-blog-posts.php');?>
        </div>
    </div>
</section>

<section id="petition-wrap" class="content-section" style="background: #44aeea;">
    <div class="container">
        <div class="parallax">
            <h2 class="section-title">Campaigns for Justice</h2>
            <?php include('partials/petitions-app.php');?>
        </div>
    </div>
</section>



<?php include('partials/footer.php');?>



