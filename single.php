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
                            <?php the_post_thumbnail('header-single'); ?>
                        <?php endif; ?>
                    </div>

                    <?php $cat = get_the_category(); ?>
                    <p class="post-category">Categorias:
                    <?php foreach($cat as $c ): ?>
                        <?php $catLink = get_category_link($c->cat_ID); ?>
                        <?php echo '<a href="'. $catLink . '"> ' . $c->name . '</a>'; ?>
                    <?php endforeach; ?>
                    </p>
                    <h1><?php the_title();?></h1>
                </header>

                <p><?php the_content(); ?></p>

            <?php endwhile;?>

        <?php endif;?>

    </div>
</div>

<?php get_footer(); ?>