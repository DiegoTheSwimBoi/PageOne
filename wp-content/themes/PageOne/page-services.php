<?php
/*
Template Name: Наши устройства
*/
?>

<?php
get_header();
?>
<div class="content-wrap">
<section id="main">
<section id="services" >

         <h1>Our services.</h1>

         <div class="row no-bottom-margin">
         <?php
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => "web_serv",
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    //print_r($my_posts);
                    
                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                        //print_r($post);
                        ?>
        <section class="col <?php echo $post->ID===53?"mid":"";?>">
            <h2><?=the_title();?></h2>
            <p><img class="align-left" alt="" src="<?=the_field('serv_img');?>" />
            <?=the_field('serv_text');?>
            </p>

        </section>
        <?php
                        // формат вывода the_title() ...
                    }
                    
                    wp_reset_postdata();
                    ?>
        </div>

        <div class="row">
        <?php
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => "logo_serv",
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    //print_r($my_posts);
                    
                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                        //print_r($post);
                        ?>

        <section class="col <?php echo $post->ID===66?"mid":"";?>">
            <h2><?=the_title();?></h2>
            <p><img class="align-left" alt="" src="<?=the_field('serv_img');?>" />
            <?=the_field('serv_text');?>
            </p>

        </section>
        <?php
                        // формат вывода the_title() ...
                    }
                    
                    wp_reset_postdata();
                    ?>
        </div>

        <a class="back-to-top" href="/">Back to Top</a>

  </section>
  </section>
</div>
<?php
get_footer();
?>