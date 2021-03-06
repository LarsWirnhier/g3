<div <?php post_class(); ?> info="content">
	<?php do_action( 'post_before' ); ?>
	<article>
	    <?php unlimited_featured_image(); ?>
        <?php get_template_part('content/post-meta'); ?>
		<div class="post-padding-container" info="content">
		    <div class='post-header'>
		        <h1 class='post-title'><?php the_title(); ?></h1>
				<?php get_template_part('content/post-categories'); ?>
		    </div>
			<?php do_action( 'post_content_before' ); ?>
		    <div class="post-content">
		        <?php the_content(); ?>
		        <?php wp_link_pages(array('before' => '<p class="singular-pagination">' . __('Pages:','unlimited'), 'after' => '</p>', ) ); ?>
		    </div>
			<?php do_action( 'post_content_after' ); ?>
			<?php get_template_part('content/post-nav'); ?>
			<?php /* get_template_part('content/post-author'); */ ?>
		    <?php get_template_part('content/post-tags'); ?>
			<?php comments_template(); ?>
		</div>
	</article>
	<?php do_action( 'post_after' ); ?>
</div>
<?php dynamic_sidebar('aftercontent'); ?>
