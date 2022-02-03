<?php get_header(); ?>
<div class="single-post-section">
   <?php if (have_posts()) :
      while (have_posts()) : ?>
         <div class="single-detail-post">
            <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4><span><?= gt_get_post_view(); ?></span>
            <p><b>Posted on <?php the_time('F jS, Y') ?></b></p>
            <?php the_post(); ?>
            <div class="featured-img-cover">
               <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
            </div>
            <?php
            // echo get_the_post_thumbnail($post->ID, 'learge');
            the_content(); ?>
         </div>
   <?php
      endwhile;
   endif; ?>


   <div class="row easy-post-link">
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12"><?php previous_post_link(); ?></div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" style="text-align: right;"><?php next_post_link(); ?></div>
   </div>


   <h4 class="text-center blog-header">Featured Blog Posts</h4>
   <div class="row blog-section featured-blog">
      <?php $args = array('post_type' => 'post', 'orderby'   => 'rand', 'posts_per_page' => 3);
      $the_query = new WP_Query($args);
      $count = $the_query->found_posts;
      if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 each-blog each-featured-blog">

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

   </div>
</div>
<?php get_footer(); ?>