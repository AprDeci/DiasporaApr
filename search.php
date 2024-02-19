
<?php get_header();?>
<div class="search">
<div id="search-title">
    <p>关于<span><?php echo get_search_query() ?></span>的内容如下</p>
</div>
<hr>
<div id="search-container">
<?php 
if ( $wp_query->have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        get_template_part( 'post' );
    endwhile; 
endif; 
?>
</div>
<?php get_footer() ?>
</div>