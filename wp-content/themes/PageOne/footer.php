<footer>
    <div class="footer-content">
        <?php
                    wp_nav_menu( [
                        //'theme_location'  => '',
                        'menu'            => 'Main',
                        'container'       => false,
                        //'container_class' => '',
                        //'container_id'    => '',
                        'menu_class'      => '',
                        //'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        //'before'          => '',
                        //'after'           => '',
                        //'link_before'     => '',
                        //'link_after'      => '',
                        'items_wrap'      => '<ul class="footer-menu">%3$s</ul>',
                        'depth'           => 1,
                        //'walker'          => '',
                    ] );
                    ?>

        <p class="footer-text">
            &copy; 2014 PageOne. &nbsp; &nbsp;  
            Design by <a href="http://www.styleshout.com/">Styleshout</a> &nbsp; &nbsp;            
        </p>

    </div>

</footer>

<!-- scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?=bloginfo('template_url');?>/assets/js/jquery-1.6.1.min.js"><\/script>')</script>

<script src="<?=bloginfo('template_url');?>/assets/js/jquery.smoothscroll.js"></script>
<script src="<?=bloginfo('template_url');?>/assets/js/jquery.nivo.slider.pack.js"></script>
<script src="<?=bloginfo('template_url');?>/assets/js/jquery.easing-1.3.pack.js"></script>
<script src="<?=bloginfo('template_url');?>/assets/js/jquery.fancybox-1.3.4.pack.js"></script>
<script src="<?=bloginfo('template_url');?>/assets/js/init.js"></script>

</body>
</html>