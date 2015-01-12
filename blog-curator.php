<?php include('partials/header.php'); ?>
<body class="blog-index">
<?php include_once('partials/primary-navigation.php'); ?>

<header class="page-header">
    <div class="container">
        <div class="row" id="curator-info-block">
            <div class="col-sm-3">
                <figure>
                    <img src="images/esther.jpg" alt="Esther" class="img-responsive img-circle">
                </figure>
            </div>
            <div class="col-sm-9">
                <h1>Esther Mere&#324;o</h1>
                <div class="contact-curator">
                    <a href="#"><i class="icon-facebook"></i>Facebook</a>
                    <a href="#"><i class="icon-twitter"></i>Twitter</a>
                </div>
                <p>Esther Mere&#324;o (pronounced Astaire, like Fred), doesn't really care how you pronounce her name, but she does care about using art, humor, and love to make the good ol' U.S.A. a better place for everybody to live in.</p>
            </div>
        </div>
    </div>
</header>

<section id="blog" class="content-section">
    <div class="container">
        <div class="section-template parallax three-column-section row">
            <?php include('partials/row-blog-posts-short.php');?>
            <?php include('partials/row-blog-posts-short.php');?>
        </div>
    </div>
</section>


<aside class="section-breaker" style="background: #ea5a3a;">
    <div class="container">
        <div class="row">
            <header class="col-sm-12">
                <button class="btn gs-btn-white col-sm-offset-3 col-sm-6">Load More Posts</button>
            </header>
        </div>
    </div>
</aside>



<?php include('partials/footer.php');?>



