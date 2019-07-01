<?php
/**
 * Part Name: Default Footer
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">

	<?php if( ! siteorigin_page_setting( 'hide_footer_widgets', false ) ) : ?>
		<div id="footer-widgets" class="full-container">
			<?php dynamic_sidebar( 'sidebar-footer' ) ?>
		</div><!-- #footer-widgets -->
	<?php endif; ?>

	<?php $site_info_text = apply_filters( 'vantage_site_info', siteorigin_setting( 'general_site_info_text' ) ); if ( ! empty( $site_info_text ) || siteorigin_setting( 'general_privacy_policy_link' ) ) : ?>
		<div id="site-info">
			<?php
				if ( ! empty( $site_info_text ) ) {
					echo wp_kses_post( $site_info_text )  . '.&nbsp;';
				}
				if ( function_exists( 'the_privacy_policy_link' ) && siteorigin_setting( 'general_privacy_policy_link' ) ) {
					the_privacy_policy_link( '', '.' );
				}
			?>
		</div><!-- #site-info -->
	<?php endif; ?>

	<?php echo apply_filters( 'vantage_footer_attribution', '<div id="theme-attribution">' . sprintf( __('<a href="%s">一个作妖公司©</a>', 'vantage'), 'http://119.3.248.37/wordpress/') . '</div>' ) ?>

</footer><!-- #colophon .site-footer -->
