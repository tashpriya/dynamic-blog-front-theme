<footer class="main-footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="footer-widget">
                        <h3>Important Links</h3>
                        <ul class="navbar-nav footer-nav-links">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo url('/') ?>">Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo url('/single.php?slug=post-title-1') ?>">Single Post</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo url('/about.php') ?>">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo url('/contact.php') ?>">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="footer-widget sidebar-widget">
                        <h3>Recent Posts</h3>
                        <ul class="widget-content list-unstyled mb-0" style="font-size: 13px; color: #6b6b6b; border: 0">
                            <?php for ($i = 2; $i >= 0; $i--) { ?>
                                <li class="media" style="border-color: #444;">
                                    <a href="<?php echo url('single.php?slug=' . $posts[$i]['slug']) ?>" class="">
                                        <img src="<?php echo assets($posts[$i]['thumb']); ?>" class="thumbnail tab-thumb" alt="<?php echo $posts[$i]['title'] ?>">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1" style="font-size: 14px; font-weight: 500;">
                                            <a href="<?php echo url('single.php?slug=' . $posts[$i]['slug']) ?>"><?php echo $posts[$i]['title'] ?></a>
                                        </h5>
                                        <i class="far fa-calendar-alt d-inline-block mr-1"></i>
                                        <span class="d-inline-block mr-2 font-italic"><?php echo $posts[$i]['date'] ?></span>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="footer-intro">
                        <img src="<?php echo assets('/images/LOGO.png'); ?>" alt="Ash's Blog" style="max-height: 45px; margin-bottom: 22px;">

                        <p>Awesome and completely free Blog theme themes to take your ecommerce website to the next level.</p>
                        <p>If you are having problems with theme setup, please feel free to use Ashpriya <a href="https://tashpriya.github.io" style="color:#eee">support forum</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="text-center copyright">
                Copyright &copy; 2020. All Rights Reserved
            </div>
        </div>
    </div>
</footer>


<script src="<?php echo assets('/plugins/jquery.min.js'); ?>"></script>
<script src="<?php echo assets('/plugins/popper.min.js'); ?>"></script>
<script src="<?php echo assets('/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>
</html>