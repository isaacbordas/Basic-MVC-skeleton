<?php if (!empty($_SESSION['DEBUG']['active'])){
        include 'debug.tpl.php';
}
?>
        </div> <!-- // end wrap -->
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/flickr.js"></script>
        <script src="/assets/js/flexslider.min.js"></script>
        <script src="/assets/js/lightbox.min.js"></script>
        <script src="/assets/js/masonry.min.js"></script>
        <script src="/assets/js/twitterfetcher.min.js"></script>
        <script src="/assets/js/spectragram.min.js"></script>
        <script src="/assets/js/ytplayer.min.js"></script>
        <script src="/assets/js/countdown.min.js"></script>
        <script src="/assets/js/smooth-scroll.min.js"></script>
        <script src="/assets/js/parallax.js"></script>
        <script src="/assets/js/scripts.js"></script>
        <script src="/assets/js/jquery.validate.min.js"></script>
        <script src="/assets/js/additional-methods.min.js"></script>
        <script src="/assets/js/localization/messages_<?php echo $session->get('USER','lang'); ?>.min.js"></script>
        <script src="/assets/js/hashtables.js"></script>
        <script src="/assets/js/jquery.numberformatter-1.2.4.jsmin.js"></script>
    </body>
</html>