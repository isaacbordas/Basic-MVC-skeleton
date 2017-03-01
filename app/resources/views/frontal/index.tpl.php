<?php //frontal/index
$data['literals'] = array('page_title' => 'Intranet');
include APPLICATION_PATH . '/resources/views/header.tpl.php';
$desc_lang = 'desc_' . $session->get('USER','lang'); ?>

<div class="main-container">
    <section>
        <div class="container">
            <div class="row">
            <div class="col-md-2 col-sm-3"></div>
                <div class="col-md-4 col-sm-3">
                    <div class="feature feature-3 mb-xs-24 mb64">
                        <div class="left">
                            <i class="ti-view-list icon-sm"></i>
                        </div>
                        <div class="right">
                            <h5 class="uppercase mb16"><a href="#">Item</a></h5>
                            <p>desc</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3"></div>
            </div>
        </div>
    </section>
</div>
<?php include APPLICATION_PATH . '/resources/views/footer.tpl.php';