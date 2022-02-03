<?php get_header(); ?>
<div id="ttr_main" class="row">
    <div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
        <!-- post category header -->
        <div style="text-align:center;"><h3 class="text-center main-header">Korean Drama Series</h3></div>
        <!-- main blog section -->
    
      
        <div class="row">
            <!-- Funny Category section -->
            <p class="text-center blog-category-header">Category : Funny</p>
            <div class="row blog-section">

                <?php $args = array('category_name' => 'funny', 'posts_per_page' => 3);
                $the_query = new WP_Query($args);
                $count = $the_query->found_posts;
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 each-blog">
                            <a href="<?php the_permalink() ?>">
                                <div class="each-blog-heading main-blog-heading">
                                    <div class="featured-img-cover">
                                        <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                                    </div>
                                    <h5><?php the_title(); ?></h5>
                                    <span>Posted on <?php the_time('F jS, Y') ?></span>
                                    <div class="post-content-cover">
                                        <p class="index-post-content"><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php endwhile;
                else : ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
                
                <div class="blog-seemore text-center">
                    <?php if ($count > 3) : ?>
                        <a href="<?php echo site_url(); ?>/category/movie/funny/">
                            <button class="button button5 text-center">See More</button>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Historical Category section -->
            <p class="text-center blog-category-header">Category : Historical</p>
            <div class="row blog-section">

                <?php $args = array('category_name' => 'historical', 'posts_per_page' => 3);
                $the_query = new WP_Query($args);
                $count = $the_query->found_posts;
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 each-blog">
                            <a href="<?php the_permalink() ?>">
                                <div class="each-blog-heading main-blog-heading">
                                    <div class="featured-img-cover">
                                        <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                                    </div>
                                    <h5><?php the_title(); ?></h5>
                                    <span>Posted on <?php the_time('F jS, Y') ?></span>
                                    <div class="post-content-cover">
                                        <p class="index-post-content"><?php the_content(); ?></p>
                                    </div>
                                </div>
                             
                            </a>
                        </div>

                    <?php endwhile;
                else : ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
              
                <div class="blog-seemore text-center">
                    <?php if ($count > 3) : ?>
                        <a href="<?php echo site_url(); ?>/category/movie/historical/">
                            <button class="button button5 text-center">See More</button>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Action  Category section -->
            <p class="text-center blog-category-header">Category : Action</p>
            <div class="row blog-section">

                <?php $args = array('category_name' => 'action', 'posts_per_page' => 3);
                $the_query = new WP_Query($args);
                $count = $the_query->found_posts;
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 each-blog">
                            <a href="<?php the_permalink() ?>">
                                <div class="each-blog-heading main-blog-heading">
                                    <div class="featured-img-cover">
                                        <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
                                    </div>
                                    <h5><?php the_title(); ?></h5>
                                    <span>Posted on <?php the_time('F jS, Y') ?></span>
                                    <div class="post-content-cover">
                                        <p class="index-post-content"><?php the_content(); ?></p>
                                    </div>
                                </div>
                           
                            </a>
                        </div>

                    <?php endwhile;
                else : ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
               
                <div class="blog-seemore text-center">
                    <?php if ($count > 3) : ?>
                        <a href="<?php echo site_url(); ?>/category/movie/action/">
                            <button class="button button5 text-center">See More</button>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>