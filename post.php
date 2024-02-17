<?php require_once('config.php'); ?>

<div class="post">
    <?php

        if (!has_post_thumbnail()) {

            $attachments = get_posts(array(
                'post_type' => 'attachment',
                'post_mime_type'=>'image',
                'posts_per_page' => 0,
                'post_parent' => $post->ID,
                'order'=>'ASC'
            ));

            if ($attachments) {
                $img = wp_get_attachment_image_src( $attachments[0]->ID, false );
            } else {
                //$img[0] = get_template_directory_uri() .'/images/default.jpg';
                $img[0] = rest_url('diaspora/v1/image/feature') . '?' . rand(1, 1000);
            }

        } else {

            if (USE_TIMTHUMB) {
                $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
            } else {
                $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'cover');
            }

        }
    ?>

    <a data-id="<?php the_ID() ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

        <?php if (USE_TIMTHUMB): ?>

        <img width="680" height="440" src="<?php echo get_template_directory_uri(); ?>/timthumb/timthumb.php?src=<?php echo $img[0]; ?>" class="cover" />

        <?php else: ?>
        <noscript><img width="680" height="382.5" src="<?php echo $img[0];?>" class="cover" /></noscript>
        <img class="lazy" width="680" height="382.5" data-original="<?php echo $img[0];?>" class="cover" alt=<?php echo the_title(); ?>/>

        <?php endif; ?>

    </a>
    <div class="else">
        <p><?php the_time('F j, Y'); ?></p>
        <h3><a data-id="<?php the_ID() ?>" class="posttitle" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo wp_trim_words( get_the_content(), 100, '...') ?>
        </p>
        <p class="here">
            <span class="icon-letter"><?php  echo count_words (''); ?></span>
            <span class="icon-view"><?php echo getPostViews(get_the_ID()); ?></span>
            <?php tz_printLikes(get_the_ID()); ?>
        </p>
    </div>
</div>
