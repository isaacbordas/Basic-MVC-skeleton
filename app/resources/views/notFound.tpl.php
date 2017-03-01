<?php //search/index
$data['literals'] = array('page_title' => 'Intranet: Página no encontrada');
include APPLICATION_PATH . '/resources/views/header.tpl.php'; ?>

<div class="main-container">
    <section class="fullscreen">
        <div class="container v-align-transform">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="text-center">
                        <i class="ti-receipt icon icon-lg mb24 mb-xs-0"></i>
                        <h1 class="large"><?php echo view_notfound; ?></h1>
                        <p><?php echo view_notfound_content; ?></p>
                        <a class="btn" href="/"><?php echo go_home; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include APPLICATION_PATH . '/resources/views/footer.tpl.php';