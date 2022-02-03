<?php
get_header();
?>
<header class="page-header">
	<?php
	the_archive_title('<h3 class="page-title">', '</h3>');
	?>
</header>
<?php wp_pagenavi(); ?>
<div class="row blog-section featured-blog">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 each-blog each-featured-blog each-detail-blog">
					<div class="each-blog-heading ">
						<div class="featured-img-cover">
							<?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
						</div>
						<h5><?php the_title(); ?></h5>
						<span>Posted on <?php the_time('F jS, Y') ?></span>
						<div class="post-content-cover">
							<p class="index-post-content"><?php the_content(); ?></p>
						</div>
					</div>
					<a href="<?php the_permalink() ?>">
					<button class="button see-more">Continue Reading ...</button>
					</a>

			</div>

		<?php endwhile;
	else : ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

</div>

<?php
get_footer();
