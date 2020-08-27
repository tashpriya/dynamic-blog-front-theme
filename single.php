<?php require_once './app/autoload.php'; ?>

<?php include './partials/header.php'; ?>

<?php
    $slug = isset($_REQUEST['slug']) ? $_REQUEST['slug'] : null;
    $notFound = $slug ? false : true;

    $postIndex = array_search($slug, array_column($posts, 'slug'));
    if(gettype($postIndex) == 'integer') {
        $single = $posts[$postIndex];
    } else {
        $notFound = true;
    }
?>

<main>
    <section class="page-content single-page-content my-5">
        <div class="container">
            <div class="row">
                <div class="content-area col-sm-12 col-lg-8">
                    <?php if($notFound) { ?>
                        <div class="alert alert-danger text-center" role="alert" style="padding: 185px 0;">
                            <h3>Requested Post Not Found!</h3>
                        </div>
                    <?php } else { ?>
                        <article id="single-post">
                            <header>
                                <img src="<?php echo assets($single['image']); ?>" alt="Ash's Blog" class="w-100 img-thumbnail">

                                <h1><?php echo $single['title']; ?></h1>
                                <div class="header-meta">
                                    <i class="far fa-calendar-alt d-inline-block mr-1"></i>
                                    <span class="d-inline-block mr-2"><?php echo $single['date'] ?></span>

                                    <i class="far fa-folder-open d-inline-block mr-1"></i>
                                    <span class="d-inline-block">Uncategorized</span>
                                </div>
                            </header>

                            <main>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                </p>
                                <p>
                                    When an unknown printer took a galley of type and scrambled it to make a type
                                    specimen book. It has survived not only five centuries, but also the leap into
                                    electronic typesetting, remaining essentially unchanged.
                                </p>
                                <p>
                                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                    and more recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.
                                </p>

                                <h6 class="share-this">Share This:</h6>

                                <ul class="share-links">
                                    <li title="Share this post to Facebook">
                                        <a href="#" target="_blank">
                                            <i class="fab fa-facebook-f"></i> Facebook
                                        </a>
                                    </li>
                                    <li title="Share this post to Twitter">
                                        <a href="#" target="_blank">
                                            <i class="fab fa-twitter"></i> Twitter
                                        </a>
                                    </li>
                                    <li title="Share this post to LinkedIn">
                                        <a href="#" target="_blank">
                                            <i class="fab fa-linkedin"></i> LinkedIn
                                        </a>
                                    </li>
                                    <li title="Pin this post to Pinterest">
                                        <a href="#" target="_blank">
                                            <i class="fab fa-pinterest-p"></i> Pinterest
                                        </a>
                                    </li>
                                </ul>
                            </main>
                        </article>
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