<?php get_header();
?>
<br>
<div id="primary" class="content-area">
	THis is Detail Page
	<main id="main" class="site-main">
		<?php if (have_posts()) : ?>
			<?php
			the_archive_title('<h1 class="page-title">', '</h1>');
			?>
			<?php if (have_posts()) :
				while (have_posts()) :
					the_post(); ?>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<h1><?php the_title(); ?></h1>
						<h4>Posted on <?php the_time('F jS, Y') ?></h4>
						<p><?php the_content(__('(more...)')); ?></p>
					</div>
		<?php
				endwhile;
			endif;
		endif;
		?>
	</main>
</div>