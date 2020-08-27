<?php require_once './app/autoload.php'; ?>

<?php include './partials/header.php'; ?>

<main>
    <section class="main-page-carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php for($n = 1; $n <= 3; $n++) { ?>
                    <div class="carousel-item <?php echo ($n == 1 ? 'active' : ''); ?>">
                        <img src="<?php echo assets('images/slider/' . $n . '.jpg'); ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?php echo $posts[$n - 1]['title']; ?></h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="page-content my-5">
        <div class="container">
            <div class="row">
                <div class="content-area col-sm-12 col-lg-8">
                    <?php foreach ($posts as $post) { ?>
                        <article class="blog-post-content clearfix">
                            <header>
                                <h3>
                                    <a href="<?php echo url('single.php?slug=' . $post['slug']) ?>">
                                        <?php echo $post['title'] ?>
                                    </a>
                                </h3>

                                <div class="header-meta">
                                    <i class="far fa-calendar-alt d-inline-block mr-1"></i>
                                    <span class="d-inline-block mr-2"><?php echo $post['date'] ?></span>

                                    <i class="far fa-folder-open d-inline-block mr-1"></i>
                                    <span class="d-inline-block">Uncategorized</span>
                                </div>
                            </header>
                            <div class="post-content">
                                <a href="<?php echo url('single.php?slug=' . $post['slug']) ?>">
                                    <img src="<?php echo assets($post['image']); ?>" class="thumbnail col-sm-6 float-lg-left" alt="<?php echo $post['title'] ?>">
                                </a>

                                <div class="col-sm-6 float-lg-left">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                </div>

                                <p>
                                    <a href="<?php echo url('single.php?slug=' . $post['slug']) ?>" class="btn btn-default read-more">
                                        Continue Reading <i class="fas fa-chevron-right"></i>
                                    </a>
                                </p>
                            </div>
                        </article>

                        <hr class="section-divider">
                    <?php } ?>
                </div>
                <div class="sidebar-area col-sm-12 col-lg-4">
                    <?php include './partials/sidebar.php'; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include './partials/footer.php'; ?>
