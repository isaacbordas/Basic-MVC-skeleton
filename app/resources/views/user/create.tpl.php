<?php
$data['literals'] = array('page_title' => new_usr);
include APPLICATION_PATH . '/resources/views/header.tpl.php';
$name_lang = 'name_' . $session->get('USER','lang'); ?>
<script type="text/javascript">
    $().ready(function() {
        // validate form
        $("#create_user").validate({
            rules: {
                email: {
                  email: true
                },
                password: {
                        required: true,
                        minlength: 8
                },
                r_password: {
                        required: true,
                        minlength: 8,
                        equalTo: "#password"
                }
            },
            errorPlacement: function(error, element) {
                element.attr("placeholder", error.text());
                element.attr("title", error.text());
            }
        });
    });
</script>
<section class="forms">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3 class="uppercase"><?php echo new_usr; ?></h3>
            </div>
        </div>
    </div>
</section>
<section class="forms">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2">
                <form id="create_user" class="text-left formularis" action="/users/saveUser" method="post" enctype="application/x-www-form-urlencoded">
                    <div class="row big_input">
                        <div class="col-md-12">
                            <label><?php echo name; ?></label>
                            <input type="text" name="name" id="name" required />
                        </div>
                        <div class="col-md-12">
                            <label><?php echo surname; ?></label>
                            <input type="text" name="surname" id="surname" />
                        </div>
                        <div class="col-md-12">
                            <label><?php echo email; ?></label>
                            <input type="text" name="email" id="email" required />
                        </div>
                        <div class="col-md-12">
                            <label><?php echo passw; ?></label>
                            <input type="password" name="password" id="password" required />
                        </div>
                        <div class="col-md-12">
                            <label><?php echo r_passw; ?></label>
                            <input type="password" name="r_password" id="r_password" required />
                        </div>
                        <div class="col-md-12">
                            <label><?php echo position; ?></label>
                            <input type="text" name="position" id="position" />
                        </div>
                        <div class="col-md-12">
                            <label><?php echo role; ?></label>
                            <div class="select-option">
                                <i class="ti-angle-down"></i>
                                <select name="rol_id">
                                <?php foreach ($data['selects']['roles'] as $role): ?>
                                    <option value="<?php echo $role['id']; ?>"><?php echo $role[$name_lang]; ?></option>
                                <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label><?php echo idioma; ?></label>
                            <div class="select-option">
                                <i class="ti-angle-down"></i>
                                <select name="idioma">
                                    <option value="es"><?php echo esp; ?></option>
                                    <option value="ca"><?php echo cat; ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h5 class="uppercase"><?php echo observaciones; ?></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea name="observaciones" class="full-width" style="min-height:80px;"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <input type="submit" class="small_button" name="form_1" value="<?php echo save_form; ?>" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include APPLICATION_PATH . '/resources/views/footer.tpl.php';