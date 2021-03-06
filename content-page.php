<div <?php post_class(); ?> info="content-page">
	<?php do_action( 'page_before' ); ?>
	<article>
		<?php unlimited_featured_image(); ?>
		<div class="post-padding-container" info="content-page">
			<div class='post-header'>
				<h1 class='post-title'><?php the_title(); ?></h1>
			</div>
			<?php do_action( 'page_content_before' ); ?>
			<div class="post-content">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<p class="singular-pagination">' . __('Pages:','unlimited'), 'after' => '</p>', ) ); ?>
			</div>
			<?php do_action( 'page_content_after' ); ?>
			<?php comments_template(); ?>
		</div>
	</article>
	<?php do_action( 'page_after' ); ?>
</div>
<?php dynamic_sidebar('aftercontent'); ?>
