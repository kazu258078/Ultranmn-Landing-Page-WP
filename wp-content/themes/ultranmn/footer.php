    <footer id="footer">
        <div class="inner">
            <div class="footer-logo">
                <a href="<?php echo home_url('/')?>"><img src="<?php echo get_template_directory_uri()?>/images/logo.svg" alt="ULTRANMN"></a>
            </div>
            <div>
                <a href="<?php echo home_url('/')?>"><img src="<?php echo get_template_directory_uri()?>/images/copyright.svg" alt="copyright"></a>
            </div>
        </div><!-- /inner -->
    </footer><!-- /footer -->

    <script type='text/javascript'>
        function myFunction() {
            if (window.sidebar && window.sidebar.addPanel) { // Mozilla Firefox Bookmark
                    window.sidebar.addPanel(document.title, window.location.href, '');
                } else if (window.external && ('AddFavorite' in window.external)) { // IE Favorite
                    window.external.AddFavorite(location.href, document.title);
                } else if (window.opera && window.print) { // Opera Hotlist
                    this.title = document.title;
                    return true;
                } else { // webkit - safari/chrome
                    alert('お気に入り登録をするには　' + (navigator.userAgent.toLowerCase().indexOf('mac') != -1 ? 'Command/Cmd' : 'CTRL') + ' + D を押してください');
                }
        }
        // jQuery(function() {
        //     jQuery('#bookmarkme').click(function() {
        //         if (window.sidebar && window.sidebar.addPanel) { // Mozilla Firefox Bookmark
        //             window.sidebar.addPanel(document.title, window.location.href, '');
        //         } else if (window.external && ('AddFavorite' in window.external)) { // IE Favorite
        //             window.external.AddFavorite(location.href, document.title);
        //         } else if (window.opera && window.print) { // Opera Hotlist
        //             this.title = document.title;
        //             return true;
        //         } else { // webkit - safari/chrome
        //             alert('お気に入り登録をするには　' + (navigator.userAgent.toLowerCase().indexOf('mac') != -1 ? 'Command/Cmd' : 'CTRL') + ' + D を押してください');
        //         }
        //     });
        // });
    </script>
    <?php wp_footer(); ?>
</body>
</html>