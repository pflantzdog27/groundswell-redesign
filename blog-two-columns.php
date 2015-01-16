<?php include('partials/header.php'); ?>
<body class="blog-two-columns">
<?php include_once('partials/primary-navigation.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-1 hidden-xs" id="social-navigation">
            <div class="social-link-column">
                <ul class="list-unstyled">
                    <li class="facebook"><a href="#"><i class="icon-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="email"><a href="#"><i class="icon-mail"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-8 col-sm-offset-0" id="blog-left-column">
            <header class="single-post-header">
                <h1>Blog Post Title goes here, over one or two lines of text - here and here and here and here</h1>
            </header>
            <div class="visible-xs">
                <?php include('partials/social-share-bar.php');?>
            </div>
            <section id="blog-video">
                <div class="row">
                    <div class="author-info">
                        <figure>
                            <img class="img-responsive" src="http://placehold.it/50x50" alt="Author Name">
                        </figure>
                        <div class="author-name">
                            <h4>Liam Tolstoyski</h4>
                            <b>October 9 2014</b>
                        </div>
                    </div>
                </div>
                <article class="blog-post-full">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras convallis mi massa, vitae aliquet leo pulvinar sit amet. Vestibulum vitae magna ut risus efficitur aliquam. Nulla mauris erat, dapibus a massa eget,
                        posuere lobortis urna. Mauris luctus vestibulum elit vel accumsan. Donec vel libero ante. Duis efficitur libero nec nibh placerat, tempus molestie erat tincidunt. Fusce vitae metus lacus. Sed at fringilla mauris,
                        sit amet tincidunt quam. Morbi euismod rhoncus tortor, eu ullamcorper leo scelerisque eu. Ut sed vulputate augue, nec dignissim ante.</p>

                    <p>Aenean viverra sit amet lacus eget laoreet. Etiam gravida, nisl non ultricies condimentum, justo purus consectetur urna, at suscipit elit velit nec enim. Pellentesque porttitor ex dapibus neque fringilla,
                        nec tincidunt nisl vestibulum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam tempus sagittis mauris,
                        sit amet malesuada dolor bibendum ut. Suspendisse potenti. Suspendisse facilisis elit a dui posuere, lacinia semper ipsum maximus. Donec consectetur libero metus, sit amet imperdiet tortor ultricies at. Morbi urna dolor, consequat vel magna sit amet, pulvinar sodales nibh. Nam commodo velit in magna fringilla aliquam. Proin quis nisl fermentum, lacinia velit eu, mollis lacus. Integer consequat turpis nec metus pharetra, sit amet vehicula velit vehicula. Duis venenatis consequat magna, sit amet sollicitudin nunc. Suspendisse ligula mauris, congue in interdum eget, malesuada et libero. Suspendisse eget luctus mi, eget dapibus massa.</p>

                    <p>Nam mi purus, gravida quis orci ac, congue auctor tellus. Maecenas in luctus enim. Vivamus tellus augue, venenatis vitae mauris lacinia, fringilla venenatis risus. Proin ut augue feugiat, feugiat augue eu,
                         maximus nulla. Aliquam volutpat, sapien et placerat interdum, nibh erat iaculis ex, a lacinia sem justo non massa. Cras fermentum orci in sodales auctor. Praesent aliquet sapien sit amet risus tempor vehicula. Donec
                        sodales felis vitae tellus volutpat, quis mollis odio molestie. Phasellus dapibus nisl ut lorem vehicula elementum. Ut tempor posuere eleifend. Morbi dolor purus, pharetra et imperdiet quis,
                        consectetur in lorem. Duis porta quam vitae ante sagittis, vel convallis elit vestibulum. Nam at odio libero.</p>

                    <p>Praesent vel velit laoreet, dictum dui vel, posuere elit. Vivamus ultrices molestie tristique. Suspendisse id diam vitae odio sollicitudin blandit a vel velit. Maecenas lobortis neque vitae augue aliquet dignissim vitae
                        blandit augue. Donec sit amet tellus id diam dapibus fermentum. Cras eget enim varius, commodo diam eget, ultricies nisi. Ut lobortis tempor augue sed porttitor. In tristique, orci eget dapibus tincidunt,
                        justo risus pellentesque leo, id gravida quam massa sit amet tellus. Morbi id lacus ullamcorper, pellentesque risus at, facilisis leo.</p>

                    <p>Phasellus sit amet ligula nisl. Morbi a ornare dui. Suspendisse est ipsum, blandit pharetra cursus id, euismod ac massa. Vestibulum mollis lobortis ex ac rhoncus. Integer fermentum at nibh sit amet porta. In pulvinar
                        aliquet velit nec bibendum. Ut egestas nisl vitae nunc faucibus, a blandit augue ultrices. Maecenas consequat consequat consectetur. Integer gravida tempor purus eget accumsan. Nam vitae diam non dolor dictum vulputate. Cum
                        sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris non cursus justo, sed posuere sapien. Fusce quis tincidunt justo, nec lobortis libero. Curabitur auctor enim ligula, nec tristique ex eleifend sit amet. Aenean et dolor euismod, sagittis enim eget, tristique magna.</p>
                </article>
                <footer class="row">
                    <div class="col-sm-12 text-center">
                        <p>If you like this post <a href="#">Subscribe</a> or <a href="#">Donate</a></p>
                    </div>
                </footer>
            </section>
        </div>
        <?php include('partials/blog-right-sidebar.php');?>
    </div>
</div>

<section id="blog" class="content-section">
    <div class="container">
        <div class="section-template parallax three-column-section row">
            <?php include('partials/row-blog-posts-short.php');?>
            <?php include('partials/row-blog-posts-short.php');?>
        </div>
    </div>
</section>

<section id="petition-wrap" class="content-section" style="background: #44aeea;">
    <div class="container">
        <div class="parallax">
            <?php include('partials/petitions-app-large.php');?>
        </div>
    </div>
</section>



<?php include('partials/footer.php');?>



