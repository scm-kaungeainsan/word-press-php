<?php
get_header();
?>
<div id="primary" class="single-page-section">
	<main id="main" class="site-main">
		<?php
		while (have_posts()) :
			the_post();
			the_content();
		endwhile;
		?>
	</main>
</div>
<?php
get_footer();
