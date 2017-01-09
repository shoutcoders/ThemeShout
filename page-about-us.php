<?php
/* header Included Here */

get_header();

    if(have_posts()):
        while(have_posts()):the_post(); ?>

    
    <article class="post">
        <h1>
            <!-- the_permalink(); is used to make a title hyperlink and the_title() indicates artcle title   -->
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>

        <!-- To add content FUNCTION is the_content(); -->
        <p>
        
        </p>
    </article>


    <?php endwhile;
    else:
        echo'<h2>There is No Content</h2>'; 
    endif;

get_footer();



?>