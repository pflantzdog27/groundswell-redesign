<?php include('partials/header.php'); ?>
<body class="blog-index">
<?php include_once('partials/primary-navigation.php'); ?>

<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-4 col-xs-12">
                <h1>Blog</h1>
            </div>

            <div class="select-menu col-sm-6 col-md-5 col-xs-12">
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
            <div class="search col-sm-3 col-xs-12">
                <form role="search">
                    <div class="form-group col-sm-12">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn gs-btn gs-btn-blue"><span class="glyphicon glyphicon-search"></span></button>
                    </div>
                </form>
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

<aside class="section-breaker" style="background: #ea5a3a;">
    <div class="container">
        <div class="row">
            <header class="col-sm-12">
                <h2>Load More Posts</h2>
            </header>
        </div>
    </div>
</aside>

<section id="petition-wrap" class="content-section" style="background: #44aeea;">
    <div class="container">
        <div class="parallax">
            <?php include('partials/petitions-app-small.php');?>
        </div>
    </div>
</section>



<?php include('partials/footer.php');?>



