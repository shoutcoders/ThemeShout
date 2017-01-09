<footer class="site-footer">


    
   <nav class="site-navigation">
          <h3> Useful Links </h3>      
                <?php 
                    $args= array(
                    
                        'theme_location' => 'footer'
                    );
                ?>
            <?php wp_nav_menu( $args); ?>
                
            </nav>
    
<div class="clear"></div>
<div class="copyright">
    <p>
        <?php bloginfo('name')?> - &copy; reserved
            <?php echo date('Y'); ?>
    </p>
</div>

</footer>
</div>
<!--/ div container-->

<?php wp_footer(); ?>
</body>
</html>