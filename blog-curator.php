<?php include('partials/header.php'); ?>
<body class="blog-index">
<?php include_once('partials/primary-navigation.php'); ?>

<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h1>Curator:<b>Esther Mere&#324;o</b></h1>
                <div class="contact-curator">
                    <a href="#"><i class="icon-mail"></i>Email</a>
                    <a href="#"><i class="icon-twitter"></i>Twitter</a>
                </div>
                <p>Esther Mere&#324;o (pronounced Astaire, like Fred), doesn't really care how you pronounce her name, but she does care about using art, humor, and love to make the good ol' U.S.A. a better place for everybody to live in.</p>
            </div>
            <div class="col-sm-3" id="curator-info-block">
                <figure>
                    <img src="images/esther.jpg" alt="Esther" class="img-responsive">
                </figure>
            </div>
        </div>
    </div>
</header>

<section id="blog" class="content-section">
    <div class="container">
        <div class="section-template parallax three-column-section row">
            <?php include('partials/row-blog-posts.php');?>
            <?php include('partials/row-blog-posts.php');?>
        </div>
    </div>
</section>



<?php include('partials/footer.php');?>



