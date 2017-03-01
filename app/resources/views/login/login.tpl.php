<?php //login/login
$data['literals'] = array('page_title' => 'Login');
include APPLICATION_PATH . '/resources/views/header.tpl.php'; ?>

<div class="main-container">
    <section class="cover fullscreen image-bg overlay">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="/assets/img/home_login.jpg" />
        </div>
        <div class="container v-align-transform">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
                    <div class="feature bordered text-center">
                        <h4 class="uppercase"><?php echo access; ?></h4>
                        <form class="text-left" action="/login/checkLogin" method="post" enctype="application/x-www-form-urlencoded">
                            <input class="mb0" type="text" name="username" placeholder="<?php echo email; ?>" />
                            <input class="mb0" type="password" name="password" placeholder="<?php echo passw; ?>" />
                            <input type="submit" value="<?php echo login; ?>" />
                        </form>
                        <?php if (!empty($_SESSION['ERROR']['login'])){ ?>
                        <p class="error"><?php echo login_error; ?></p>
                        <?php unset($_SESSION['ERROR']);
                        } ?>
                        <p class="mb0"><?php echo forgot; ?>
                            <a href="#"><?php echo forgot2; ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include APPLICATION_PATH . '/resources/views/footer.tpl.php';