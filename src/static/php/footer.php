<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			if ( class_exists( '\Elementor\plugin' ) )
    echo \Elementor\plugin::instance()->frontend->get_builder_content( '328' );
			?>
		</div><!-- .col-full -->
		

	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/custom/main.js"></script>
<script>
	window.addEventListener('DOMContentLoaded', ()=>{
		let leftArr = document.querySelectorAll('.slick-prev.slick-arrow')[0],
			rightArr = document.querySelectorAll('.slick-next.slick-arrow')[0];
		
		if(leftArr && rightArr){
		    leftArr.innerHTML += "&nbsp;&nbsp;&nbsp;НАЗАД";
	    	rightArr.innerHTML = "ВПЕРЕД&nbsp;&nbsp;&nbsp;<i class='fa fa-angle-right'></i>";   
		}
		
		// фикс формы
		let textareaForm = document.querySelector('.form-input textarea');
		textareaForm.rows = 3;
		textareaForm.maxLength = 90;
	});
</script>

<!-- Форма -->

<div class="form-overlay">
      <form class="form">
        <?php echo do_shortcode('[contact-form-7 id="701" title="Напишите нам"]'); ?>
      </form>
      
    </div>

</body>
</html>