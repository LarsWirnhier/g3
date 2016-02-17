<div <?php post_class(); ?> info="where">
	<?php do_action( 'archive_post_before' ); ?>
	<article>
		<?php unlimited_featured_image(); ?>
		<?php get_template_part('content/post-meta'); ?>
		<?php get_template_part('content/post-categories'); ?>
		<div class="post-padding-container">
			<div class='post-header'>
				<h1 class='post-title'><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php get_template_part('content/post-categories'); ?><!-- get_template_part -->
			</div>
			<?php do_action( 'archive_post_content_after' ); ?>
			<div class="post-content">
				<?php unlimited_excerpt(); ?>
			</div>
			<?php do_action( 'archive_post_content_after' ); ?>
		</div>
	</article>
	<?php do_action( 'archive_post_after' ); ?>
</div>