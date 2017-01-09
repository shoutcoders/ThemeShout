<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo('name');?>
    </title>
    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>

    <div class="container">
    <!--div container-->
        
        <!-- site-header -->
        <div class="head-section">
        <header class="site-header">
            
            <div class="site-header1">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a> </h1>
                <h5><?php bloginfo('description'); ?> </h5>
            </div>
    
            
            <div class="site-header2">
                <nav class="site-navigation">
                    <?php 
                        $args= array(
                            'theme_location' => 'primary'
                            );
                    ?>
                    <?php wp_nav_menu( $args); ?>
                </nav>
            <div class="clear"></div>
            
        </header>

        </div>
        <!-- /site-header   -->
            

            
      