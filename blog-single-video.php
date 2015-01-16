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
            <div class="col-sm-9">
                <div class="author-info row">
                    <div class="post-intro col-sm-9">
                        <p>Growing up in a small Baptist church in Texas, I'm used to faith making me laugh, cry, feel God's love, and want to dance. Coincidentally, all these posts do that too. Click, enjoy and share.</p>
                    </div>
                    <div class="author col-sm-3">
                        <figure>
                            <img class="img-responsive" src="http://placehold.it/50x50" alt="Author Name">
                        </figure>
                        <div class="author-name">
                            <h4>Juanita Rodriquez</h4>
                        </div>
                    </div>
                </div>
                <article class="blog-post-full">
                    <?php include('partials/social-share-bar.php');?>

                    <!-- video embed -->
                    <div class="embed-responsive embed-responsive-16by9" id="video-content">
                        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen=""></iframe>
                    </div>

                    <p class="outro">Optional outro. Growing up in a small Baptist church in Texas, I'm used to faith making me laugh, cry, feel God's love, and want to dance. Coincidentally, all these posts do that too. Click, enjoy and share.</p>

                    <?php include('partials/social-share-bar.php');?>
                </article>
                <footer class="row">
                    <div class="col-sm-12">
                        <strong>More stuff like this:</strong> <small><a href="#">Category 1</a>, <a href="#">Category 2</a></small><br>
                        <strong>About: </strong><small>Credit or info goes here</small><br>
                    </div>
                </footer>
            </div>
            <div class="recent-article-sidebar col-sm-3">
                <h2 class="section-title visible-xs">More Inspiration</h2>
                <?php include('partials/column-blog-posts-short.php'); ?>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="content-section hidden-xs">
    <div class="container">
        <h2 class="section-title">More Inspiration</h2>
        <div class="section-template parallax three-column-section row">
            <?php include('partials/row-blog-posts-short.php');?>
            <?php include('partials/row-blog-posts-short.php');?>
        </div>
    </div>
</section>

<aside class="section-breaker" style="background: #fff;">
    <div class="container">
        <div class="row">
            <header class="col-sm-12">
                <button class="btn gs-btn-orange col-sm-offset-3 col-sm-6">Load More Posts</button>
            </header>
        </div>
    </div>
</aside>

<section id="petition-wrap" class="content-section" style="background: #44aeea;">
    <div class="container">
        <div class="parallax">
            <?php include('partials/petitions-app-large.php');?>
        </div>
    </div>
</section>



<?php include('partials/footer.php');?>



