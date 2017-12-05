<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 05/12/17
 * Time: 14:29
 */

get_header();
?>

<div id="main">
    <div class="inner">

        <?php if (have_posts()): ?>
            <?php while (have_posts()): ?>
            <?php the_post(); ?>
                <header>
                    <div class="image main">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('header_single'); ?>
                        <?php endif; ?>
                    </div>
                    <h1><?php the_title();?></h1>
                </header>
                <p><?php the_content(); ?></p>
            <?php endwhile;?>
        <?php endif;?>

    </div>
</div>

<?php get_footer(); ?>