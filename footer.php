					<div class="clearfix"></div>
				</div>
				
				<?php do_action( 'main_after' ); ?>

			</section> <!-- .main -->

<?php get_sidebar( 'primary' ); ?>

<div class="clearfix"></div>

<footer id="site-footer" class="site-footer" role="contentinfo">

	<?php do_action( 'footer_before' ); ?>

	<!--div class="footer-content">
	    <h4 class="site-title"><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('title'); ?></a></h4>
		<p class="site-description"><?php bloginfo('description'); ?></p>
	</div-->

	<?php do_action( 'footer_widgets' ); ?>

    <div class="design-credit">
        <span>
        	Staatliche Gewerbeschule 3 . Brekelbaums Park 6 . 20537 Hamburg . T +49 (0)40 / 42 859-2370 . g3@hibb.hamburg.de
            <?php
            	/*
                $site_url = 'https://www.competethemes.com/unlimited/';
                $footer_text = sprintf( __( '<a target="_blank" href="%s">Unlimited WordPress Theme</a> by Compete Themes', 'unlimited' ), esc_url( $site_url ) );
                $footer_text = apply_filters('footer_text', $footer_text );
                echo wp_kses_post( $footer_text );
                */
            ?>
        </span>
    </div>

	<?php do_action( 'footer_after' ); ?>

</footer>

</div><!-- .max-width -->


</div><!-- .overflow-container -->

<?php wp_footer(); ?>

<?php do_action( 'body_after' ); ?>

</body>

</html>