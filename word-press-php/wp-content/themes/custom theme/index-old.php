<?php get_header(); ?>
<div id="ttr_main" class="row">
    <div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
        <div id="main-post-header">
            <center>
                <h3>Korean Drama Series</h3><br>
            </center>
        </div>
        <!-- Funny Row -->
        <div class="main-post-category">
            <div id="main-post-content" class="row">
                <?php $args = array('category_name' => 'funny', 'posts_per_page' => 3);
                $the_query = new WP_Query($args);
                $count = $the_query->found_posts;
                if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <a href="<?php the_permalink() ?>">
                                <div class="featured-img-cover">
                                    <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                                </div>
                            </a>
                        </div>
                        <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                        <p><b>Posted on <?php the_time('F jS, Y') ?></b></p>
                        <div class="index-post-content"><?php the_content(__('(more...)')); ?></div>
            </div>
        <?php endwhile;
                else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

    <br>
    <div id="main-post-header">
        <?php if ($count > 3) : ?>
            <a href="http://localhost/myproject/category/movie/funny/"> <button class="button button5">See More</button></a>
        <?php endif; ?>
    </div>
    <br>
        </div>
        <!-- Historial Row -->
        <div class="main-post-category">
            <div id="main-post-content" class="row">
                <?php $args = array('category_name' => 'historical', 'posts_per_page' => 3);
                $the_query = new WP_Query($args);
                $count = $the_query->found_posts;
                if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <a href="<?php the_permalink() ?>">
                                <div class="featured-img-cover">
                                    <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                            </a>
                        </div>
                        <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                        <p><b>Posted on <?php the_time('F jS, Y') ?></b></p>
                        <div class="index-post-content"><?php the_content(__('(more...)')); ?></div>
            </div>
        <?php endwhile;
                else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

    <br>
    <div id="main-post-header">
        <?php if ($count > 3) : ?>
            <a href="http://localhost/myproject/category/movie/historical/"> <button class="button button5">See More</button></a>
        <?php endif; ?>
    </div>
    <br>
        </div>
    </div>

<!-- End Funny Row -->
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>