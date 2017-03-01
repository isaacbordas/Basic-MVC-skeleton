<?php $name_lang = 'name_' . $session->get('USER','lang'); ?>
<!doctype html>
<html lang="<?php echo $session->get('USER','lang'); ?>">
    <head>
        <meta charset="utf-8">
        <title><?php echo $data['literals']['page_title']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/assets/css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/assets/css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/assets/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/assets/css/ytplayer.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/assets/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="/assets/bootstrap-datepicker/locales/bootstrap-datepicker.<?php echo $session->get('USER','lang'); ?>.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body class="scroll-assist">
        <div class="wrap">
        <?php if(empty($data['hide_menu'])){
                 include 'nav.tpl.php';
              }
              if (!empty($session->get('MESSAGES'))){ ?>
            <div id="message_container" class="message <?php echo $session->get('MESSAGES', 'class'); ?>">
                <?php echo constant($session->get('MESSAGES', 'result')); ?>
            </div>
            <script type="text/javascript">
                $("#message_container").fadeOut(10000, function() {
                    $("#message_container").remove();
                });
            </script>
        <?php //reset messages
                $session->del('MESSAGES', '');
              }
            