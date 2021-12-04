<?php
/*
Template Name: Наши работы
*/
?>

<?php
get_header();
?>
<div class="content-wrap">
<section id="main">
<section id="portfolio">

<h1>Featured works.</h1>

<ul class="folio-list clearfix">
<?php
            $my_posts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => "featured",
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            //print_r($my_posts);
            
            foreach( $my_posts as $post ){
                setup_postdata( $post );
                //print_r($post);
                 $a=get_field('video');
                ?>
    <li class="folio-thumb last">
        <div class="thumb">
            <a class="lightbox<?=$a=="Да"?"-video":"";?>" href="<?=$a=="Да"?the_field('featured_href'):the_field('featured_img');?>" title=<?=the_title();?> ><img src="<?=the_field('featured_img');?>" alt="" width="258" height="168"/> </a>
        </div>
        <h3 class="entry-title"><?=the_title();?></h3>
    </li>
    <?php
                // формат вывода the_title() ...
            }
            
            wp_reset_postdata();
            ?>

</ul>

<a class="back-to-top" href="/">Back to Top</a>

</section>
</section>
</div>
<?php
get_footer();
?>