<aside class="main-sidebar">
    <div class="sidebar-widget">
        <form action="#">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Here....." aria-label="Recipient's username" aria-describedby="basic-addon2" style="font-size: 14px;">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
        </form>
    </div>

    <div class="sidebar-widget">
        <h3 class="widget-title">Popular Posts</h3>
        <ul class="widget-content list-unstyled mb-0" style="font-size: 13px; color: #6b6b6b;">
            <?php foreach ($posts as $post) { ?>
                <li class="media">
                    <a href="<?php echo url('single.php?slug=' . $post['slug']) ?>" class="">
                        <img src="<?php echo assets($post['thumb']); ?>" class="thumbnail tab-thumb" alt="<?php echo $post['title'] ?>">
                    </a>
                    <div class="media-body">
                        <h5 class="mt-0 mb-1" style="font-size: 14px; font-weight: 500;">
                            <a href="<?php echo url('single.php?slug=' . $post['slug']) ?>"><?php echo $post['title'] ?></a>
                        </h5>
                        <i class="far fa-calendar-alt d-inline-block mr-1"></i>
                        <span class="d-inline-block mr-2 font-italic"><?php echo $post['date'] ?></span>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>

    <div class="sidebar-widget">
        <h3 class="widget-title">Recent Posts</h3>
        <ul class="widget-content list-unstyled mb-0" style="font-size: 13px; color: #6b6b6b;">
            <?php for ($i = 4; $i >= 0; $i--) { ?>
                <li class="media">
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
</aside>