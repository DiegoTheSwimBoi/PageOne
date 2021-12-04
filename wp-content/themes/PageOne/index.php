<?php
    get_header();
?>
<div class="content-wrap">

<section id="main">

    <div class="intro-box">
       <h1>Welcome.</h1>

       <p class="intro">Hello there. We are PageOne. We are a small design studio based in somewhere.
       We create awesome websites, user interfaces, logos and other digital stuff. We're here to make you
       and your business stand out from the crowd.</p>

       <p class="intro">Learn more <a href="#about-us">about us</a>  or <a href="/contact">get in touch</a> if you want to hire us on your next project.</p>

    </div>

    <div class="slider-wrapper">

        <div id="slider" class="nivoSlider">
        <?php
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => "slider",
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    //print_r($my_posts);
                    
                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                        ?>
            <img src="<?php the_field('slider_img');?>" width="383" height="198" alt="<?php the_field('slider_alt');?>" title="<?php the_field('slider_title');?>"/>
            <?php
                        // формат вывода the_title() ...
                    }
                    
                    wp_reset_postdata();
                    ?>
        </div>
        <div id="htmlcaption" class="nivo-html-caption">
            <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="/">a link</a>.
        </div>
    </div>

    <div class="row no-bottom-margin">
    <div id="slider" class="nivoSlider">
        <?php
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => "main",
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    //print_r($my_posts);
                    
                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                        ?>
        <section class="col <?php echo $post->ID===36?"mid":"";?>">
            <h2><?=the_title();?></h2>


            <?php 
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mir' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );
    
            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mir' ),
                    'after'  => '</div>',
                )
            );
            ?>
        </section>
        <?php
                        // формат вывода the_title() ...
                    }
                    
                    wp_reset_postdata();
                    ?>
    </div>

    <a class="back-to-top" href="/">Back to Top</a>

  </section>


</div>
<?php
    get_footer();
?>