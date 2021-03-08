<?php
//var_dump($data);
//    foreach ($data as $post) {
//        echo $post['art_title'];
//    }
//?>

<?php
	require APP_ROOT . '/views/inc/head.php';
?>

<?php
    require APP_ROOT . '/views/inc/nav.php';
?>

<!-- #sub-header -->
<section class="row" id="sub-header">
    <!-- .sub-header-left -->
    <div class="col-md-7 sub-header-left">
        <div style="background-image: url('<?= $data['articles'][0]->art_img ?>')">
            <div>
                <div class="category">
                    <p>HOT NEWS</p>
                </div>
                <div>
                    <h2><a href="#"><?= $data['articles'][0]->art_title ?></a></h2>
                    <p><?= $data['articles'][0]->user_firstname . ' ' . $data['articles'][0]->user_lastname ?>.<?= $data['articles'][0]->art_created_at ?></p>
                    <p><?= $data['articles'][0]->art_description ?></p>
                    <div>
                        <div>
                            <i class="fas fa-share-alt fa-xs"></i>
                            <a href="#"><span>424</span> Shares</a>
                        </div>
                        <div>
                            <i class="far fa-comments fa-xs"></i>
                            <a href="#"><span>4</span> Comments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sub-header-right -->
    <div class="col-md-5 sub-header-right">
        <!-- .sub-header-right-top -->
        <div class="sub-header-right-top">
            <div style="background-image: url('<?= $data['articles'][1]->art_img ?>')">
                <div>
                    <div class="category">
                        <p>TOP VIEWED</p>
                    </div>
                    <div>
                        <h2><a href="#"><?= $data['articles'][1]->art_title ?></a></h2>
                        <p><?= $data['articles'][1]->user_firstname . ' ' . $data['articles'][1]->user_lastname ?>.<?= $data['articles'][1]->art_created_at ?></p>
                        <p><?= $data['articles'][1]->art_description ?></p>
                        <div>
                            <div>
                                <i class="fas fa-share-alt fa-xs"></i>
                                <a href="#"><span>424</span> Shares</a>
                            </div>
                            <div>
                                <i class="far fa-comments fa-xs"></i>
                                <a href="#"><span>4</span> Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.sub-header-right-top -->
        <!-- .sub-header-right-bottom -->
        <div class="sub-header-right-bottom">
            <div style="background-image: url('<?= $data['articles'][2]->art_img ?>')">
                <div>
                    <div class="category">
                        <p>TOP VIEWED</p>
                    </div>
                    <div>
                        <h2><a href="#"><?= $data['articles'][2]->art_title ?></a></h2>
                        <p><?= $data['articles'][2]->user_firstname . ' ' . $data['articles'][2]->user_lastname ?>.<?= $data['articles'][2]->art_created_at ?></p>
                        <p><?= $data['articles'][2]->art_description ?></p>
                        <div>
                            <div>
                                <i class="fas fa-share-alt fa-xs"></i>
                                <a href="#"><span>424</span> Shares</a>
                            </div>
                            <div>
                                <i class="far fa-comments fa-xs"></i>
                                <a href="#"><span>4</span> Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.sub-header-right-bottom -->
    </div><!-- /.sub-header-right -->
</section>
<!-- /.sub-header -->

<?php
    require APP_ROOT . '/views/inc/footer.php'
?>
