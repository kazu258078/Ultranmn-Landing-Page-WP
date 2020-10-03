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
    <?php wp_footer(); ?>
    <script type='text/javascript'>
        window.smartlook||(function(d) {
            var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
            var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
            c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', '9466fc851ebcc79d2d55f18e1bcfc21c19c027c4');

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
    </script>
</body>
</html>