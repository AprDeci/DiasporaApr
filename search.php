
<?php get_header();?>
<div class="search">
<div id="top">
        <a class="<?php if (LOGO_FONT) { echo 'icon-icon'; } else { echo 'image-icon'; } ?>" href="javascript:history.back()"></a>
    </div>
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
else:
   echo '<p>没有文章了</p>';
endif; 

?>
</div>
<?php get_footer() ?>
</div>